<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\AI\Store\Bridge\Typesense;

use Symfony\AI\Platform\Vector\NullVector;
use Symfony\AI\Platform\Vector\Vector;
use Symfony\AI\Store\Document\Metadata;
use Symfony\AI\Store\Document\VectorDocument;
use Symfony\AI\Store\Exception\InvalidArgumentException;
use Symfony\AI\Store\ManagedStoreInterface;
use Symfony\AI\Store\StoreInterface;
use Symfony\Component\Uid\Uuid;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * @author Guillaume Loulier <personal@guillaumeloulier.fr>
 */
final readonly class Store implements ManagedStoreInterface, StoreInterface
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $endpointUrl,
        #[\SensitiveParameter] private string $apiKey,
        #[\SensitiveParameter] private string $collection,
        private string $vectorFieldName = '_vectors',
        private int $embeddingsDimension = 1536,
    ) {
    }

    public function setup(array $options = []): void
    {
        if ([] !== $options) {
            throw new InvalidArgumentException('No supported options.');
        }

        $this->request('POST', 'collections', [
            'name' => $this->collection,
            'fields' => [
                [
                    'name' => 'id',
                    'type' => 'string',
                ],
                [
                    'name' => $this->vectorFieldName,
                    'type' => 'float[]',
                    'num_dim' => $this->embeddingsDimension,
                ],
                [
                    'name' => 'metadata',
                    'type' => 'string',
                ],
            ],
        ]);
    }

    public function add(VectorDocument ...$documents): void
    {
        foreach ($documents as $document) {
            $this->request('POST', \sprintf('collections/%s/documents', $this->collection), $this->convertToIndexableArray($document));
        }
    }

    public function query(Vector $vector, array $options = []): array
    {
        $documents = $this->request('POST', 'multi_search', [
            'searches' => [
                [
                    'collection' => $this->collection,
                    'q' => '*',
                    'vector_query' => \sprintf('%s:([%s], k:%d)', $this->vectorFieldName, implode(', ', $vector->getData()), $options['k'] ?? 10),
                ],
            ],
        ]);

        return array_map($this->convertToVectorDocument(...), $documents['results'][0]['hits']);
    }

    public function drop(): void
    {
        $this->request('DELETE', \sprintf('collections/%s', $this->collection), []);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return array<string, mixed>
     */
    private function request(string $method, string $endpoint, array $payload): array
    {
        $url = \sprintf('%s/%s', $this->endpointUrl, $endpoint);
        $result = $this->httpClient->request($method, $url, [
            'headers' => [
                'X-TYPESENSE-API-KEY' => $this->apiKey,
            ],
            'json' => [] !== $payload ? $payload : new \stdClass(),
        ]);

        return $result->toArray();
    }

    /**
     * @return array<string, mixed>
     */
    private function convertToIndexableArray(VectorDocument $document): array
    {
        return [
            'id' => $document->id->toRfc4122(),
            $this->vectorFieldName => $document->vector->getData(),
            'metadata' => json_encode($document->metadata->getArrayCopy()),
        ];
    }

    /**
     * @param array<string, mixed> $data
     */
    private function convertToVectorDocument(array $data): VectorDocument
    {
        $document = $data['document'] ?? throw new InvalidArgumentException('Missing "document" field in the document data.');

        $id = $document['id'] ?? throw new InvalidArgumentException('Missing "id" field in the document data.');

        $vector = !\array_key_exists($this->vectorFieldName, $document) || null === $document[$this->vectorFieldName]
            ? new NullVector() : new Vector($document[$this->vectorFieldName]);

        $score = $data['vector_distance'] ?? null;

        return new VectorDocument(Uuid::fromString($id), $vector, new Metadata(json_decode($document['metadata'], true)), $score);
    }
}

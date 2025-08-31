<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\AI\Store\Bridge\Qdrant;

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
        private string $collectionName,
        private int $embeddingsDimension = 1536,
        private string $embeddingsDistance = 'Cosine',
    ) {
    }

    public function setup(array $options = []): void
    {
        if ([] !== $options) {
            throw new InvalidArgumentException('No supported options.');
        }

        $collectionExistResponse = $this->request('GET', \sprintf('collections/%s/exists', $this->collectionName));

        if ($collectionExistResponse['result']['exists']) {
            return;
        }

        $this->request('PUT', \sprintf('collections/%s', $this->collectionName), [
            'vectors' => [
                'size' => $this->embeddingsDimension,
                'distance' => $this->embeddingsDistance,
            ],
        ]);
    }

    public function add(VectorDocument ...$documents): void
    {
        $this->request('PUT', \sprintf('collections/%s/points', $this->collectionName), [
            'points' => array_map($this->convertToIndexableArray(...), $documents),
        ]);
    }

    /**
     * @param array{
     *     limit?: positive-int,
     *     offset?: positive-int
     * } $options
     */
    public function query(Vector $vector, array $options = []): array
    {
        $payload = [
            'query' => $vector->getData(),
            'with_payload' => true,
            'with_vector' => true,
        ];

        if (\array_key_exists('limit', $options)) {
            $payload['limit'] = $options['limit'];
        }

        if (\array_key_exists('offset', $options)) {
            $payload['offset'] = $options['offset'];
        }

        $response = $this->request('POST', \sprintf('collections/%s/points/query', $this->collectionName), $payload);

        return array_map($this->convertToVectorDocument(...), $response['result']['points']);
    }

    public function drop(): void
    {
        $this->request('DELETE', \sprintf('collections/%s', $this->collectionName));
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return array<string, mixed>
     */
    private function request(string $method, string $endpoint, array $payload = []): array
    {
        $url = \sprintf('%s/%s', $this->endpointUrl, $endpoint);

        $response = $this->httpClient->request($method, $url, [
            'headers' => [
                'api-key' => $this->apiKey,
            ],
            'json' => $payload,
        ]);

        return $response->toArray();
    }

    /**
     * @return array<string, mixed>
     */
    private function convertToIndexableArray(VectorDocument $document): array
    {
        return [
            'id' => $document->id->toRfc4122(),
            'vector' => $document->vector->getData(),
            'payload' => $document->metadata->getArrayCopy(),
        ];
    }

    /**
     * @param array<string, mixed> $data
     */
    private function convertToVectorDocument(array $data): VectorDocument
    {
        $id = $data['id'] ?? throw new InvalidArgumentException('Missing "id" field in the document data.');

        $vector = !\array_key_exists('vector', $data) || null === $data['vector']
            ? new NullVector()
            : new Vector($data['vector']);

        return new VectorDocument(
            id: Uuid::fromString($id),
            vector: $vector,
            metadata: new Metadata($data['payload']),
            score: $data['score'] ?? null
        );
    }
}

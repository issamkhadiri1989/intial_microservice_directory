<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\AI\Store\Bridge\Local;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\AI\Platform\Vector\Vector;
use Symfony\AI\Store\Document\Metadata;
use Symfony\AI\Store\Document\VectorDocument;
use Symfony\AI\Store\Exception\InvalidArgumentException;
use Symfony\AI\Store\Exception\RuntimeException;
use Symfony\AI\Store\ManagedStoreInterface;
use Symfony\AI\Store\StoreInterface;
use Symfony\Component\Uid\Uuid;
use Symfony\Contracts\Cache\CacheInterface;

/**
 * @author Guillaume Loulier <personal@guillaumeloulier.fr>
 */
final readonly class CacheStore implements ManagedStoreInterface, StoreInterface
{
    public function __construct(
        private CacheInterface&CacheItemPoolInterface $cache,
        private DistanceCalculator $distanceCalculator = new DistanceCalculator(),
        private string $cacheKey = '_vectors',
    ) {
        if (!interface_exists(CacheInterface::class)) {
            throw new RuntimeException('For using the CacheStore as vector store, a symfony/contracts cache implementation is required. Try running "composer require symfony/cache" or another symfony/contracts compatible cache.');
        }
    }

    public function setup(array $options = []): void
    {
        if ([] !== $options) {
            throw new InvalidArgumentException('No supported options.');
        }

        $this->cache->clear();
    }

    public function add(VectorDocument ...$documents): void
    {
        $existingVectors = $this->cache->get($this->cacheKey, static fn (): array => []);

        $newVectors = array_map(static fn (VectorDocument $document): array => [
            'id' => $document->id->toRfc4122(),
            'vector' => $document->vector->getData(),
            'metadata' => $document->metadata->getArrayCopy(),
        ], $documents);

        $cacheItem = $this->cache->getItem($this->cacheKey);

        $cacheItem->set([
            ...$existingVectors,
            ...$newVectors,
        ]);

        $this->cache->save($cacheItem);
    }

    /**
     * @param array{
     *     maxItems?: positive-int
     * } $options If maxItems is provided, only the top N results will be returned
     */
    public function query(Vector $vector, array $options = []): array
    {
        $documents = $this->cache->get($this->cacheKey, static fn (): array => []);

        $vectorDocuments = array_map(static fn (array $document): VectorDocument => new VectorDocument(
            id: Uuid::fromString($document['id']),
            vector: new Vector($document['vector']),
            metadata: new Metadata($document['metadata']),
        ), $documents);

        return $this->distanceCalculator->calculate($vectorDocuments, $vector, $options['maxItems'] ?? null);
    }

    public function drop(): void
    {
        $this->cache->clear();
    }
}

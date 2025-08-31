<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\AI\Store;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\AI\Store\Document\TextDocument;
use Symfony\AI\Store\Document\Vectorizer;

/**
 * Converts a collection of TextDocuments into VectorDocuments and pushes them to a store implementation.
 *
 * @author Christopher Hertel <mail@christopher-hertel.de>
 */
final readonly class Indexer
{
    public function __construct(
        private Vectorizer $vectorizer,
        private StoreInterface $store,
        private LoggerInterface $logger = new NullLogger(),
    ) {
    }

    /**
     * @param TextDocument|iterable<TextDocument> $documents
     * @param int                                 $chunkSize number of documents to vectorize and store in one batch
     */
    public function index(TextDocument|iterable $documents, int $chunkSize = 50): void
    {
        if ($documents instanceof TextDocument) {
            $documents = [$documents];
        }

        $counter = 0;
        $chunk = [];
        foreach ($documents as $document) {
            $chunk[] = $document;
            ++$counter;

            if ($chunkSize === \count($chunk)) {
                $this->store->add(...$this->vectorizer->vectorizeDocuments($chunk));
                $chunk = [];
            }
        }

        if (\count($chunk) > 0) {
            $this->store->add(...$this->vectorizer->vectorizeDocuments($chunk));
        }

        $this->logger->debug(0 === $counter ? 'No documents to index' : \sprintf('Indexed %d documents', $counter));
    }
}

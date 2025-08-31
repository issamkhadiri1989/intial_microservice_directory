<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\AI\Store\Document;

/**
 * @author Christopher Hertel <mail@christopher-hertel.de>
 */
interface LoaderInterface
{
    /**
     * @param string               $source  Identifier for the loader to load the documents from, e.g. file path, folder, or URL.
     * @param array<string, mixed> $options loader specific set of options to control the loading process
     *
     * @return iterable<TextDocument> iterable of TextDocuments loaded from the source
     */
    public function __invoke(string $source, array $options = []): iterable;
}

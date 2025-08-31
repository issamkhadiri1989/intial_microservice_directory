<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\AI\Agent\Toolbox\Attribute\AsTool;

#[AsTool('tokenize_summary', 'Tokenizes a given summary into discrete words')]
class CustomTool
{
    public function __invoke(string $text): string
    {
        $tokens = \preg_split('/\s+/', \trim($text));

        return \implode("\n", $tokens); // One token per line
    }
}
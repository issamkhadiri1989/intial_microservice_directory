<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'CustomTool.php';

use MongoDB\Client;
use Symfony\AI\Agent\Agent;
use Symfony\AI\Agent\Toolbox\AgentProcessor;
use Symfony\AI\Agent\Toolbox\Tool\SimilaritySearch;
use Symfony\AI\Agent\Toolbox\Toolbox;

use Symfony\AI\Platform\Bridge\Gemini\Gemini;
use Symfony\AI\Platform\Bridge\Gemini\PlatformFactory;
use Symfony\AI\Platform\Message\MessageBag;
use Symfony\AI\Platform\Message\Message;
use Symfony\AI\Store\Bridge\MongoDb\Store;

$tool = new CustomTool();

$platform = PlatformFactory::create($_ENV['GEMINI_API_KEY']);
$model = new Gemini(name: Gemini::GEMINI_2_FLASH);

$client = new Client('mongodb://admin:password@mongo:27017/');

$store = new Store(
    client: $client,
    databaseName: 'rag',
    collectionName: 'documents',
    indexName: 'my-index',
    vectorFieldName: 'vector',
);

$similaritySearch = new SimilaritySearch(
    platform: $platform,
    model: $model,
    store: $store,
);

$toolbox = new Toolbox(tools: [$similaritySearch],);
$processor = new AgentProcessor(toolbox: $toolbox);

$agent = new Agent(
    outputProcessors: [$processor],
    model: $model,
    inputProcessors: [$processor],
    platform: $platform,
);

$systemPrompt = <<<PROMPT
  Please answer all user questions only using the similary_search tool. Do not add information and if you cannot
  find an answer, say so.
PROMPT;

$messageBag = new MessageBag(
    Message::ofUser('what are the molecules of water?'),
    Message::forSystem($systemPrompt),
);

$result = $agent->call(messages: $messageBag);

echo $result->getContent();
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use MongoDB\Client;
use Symfony\AI\Agent\Agent;
use Symfony\AI\Agent\Toolbox\AgentProcessor;
use Symfony\AI\Agent\Toolbox\Tool\SimilaritySearch;
use Symfony\AI\Agent\Toolbox\Toolbox;

use Symfony\AI\Platform\Bridge\Gemini\Embeddings;
use Symfony\AI\Platform\Bridge\Gemini\Gemini;
use Symfony\AI\Platform\Bridge\Gemini\PlatformFactory;
use Symfony\AI\Platform\Message\MessageBag;
use Symfony\AI\Platform\Message\Message;
use Symfony\AI\Store\Bridge\MongoDb\Store;
use Symfony\AI\Store\Document\Metadata;
use Symfony\AI\Store\Document\TextDocument;
use Symfony\AI\Store\Indexer;
use Symfony\AI\Store\Document\Vectorizer;
use Symfony\AI\Platform\Bridge\Gemini\Embeddings\TaskType;
use Symfony\Component\Uid\Uuid;


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

$embeddings = new Embeddings(options: ['dimensions' => 768, 'task_type' => TaskType::SemanticSimilarity]);

$vectorizer = new Vectorizer($platform, $embeddings);

$indexer = new Indexer(vectorizer: $vectorizer, store: $store);

$document = new TextDocument(
    id: Uuid::v4(),
    content: 'This is a content',
    );
$indexer->index($document);


<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'MathReasoning.php';

use Symfony\AI\Agent\Agent;
use Symfony\AI\Agent\StructuredOutput\AgentProcessor;

use Symfony\AI\Platform\Bridge\Gemini\Gemini;
use Symfony\AI\Platform\Bridge\Gemini\PlatformFactory;

use Symfony\AI\Platform\Message\Message;
use Symfony\AI\Platform\Message\MessageBag;


$platform = PlatformFactory::create($_ENV['GEMINI_API_KEY']);
$model = new Gemini(name: Gemini::GEMINI_2_FLASH);


$processor = new AgentProcessor();
$agent = new Agent($platform, $model, [$processor], [$processor]);

$messages = new MessageBag(
    Message::forSystem('You are a helpful math tutor. Guide the user through the solution step by step.'),
    Message::ofUser('how can I solve 8x + 7 = -23'),
);
$result = $agent->call($messages, ['output_structure' => MathReasoning::class]);

var_dump($result->getContent());



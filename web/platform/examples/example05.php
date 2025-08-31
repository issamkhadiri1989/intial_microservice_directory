<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\AI\Platform\Bridge\Gemini\{Embeddings, Gemini, PlatformFactory};

use Symfony\AI\Platform\Message\{Content\Audio, MessageBag, Message};

$platform = PlatformFactory::create($_ENV["GEMINI_API_KEY"]);

$model = new Gemini(name: Gemini::GEMINI_2_FLASH); // I used the 2 FLASH for the test

$embeddings = new Embeddings();

$embeddings = new Embeddings();

$result = $platform->invoke($embeddings, <<<TEXT
    Once upon a time, there was a country called Japan. It was a beautiful country with a lot of mountains and rivers.
    The people of Japan were very kind and hardworking. They loved their country very much and took care of it. The
    country was very peaceful and prosperous. The people lived happily ever after.
    TEXT);

echo 'Dimensions: '.$result->asVectors()[0]->getDimensions().\PHP_EOL;
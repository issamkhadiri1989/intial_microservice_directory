<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\AI\Platform\Bridge\Gemini\{
    Gemini,
    PlatformFactory
};

use Symfony\AI\Platform\Message\{
    MessageBag,
    Message
};

$platform = PlatformFactory::create($_ENV["GEMINI_API_KEY"]);

$model = new Gemini(name: Gemini::GEMINI_2_FLASH); // I used the 2 FLASH for the test


$result = $platform->invoke(
    model: $model,
    input: new MessageBag(
        Message::ofUser('What is the Capital of Morocco ?'),
        Message::forSystem('You are a concise geography expert. Always respond with the capital city name only, no extra commentary.')
    )
);

echo $result->getResult()->getContent();
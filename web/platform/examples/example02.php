<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\AI\Platform\Bridge\Gemini\{
    Gemini,
    PlatformFactory
};

use Symfony\AI\Platform\Message\{Content\Image, MessageBag, Message};

$platform = PlatformFactory::create($_ENV["GEMINI_API_KEY"]);

$model = new Gemini(name: Gemini::GEMINI_2_FLASH); // I used the 2 FLASH for the test


$result = $platform->invoke(
    model: $model,
    input: new MessageBag(
        Message::ofUser('Can you describe this picture ?', Image::fromFile(__DIR__.'/example02')),
        Message::forSystem('You are a helpful assistant.')
    )
);

echo $result->getResult()->getContent();
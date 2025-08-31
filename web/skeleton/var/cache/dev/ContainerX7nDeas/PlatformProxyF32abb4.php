<?php

namespace ContainerX7nDeas;
include_once \dirname(__DIR__, 4).'/vendor/symfony/ai-platform/src/PlatformInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/ai-platform/src/Platform.php';

class PlatformProxyF32abb4 implements \Symfony\AI\Platform\PlatformInterface, \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function initializeLazyObject(): \Symfony\AI\Platform\PlatformInterface
    {
        if ($state = $this->lazyObjectState ?? null) {
            return $state->realInstance ??= ($state->initializer)();
        }

        return $this;
    }

    public function invoke(\Symfony\AI\Platform\Model $model, array|object|string $input, array $options = []): \Symfony\AI\Platform\Result\ResultPromise
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->invoke(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Symfony\AI\Platform\PlatformInterface::invoke()".');
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PlatformProxyF32abb4', false)) {
    \class_alias(__NAMESPACE__.'\\PlatformProxyF32abb4', 'PlatformProxyF32abb4', false);
}

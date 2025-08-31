<?php

namespace Symfony\Config\Ai\AgentConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'ServicesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ToolsConfig 
{
    private $enabled;
    private $services;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    public function services(array $value = []): \Symfony\Config\Ai\AgentConfig\Tools\ServicesConfig
    {
        $this->_usedProperties['services'] = true;

        return $this->services[] = new \Symfony\Config\Ai\AgentConfig\Tools\ServicesConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('services', $value)) {
            $this->_usedProperties['services'] = true;
            $this->services = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Ai\AgentConfig\Tools\ServicesConfig($v) : $v, $value['services']);
            unset($value['services']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['services'])) {
            $output['services'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Ai\AgentConfig\Tools\ServicesConfig ? $v->toArray() : $v, $this->services);
        }

        return $output;
    }

}

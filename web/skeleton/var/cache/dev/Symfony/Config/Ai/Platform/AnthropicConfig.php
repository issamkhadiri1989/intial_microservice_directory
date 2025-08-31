<?php

namespace Symfony\Config\Ai\Platform;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AnthropicConfig 
{
    private $apiKey;
    private $version;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiKey($value): static
    {
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): static
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }

        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }

        return $output;
    }

}

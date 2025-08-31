<?php

namespace Symfony\Config\Ai\Store;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CacheConfig 
{
    private $service;
    private $cacheKey;
    private $strategy;
    private $_usedProperties = [];

    /**
     * @default 'cache.app'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): static
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheKey($value): static
    {
        $this->_usedProperties['cacheKey'] = true;
        $this->cacheKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function strategy($value): static
    {
        $this->_usedProperties['strategy'] = true;
        $this->strategy = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }

        if (array_key_exists('cache_key', $value)) {
            $this->_usedProperties['cacheKey'] = true;
            $this->cacheKey = $value['cache_key'];
            unset($value['cache_key']);
        }

        if (array_key_exists('strategy', $value)) {
            $this->_usedProperties['strategy'] = true;
            $this->strategy = $value['strategy'];
            unset($value['strategy']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['cacheKey'])) {
            $output['cache_key'] = $this->cacheKey;
        }
        if (isset($this->_usedProperties['strategy'])) {
            $output['strategy'] = $this->strategy;
        }

        return $output;
    }

}

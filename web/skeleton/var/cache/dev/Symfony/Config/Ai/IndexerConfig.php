<?php

namespace Symfony\Config\Ai;

require_once __DIR__.\DIRECTORY_SEPARATOR.'IndexerConfig'.\DIRECTORY_SEPARATOR.'ModelConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IndexerConfig 
{
    private $store;
    private $platform;
    private $model;
    private $_usedProperties = [];

    /**
     * Service name of store
     * @default 'Symfony\\AI\\Store\\StoreInterface'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function store($value): static
    {
        $this->_usedProperties['store'] = true;
        $this->store = $value;

        return $this;
    }

    /**
     * Service name of platform
     * @default 'Symfony\\AI\\Platform\\PlatformInterface'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function platform($value): static
    {
        $this->_usedProperties['platform'] = true;
        $this->platform = $value;

        return $this;
    }

    public function model(array $value = []): \Symfony\Config\Ai\IndexerConfig\ModelConfig
    {
        if (null === $this->model) {
            $this->_usedProperties['model'] = true;
            $this->model = new \Symfony\Config\Ai\IndexerConfig\ModelConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "model()" has already been initialized. You cannot pass values the second time you call model().');
        }

        return $this->model;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('store', $value)) {
            $this->_usedProperties['store'] = true;
            $this->store = $value['store'];
            unset($value['store']);
        }

        if (array_key_exists('platform', $value)) {
            $this->_usedProperties['platform'] = true;
            $this->platform = $value['platform'];
            unset($value['platform']);
        }

        if (array_key_exists('model', $value)) {
            $this->_usedProperties['model'] = true;
            $this->model = new \Symfony\Config\Ai\IndexerConfig\ModelConfig($value['model']);
            unset($value['model']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['store'])) {
            $output['store'] = $this->store;
        }
        if (isset($this->_usedProperties['platform'])) {
            $output['platform'] = $this->platform;
        }
        if (isset($this->_usedProperties['model'])) {
            $output['model'] = $this->model->toArray();
        }

        return $output;
    }

}

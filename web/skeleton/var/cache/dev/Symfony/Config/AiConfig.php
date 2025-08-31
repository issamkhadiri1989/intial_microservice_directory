<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Ai'.\DIRECTORY_SEPARATOR.'PlatformConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Ai'.\DIRECTORY_SEPARATOR.'AgentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Ai'.\DIRECTORY_SEPARATOR.'StoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Ai'.\DIRECTORY_SEPARATOR.'IndexerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AiConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $platform;
    private $agent;
    private $store;
    private $indexer;
    private $_usedProperties = [];

    public function platform(array $value = []): \Symfony\Config\Ai\PlatformConfig
    {
        if (null === $this->platform) {
            $this->_usedProperties['platform'] = true;
            $this->platform = new \Symfony\Config\Ai\PlatformConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "platform()" has already been initialized. You cannot pass values the second time you call platform().');
        }

        return $this->platform;
    }

    public function agent(string $name, array $value = []): \Symfony\Config\Ai\AgentConfig
    {
        if (!isset($this->agent[$name])) {
            $this->_usedProperties['agent'] = true;
            $this->agent[$name] = new \Symfony\Config\Ai\AgentConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "agent()" has already been initialized. You cannot pass values the second time you call agent().');
        }

        return $this->agent[$name];
    }

    public function store(array $value = []): \Symfony\Config\Ai\StoreConfig
    {
        if (null === $this->store) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\Ai\StoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "store()" has already been initialized. You cannot pass values the second time you call store().');
        }

        return $this->store;
    }

    public function indexer(string $name, array $value = []): \Symfony\Config\Ai\IndexerConfig
    {
        if (!isset($this->indexer[$name])) {
            $this->_usedProperties['indexer'] = true;
            $this->indexer[$name] = new \Symfony\Config\Ai\IndexerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "indexer()" has already been initialized. You cannot pass values the second time you call indexer().');
        }

        return $this->indexer[$name];
    }

    public function getExtensionAlias(): string
    {
        return 'ai';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('platform', $value)) {
            $this->_usedProperties['platform'] = true;
            $this->platform = new \Symfony\Config\Ai\PlatformConfig($value['platform']);
            unset($value['platform']);
        }

        if (array_key_exists('agent', $value)) {
            $this->_usedProperties['agent'] = true;
            $this->agent = array_map(fn ($v) => new \Symfony\Config\Ai\AgentConfig($v), $value['agent']);
            unset($value['agent']);
        }

        if (array_key_exists('store', $value)) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\Ai\StoreConfig($value['store']);
            unset($value['store']);
        }

        if (array_key_exists('indexer', $value)) {
            $this->_usedProperties['indexer'] = true;
            $this->indexer = array_map(fn ($v) => new \Symfony\Config\Ai\IndexerConfig($v), $value['indexer']);
            unset($value['indexer']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['platform'])) {
            $output['platform'] = $this->platform->toArray();
        }
        if (isset($this->_usedProperties['agent'])) {
            $output['agent'] = array_map(fn ($v) => $v->toArray(), $this->agent);
        }
        if (isset($this->_usedProperties['store'])) {
            $output['store'] = $this->store->toArray();
        }
        if (isset($this->_usedProperties['indexer'])) {
            $output['indexer'] = array_map(fn ($v) => $v->toArray(), $this->indexer);
        }

        return $output;
    }

}

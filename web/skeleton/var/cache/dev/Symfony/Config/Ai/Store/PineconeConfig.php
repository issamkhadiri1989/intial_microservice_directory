<?php

namespace Symfony\Config\Ai\Store;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PineconeConfig 
{
    private $client;
    private $namespace;
    private $filter;
    private $topK;
    private $_usedProperties = [];

    /**
     * @default 'Probots\\Pinecone\\Client'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function client($value): static
    {
        $this->_usedProperties['client'] = true;
        $this->client = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namespace($value): static
    {
        $this->_usedProperties['namespace'] = true;
        $this->namespace = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function filter(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['filter'] = true;
        $this->filter = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function topK($value): static
    {
        $this->_usedProperties['topK'] = true;
        $this->topK = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }

        if (array_key_exists('namespace', $value)) {
            $this->_usedProperties['namespace'] = true;
            $this->namespace = $value['namespace'];
            unset($value['namespace']);
        }

        if (array_key_exists('filter', $value)) {
            $this->_usedProperties['filter'] = true;
            $this->filter = $value['filter'];
            unset($value['filter']);
        }

        if (array_key_exists('top_k', $value)) {
            $this->_usedProperties['topK'] = true;
            $this->topK = $value['top_k'];
            unset($value['top_k']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client;
        }
        if (isset($this->_usedProperties['namespace'])) {
            $output['namespace'] = $this->namespace;
        }
        if (isset($this->_usedProperties['filter'])) {
            $output['filter'] = $this->filter;
        }
        if (isset($this->_usedProperties['topK'])) {
            $output['top_k'] = $this->topK;
        }

        return $output;
    }

}

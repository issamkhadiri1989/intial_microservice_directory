<?php

namespace Symfony\Config\Ai\Store;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AzureSearchConfig 
{
    private $endpoint;
    private $apiKey;
    private $indexName;
    private $apiVersion;
    private $vectorField;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function endpoint($value): static
    {
        $this->_usedProperties['endpoint'] = true;
        $this->endpoint = $value;

        return $this;
    }

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
    public function indexName($value): static
    {
        $this->_usedProperties['indexName'] = true;
        $this->indexName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiVersion($value): static
    {
        $this->_usedProperties['apiVersion'] = true;
        $this->apiVersion = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vectorField($value): static
    {
        $this->_usedProperties['vectorField'] = true;
        $this->vectorField = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('endpoint', $value)) {
            $this->_usedProperties['endpoint'] = true;
            $this->endpoint = $value['endpoint'];
            unset($value['endpoint']);
        }

        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }

        if (array_key_exists('index_name', $value)) {
            $this->_usedProperties['indexName'] = true;
            $this->indexName = $value['index_name'];
            unset($value['index_name']);
        }

        if (array_key_exists('api_version', $value)) {
            $this->_usedProperties['apiVersion'] = true;
            $this->apiVersion = $value['api_version'];
            unset($value['api_version']);
        }

        if (array_key_exists('vector_field', $value)) {
            $this->_usedProperties['vectorField'] = true;
            $this->vectorField = $value['vector_field'];
            unset($value['vector_field']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['endpoint'])) {
            $output['endpoint'] = $this->endpoint;
        }
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['indexName'])) {
            $output['index_name'] = $this->indexName;
        }
        if (isset($this->_usedProperties['apiVersion'])) {
            $output['api_version'] = $this->apiVersion;
        }
        if (isset($this->_usedProperties['vectorField'])) {
            $output['vector_field'] = $this->vectorField;
        }

        return $output;
    }

}

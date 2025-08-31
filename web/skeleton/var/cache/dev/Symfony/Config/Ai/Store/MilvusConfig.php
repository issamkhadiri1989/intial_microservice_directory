<?php

namespace Symfony\Config\Ai\Store;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MilvusConfig 
{
    private $endpoint;
    private $apiKey;
    private $database;
    private $collection;
    private $vectorField;
    private $dimensions;
    private $metricType;
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
    public function database($value): static
    {
        $this->_usedProperties['database'] = true;
        $this->database = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function collection($value): static
    {
        $this->_usedProperties['collection'] = true;
        $this->collection = $value;

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

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dimensions($value): static
    {
        $this->_usedProperties['dimensions'] = true;
        $this->dimensions = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function metricType($value): static
    {
        $this->_usedProperties['metricType'] = true;
        $this->metricType = $value;

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

        if (array_key_exists('database', $value)) {
            $this->_usedProperties['database'] = true;
            $this->database = $value['database'];
            unset($value['database']);
        }

        if (array_key_exists('collection', $value)) {
            $this->_usedProperties['collection'] = true;
            $this->collection = $value['collection'];
            unset($value['collection']);
        }

        if (array_key_exists('vector_field', $value)) {
            $this->_usedProperties['vectorField'] = true;
            $this->vectorField = $value['vector_field'];
            unset($value['vector_field']);
        }

        if (array_key_exists('dimensions', $value)) {
            $this->_usedProperties['dimensions'] = true;
            $this->dimensions = $value['dimensions'];
            unset($value['dimensions']);
        }

        if (array_key_exists('metric_type', $value)) {
            $this->_usedProperties['metricType'] = true;
            $this->metricType = $value['metric_type'];
            unset($value['metric_type']);
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
        if (isset($this->_usedProperties['database'])) {
            $output['database'] = $this->database;
        }
        if (isset($this->_usedProperties['collection'])) {
            $output['collection'] = $this->collection;
        }
        if (isset($this->_usedProperties['vectorField'])) {
            $output['vector_field'] = $this->vectorField;
        }
        if (isset($this->_usedProperties['dimensions'])) {
            $output['dimensions'] = $this->dimensions;
        }
        if (isset($this->_usedProperties['metricType'])) {
            $output['metric_type'] = $this->metricType;
        }

        return $output;
    }

}

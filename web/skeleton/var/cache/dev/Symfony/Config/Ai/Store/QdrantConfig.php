<?php

namespace Symfony\Config\Ai\Store;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class QdrantConfig 
{
    private $endpoint;
    private $apiKey;
    private $collectionName;
    private $dimensions;
    private $distance;
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
    public function collectionName($value): static
    {
        $this->_usedProperties['collectionName'] = true;
        $this->collectionName = $value;

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
    public function distance($value): static
    {
        $this->_usedProperties['distance'] = true;
        $this->distance = $value;

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

        if (array_key_exists('collection_name', $value)) {
            $this->_usedProperties['collectionName'] = true;
            $this->collectionName = $value['collection_name'];
            unset($value['collection_name']);
        }

        if (array_key_exists('dimensions', $value)) {
            $this->_usedProperties['dimensions'] = true;
            $this->dimensions = $value['dimensions'];
            unset($value['dimensions']);
        }

        if (array_key_exists('distance', $value)) {
            $this->_usedProperties['distance'] = true;
            $this->distance = $value['distance'];
            unset($value['distance']);
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
        if (isset($this->_usedProperties['collectionName'])) {
            $output['collection_name'] = $this->collectionName;
        }
        if (isset($this->_usedProperties['dimensions'])) {
            $output['dimensions'] = $this->dimensions;
        }
        if (isset($this->_usedProperties['distance'])) {
            $output['distance'] = $this->distance;
        }

        return $output;
    }

}

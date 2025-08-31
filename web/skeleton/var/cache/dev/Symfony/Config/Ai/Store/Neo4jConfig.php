<?php

namespace Symfony\Config\Ai\Store;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class Neo4jConfig 
{
    private $endpoint;
    private $username;
    private $password;
    private $database;
    private $vectorIndexName;
    private $nodeName;
    private $vectorField;
    private $dimensions;
    private $distance;
    private $quantization;
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
    public function username($value): static
    {
        $this->_usedProperties['username'] = true;
        $this->username = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): static
    {
        $this->_usedProperties['password'] = true;
        $this->password = $value;

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
    public function vectorIndexName($value): static
    {
        $this->_usedProperties['vectorIndexName'] = true;
        $this->vectorIndexName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nodeName($value): static
    {
        $this->_usedProperties['nodeName'] = true;
        $this->nodeName = $value;

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
    public function distance($value): static
    {
        $this->_usedProperties['distance'] = true;
        $this->distance = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function quantization($value): static
    {
        $this->_usedProperties['quantization'] = true;
        $this->quantization = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('endpoint', $value)) {
            $this->_usedProperties['endpoint'] = true;
            $this->endpoint = $value['endpoint'];
            unset($value['endpoint']);
        }

        if (array_key_exists('username', $value)) {
            $this->_usedProperties['username'] = true;
            $this->username = $value['username'];
            unset($value['username']);
        }

        if (array_key_exists('password', $value)) {
            $this->_usedProperties['password'] = true;
            $this->password = $value['password'];
            unset($value['password']);
        }

        if (array_key_exists('database', $value)) {
            $this->_usedProperties['database'] = true;
            $this->database = $value['database'];
            unset($value['database']);
        }

        if (array_key_exists('vector_index_name', $value)) {
            $this->_usedProperties['vectorIndexName'] = true;
            $this->vectorIndexName = $value['vector_index_name'];
            unset($value['vector_index_name']);
        }

        if (array_key_exists('node_name', $value)) {
            $this->_usedProperties['nodeName'] = true;
            $this->nodeName = $value['node_name'];
            unset($value['node_name']);
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

        if (array_key_exists('distance', $value)) {
            $this->_usedProperties['distance'] = true;
            $this->distance = $value['distance'];
            unset($value['distance']);
        }

        if (array_key_exists('quantization', $value)) {
            $this->_usedProperties['quantization'] = true;
            $this->quantization = $value['quantization'];
            unset($value['quantization']);
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
        if (isset($this->_usedProperties['username'])) {
            $output['username'] = $this->username;
        }
        if (isset($this->_usedProperties['password'])) {
            $output['password'] = $this->password;
        }
        if (isset($this->_usedProperties['database'])) {
            $output['database'] = $this->database;
        }
        if (isset($this->_usedProperties['vectorIndexName'])) {
            $output['vector_index_name'] = $this->vectorIndexName;
        }
        if (isset($this->_usedProperties['nodeName'])) {
            $output['node_name'] = $this->nodeName;
        }
        if (isset($this->_usedProperties['vectorField'])) {
            $output['vector_field'] = $this->vectorField;
        }
        if (isset($this->_usedProperties['dimensions'])) {
            $output['dimensions'] = $this->dimensions;
        }
        if (isset($this->_usedProperties['distance'])) {
            $output['distance'] = $this->distance;
        }
        if (isset($this->_usedProperties['quantization'])) {
            $output['quantization'] = $this->quantization;
        }

        return $output;
    }

}

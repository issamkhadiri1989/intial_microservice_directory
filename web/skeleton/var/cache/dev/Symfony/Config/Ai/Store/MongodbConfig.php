<?php

namespace Symfony\Config\Ai\Store;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MongodbConfig 
{
    private $client;
    private $database;
    private $collection;
    private $indexName;
    private $vectorField;
    private $bulkWrite;
    private $_usedProperties = [];

    /**
     * @default 'MongoDB\\Client'
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
    public function vectorField($value): static
    {
        $this->_usedProperties['vectorField'] = true;
        $this->vectorField = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function bulkWrite($value): static
    {
        $this->_usedProperties['bulkWrite'] = true;
        $this->bulkWrite = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
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

        if (array_key_exists('index_name', $value)) {
            $this->_usedProperties['indexName'] = true;
            $this->indexName = $value['index_name'];
            unset($value['index_name']);
        }

        if (array_key_exists('vector_field', $value)) {
            $this->_usedProperties['vectorField'] = true;
            $this->vectorField = $value['vector_field'];
            unset($value['vector_field']);
        }

        if (array_key_exists('bulk_write', $value)) {
            $this->_usedProperties['bulkWrite'] = true;
            $this->bulkWrite = $value['bulk_write'];
            unset($value['bulk_write']);
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
        if (isset($this->_usedProperties['database'])) {
            $output['database'] = $this->database;
        }
        if (isset($this->_usedProperties['collection'])) {
            $output['collection'] = $this->collection;
        }
        if (isset($this->_usedProperties['indexName'])) {
            $output['index_name'] = $this->indexName;
        }
        if (isset($this->_usedProperties['vectorField'])) {
            $output['vector_field'] = $this->vectorField;
        }
        if (isset($this->_usedProperties['bulkWrite'])) {
            $output['bulk_write'] = $this->bulkWrite;
        }

        return $output;
    }

}

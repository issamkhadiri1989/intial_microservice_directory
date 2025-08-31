<?php

namespace Symfony\Config\Ai\Platform;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AzureConfig 
{
    private $apiKey;
    private $baseUrl;
    private $deployment;
    private $apiVersion;
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
    public function baseUrl($value): static
    {
        $this->_usedProperties['baseUrl'] = true;
        $this->baseUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function deployment($value): static
    {
        $this->_usedProperties['deployment'] = true;
        $this->deployment = $value;

        return $this;
    }

    /**
     * The used API version
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

    public function __construct(array $value = [])
    {
        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }

        if (array_key_exists('base_url', $value)) {
            $this->_usedProperties['baseUrl'] = true;
            $this->baseUrl = $value['base_url'];
            unset($value['base_url']);
        }

        if (array_key_exists('deployment', $value)) {
            $this->_usedProperties['deployment'] = true;
            $this->deployment = $value['deployment'];
            unset($value['deployment']);
        }

        if (array_key_exists('api_version', $value)) {
            $this->_usedProperties['apiVersion'] = true;
            $this->apiVersion = $value['api_version'];
            unset($value['api_version']);
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
        if (isset($this->_usedProperties['baseUrl'])) {
            $output['base_url'] = $this->baseUrl;
        }
        if (isset($this->_usedProperties['deployment'])) {
            $output['deployment'] = $this->deployment;
        }
        if (isset($this->_usedProperties['apiVersion'])) {
            $output['api_version'] = $this->apiVersion;
        }

        return $output;
    }

}

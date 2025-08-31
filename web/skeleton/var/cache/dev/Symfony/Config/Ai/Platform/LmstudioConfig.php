<?php

namespace Symfony\Config\Ai\Platform;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LmstudioConfig 
{
    private $hostUrl;
    private $_usedProperties = [];

    /**
     * @default 'http://127.0.0.1:1234'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hostUrl($value): static
    {
        $this->_usedProperties['hostUrl'] = true;
        $this->hostUrl = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('host_url', $value)) {
            $this->_usedProperties['hostUrl'] = true;
            $this->hostUrl = $value['host_url'];
            unset($value['host_url']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['hostUrl'])) {
            $output['host_url'] = $this->hostUrl;
        }

        return $output;
    }

}

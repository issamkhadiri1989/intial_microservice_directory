<?php

namespace Symfony\Config\Ai\Platform;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VertexaiConfig 
{
    private $location;
    private $projectId;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function location($value): static
    {
        $this->_usedProperties['location'] = true;
        $this->location = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function projectId($value): static
    {
        $this->_usedProperties['projectId'] = true;
        $this->projectId = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('location', $value)) {
            $this->_usedProperties['location'] = true;
            $this->location = $value['location'];
            unset($value['location']);
        }

        if (array_key_exists('project_id', $value)) {
            $this->_usedProperties['projectId'] = true;
            $this->projectId = $value['project_id'];
            unset($value['project_id']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['location'])) {
            $output['location'] = $this->location;
        }
        if (isset($this->_usedProperties['projectId'])) {
            $output['project_id'] = $this->projectId;
        }

        return $output;
    }

}

<?php

namespace Symfony\Config\Ai;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AgentConfig'.\DIRECTORY_SEPARATOR.'ModelConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AgentConfig'.\DIRECTORY_SEPARATOR.'ToolsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AgentConfig 
{
    private $platform;
    private $model;
    private $structuredOutput;
    private $systemPrompt;
    private $includeTools;
    private $tools;
    private $faultTolerantToolbox;
    private $_usedProperties = [];

    /**
     * Service name of platform
     * @default 'Symfony\\AI\\Platform\\PlatformInterface'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function platform($value): static
    {
        $this->_usedProperties['platform'] = true;
        $this->platform = $value;

        return $this;
    }

    public function model(array $value = []): \Symfony\Config\Ai\AgentConfig\ModelConfig
    {
        if (null === $this->model) {
            $this->_usedProperties['model'] = true;
            $this->model = new \Symfony\Config\Ai\AgentConfig\ModelConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "model()" has already been initialized. You cannot pass values the second time you call model().');
        }

        return $this->model;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function structuredOutput($value): static
    {
        $this->_usedProperties['structuredOutput'] = true;
        $this->structuredOutput = $value;

        return $this;
    }

    /**
     * The default system prompt of the agent
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function systemPrompt($value): static
    {
        $this->_usedProperties['systemPrompt'] = true;
        $this->systemPrompt = $value;

        return $this;
    }

    /**
     * Include tool definitions at the end of the system prompt
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function includeTools($value): static
    {
        $this->_usedProperties['includeTools'] = true;
        $this->includeTools = $value;

        return $this;
    }

    /**
     * @default {"enabled":true,"services":[]}
    */
    public function tools(array $value = []): \Symfony\Config\Ai\AgentConfig\ToolsConfig
    {
        if (null === $this->tools) {
            $this->_usedProperties['tools'] = true;
            $this->tools = new \Symfony\Config\Ai\AgentConfig\ToolsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tools()" has already been initialized. You cannot pass values the second time you call tools().');
        }

        return $this->tools;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function faultTolerantToolbox($value): static
    {
        $this->_usedProperties['faultTolerantToolbox'] = true;
        $this->faultTolerantToolbox = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('platform', $value)) {
            $this->_usedProperties['platform'] = true;
            $this->platform = $value['platform'];
            unset($value['platform']);
        }

        if (array_key_exists('model', $value)) {
            $this->_usedProperties['model'] = true;
            $this->model = new \Symfony\Config\Ai\AgentConfig\ModelConfig($value['model']);
            unset($value['model']);
        }

        if (array_key_exists('structured_output', $value)) {
            $this->_usedProperties['structuredOutput'] = true;
            $this->structuredOutput = $value['structured_output'];
            unset($value['structured_output']);
        }

        if (array_key_exists('system_prompt', $value)) {
            $this->_usedProperties['systemPrompt'] = true;
            $this->systemPrompt = $value['system_prompt'];
            unset($value['system_prompt']);
        }

        if (array_key_exists('include_tools', $value)) {
            $this->_usedProperties['includeTools'] = true;
            $this->includeTools = $value['include_tools'];
            unset($value['include_tools']);
        }

        if (array_key_exists('tools', $value)) {
            $this->_usedProperties['tools'] = true;
            $this->tools = \is_array($value['tools']) ? new \Symfony\Config\Ai\AgentConfig\ToolsConfig($value['tools']) : $value['tools'];
            unset($value['tools']);
        }

        if (array_key_exists('fault_tolerant_toolbox', $value)) {
            $this->_usedProperties['faultTolerantToolbox'] = true;
            $this->faultTolerantToolbox = $value['fault_tolerant_toolbox'];
            unset($value['fault_tolerant_toolbox']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['platform'])) {
            $output['platform'] = $this->platform;
        }
        if (isset($this->_usedProperties['model'])) {
            $output['model'] = $this->model->toArray();
        }
        if (isset($this->_usedProperties['structuredOutput'])) {
            $output['structured_output'] = $this->structuredOutput;
        }
        if (isset($this->_usedProperties['systemPrompt'])) {
            $output['system_prompt'] = $this->systemPrompt;
        }
        if (isset($this->_usedProperties['includeTools'])) {
            $output['include_tools'] = $this->includeTools;
        }
        if (isset($this->_usedProperties['tools'])) {
            $output['tools'] = $this->tools instanceof \Symfony\Config\Ai\AgentConfig\ToolsConfig ? $this->tools->toArray() : $this->tools;
        }
        if (isset($this->_usedProperties['faultTolerantToolbox'])) {
            $output['fault_tolerant_toolbox'] = $this->faultTolerantToolbox;
        }

        return $output;
    }

}

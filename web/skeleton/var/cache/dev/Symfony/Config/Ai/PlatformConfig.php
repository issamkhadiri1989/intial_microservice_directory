<?php

namespace Symfony\Config\Ai;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'AnthropicConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'AzureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'ElevenLabsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'GeminiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'VertexaiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'OpenaiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'MistralConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'OpenrouterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'LmstudioConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'OllamaConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'CerebrasConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'VoyageConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PlatformConfig 
{
    private $anthropic;
    private $azure;
    private $elevenLabs;
    private $gemini;
    private $vertexai;
    private $openai;
    private $mistral;
    private $openrouter;
    private $lmstudio;
    private $ollama;
    private $cerebras;
    private $voyage;
    private $_usedProperties = [];

    public function anthropic(array $value = []): \Symfony\Config\Ai\Platform\AnthropicConfig
    {
        if (null === $this->anthropic) {
            $this->_usedProperties['anthropic'] = true;
            $this->anthropic = new \Symfony\Config\Ai\Platform\AnthropicConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "anthropic()" has already been initialized. You cannot pass values the second time you call anthropic().');
        }

        return $this->anthropic;
    }

    public function azure(string $name, array $value = []): \Symfony\Config\Ai\Platform\AzureConfig
    {
        if (!isset($this->azure[$name])) {
            $this->_usedProperties['azure'] = true;
            $this->azure[$name] = new \Symfony\Config\Ai\Platform\AzureConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "azure()" has already been initialized. You cannot pass values the second time you call azure().');
        }

        return $this->azure[$name];
    }

    public function elevenLabs(array $value = []): \Symfony\Config\Ai\Platform\ElevenLabsConfig
    {
        if (null === $this->elevenLabs) {
            $this->_usedProperties['elevenLabs'] = true;
            $this->elevenLabs = new \Symfony\Config\Ai\Platform\ElevenLabsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "elevenLabs()" has already been initialized. You cannot pass values the second time you call elevenLabs().');
        }

        return $this->elevenLabs;
    }

    public function gemini(array $value = []): \Symfony\Config\Ai\Platform\GeminiConfig
    {
        if (null === $this->gemini) {
            $this->_usedProperties['gemini'] = true;
            $this->gemini = new \Symfony\Config\Ai\Platform\GeminiConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gemini()" has already been initialized. You cannot pass values the second time you call gemini().');
        }

        return $this->gemini;
    }

    public function vertexai(array $value = []): \Symfony\Config\Ai\Platform\VertexaiConfig
    {
        if (null === $this->vertexai) {
            $this->_usedProperties['vertexai'] = true;
            $this->vertexai = new \Symfony\Config\Ai\Platform\VertexaiConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "vertexai()" has already been initialized. You cannot pass values the second time you call vertexai().');
        }

        return $this->vertexai;
    }

    public function openai(array $value = []): \Symfony\Config\Ai\Platform\OpenaiConfig
    {
        if (null === $this->openai) {
            $this->_usedProperties['openai'] = true;
            $this->openai = new \Symfony\Config\Ai\Platform\OpenaiConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "openai()" has already been initialized. You cannot pass values the second time you call openai().');
        }

        return $this->openai;
    }

    public function mistral(array $value = []): \Symfony\Config\Ai\Platform\MistralConfig
    {
        if (null === $this->mistral) {
            $this->_usedProperties['mistral'] = true;
            $this->mistral = new \Symfony\Config\Ai\Platform\MistralConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mistral()" has already been initialized. You cannot pass values the second time you call mistral().');
        }

        return $this->mistral;
    }

    public function openrouter(array $value = []): \Symfony\Config\Ai\Platform\OpenrouterConfig
    {
        if (null === $this->openrouter) {
            $this->_usedProperties['openrouter'] = true;
            $this->openrouter = new \Symfony\Config\Ai\Platform\OpenrouterConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "openrouter()" has already been initialized. You cannot pass values the second time you call openrouter().');
        }

        return $this->openrouter;
    }

    public function lmstudio(array $value = []): \Symfony\Config\Ai\Platform\LmstudioConfig
    {
        if (null === $this->lmstudio) {
            $this->_usedProperties['lmstudio'] = true;
            $this->lmstudio = new \Symfony\Config\Ai\Platform\LmstudioConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "lmstudio()" has already been initialized. You cannot pass values the second time you call lmstudio().');
        }

        return $this->lmstudio;
    }

    public function ollama(array $value = []): \Symfony\Config\Ai\Platform\OllamaConfig
    {
        if (null === $this->ollama) {
            $this->_usedProperties['ollama'] = true;
            $this->ollama = new \Symfony\Config\Ai\Platform\OllamaConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "ollama()" has already been initialized. You cannot pass values the second time you call ollama().');
        }

        return $this->ollama;
    }

    public function cerebras(array $value = []): \Symfony\Config\Ai\Platform\CerebrasConfig
    {
        if (null === $this->cerebras) {
            $this->_usedProperties['cerebras'] = true;
            $this->cerebras = new \Symfony\Config\Ai\Platform\CerebrasConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cerebras()" has already been initialized. You cannot pass values the second time you call cerebras().');
        }

        return $this->cerebras;
    }

    public function voyage(array $value = []): \Symfony\Config\Ai\Platform\VoyageConfig
    {
        if (null === $this->voyage) {
            $this->_usedProperties['voyage'] = true;
            $this->voyage = new \Symfony\Config\Ai\Platform\VoyageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "voyage()" has already been initialized. You cannot pass values the second time you call voyage().');
        }

        return $this->voyage;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('anthropic', $value)) {
            $this->_usedProperties['anthropic'] = true;
            $this->anthropic = new \Symfony\Config\Ai\Platform\AnthropicConfig($value['anthropic']);
            unset($value['anthropic']);
        }

        if (array_key_exists('azure', $value)) {
            $this->_usedProperties['azure'] = true;
            $this->azure = array_map(fn ($v) => new \Symfony\Config\Ai\Platform\AzureConfig($v), $value['azure']);
            unset($value['azure']);
        }

        if (array_key_exists('eleven_labs', $value)) {
            $this->_usedProperties['elevenLabs'] = true;
            $this->elevenLabs = new \Symfony\Config\Ai\Platform\ElevenLabsConfig($value['eleven_labs']);
            unset($value['eleven_labs']);
        }

        if (array_key_exists('gemini', $value)) {
            $this->_usedProperties['gemini'] = true;
            $this->gemini = new \Symfony\Config\Ai\Platform\GeminiConfig($value['gemini']);
            unset($value['gemini']);
        }

        if (array_key_exists('vertexai', $value)) {
            $this->_usedProperties['vertexai'] = true;
            $this->vertexai = new \Symfony\Config\Ai\Platform\VertexaiConfig($value['vertexai']);
            unset($value['vertexai']);
        }

        if (array_key_exists('openai', $value)) {
            $this->_usedProperties['openai'] = true;
            $this->openai = new \Symfony\Config\Ai\Platform\OpenaiConfig($value['openai']);
            unset($value['openai']);
        }

        if (array_key_exists('mistral', $value)) {
            $this->_usedProperties['mistral'] = true;
            $this->mistral = new \Symfony\Config\Ai\Platform\MistralConfig($value['mistral']);
            unset($value['mistral']);
        }

        if (array_key_exists('openrouter', $value)) {
            $this->_usedProperties['openrouter'] = true;
            $this->openrouter = new \Symfony\Config\Ai\Platform\OpenrouterConfig($value['openrouter']);
            unset($value['openrouter']);
        }

        if (array_key_exists('lmstudio', $value)) {
            $this->_usedProperties['lmstudio'] = true;
            $this->lmstudio = new \Symfony\Config\Ai\Platform\LmstudioConfig($value['lmstudio']);
            unset($value['lmstudio']);
        }

        if (array_key_exists('ollama', $value)) {
            $this->_usedProperties['ollama'] = true;
            $this->ollama = new \Symfony\Config\Ai\Platform\OllamaConfig($value['ollama']);
            unset($value['ollama']);
        }

        if (array_key_exists('cerebras', $value)) {
            $this->_usedProperties['cerebras'] = true;
            $this->cerebras = new \Symfony\Config\Ai\Platform\CerebrasConfig($value['cerebras']);
            unset($value['cerebras']);
        }

        if (array_key_exists('voyage', $value)) {
            $this->_usedProperties['voyage'] = true;
            $this->voyage = new \Symfony\Config\Ai\Platform\VoyageConfig($value['voyage']);
            unset($value['voyage']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['anthropic'])) {
            $output['anthropic'] = $this->anthropic->toArray();
        }
        if (isset($this->_usedProperties['azure'])) {
            $output['azure'] = array_map(fn ($v) => $v->toArray(), $this->azure);
        }
        if (isset($this->_usedProperties['elevenLabs'])) {
            $output['eleven_labs'] = $this->elevenLabs->toArray();
        }
        if (isset($this->_usedProperties['gemini'])) {
            $output['gemini'] = $this->gemini->toArray();
        }
        if (isset($this->_usedProperties['vertexai'])) {
            $output['vertexai'] = $this->vertexai->toArray();
        }
        if (isset($this->_usedProperties['openai'])) {
            $output['openai'] = $this->openai->toArray();
        }
        if (isset($this->_usedProperties['mistral'])) {
            $output['mistral'] = $this->mistral->toArray();
        }
        if (isset($this->_usedProperties['openrouter'])) {
            $output['openrouter'] = $this->openrouter->toArray();
        }
        if (isset($this->_usedProperties['lmstudio'])) {
            $output['lmstudio'] = $this->lmstudio->toArray();
        }
        if (isset($this->_usedProperties['ollama'])) {
            $output['ollama'] = $this->ollama->toArray();
        }
        if (isset($this->_usedProperties['cerebras'])) {
            $output['cerebras'] = $this->cerebras->toArray();
        }
        if (isset($this->_usedProperties['voyage'])) {
            $output['voyage'] = $this->voyage->toArray();
        }

        return $output;
    }

}

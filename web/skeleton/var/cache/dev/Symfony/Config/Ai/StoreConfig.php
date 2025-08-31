<?php

namespace Symfony\Config\Ai;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'AzureSearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'ChromaDbConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'ClickhouseConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'MeilisearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'MemoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'MilvusConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'MongodbConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'Neo4jConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'PineconeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'QdrantConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'SurrealDbConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'TypesenseConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StoreConfig 
{
    private $azureSearch;
    private $cache;
    private $chromaDb;
    private $clickhouse;
    private $meilisearch;
    private $memory;
    private $milvus;
    private $mongodb;
    private $neo4j;
    private $pinecone;
    private $qdrant;
    private $surrealDb;
    private $typesense;
    private $_usedProperties = [];

    public function azureSearch(string $name, array $value = []): \Symfony\Config\Ai\Store\AzureSearchConfig
    {
        if (!isset($this->azureSearch[$name])) {
            $this->_usedProperties['azureSearch'] = true;
            $this->azureSearch[$name] = new \Symfony\Config\Ai\Store\AzureSearchConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "azureSearch()" has already been initialized. You cannot pass values the second time you call azureSearch().');
        }

        return $this->azureSearch[$name];
    }

    public function cache(string $name, array $value = []): \Symfony\Config\Ai\Store\CacheConfig
    {
        if (!isset($this->cache[$name])) {
            $this->_usedProperties['cache'] = true;
            $this->cache[$name] = new \Symfony\Config\Ai\Store\CacheConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache[$name];
    }

    public function chromaDb(string $name, array $value = []): \Symfony\Config\Ai\Store\ChromaDbConfig
    {
        if (!isset($this->chromaDb[$name])) {
            $this->_usedProperties['chromaDb'] = true;
            $this->chromaDb[$name] = new \Symfony\Config\Ai\Store\ChromaDbConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "chromaDb()" has already been initialized. You cannot pass values the second time you call chromaDb().');
        }

        return $this->chromaDb[$name];
    }

    public function clickhouse(string $name, array $value = []): \Symfony\Config\Ai\Store\ClickhouseConfig
    {
        if (!isset($this->clickhouse[$name])) {
            $this->_usedProperties['clickhouse'] = true;
            $this->clickhouse[$name] = new \Symfony\Config\Ai\Store\ClickhouseConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "clickhouse()" has already been initialized. You cannot pass values the second time you call clickhouse().');
        }

        return $this->clickhouse[$name];
    }

    public function meilisearch(string $name, array $value = []): \Symfony\Config\Ai\Store\MeilisearchConfig
    {
        if (!isset($this->meilisearch[$name])) {
            $this->_usedProperties['meilisearch'] = true;
            $this->meilisearch[$name] = new \Symfony\Config\Ai\Store\MeilisearchConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "meilisearch()" has already been initialized. You cannot pass values the second time you call meilisearch().');
        }

        return $this->meilisearch[$name];
    }

    public function memory(string $name, array $value = []): \Symfony\Config\Ai\Store\MemoryConfig
    {
        if (!isset($this->memory[$name])) {
            $this->_usedProperties['memory'] = true;
            $this->memory[$name] = new \Symfony\Config\Ai\Store\MemoryConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "memory()" has already been initialized. You cannot pass values the second time you call memory().');
        }

        return $this->memory[$name];
    }

    public function milvus(string $name, array $value = []): \Symfony\Config\Ai\Store\MilvusConfig
    {
        if (!isset($this->milvus[$name])) {
            $this->_usedProperties['milvus'] = true;
            $this->milvus[$name] = new \Symfony\Config\Ai\Store\MilvusConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "milvus()" has already been initialized. You cannot pass values the second time you call milvus().');
        }

        return $this->milvus[$name];
    }

    public function mongodb(string $name, array $value = []): \Symfony\Config\Ai\Store\MongodbConfig
    {
        if (!isset($this->mongodb[$name])) {
            $this->_usedProperties['mongodb'] = true;
            $this->mongodb[$name] = new \Symfony\Config\Ai\Store\MongodbConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mongodb()" has already been initialized. You cannot pass values the second time you call mongodb().');
        }

        return $this->mongodb[$name];
    }

    public function neo4j(string $name, array $value = []): \Symfony\Config\Ai\Store\Neo4jConfig
    {
        if (!isset($this->neo4j[$name])) {
            $this->_usedProperties['neo4j'] = true;
            $this->neo4j[$name] = new \Symfony\Config\Ai\Store\Neo4jConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "neo4j()" has already been initialized. You cannot pass values the second time you call neo4j().');
        }

        return $this->neo4j[$name];
    }

    public function pinecone(string $name, array $value = []): \Symfony\Config\Ai\Store\PineconeConfig
    {
        if (!isset($this->pinecone[$name])) {
            $this->_usedProperties['pinecone'] = true;
            $this->pinecone[$name] = new \Symfony\Config\Ai\Store\PineconeConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pinecone()" has already been initialized. You cannot pass values the second time you call pinecone().');
        }

        return $this->pinecone[$name];
    }

    public function qdrant(string $name, array $value = []): \Symfony\Config\Ai\Store\QdrantConfig
    {
        if (!isset($this->qdrant[$name])) {
            $this->_usedProperties['qdrant'] = true;
            $this->qdrant[$name] = new \Symfony\Config\Ai\Store\QdrantConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "qdrant()" has already been initialized. You cannot pass values the second time you call qdrant().');
        }

        return $this->qdrant[$name];
    }

    public function surrealDb(string $name, array $value = []): \Symfony\Config\Ai\Store\SurrealDbConfig
    {
        if (!isset($this->surrealDb[$name])) {
            $this->_usedProperties['surrealDb'] = true;
            $this->surrealDb[$name] = new \Symfony\Config\Ai\Store\SurrealDbConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "surrealDb()" has already been initialized. You cannot pass values the second time you call surrealDb().');
        }

        return $this->surrealDb[$name];
    }

    public function typesense(string $name, array $value = []): \Symfony\Config\Ai\Store\TypesenseConfig
    {
        if (!isset($this->typesense[$name])) {
            $this->_usedProperties['typesense'] = true;
            $this->typesense[$name] = new \Symfony\Config\Ai\Store\TypesenseConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "typesense()" has already been initialized. You cannot pass values the second time you call typesense().');
        }

        return $this->typesense[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('azure_search', $value)) {
            $this->_usedProperties['azureSearch'] = true;
            $this->azureSearch = array_map(fn ($v) => new \Symfony\Config\Ai\Store\AzureSearchConfig($v), $value['azure_search']);
            unset($value['azure_search']);
        }

        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = array_map(fn ($v) => new \Symfony\Config\Ai\Store\CacheConfig($v), $value['cache']);
            unset($value['cache']);
        }

        if (array_key_exists('chroma_db', $value)) {
            $this->_usedProperties['chromaDb'] = true;
            $this->chromaDb = array_map(fn ($v) => new \Symfony\Config\Ai\Store\ChromaDbConfig($v), $value['chroma_db']);
            unset($value['chroma_db']);
        }

        if (array_key_exists('clickhouse', $value)) {
            $this->_usedProperties['clickhouse'] = true;
            $this->clickhouse = array_map(fn ($v) => new \Symfony\Config\Ai\Store\ClickhouseConfig($v), $value['clickhouse']);
            unset($value['clickhouse']);
        }

        if (array_key_exists('meilisearch', $value)) {
            $this->_usedProperties['meilisearch'] = true;
            $this->meilisearch = array_map(fn ($v) => new \Symfony\Config\Ai\Store\MeilisearchConfig($v), $value['meilisearch']);
            unset($value['meilisearch']);
        }

        if (array_key_exists('memory', $value)) {
            $this->_usedProperties['memory'] = true;
            $this->memory = array_map(fn ($v) => new \Symfony\Config\Ai\Store\MemoryConfig($v), $value['memory']);
            unset($value['memory']);
        }

        if (array_key_exists('milvus', $value)) {
            $this->_usedProperties['milvus'] = true;
            $this->milvus = array_map(fn ($v) => new \Symfony\Config\Ai\Store\MilvusConfig($v), $value['milvus']);
            unset($value['milvus']);
        }

        if (array_key_exists('mongodb', $value)) {
            $this->_usedProperties['mongodb'] = true;
            $this->mongodb = array_map(fn ($v) => new \Symfony\Config\Ai\Store\MongodbConfig($v), $value['mongodb']);
            unset($value['mongodb']);
        }

        if (array_key_exists('neo4j', $value)) {
            $this->_usedProperties['neo4j'] = true;
            $this->neo4j = array_map(fn ($v) => new \Symfony\Config\Ai\Store\Neo4jConfig($v), $value['neo4j']);
            unset($value['neo4j']);
        }

        if (array_key_exists('pinecone', $value)) {
            $this->_usedProperties['pinecone'] = true;
            $this->pinecone = array_map(fn ($v) => new \Symfony\Config\Ai\Store\PineconeConfig($v), $value['pinecone']);
            unset($value['pinecone']);
        }

        if (array_key_exists('qdrant', $value)) {
            $this->_usedProperties['qdrant'] = true;
            $this->qdrant = array_map(fn ($v) => new \Symfony\Config\Ai\Store\QdrantConfig($v), $value['qdrant']);
            unset($value['qdrant']);
        }

        if (array_key_exists('surreal_db', $value)) {
            $this->_usedProperties['surrealDb'] = true;
            $this->surrealDb = array_map(fn ($v) => new \Symfony\Config\Ai\Store\SurrealDbConfig($v), $value['surreal_db']);
            unset($value['surreal_db']);
        }

        if (array_key_exists('typesense', $value)) {
            $this->_usedProperties['typesense'] = true;
            $this->typesense = array_map(fn ($v) => new \Symfony\Config\Ai\Store\TypesenseConfig($v), $value['typesense']);
            unset($value['typesense']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['azureSearch'])) {
            $output['azure_search'] = array_map(fn ($v) => $v->toArray(), $this->azureSearch);
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = array_map(fn ($v) => $v->toArray(), $this->cache);
        }
        if (isset($this->_usedProperties['chromaDb'])) {
            $output['chroma_db'] = array_map(fn ($v) => $v->toArray(), $this->chromaDb);
        }
        if (isset($this->_usedProperties['clickhouse'])) {
            $output['clickhouse'] = array_map(fn ($v) => $v->toArray(), $this->clickhouse);
        }
        if (isset($this->_usedProperties['meilisearch'])) {
            $output['meilisearch'] = array_map(fn ($v) => $v->toArray(), $this->meilisearch);
        }
        if (isset($this->_usedProperties['memory'])) {
            $output['memory'] = array_map(fn ($v) => $v->toArray(), $this->memory);
        }
        if (isset($this->_usedProperties['milvus'])) {
            $output['milvus'] = array_map(fn ($v) => $v->toArray(), $this->milvus);
        }
        if (isset($this->_usedProperties['mongodb'])) {
            $output['mongodb'] = array_map(fn ($v) => $v->toArray(), $this->mongodb);
        }
        if (isset($this->_usedProperties['neo4j'])) {
            $output['neo4j'] = array_map(fn ($v) => $v->toArray(), $this->neo4j);
        }
        if (isset($this->_usedProperties['pinecone'])) {
            $output['pinecone'] = array_map(fn ($v) => $v->toArray(), $this->pinecone);
        }
        if (isset($this->_usedProperties['qdrant'])) {
            $output['qdrant'] = array_map(fn ($v) => $v->toArray(), $this->qdrant);
        }
        if (isset($this->_usedProperties['surrealDb'])) {
            $output['surreal_db'] = array_map(fn ($v) => $v->toArray(), $this->surrealDb);
        }
        if (isset($this->_usedProperties['typesense'])) {
            $output['typesense'] = array_map(fn ($v) => $v->toArray(), $this->typesense);
        }

        return $output;
    }

}

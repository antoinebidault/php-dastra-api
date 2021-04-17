<?php
/**
 * TaskStatsDto
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Dastra API
 *
 * Dastra's public REST API
 *
 * The version of the OpenAPI document: v1
 * Contact: antoine.bidault@dastra.eu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TaskStatsDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaskStatsDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskStatsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stats' => '\OpenAPI\Client\Model\TaskStatValueDto[]',
        'nb_task_total' => 'int',
        'work_flow_steps' => '\OpenAPI\Client\Model\TaskSerieValue[]',
        'cumulative_flow_chart' => '\OpenAPI\Client\Model\StatSerie[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'stats' => null,
        'nb_task_total' => 'int32',
        'work_flow_steps' => null,
        'cumulative_flow_chart' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'stats' => 'stats',
        'nb_task_total' => 'nbTaskTotal',
        'work_flow_steps' => 'workFlowSteps',
        'cumulative_flow_chart' => 'cumulativeFlowChart'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stats' => 'setStats',
        'nb_task_total' => 'setNbTaskTotal',
        'work_flow_steps' => 'setWorkFlowSteps',
        'cumulative_flow_chart' => 'setCumulativeFlowChart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stats' => 'getStats',
        'nb_task_total' => 'getNbTaskTotal',
        'work_flow_steps' => 'getWorkFlowSteps',
        'cumulative_flow_chart' => 'getCumulativeFlowChart'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['stats'] = $data['stats'] ?? null;
        $this->container['nb_task_total'] = $data['nb_task_total'] ?? null;
        $this->container['work_flow_steps'] = $data['work_flow_steps'] ?? null;
        $this->container['cumulative_flow_chart'] = $data['cumulative_flow_chart'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets stats
     *
     * @return \OpenAPI\Client\Model\TaskStatValueDto[]|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \OpenAPI\Client\Model\TaskStatValueDto[]|null $stats stats
     *
     * @return self
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets nb_task_total
     *
     * @return int|null
     */
    public function getNbTaskTotal()
    {
        return $this->container['nb_task_total'];
    }

    /**
     * Sets nb_task_total
     *
     * @param int|null $nb_task_total nb_task_total
     *
     * @return self
     */
    public function setNbTaskTotal($nb_task_total)
    {
        $this->container['nb_task_total'] = $nb_task_total;

        return $this;
    }

    /**
     * Gets work_flow_steps
     *
     * @return \OpenAPI\Client\Model\TaskSerieValue[]|null
     */
    public function getWorkFlowSteps()
    {
        return $this->container['work_flow_steps'];
    }

    /**
     * Sets work_flow_steps
     *
     * @param \OpenAPI\Client\Model\TaskSerieValue[]|null $work_flow_steps work_flow_steps
     *
     * @return self
     */
    public function setWorkFlowSteps($work_flow_steps)
    {
        $this->container['work_flow_steps'] = $work_flow_steps;

        return $this;
    }

    /**
     * Gets cumulative_flow_chart
     *
     * @return \OpenAPI\Client\Model\StatSerie[]|null
     */
    public function getCumulativeFlowChart()
    {
        return $this->container['cumulative_flow_chart'];
    }

    /**
     * Sets cumulative_flow_chart
     *
     * @param \OpenAPI\Client\Model\StatSerie[]|null $cumulative_flow_chart cumulative_flow_chart
     *
     * @return self
     */
    public function setCumulativeFlowChart($cumulative_flow_chart)
    {
        $this->container['cumulative_flow_chart'] = $cumulative_flow_chart;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



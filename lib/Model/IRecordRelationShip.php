<?php
/**
 * IRecordRelationShip
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
 * IRecordRelationShip Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class IRecordRelationShip implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IRecordRelationShip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'target' => 'string',
        'target_id' => 'string',
        'target_type' => '\OpenAPI\Client\Model\DataProcessingNodeType',
        'source' => 'string',
        'source_id' => 'string',
        'source_type' => '\OpenAPI\Client\Model\DataProcessingNodeType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'target' => null,
        'target_id' => null,
        'target_type' => null,
        'source' => null,
        'source_id' => null,
        'source_type' => null
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
        'target' => 'target',
        'target_id' => 'targetId',
        'target_type' => 'targetType',
        'source' => 'source',
        'source_id' => 'sourceId',
        'source_type' => 'sourceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target' => 'setTarget',
        'target_id' => 'setTargetId',
        'target_type' => 'setTargetType',
        'source' => 'setSource',
        'source_id' => 'setSourceId',
        'source_type' => 'setSourceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target' => 'getTarget',
        'target_id' => 'getTargetId',
        'target_type' => 'getTargetType',
        'source' => 'getSource',
        'source_id' => 'getSourceId',
        'source_type' => 'getSourceType'
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
        $this->container['target'] = $data['target'] ?? null;
        $this->container['target_id'] = $data['target_id'] ?? null;
        $this->container['target_type'] = $data['target_type'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['source_type'] = $data['source_type'] ?? null;
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
     * Gets target
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string|null $target target
     *
     * @return self
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets target_id
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['target_id'];
    }

    /**
     * Sets target_id
     *
     * @param string|null $target_id target_id
     *
     * @return self
     */
    public function setTargetId($target_id)
    {
        $this->container['target_id'] = $target_id;

        return $this;
    }

    /**
     * Gets target_type
     *
     * @return \OpenAPI\Client\Model\DataProcessingNodeType|null
     */
    public function getTargetType()
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param \OpenAPI\Client\Model\DataProcessingNodeType|null $target_type target_type
     *
     * @return self
     */
    public function setTargetType($target_type)
    {
        $this->container['target_type'] = $target_type;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id source_id
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return \OpenAPI\Client\Model\DataProcessingNodeType|null
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param \OpenAPI\Client\Model\DataProcessingNodeType|null $source_type source_type
     *
     * @return self
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

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



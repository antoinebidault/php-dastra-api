<?php
/**
 * DataProcessingRelationShipDto
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
 * DataProcessingRelationShipDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DataProcessingRelationShipDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataProcessingRelationShipDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'element' => '\OpenAPI\Client\Model\DataProcessingLightDto',
        'date_creation' => '\DateTime',
        'relation_ship_type' => '\OpenAPI\Client\Model\RelationShipType',
        'create' => 'bool',
        'label' => 'string',
        'url' => 'string',
        'processing_type' => '\OpenAPI\Client\Model\ProcessingType',
        'workspace_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'element' => null,
        'date_creation' => 'date-time',
        'relation_ship_type' => null,
        'create' => null,
        'label' => null,
        'url' => null,
        'processing_type' => null,
        'workspace_id' => 'int32'
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
        'id' => 'id',
        'element' => 'element',
        'date_creation' => 'dateCreation',
        'relation_ship_type' => 'relationShipType',
        'create' => 'create',
        'label' => 'label',
        'url' => 'url',
        'processing_type' => 'processingType',
        'workspace_id' => 'workspaceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'element' => 'setElement',
        'date_creation' => 'setDateCreation',
        'relation_ship_type' => 'setRelationShipType',
        'create' => 'setCreate',
        'label' => 'setLabel',
        'url' => 'setUrl',
        'processing_type' => 'setProcessingType',
        'workspace_id' => 'setWorkspaceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'element' => 'getElement',
        'date_creation' => 'getDateCreation',
        'relation_ship_type' => 'getRelationShipType',
        'create' => 'getCreate',
        'label' => 'getLabel',
        'url' => 'getUrl',
        'processing_type' => 'getProcessingType',
        'workspace_id' => 'getWorkspaceId'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['element'] = $data['element'] ?? null;
        $this->container['date_creation'] = $data['date_creation'] ?? null;
        $this->container['relation_ship_type'] = $data['relation_ship_type'] ?? null;
        $this->container['create'] = $data['create'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['processing_type'] = $data['processing_type'] ?? null;
        $this->container['workspace_id'] = $data['workspace_id'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets element
     *
     * @return \OpenAPI\Client\Model\DataProcessingLightDto|null
     */
    public function getElement()
    {
        return $this->container['element'];
    }

    /**
     * Sets element
     *
     * @param \OpenAPI\Client\Model\DataProcessingLightDto|null $element element
     *
     * @return self
     */
    public function setElement($element)
    {
        $this->container['element'] = $element;

        return $this;
    }

    /**
     * Gets date_creation
     *
     * @return \DateTime|null
     */
    public function getDateCreation()
    {
        return $this->container['date_creation'];
    }

    /**
     * Sets date_creation
     *
     * @param \DateTime|null $date_creation date_creation
     *
     * @return self
     */
    public function setDateCreation($date_creation)
    {
        $this->container['date_creation'] = $date_creation;

        return $this;
    }

    /**
     * Gets relation_ship_type
     *
     * @return \OpenAPI\Client\Model\RelationShipType|null
     */
    public function getRelationShipType()
    {
        return $this->container['relation_ship_type'];
    }

    /**
     * Sets relation_ship_type
     *
     * @param \OpenAPI\Client\Model\RelationShipType|null $relation_ship_type relation_ship_type
     *
     * @return self
     */
    public function setRelationShipType($relation_ship_type)
    {
        $this->container['relation_ship_type'] = $relation_ship_type;

        return $this;
    }

    /**
     * Gets create
     *
     * @return bool|null
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param bool|null $create create
     *
     * @return self
     */
    public function setCreate($create)
    {
        $this->container['create'] = $create;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets processing_type
     *
     * @return \OpenAPI\Client\Model\ProcessingType|null
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     *
     * @param \OpenAPI\Client\Model\ProcessingType|null $processing_type processing_type
     *
     * @return self
     */
    public function setProcessingType($processing_type)
    {
        $this->container['processing_type'] = $processing_type;

        return $this;
    }

    /**
     * Gets workspace_id
     *
     * @return int|null
     */
    public function getWorkspaceId()
    {
        return $this->container['workspace_id'];
    }

    /**
     * Sets workspace_id
     *
     * @param int|null $workspace_id workspace_id
     *
     * @return self
     */
    public function setWorkspaceId($workspace_id)
    {
        $this->container['workspace_id'] = $workspace_id;

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


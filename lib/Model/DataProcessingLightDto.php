<?php
/**
 * DataProcessingLightDto
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
 * DataProcessingLightDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DataProcessingLightDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataProcessingLightDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'label' => 'string',
        'ref' => 'string',
        'description' => 'string',
        'risk_level' => 'int',
        'workspace_id' => 'int',
        'archived' => 'bool',
        'date_update' => '\DateTime',
        'area_id' => 'int',
        'processing_type' => '\OpenAPI\Client\Model\ProcessingType'
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
        'label' => null,
        'ref' => null,
        'description' => null,
        'risk_level' => 'int32',
        'workspace_id' => 'int32',
        'archived' => null,
        'date_update' => 'date-time',
        'area_id' => 'int32',
        'processing_type' => null
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
        'label' => 'label',
        'ref' => 'ref',
        'description' => 'description',
        'risk_level' => 'riskLevel',
        'workspace_id' => 'workspaceId',
        'archived' => 'archived',
        'date_update' => 'dateUpdate',
        'area_id' => 'areaId',
        'processing_type' => 'processingType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'label' => 'setLabel',
        'ref' => 'setRef',
        'description' => 'setDescription',
        'risk_level' => 'setRiskLevel',
        'workspace_id' => 'setWorkspaceId',
        'archived' => 'setArchived',
        'date_update' => 'setDateUpdate',
        'area_id' => 'setAreaId',
        'processing_type' => 'setProcessingType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'label' => 'getLabel',
        'ref' => 'getRef',
        'description' => 'getDescription',
        'risk_level' => 'getRiskLevel',
        'workspace_id' => 'getWorkspaceId',
        'archived' => 'getArchived',
        'date_update' => 'getDateUpdate',
        'area_id' => 'getAreaId',
        'processing_type' => 'getProcessingType'
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
        $this->container['label'] = $data['label'] ?? null;
        $this->container['ref'] = $data['ref'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['risk_level'] = $data['risk_level'] ?? null;
        $this->container['workspace_id'] = $data['workspace_id'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['date_update'] = $data['date_update'] ?? null;
        $this->container['area_id'] = $data['area_id'] ?? null;
        $this->container['processing_type'] = $data['processing_type'] ?? null;
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
     * Gets ref
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string|null $ref ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets risk_level
     *
     * @return int|null
     */
    public function getRiskLevel()
    {
        return $this->container['risk_level'];
    }

    /**
     * Sets risk_level
     *
     * @param int|null $risk_level risk_level
     *
     * @return self
     */
    public function setRiskLevel($risk_level)
    {
        $this->container['risk_level'] = $risk_level;

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
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets date_update
     *
     * @return \DateTime|null
     */
    public function getDateUpdate()
    {
        return $this->container['date_update'];
    }

    /**
     * Sets date_update
     *
     * @param \DateTime|null $date_update date_update
     *
     * @return self
     */
    public function setDateUpdate($date_update)
    {
        $this->container['date_update'] = $date_update;

        return $this;
    }

    /**
     * Gets area_id
     *
     * @return int|null
     */
    public function getAreaId()
    {
        return $this->container['area_id'];
    }

    /**
     * Sets area_id
     *
     * @param int|null $area_id area_id
     *
     * @return self
     */
    public function setAreaId($area_id)
    {
        $this->container['area_id'] = $area_id;

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



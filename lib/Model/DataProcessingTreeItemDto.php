<?php
/**
 * DataProcessingTreeItemDto
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
 * DataProcessingTreeItemDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DataProcessingTreeItemDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataProcessingTreeItemDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'label' => 'string',
        'area_id' => 'int',
        'parent_id' => 'string',
        'state' => '\OpenAPI\Client\Model\DataProcessingState',
        'date_creation' => '\DateTime',
        'date_update' => '\DateTime',
        'version_description' => 'string',
        'progression' => 'int',
        'tags' => '\OpenAPI\Client\Model\TagDto[]',
        'processing_type' => '\OpenAPI\Client\Model\ProcessingType',
        'tree_item_type' => '\OpenAPI\Client\Model\TreeItemType',
        'children' => '\OpenAPI\Client\Model\DataProcessingTreeItemDto[]'
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
        'area_id' => 'int32',
        'parent_id' => 'uuid',
        'state' => null,
        'date_creation' => 'date-time',
        'date_update' => 'date-time',
        'version_description' => null,
        'progression' => 'int32',
        'tags' => null,
        'processing_type' => null,
        'tree_item_type' => null,
        'children' => null
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
        'area_id' => 'areaId',
        'parent_id' => 'parentId',
        'state' => 'state',
        'date_creation' => 'dateCreation',
        'date_update' => 'dateUpdate',
        'version_description' => 'versionDescription',
        'progression' => 'progression',
        'tags' => 'tags',
        'processing_type' => 'processingType',
        'tree_item_type' => 'treeItemType',
        'children' => 'children'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'label' => 'setLabel',
        'area_id' => 'setAreaId',
        'parent_id' => 'setParentId',
        'state' => 'setState',
        'date_creation' => 'setDateCreation',
        'date_update' => 'setDateUpdate',
        'version_description' => 'setVersionDescription',
        'progression' => 'setProgression',
        'tags' => 'setTags',
        'processing_type' => 'setProcessingType',
        'tree_item_type' => 'setTreeItemType',
        'children' => 'setChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'label' => 'getLabel',
        'area_id' => 'getAreaId',
        'parent_id' => 'getParentId',
        'state' => 'getState',
        'date_creation' => 'getDateCreation',
        'date_update' => 'getDateUpdate',
        'version_description' => 'getVersionDescription',
        'progression' => 'getProgression',
        'tags' => 'getTags',
        'processing_type' => 'getProcessingType',
        'tree_item_type' => 'getTreeItemType',
        'children' => 'getChildren'
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
        $this->container['area_id'] = $data['area_id'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['date_creation'] = $data['date_creation'] ?? null;
        $this->container['date_update'] = $data['date_update'] ?? null;
        $this->container['version_description'] = $data['version_description'] ?? null;
        $this->container['progression'] = $data['progression'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['processing_type'] = $data['processing_type'] ?? null;
        $this->container['tree_item_type'] = $data['tree_item_type'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
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
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\DataProcessingState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\DataProcessingState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * Gets version_description
     *
     * @return string|null
     */
    public function getVersionDescription()
    {
        return $this->container['version_description'];
    }

    /**
     * Sets version_description
     *
     * @param string|null $version_description version_description
     *
     * @return self
     */
    public function setVersionDescription($version_description)
    {
        $this->container['version_description'] = $version_description;

        return $this;
    }

    /**
     * Gets progression
     *
     * @return int|null
     */
    public function getProgression()
    {
        return $this->container['progression'];
    }

    /**
     * Sets progression
     *
     * @param int|null $progression progression
     *
     * @return self
     */
    public function setProgression($progression)
    {
        $this->container['progression'] = $progression;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \OpenAPI\Client\Model\TagDto[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\Client\Model\TagDto[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * Gets tree_item_type
     *
     * @return \OpenAPI\Client\Model\TreeItemType|null
     */
    public function getTreeItemType()
    {
        return $this->container['tree_item_type'];
    }

    /**
     * Sets tree_item_type
     *
     * @param \OpenAPI\Client\Model\TreeItemType|null $tree_item_type tree_item_type
     *
     * @return self
     */
    public function setTreeItemType($tree_item_type)
    {
        $this->container['tree_item_type'] = $tree_item_type;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \OpenAPI\Client\Model\DataProcessingTreeItemDto[]|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\Client\Model\DataProcessingTreeItemDto[]|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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


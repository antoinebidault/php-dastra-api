<?php
/**
 * SecurityMeasureDto
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
 * SecurityMeasureDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SecurityMeasureDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SecurityMeasureDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'parent_id' => 'int',
        'required' => 'bool',
        'label' => 'string',
        'type' => '\OpenAPI\Client\Model\SecurityMeasureType',
        'description' => 'string',
        'related_risk' => 'string',
        'more_details_url' => 'string',
        'date_creation' => '\DateTime',
        'date_update' => '\DateTime',
        'children' => '\OpenAPI\Client\Model\SecurityMeasureDto[]',
        'tags' => '\OpenAPI\Client\Model\TagDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'parent_id' => 'int32',
        'required' => null,
        'label' => null,
        'type' => null,
        'description' => null,
        'related_risk' => null,
        'more_details_url' => 'uri',
        'date_creation' => 'date-time',
        'date_update' => 'date-time',
        'children' => null,
        'tags' => null
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
        'parent_id' => 'parentId',
        'required' => 'required',
        'label' => 'label',
        'type' => 'type',
        'description' => 'description',
        'related_risk' => 'relatedRisk',
        'more_details_url' => 'moreDetailsUrl',
        'date_creation' => 'dateCreation',
        'date_update' => 'dateUpdate',
        'children' => 'children',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'required' => 'setRequired',
        'label' => 'setLabel',
        'type' => 'setType',
        'description' => 'setDescription',
        'related_risk' => 'setRelatedRisk',
        'more_details_url' => 'setMoreDetailsUrl',
        'date_creation' => 'setDateCreation',
        'date_update' => 'setDateUpdate',
        'children' => 'setChildren',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'required' => 'getRequired',
        'label' => 'getLabel',
        'type' => 'getType',
        'description' => 'getDescription',
        'related_risk' => 'getRelatedRisk',
        'more_details_url' => 'getMoreDetailsUrl',
        'date_creation' => 'getDateCreation',
        'date_update' => 'getDateUpdate',
        'children' => 'getChildren',
        'tags' => 'getTags'
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
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['required'] = $data['required'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['related_risk'] = $data['related_risk'] ?? null;
        $this->container['more_details_url'] = $data['more_details_url'] ?? null;
        $this->container['date_creation'] = $data['date_creation'] ?? null;
        $this->container['date_update'] = $data['date_update'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ((mb_strlen($this->container['label']) > 150)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 150.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 3000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 3000.";
        }

        if (!is_null($this->container['related_risk']) && (mb_strlen($this->container['related_risk']) > 3000)) {
            $invalidProperties[] = "invalid value for 'related_risk', the character length must be smaller than or equal to 3000.";
        }

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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required required
     *
     * @return self
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if ((mb_strlen($label) > 150)) {
            throw new \InvalidArgumentException('invalid length for $label when calling SecurityMeasureDto., must be smaller than or equal to 150.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\SecurityMeasureType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\SecurityMeasureType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 3000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling SecurityMeasureDto., must be smaller than or equal to 3000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets related_risk
     *
     * @return string|null
     */
    public function getRelatedRisk()
    {
        return $this->container['related_risk'];
    }

    /**
     * Sets related_risk
     *
     * @param string|null $related_risk related_risk
     *
     * @return self
     */
    public function setRelatedRisk($related_risk)
    {
        if (!is_null($related_risk) && (mb_strlen($related_risk) > 3000)) {
            throw new \InvalidArgumentException('invalid length for $related_risk when calling SecurityMeasureDto., must be smaller than or equal to 3000.');
        }

        $this->container['related_risk'] = $related_risk;

        return $this;
    }

    /**
     * Gets more_details_url
     *
     * @return string|null
     */
    public function getMoreDetailsUrl()
    {
        return $this->container['more_details_url'];
    }

    /**
     * Sets more_details_url
     *
     * @param string|null $more_details_url more_details_url
     *
     * @return self
     */
    public function setMoreDetailsUrl($more_details_url)
    {
        $this->container['more_details_url'] = $more_details_url;

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
     * Gets children
     *
     * @return \OpenAPI\Client\Model\SecurityMeasureDto[]|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\Client\Model\SecurityMeasureDto[]|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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


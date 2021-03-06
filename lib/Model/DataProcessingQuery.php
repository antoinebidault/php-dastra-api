<?php
/**
 * DataProcessingQuery
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
 * DataProcessingQuery Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DataProcessingQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataProcessingQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_set_id' => 'string',
        'actor_id' => 'int',
        'customer_id' => 'int',
        'security_measure_id' => 'int',
        'area_id' => 'int',
        'archived' => 'bool',
        'tags' => 'int[]',
        'states' => '\OpenAPI\Client\Model\DataProcessingState[]',
        'types' => '\OpenAPI\Client\Model\ProcessingType[]',
        'q' => 'string',
        'ids' => 'string[]',
        'page' => 'int',
        'size' => 'int',
        'skip' => 'int',
        'sort_by' => 'string',
        'asc' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_set_id' => 'uuid',
        'actor_id' => 'int32',
        'customer_id' => 'int32',
        'security_measure_id' => 'int32',
        'area_id' => 'int32',
        'archived' => null,
        'tags' => 'int32',
        'states' => null,
        'types' => null,
        'q' => null,
        'ids' => 'uuid',
        'page' => 'int32',
        'size' => 'int32',
        'skip' => 'int32',
        'sort_by' => null,
        'asc' => null
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
        'data_set_id' => 'dataSetId',
        'actor_id' => 'actorId',
        'customer_id' => 'customerId',
        'security_measure_id' => 'securityMeasureId',
        'area_id' => 'areaId',
        'archived' => 'archived',
        'tags' => 'tags',
        'states' => 'states',
        'types' => 'types',
        'q' => 'q',
        'ids' => 'ids',
        'page' => 'page',
        'size' => 'size',
        'skip' => 'skip',
        'sort_by' => 'sortBy',
        'asc' => 'asc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_set_id' => 'setDataSetId',
        'actor_id' => 'setActorId',
        'customer_id' => 'setCustomerId',
        'security_measure_id' => 'setSecurityMeasureId',
        'area_id' => 'setAreaId',
        'archived' => 'setArchived',
        'tags' => 'setTags',
        'states' => 'setStates',
        'types' => 'setTypes',
        'q' => 'setQ',
        'ids' => 'setIds',
        'page' => 'setPage',
        'size' => 'setSize',
        'skip' => 'setSkip',
        'sort_by' => 'setSortBy',
        'asc' => 'setAsc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_set_id' => 'getDataSetId',
        'actor_id' => 'getActorId',
        'customer_id' => 'getCustomerId',
        'security_measure_id' => 'getSecurityMeasureId',
        'area_id' => 'getAreaId',
        'archived' => 'getArchived',
        'tags' => 'getTags',
        'states' => 'getStates',
        'types' => 'getTypes',
        'q' => 'getQ',
        'ids' => 'getIds',
        'page' => 'getPage',
        'size' => 'getSize',
        'skip' => 'getSkip',
        'sort_by' => 'getSortBy',
        'asc' => 'getAsc'
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
        $this->container['data_set_id'] = $data['data_set_id'] ?? null;
        $this->container['actor_id'] = $data['actor_id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['security_measure_id'] = $data['security_measure_id'] ?? null;
        $this->container['area_id'] = $data['area_id'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['states'] = $data['states'] ?? null;
        $this->container['types'] = $data['types'] ?? null;
        $this->container['q'] = $data['q'] ?? null;
        $this->container['ids'] = $data['ids'] ?? null;
        $this->container['page'] = $data['page'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['skip'] = $data['skip'] ?? null;
        $this->container['sort_by'] = $data['sort_by'] ?? null;
        $this->container['asc'] = $data['asc'] ?? null;
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
     * Gets data_set_id
     *
     * @return string|null
     */
    public function getDataSetId()
    {
        return $this->container['data_set_id'];
    }

    /**
     * Sets data_set_id
     *
     * @param string|null $data_set_id data_set_id
     *
     * @return self
     */
    public function setDataSetId($data_set_id)
    {
        $this->container['data_set_id'] = $data_set_id;

        return $this;
    }

    /**
     * Gets actor_id
     *
     * @return int|null
     */
    public function getActorId()
    {
        return $this->container['actor_id'];
    }

    /**
     * Sets actor_id
     *
     * @param int|null $actor_id actor_id
     *
     * @return self
     */
    public function setActorId($actor_id)
    {
        $this->container['actor_id'] = $actor_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets security_measure_id
     *
     * @return int|null
     */
    public function getSecurityMeasureId()
    {
        return $this->container['security_measure_id'];
    }

    /**
     * Sets security_measure_id
     *
     * @param int|null $security_measure_id security_measure_id
     *
     * @return self
     */
    public function setSecurityMeasureId($security_measure_id)
    {
        $this->container['security_measure_id'] = $security_measure_id;

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
     * Gets tags
     *
     * @return int[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param int[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \OpenAPI\Client\Model\DataProcessingState[]|null
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \OpenAPI\Client\Model\DataProcessingState[]|null $states states
     *
     * @return self
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets types
     *
     * @return \OpenAPI\Client\Model\ProcessingType[]|null
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param \OpenAPI\Client\Model\ProcessingType[]|null $types types
     *
     * @return self
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets q
     *
     * @return string|null
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     *
     * @param string|null $q q
     *
     * @return self
     */
    public function setQ($q)
    {
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return string[]|null
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[]|null $ids ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page page
     *
     * @return self
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int|null
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int|null $skip skip
     *
     * @return self
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets sort_by
     *
     * @return string|null
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param string|null $sort_by sort_by
     *
     * @return self
     */
    public function setSortBy($sort_by)
    {
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets asc
     *
     * @return bool|null
     */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
     * Sets asc
     *
     * @param bool|null $asc asc
     *
     * @return self
     */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;

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



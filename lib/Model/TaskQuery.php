<?php
/**
 * TaskQuery
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
 * TaskQuery Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaskQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'int[]',
        'users' => 'int[]',
        'object_types' => '\OpenAPI\Client\Model\TaskObjectType[]',
        'object_ids' => 'string[]',
        'prios' => '\OpenAPI\Client\Model\Priority[]',
        'states' => '\OpenAPI\Client\Model\TaskState[]',
        'workflows' => 'int[]',
        'area_id' => 'int',
        'project_id' => 'string',
        'iteration' => 'string',
        'q' => 'string',
        'overtaking' => 'bool',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'archived' => 'bool',
        'exclude_done' => 'bool',
        'include_children' => 'bool',
        'parent_id' => 'int',
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
        'tags' => 'int32',
        'users' => 'int32',
        'object_types' => null,
        'object_ids' => null,
        'prios' => null,
        'states' => null,
        'workflows' => 'int32',
        'area_id' => 'int32',
        'project_id' => null,
        'iteration' => 'uuid',
        'q' => null,
        'overtaking' => null,
        'start' => 'date-time',
        'end' => 'date-time',
        'archived' => null,
        'exclude_done' => null,
        'include_children' => null,
        'parent_id' => 'int32',
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
        'tags' => 'tags',
        'users' => 'users',
        'object_types' => 'objectTypes',
        'object_ids' => 'objectIds',
        'prios' => 'prios',
        'states' => 'states',
        'workflows' => 'workflows',
        'area_id' => 'areaId',
        'project_id' => 'projectId',
        'iteration' => 'iteration',
        'q' => 'q',
        'overtaking' => 'overtaking',
        'start' => 'start',
        'end' => 'end',
        'archived' => 'archived',
        'exclude_done' => 'excludeDone',
        'include_children' => 'includeChildren',
        'parent_id' => 'parentId',
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
        'tags' => 'setTags',
        'users' => 'setUsers',
        'object_types' => 'setObjectTypes',
        'object_ids' => 'setObjectIds',
        'prios' => 'setPrios',
        'states' => 'setStates',
        'workflows' => 'setWorkflows',
        'area_id' => 'setAreaId',
        'project_id' => 'setProjectId',
        'iteration' => 'setIteration',
        'q' => 'setQ',
        'overtaking' => 'setOvertaking',
        'start' => 'setStart',
        'end' => 'setEnd',
        'archived' => 'setArchived',
        'exclude_done' => 'setExcludeDone',
        'include_children' => 'setIncludeChildren',
        'parent_id' => 'setParentId',
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
        'tags' => 'getTags',
        'users' => 'getUsers',
        'object_types' => 'getObjectTypes',
        'object_ids' => 'getObjectIds',
        'prios' => 'getPrios',
        'states' => 'getStates',
        'workflows' => 'getWorkflows',
        'area_id' => 'getAreaId',
        'project_id' => 'getProjectId',
        'iteration' => 'getIteration',
        'q' => 'getQ',
        'overtaking' => 'getOvertaking',
        'start' => 'getStart',
        'end' => 'getEnd',
        'archived' => 'getArchived',
        'exclude_done' => 'getExcludeDone',
        'include_children' => 'getIncludeChildren',
        'parent_id' => 'getParentId',
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
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
        $this->container['object_types'] = $data['object_types'] ?? null;
        $this->container['object_ids'] = $data['object_ids'] ?? null;
        $this->container['prios'] = $data['prios'] ?? null;
        $this->container['states'] = $data['states'] ?? null;
        $this->container['workflows'] = $data['workflows'] ?? null;
        $this->container['area_id'] = $data['area_id'] ?? null;
        $this->container['project_id'] = $data['project_id'] ?? null;
        $this->container['iteration'] = $data['iteration'] ?? null;
        $this->container['q'] = $data['q'] ?? null;
        $this->container['overtaking'] = $data['overtaking'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['exclude_done'] = $data['exclude_done'] ?? null;
        $this->container['include_children'] = $data['include_children'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
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
     * Gets users
     *
     * @return int[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param int[]|null $users users
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets object_types
     *
     * @return \OpenAPI\Client\Model\TaskObjectType[]|null
     */
    public function getObjectTypes()
    {
        return $this->container['object_types'];
    }

    /**
     * Sets object_types
     *
     * @param \OpenAPI\Client\Model\TaskObjectType[]|null $object_types object_types
     *
     * @return self
     */
    public function setObjectTypes($object_types)
    {
        $this->container['object_types'] = $object_types;

        return $this;
    }

    /**
     * Gets object_ids
     *
     * @return string[]|null
     */
    public function getObjectIds()
    {
        return $this->container['object_ids'];
    }

    /**
     * Sets object_ids
     *
     * @param string[]|null $object_ids object_ids
     *
     * @return self
     */
    public function setObjectIds($object_ids)
    {
        $this->container['object_ids'] = $object_ids;

        return $this;
    }

    /**
     * Gets prios
     *
     * @return \OpenAPI\Client\Model\Priority[]|null
     */
    public function getPrios()
    {
        return $this->container['prios'];
    }

    /**
     * Sets prios
     *
     * @param \OpenAPI\Client\Model\Priority[]|null $prios prios
     *
     * @return self
     */
    public function setPrios($prios)
    {
        $this->container['prios'] = $prios;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \OpenAPI\Client\Model\TaskState[]|null
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \OpenAPI\Client\Model\TaskState[]|null $states states
     *
     * @return self
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets workflows
     *
     * @return int[]|null
     */
    public function getWorkflows()
    {
        return $this->container['workflows'];
    }

    /**
     * Sets workflows
     *
     * @param int[]|null $workflows workflows
     *
     * @return self
     */
    public function setWorkflows($workflows)
    {
        $this->container['workflows'] = $workflows;

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
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id project_id
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets iteration
     *
     * @return string|null
     */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
     * Sets iteration
     *
     * @param string|null $iteration iteration
     *
     * @return self
     */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;

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
     * Gets overtaking
     *
     * @return bool|null
     */
    public function getOvertaking()
    {
        return $this->container['overtaking'];
    }

    /**
     * Sets overtaking
     *
     * @param bool|null $overtaking overtaking
     *
     * @return self
     */
    public function setOvertaking($overtaking)
    {
        $this->container['overtaking'] = $overtaking;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start start
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

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
     * Gets exclude_done
     *
     * @return bool|null
     */
    public function getExcludeDone()
    {
        return $this->container['exclude_done'];
    }

    /**
     * Sets exclude_done
     *
     * @param bool|null $exclude_done exclude_done
     *
     * @return self
     */
    public function setExcludeDone($exclude_done)
    {
        $this->container['exclude_done'] = $exclude_done;

        return $this;
    }

    /**
     * Gets include_children
     *
     * @return bool|null
     */
    public function getIncludeChildren()
    {
        return $this->container['include_children'];
    }

    /**
     * Sets include_children
     *
     * @param bool|null $include_children include_children
     *
     * @return self
     */
    public function setIncludeChildren($include_children)
    {
        $this->container['include_children'] = $include_children;

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



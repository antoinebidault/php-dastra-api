<?php
/**
 * CommentDto
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
 * CommentDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CommentDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CommentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'work_space_id' => 'int',
        'date_creation' => '\DateTime',
        'date_update' => '\DateTime',
        'message' => 'string',
        'object_id' => 'string',
        'object_type' => '\OpenAPI\Client\Model\CommentObjectType',
        'attachments' => '\OpenAPI\Client\Model\AttachmentDto[]',
        'user' => '\OpenAPI\Client\Model\UserLightDto',
        'user_id' => 'int'
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
        'work_space_id' => 'int32',
        'date_creation' => 'date-time',
        'date_update' => 'date-time',
        'message' => null,
        'object_id' => null,
        'object_type' => null,
        'attachments' => null,
        'user' => null,
        'user_id' => 'int32'
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
        'work_space_id' => 'workSpaceId',
        'date_creation' => 'dateCreation',
        'date_update' => 'dateUpdate',
        'message' => 'message',
        'object_id' => 'objectId',
        'object_type' => 'objectType',
        'attachments' => 'attachments',
        'user' => 'user',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'work_space_id' => 'setWorkSpaceId',
        'date_creation' => 'setDateCreation',
        'date_update' => 'setDateUpdate',
        'message' => 'setMessage',
        'object_id' => 'setObjectId',
        'object_type' => 'setObjectType',
        'attachments' => 'setAttachments',
        'user' => 'setUser',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'work_space_id' => 'getWorkSpaceId',
        'date_creation' => 'getDateCreation',
        'date_update' => 'getDateUpdate',
        'message' => 'getMessage',
        'object_id' => 'getObjectId',
        'object_type' => 'getObjectType',
        'attachments' => 'getAttachments',
        'user' => 'getUser',
        'user_id' => 'getUserId'
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
        $this->container['work_space_id'] = $data['work_space_id'] ?? null;
        $this->container['date_creation'] = $data['date_creation'] ?? null;
        $this->container['date_update'] = $data['date_update'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['object_id'] = $data['object_id'] ?? null;
        $this->container['object_type'] = $data['object_type'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['object_id'] === null) {
            $invalidProperties[] = "'object_id' can't be null";
        }
        if ((mb_strlen($this->container['object_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'object_id', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['object_type'] === null) {
            $invalidProperties[] = "'object_type' can't be null";
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
     * Gets work_space_id
     *
     * @return int|null
     */
    public function getWorkSpaceId()
    {
        return $this->container['work_space_id'];
    }

    /**
     * Sets work_space_id
     *
     * @param int|null $work_space_id work_space_id
     *
     * @return self
     */
    public function setWorkSpaceId($work_space_id)
    {
        $this->container['work_space_id'] = $work_space_id;

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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string $object_id object_id
     *
     * @return self
     */
    public function setObjectId($object_id)
    {
        if ((mb_strlen($object_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $object_id when calling CommentDto., must be smaller than or equal to 50.');
        }

        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_type
     *
     * @return \OpenAPI\Client\Model\CommentObjectType
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     *
     * @param \OpenAPI\Client\Model\CommentObjectType $object_type object_type
     *
     * @return self
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \OpenAPI\Client\Model\AttachmentDto[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \OpenAPI\Client\Model\AttachmentDto[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\UserLightDto|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\UserLightDto|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


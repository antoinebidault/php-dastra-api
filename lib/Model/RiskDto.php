<?php
/**
 * RiskDto
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
 * RiskDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RiskDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RiskDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'label' => 'string',
        'date_creation' => '\DateTime',
        'date_update' => '\DateTime',
        'created_by' => '\OpenAPI\Client\Model\UserLightDto',
        'enabled' => 'bool',
        'description' => 'string',
        'impact_score' => '\OpenAPI\Client\Model\ImpactScore',
        'risk_score' => '\OpenAPI\Client\Model\ProbabilityScore',
        'global_risk' => 'int',
        'global_risk_percentage' => 'int',
        'tags' => '\OpenAPI\Client\Model\TagDto[]',
        'data_processings' => '\OpenAPI\Client\Model\DataProcessingLightDto[]'
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
        'date_creation' => 'date-time',
        'date_update' => 'date-time',
        'created_by' => null,
        'enabled' => null,
        'description' => null,
        'impact_score' => null,
        'risk_score' => null,
        'global_risk' => 'int32',
        'global_risk_percentage' => 'int32',
        'tags' => null,
        'data_processings' => null
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
        'date_creation' => 'dateCreation',
        'date_update' => 'dateUpdate',
        'created_by' => 'createdBy',
        'enabled' => 'enabled',
        'description' => 'description',
        'impact_score' => 'impactScore',
        'risk_score' => 'riskScore',
        'global_risk' => 'globalRisk',
        'global_risk_percentage' => 'globalRiskPercentage',
        'tags' => 'tags',
        'data_processings' => 'dataProcessings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'label' => 'setLabel',
        'date_creation' => 'setDateCreation',
        'date_update' => 'setDateUpdate',
        'created_by' => 'setCreatedBy',
        'enabled' => 'setEnabled',
        'description' => 'setDescription',
        'impact_score' => 'setImpactScore',
        'risk_score' => 'setRiskScore',
        'global_risk' => 'setGlobalRisk',
        'global_risk_percentage' => 'setGlobalRiskPercentage',
        'tags' => 'setTags',
        'data_processings' => 'setDataProcessings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'label' => 'getLabel',
        'date_creation' => 'getDateCreation',
        'date_update' => 'getDateUpdate',
        'created_by' => 'getCreatedBy',
        'enabled' => 'getEnabled',
        'description' => 'getDescription',
        'impact_score' => 'getImpactScore',
        'risk_score' => 'getRiskScore',
        'global_risk' => 'getGlobalRisk',
        'global_risk_percentage' => 'getGlobalRiskPercentage',
        'tags' => 'getTags',
        'data_processings' => 'getDataProcessings'
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
        $this->container['date_creation'] = $data['date_creation'] ?? null;
        $this->container['date_update'] = $data['date_update'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['impact_score'] = $data['impact_score'] ?? null;
        $this->container['risk_score'] = $data['risk_score'] ?? null;
        $this->container['global_risk'] = $data['global_risk'] ?? null;
        $this->container['global_risk_percentage'] = $data['global_risk_percentage'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['data_processings'] = $data['data_processings'] ?? null;
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
        if ((mb_strlen($this->container['label']) > 250)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 3500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 3500.";
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
        if ((mb_strlen($label) > 250)) {
            throw new \InvalidArgumentException('invalid length for $label when calling RiskDto., must be smaller than or equal to 250.');
        }

        $this->container['label'] = $label;

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
     * Gets created_by
     *
     * @return \OpenAPI\Client\Model\UserLightDto|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \OpenAPI\Client\Model\UserLightDto|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
        if (!is_null($description) && (mb_strlen($description) > 3500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling RiskDto., must be smaller than or equal to 3500.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets impact_score
     *
     * @return \OpenAPI\Client\Model\ImpactScore|null
     */
    public function getImpactScore()
    {
        return $this->container['impact_score'];
    }

    /**
     * Sets impact_score
     *
     * @param \OpenAPI\Client\Model\ImpactScore|null $impact_score impact_score
     *
     * @return self
     */
    public function setImpactScore($impact_score)
    {
        $this->container['impact_score'] = $impact_score;

        return $this;
    }

    /**
     * Gets risk_score
     *
     * @return \OpenAPI\Client\Model\ProbabilityScore|null
     */
    public function getRiskScore()
    {
        return $this->container['risk_score'];
    }

    /**
     * Sets risk_score
     *
     * @param \OpenAPI\Client\Model\ProbabilityScore|null $risk_score risk_score
     *
     * @return self
     */
    public function setRiskScore($risk_score)
    {
        $this->container['risk_score'] = $risk_score;

        return $this;
    }

    /**
     * Gets global_risk
     *
     * @return int|null
     */
    public function getGlobalRisk()
    {
        return $this->container['global_risk'];
    }

    /**
     * Sets global_risk
     *
     * @param int|null $global_risk global_risk
     *
     * @return self
     */
    public function setGlobalRisk($global_risk)
    {
        $this->container['global_risk'] = $global_risk;

        return $this;
    }

    /**
     * Gets global_risk_percentage
     *
     * @return int|null
     */
    public function getGlobalRiskPercentage()
    {
        return $this->container['global_risk_percentage'];
    }

    /**
     * Sets global_risk_percentage
     *
     * @param int|null $global_risk_percentage global_risk_percentage
     *
     * @return self
     */
    public function setGlobalRiskPercentage($global_risk_percentage)
    {
        $this->container['global_risk_percentage'] = $global_risk_percentage;

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
     * Gets data_processings
     *
     * @return \OpenAPI\Client\Model\DataProcessingLightDto[]|null
     */
    public function getDataProcessings()
    {
        return $this->container['data_processings'];
    }

    /**
     * Sets data_processings
     *
     * @param \OpenAPI\Client\Model\DataProcessingLightDto[]|null $data_processings data_processings
     *
     * @return self
     */
    public function setDataProcessings($data_processings)
    {
        $this->container['data_processings'] = $data_processings;

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



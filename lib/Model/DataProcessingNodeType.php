<?php
/**
 * DataProcessingNodeType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * DataProcessingNodeType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DataProcessingNodeType
{
    /**
     * Possible values of this enum
     */
    const ENTITY = 'Entity';
    const AREA = 'Area';
    const DATA_PROCESSING = 'DataProcessing';
    const ACTOR = 'Actor';
    const TRANSFER = 'Transfer';
    const SECURITY_MEASURE = 'SecurityMeasure';
    const RECIPIENT = 'Recipient';
    const DATA_FIELD = 'DataField';
    const DATA_RETENTION_RULE = 'DataRetentionRule';
    const APPLICATION = 'Application';
    const UNKNOWN = 'Unknown';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENTITY,
            self::AREA,
            self::DATA_PROCESSING,
            self::ACTOR,
            self::TRANSFER,
            self::SECURITY_MEASURE,
            self::RECIPIENT,
            self::DATA_FIELD,
            self::DATA_RETENTION_RULE,
            self::APPLICATION,
            self::UNKNOWN,
        ];
    }
}



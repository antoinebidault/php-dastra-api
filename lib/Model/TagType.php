<?php
/**
 * TagType
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
 * TagType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TagType
{
    /**
     * Possible values of this enum
     */
    const DATA_PROCESSING = 'DataProcessing';
    const USER_REQUEST = 'UserRequest';
    const DATA_BREACH = 'DataBreach';
    const TASK = 'Task';
    const ACTOR = 'Actor';
    const SECURITY_MEASURE = 'SecurityMeasure';
    const APPLICATION = 'Application';
    const RISK = 'Risk';
    const DATA_RETENTION_RULE = 'DataRetentionRule';
    const AUDIT_TEMPLATE = 'AuditTemplate';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATA_PROCESSING,
            self::USER_REQUEST,
            self::DATA_BREACH,
            self::TASK,
            self::ACTOR,
            self::SECURITY_MEASURE,
            self::APPLICATION,
            self::RISK,
            self::DATA_RETENTION_RULE,
            self::AUDIT_TEMPLATE,
        ];
    }
}



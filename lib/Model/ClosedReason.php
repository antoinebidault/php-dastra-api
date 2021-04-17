<?php
/**
 * ClosedReason
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
 * ClosedReason Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClosedReason
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const ACCEPTED = 'Accepted';
    const DUPLICATE = 'Duplicate';
    const WRONG_IDENTITY = 'WrongIdentity';
    const NOT_ADMISSIBLE = 'NotAdmissible';
    const OTHER = 'Other';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::ACCEPTED,
            self::DUPLICATE,
            self::WRONG_IDENTITY,
            self::NOT_ADMISSIBLE,
            self::OTHER,
        ];
    }
}


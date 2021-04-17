<?php
/**
 * SensitiveDataFieldLegalJustification
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
 * SensitiveDataFieldLegalJustification Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SensitiveDataFieldLegalJustification
{
    /**
     * Possible values of this enum
     */
    const EXPLICIT_CONSENT = 'ExplicitConsent';
    const NECESSARY_PURPOSE = 'NecessaryPurpose';
    const VITAL_INTEREST = 'VitalInterest';
    const POLITICAL_LEGITIMATE_ACTIVITY = 'PoliticalLegitimateActivity';
    const MANIFESTLY_PUBLIC = 'ManifestlyPublic';
    const DEFENSE_OF_LEGAL_CLAIMS = 'DefenseOfLegalClaims';
    const SUBSTANTIAL_PUBLIC_INTEREST = 'SubstantialPublicInterest';
    const MEDICINE = 'Medicine';
    const PUBLIC_HEALTH = 'PublicHealth';
    const STATISTIC_RESEARCH = 'StatisticResearch';
    const OTHER = 'Other';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXPLICIT_CONSENT,
            self::NECESSARY_PURPOSE,
            self::VITAL_INTEREST,
            self::POLITICAL_LEGITIMATE_ACTIVITY,
            self::MANIFESTLY_PUBLIC,
            self::DEFENSE_OF_LEGAL_CLAIMS,
            self::SUBSTANTIAL_PUBLIC_INTEREST,
            self::MEDICINE,
            self::PUBLIC_HEALTH,
            self::STATISTIC_RESEARCH,
            self::OTHER,
        ];
    }
}


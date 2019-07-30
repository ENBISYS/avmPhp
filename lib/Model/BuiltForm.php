<?php
/**
 * BuiltForm
 *
 * PHP version 5
 *
 * @category Class
 * @package  Enbisys\Avm
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AVM
 *
 * This is api for AVM (automated valuation machine)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@enbisys.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Enbisys\Avm\Model;
use \Enbisys\Avm\ObjectSerializer;

/**
 * BuiltForm Class Doc Comment
 *
 * @category Class
 * @package  Enbisys\Avm
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BuiltForm
{
    /**
     * Possible values of this enum
     */
    const DETACHED = 'detached';
    const SEMI_DETACHED = 'semi_detached';
    const ENCLOSED_MID_TERRACE = 'enclosed_mid_terrace';
    const ENCLOSED_END_TERRACE = 'enclosed_end_terrace';
    const END_TERRACE = 'end_terrace';
    const MID_TERRACE = 'mid_terrace';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DETACHED,
            self::SEMI_DETACHED,
            self::ENCLOSED_MID_TERRACE,
            self::ENCLOSED_END_TERRACE,
            self::END_TERRACE,
            self::MID_TERRACE,
        ];
    }
}



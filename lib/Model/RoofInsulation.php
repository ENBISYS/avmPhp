<?php
/**
 * RoofInsulation
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
 * RoofInsulation Class Doc Comment
 *
 * @category Class
 * @package  Enbisys\Avm
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RoofInsulation
{
    /**
     * Possible values of this enum
     */
    const NO = 'no';
    const PARTIAL = 'partial';
    const INSULATED = 'insulated';
    const ADDITIONAL = 'additional';
    const DWELLING = 'dwelling';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO,
            self::PARTIAL,
            self::INSULATED,
            self::ADDITIONAL,
            self::DWELLING,
        ];
    }
}


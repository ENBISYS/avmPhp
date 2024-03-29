<?php
/**
 * RequiredFeatures
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

use \ArrayAccess;
use \Enbisys\Avm\ObjectSerializer;

/**
 * RequiredFeatures Class Doc Comment
 *
 * @category Class
 * @package  Enbisys\Avm
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RequiredFeatures implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RequiredFeatures';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postcode' => 'string',
        'new_or_resale' => '\Enbisys\Avm\Model\NewOrResale',
        'floor_level' => '\Enbisys\Avm\Model\FloorLevel',
        'total_floor_area_in_sqf' => 'int',
        'property_type' => '\Enbisys\Avm\Model\PropertyType',
        'number_of_rooms' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'postcode' => null,
        'new_or_resale' => null,
        'floor_level' => null,
        'total_floor_area_in_sqf' => null,
        'property_type' => null,
        'number_of_rooms' => null
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
        'postcode' => 'postcode',
        'new_or_resale' => 'newOrResale',
        'floor_level' => 'floorLevel',
        'total_floor_area_in_sqf' => 'totalFloorAreaInSqf',
        'property_type' => 'propertyType',
        'number_of_rooms' => 'numberOfRooms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postcode' => 'setPostcode',
        'new_or_resale' => 'setNewOrResale',
        'floor_level' => 'setFloorLevel',
        'total_floor_area_in_sqf' => 'setTotalFloorAreaInSqf',
        'property_type' => 'setPropertyType',
        'number_of_rooms' => 'setNumberOfRooms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postcode' => 'getPostcode',
        'new_or_resale' => 'getNewOrResale',
        'floor_level' => 'getFloorLevel',
        'total_floor_area_in_sqf' => 'getTotalFloorAreaInSqf',
        'property_type' => 'getPropertyType',
        'number_of_rooms' => 'getNumberOfRooms'
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
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['new_or_resale'] = isset($data['new_or_resale']) ? $data['new_or_resale'] : null;
        $this->container['floor_level'] = isset($data['floor_level']) ? $data['floor_level'] : null;
        $this->container['total_floor_area_in_sqf'] = isset($data['total_floor_area_in_sqf']) ? $data['total_floor_area_in_sqf'] : null;
        $this->container['property_type'] = isset($data['property_type']) ? $data['property_type'] : null;
        $this->container['number_of_rooms'] = isset($data['number_of_rooms']) ? $data['number_of_rooms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        if ($this->container['new_or_resale'] === null) {
            $invalidProperties[] = "'new_or_resale' can't be null";
        }
        if ($this->container['floor_level'] === null) {
            $invalidProperties[] = "'floor_level' can't be null";
        }
        if ($this->container['total_floor_area_in_sqf'] === null) {
            $invalidProperties[] = "'total_floor_area_in_sqf' can't be null";
        }
        if (($this->container['total_floor_area_in_sqf'] > 10000)) {
            $invalidProperties[] = "invalid value for 'total_floor_area_in_sqf', must be smaller than or equal to 10000.";
        }

        if (($this->container['total_floor_area_in_sqf'] < 50)) {
            $invalidProperties[] = "invalid value for 'total_floor_area_in_sqf', must be bigger than or equal to 50.";
        }

        if ($this->container['property_type'] === null) {
            $invalidProperties[] = "'property_type' can't be null";
        }
        if ($this->container['number_of_rooms'] === null) {
            $invalidProperties[] = "'number_of_rooms' can't be null";
        }
        if (($this->container['number_of_rooms'] > 9)) {
            $invalidProperties[] = "invalid value for 'number_of_rooms', must be smaller than or equal to 9.";
        }

        if (($this->container['number_of_rooms'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_of_rooms', must be bigger than or equal to 1.";
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
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets new_or_resale
     *
     * @return \Enbisys\Avm\Model\NewOrResale
     */
    public function getNewOrResale()
    {
        return $this->container['new_or_resale'];
    }

    /**
     * Sets new_or_resale
     *
     * @param \Enbisys\Avm\Model\NewOrResale $new_or_resale new_or_resale
     *
     * @return $this
     */
    public function setNewOrResale($new_or_resale)
    {
        $this->container['new_or_resale'] = $new_or_resale;

        return $this;
    }

    /**
     * Gets floor_level
     *
     * @return \Enbisys\Avm\Model\FloorLevel
     */
    public function getFloorLevel()
    {
        return $this->container['floor_level'];
    }

    /**
     * Sets floor_level
     *
     * @param \Enbisys\Avm\Model\FloorLevel $floor_level floor_level
     *
     * @return $this
     */
    public function setFloorLevel($floor_level)
    {
        $this->container['floor_level'] = $floor_level;

        return $this;
    }

    /**
     * Gets total_floor_area_in_sqf
     *
     * @return int
     */
    public function getTotalFloorAreaInSqf()
    {
        return $this->container['total_floor_area_in_sqf'];
    }

    /**
     * Sets total_floor_area_in_sqf
     *
     * @param int $total_floor_area_in_sqf Floor area (sqf)
     *
     * @return $this
     */
    public function setTotalFloorAreaInSqf($total_floor_area_in_sqf)
    {

        if (($total_floor_area_in_sqf > 10000)) {
            throw new \InvalidArgumentException('invalid value for $total_floor_area_in_sqf when calling RequiredFeatures., must be smaller than or equal to 10000.');
        }
        if (($total_floor_area_in_sqf < 50)) {
            throw new \InvalidArgumentException('invalid value for $total_floor_area_in_sqf when calling RequiredFeatures., must be bigger than or equal to 50.');
        }

        $this->container['total_floor_area_in_sqf'] = $total_floor_area_in_sqf;

        return $this;
    }

    /**
     * Gets property_type
     *
     * @return \Enbisys\Avm\Model\PropertyType
     */
    public function getPropertyType()
    {
        return $this->container['property_type'];
    }

    /**
     * Sets property_type
     *
     * @param \Enbisys\Avm\Model\PropertyType $property_type property_type
     *
     * @return $this
     */
    public function setPropertyType($property_type)
    {
        $this->container['property_type'] = $property_type;

        return $this;
    }

    /**
     * Gets number_of_rooms
     *
     * @return int
     */
    public function getNumberOfRooms()
    {
        return $this->container['number_of_rooms'];
    }

    /**
     * Sets number_of_rooms
     *
     * @param int $number_of_rooms number_of_rooms
     *
     * @return $this
     */
    public function setNumberOfRooms($number_of_rooms)
    {

        if (($number_of_rooms > 9)) {
            throw new \InvalidArgumentException('invalid value for $number_of_rooms when calling RequiredFeatures., must be smaller than or equal to 9.');
        }
        if (($number_of_rooms < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_of_rooms when calling RequiredFeatures., must be bigger than or equal to 1.');
        }

        $this->container['number_of_rooms'] = $number_of_rooms;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
}



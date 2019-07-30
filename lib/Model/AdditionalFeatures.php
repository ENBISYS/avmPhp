<?php
/**
 * AdditionalFeatures
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
 * AdditionalFeatures Class Doc Comment
 *
 * @category Class
 * @package  Enbisys\Avm
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalFeatures implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalFeatures';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price_of_previous_sale' => 'int',
        'date_of_previous_sale' => '\DateTime',
        'leasehold_or_freehold' => '\Enbisys\Avm\Model\LeaseholdOrFreehold',
        'wall_type' => '\Enbisys\Avm\Model\WallType',
        'wall_insulation' => '\Enbisys\Avm\Model\WallInsulation',
        'wall_energy_efficiency' => '\Enbisys\Avm\Model\EnergyEfficiency',
        'roof_type' => '\Enbisys\Avm\Model\RoofType',
        'roof_insulation' => '\Enbisys\Avm\Model\RoofInsulation',
        'roof_energy_efficiency' => '\Enbisys\Avm\Model\EnergyEfficiency',
        'window_glazing_type' => '\Enbisys\Avm\Model\WindowGlazingType',
        'window_energy_efficiency' => '\Enbisys\Avm\Model\EnergyEfficiency',
        'current_energy_rating' => '\Enbisys\Avm\Model\EnergyRating',
        'potential_energy_rating' => '\Enbisys\Avm\Model\EnergyRating',
        'annual_heating_cost_in_pounds' => 'int',
        'annual_hot_water_cost_in_pounds' => 'int',
        'annual_lighting_cost_in_pounds' => 'int',
        'annual_energy_consumption_in_k_wh' => 'int',
        'floor_height_in_foot' => 'float',
        'built_form' => '\Enbisys\Avm\Model\BuiltForm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'price_of_previous_sale' => null,
        'date_of_previous_sale' => 'date',
        'leasehold_or_freehold' => null,
        'wall_type' => null,
        'wall_insulation' => null,
        'wall_energy_efficiency' => null,
        'roof_type' => null,
        'roof_insulation' => null,
        'roof_energy_efficiency' => null,
        'window_glazing_type' => null,
        'window_energy_efficiency' => null,
        'current_energy_rating' => null,
        'potential_energy_rating' => null,
        'annual_heating_cost_in_pounds' => null,
        'annual_hot_water_cost_in_pounds' => null,
        'annual_lighting_cost_in_pounds' => null,
        'annual_energy_consumption_in_k_wh' => null,
        'floor_height_in_foot' => 'float',
        'built_form' => null
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
        'price_of_previous_sale' => 'priceOfPreviousSale',
        'date_of_previous_sale' => 'dateOfPreviousSale',
        'leasehold_or_freehold' => 'leaseholdOrFreehold',
        'wall_type' => 'wallType',
        'wall_insulation' => 'wallInsulation',
        'wall_energy_efficiency' => 'wallEnergyEfficiency',
        'roof_type' => 'roofType',
        'roof_insulation' => 'roofInsulation',
        'roof_energy_efficiency' => 'roofEnergyEfficiency',
        'window_glazing_type' => 'windowGlazingType',
        'window_energy_efficiency' => 'windowEnergyEfficiency',
        'current_energy_rating' => 'currentEnergyRating',
        'potential_energy_rating' => 'potentialEnergyRating',
        'annual_heating_cost_in_pounds' => 'annualHeatingCostInPounds',
        'annual_hot_water_cost_in_pounds' => 'annualHotWaterCostInPounds',
        'annual_lighting_cost_in_pounds' => 'annualLightingCostInPounds',
        'annual_energy_consumption_in_k_wh' => 'annualEnergyConsumptionInKWh',
        'floor_height_in_foot' => 'floorHeightInFoot',
        'built_form' => 'builtForm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_of_previous_sale' => 'setPriceOfPreviousSale',
        'date_of_previous_sale' => 'setDateOfPreviousSale',
        'leasehold_or_freehold' => 'setLeaseholdOrFreehold',
        'wall_type' => 'setWallType',
        'wall_insulation' => 'setWallInsulation',
        'wall_energy_efficiency' => 'setWallEnergyEfficiency',
        'roof_type' => 'setRoofType',
        'roof_insulation' => 'setRoofInsulation',
        'roof_energy_efficiency' => 'setRoofEnergyEfficiency',
        'window_glazing_type' => 'setWindowGlazingType',
        'window_energy_efficiency' => 'setWindowEnergyEfficiency',
        'current_energy_rating' => 'setCurrentEnergyRating',
        'potential_energy_rating' => 'setPotentialEnergyRating',
        'annual_heating_cost_in_pounds' => 'setAnnualHeatingCostInPounds',
        'annual_hot_water_cost_in_pounds' => 'setAnnualHotWaterCostInPounds',
        'annual_lighting_cost_in_pounds' => 'setAnnualLightingCostInPounds',
        'annual_energy_consumption_in_k_wh' => 'setAnnualEnergyConsumptionInKWh',
        'floor_height_in_foot' => 'setFloorHeightInFoot',
        'built_form' => 'setBuiltForm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_of_previous_sale' => 'getPriceOfPreviousSale',
        'date_of_previous_sale' => 'getDateOfPreviousSale',
        'leasehold_or_freehold' => 'getLeaseholdOrFreehold',
        'wall_type' => 'getWallType',
        'wall_insulation' => 'getWallInsulation',
        'wall_energy_efficiency' => 'getWallEnergyEfficiency',
        'roof_type' => 'getRoofType',
        'roof_insulation' => 'getRoofInsulation',
        'roof_energy_efficiency' => 'getRoofEnergyEfficiency',
        'window_glazing_type' => 'getWindowGlazingType',
        'window_energy_efficiency' => 'getWindowEnergyEfficiency',
        'current_energy_rating' => 'getCurrentEnergyRating',
        'potential_energy_rating' => 'getPotentialEnergyRating',
        'annual_heating_cost_in_pounds' => 'getAnnualHeatingCostInPounds',
        'annual_hot_water_cost_in_pounds' => 'getAnnualHotWaterCostInPounds',
        'annual_lighting_cost_in_pounds' => 'getAnnualLightingCostInPounds',
        'annual_energy_consumption_in_k_wh' => 'getAnnualEnergyConsumptionInKWh',
        'floor_height_in_foot' => 'getFloorHeightInFoot',
        'built_form' => 'getBuiltForm'
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
        $this->container['price_of_previous_sale'] = isset($data['price_of_previous_sale']) ? $data['price_of_previous_sale'] : null;
        $this->container['date_of_previous_sale'] = isset($data['date_of_previous_sale']) ? $data['date_of_previous_sale'] : null;
        $this->container['leasehold_or_freehold'] = isset($data['leasehold_or_freehold']) ? $data['leasehold_or_freehold'] : null;
        $this->container['wall_type'] = isset($data['wall_type']) ? $data['wall_type'] : null;
        $this->container['wall_insulation'] = isset($data['wall_insulation']) ? $data['wall_insulation'] : null;
        $this->container['wall_energy_efficiency'] = isset($data['wall_energy_efficiency']) ? $data['wall_energy_efficiency'] : null;
        $this->container['roof_type'] = isset($data['roof_type']) ? $data['roof_type'] : null;
        $this->container['roof_insulation'] = isset($data['roof_insulation']) ? $data['roof_insulation'] : null;
        $this->container['roof_energy_efficiency'] = isset($data['roof_energy_efficiency']) ? $data['roof_energy_efficiency'] : null;
        $this->container['window_glazing_type'] = isset($data['window_glazing_type']) ? $data['window_glazing_type'] : null;
        $this->container['window_energy_efficiency'] = isset($data['window_energy_efficiency']) ? $data['window_energy_efficiency'] : null;
        $this->container['current_energy_rating'] = isset($data['current_energy_rating']) ? $data['current_energy_rating'] : null;
        $this->container['potential_energy_rating'] = isset($data['potential_energy_rating']) ? $data['potential_energy_rating'] : null;
        $this->container['annual_heating_cost_in_pounds'] = isset($data['annual_heating_cost_in_pounds']) ? $data['annual_heating_cost_in_pounds'] : null;
        $this->container['annual_hot_water_cost_in_pounds'] = isset($data['annual_hot_water_cost_in_pounds']) ? $data['annual_hot_water_cost_in_pounds'] : null;
        $this->container['annual_lighting_cost_in_pounds'] = isset($data['annual_lighting_cost_in_pounds']) ? $data['annual_lighting_cost_in_pounds'] : null;
        $this->container['annual_energy_consumption_in_k_wh'] = isset($data['annual_energy_consumption_in_k_wh']) ? $data['annual_energy_consumption_in_k_wh'] : null;
        $this->container['floor_height_in_foot'] = isset($data['floor_height_in_foot']) ? $data['floor_height_in_foot'] : null;
        $this->container['built_form'] = isset($data['built_form']) ? $data['built_form'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['price_of_previous_sale']) && ($this->container['price_of_previous_sale'] < 1)) {
            $invalidProperties[] = "invalid value for 'price_of_previous_sale', must be bigger than or equal to 1.";
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
     * Gets price_of_previous_sale
     *
     * @return int|null
     */
    public function getPriceOfPreviousSale()
    {
        return $this->container['price_of_previous_sale'];
    }

    /**
     * Sets price_of_previous_sale
     *
     * @param int|null $price_of_previous_sale price_of_previous_sale
     *
     * @return $this
     */
    public function setPriceOfPreviousSale($price_of_previous_sale)
    {

        if (!is_null($price_of_previous_sale) && ($price_of_previous_sale < 1)) {
            throw new \InvalidArgumentException('invalid value for $price_of_previous_sale when calling AdditionalFeatures., must be bigger than or equal to 1.');
        }

        $this->container['price_of_previous_sale'] = $price_of_previous_sale;

        return $this;
    }

    /**
     * Gets date_of_previous_sale
     *
     * @return \DateTime|null
     */
    public function getDateOfPreviousSale()
    {
        return $this->container['date_of_previous_sale'];
    }

    /**
     * Sets date_of_previous_sale
     *
     * @param \DateTime|null $date_of_previous_sale date_of_previous_sale
     *
     * @return $this
     */
    public function setDateOfPreviousSale($date_of_previous_sale)
    {
        $this->container['date_of_previous_sale'] = $date_of_previous_sale;

        return $this;
    }

    /**
     * Gets leasehold_or_freehold
     *
     * @return \Enbisys\Avm\Model\LeaseholdOrFreehold|null
     */
    public function getLeaseholdOrFreehold()
    {
        return $this->container['leasehold_or_freehold'];
    }

    /**
     * Sets leasehold_or_freehold
     *
     * @param \Enbisys\Avm\Model\LeaseholdOrFreehold|null $leasehold_or_freehold leasehold_or_freehold
     *
     * @return $this
     */
    public function setLeaseholdOrFreehold($leasehold_or_freehold)
    {
        $this->container['leasehold_or_freehold'] = $leasehold_or_freehold;

        return $this;
    }

    /**
     * Gets wall_type
     *
     * @return \Enbisys\Avm\Model\WallType|null
     */
    public function getWallType()
    {
        return $this->container['wall_type'];
    }

    /**
     * Sets wall_type
     *
     * @param \Enbisys\Avm\Model\WallType|null $wall_type wall_type
     *
     * @return $this
     */
    public function setWallType($wall_type)
    {
        $this->container['wall_type'] = $wall_type;

        return $this;
    }

    /**
     * Gets wall_insulation
     *
     * @return \Enbisys\Avm\Model\WallInsulation|null
     */
    public function getWallInsulation()
    {
        return $this->container['wall_insulation'];
    }

    /**
     * Sets wall_insulation
     *
     * @param \Enbisys\Avm\Model\WallInsulation|null $wall_insulation wall_insulation
     *
     * @return $this
     */
    public function setWallInsulation($wall_insulation)
    {
        $this->container['wall_insulation'] = $wall_insulation;

        return $this;
    }

    /**
     * Gets wall_energy_efficiency
     *
     * @return \Enbisys\Avm\Model\EnergyEfficiency|null
     */
    public function getWallEnergyEfficiency()
    {
        return $this->container['wall_energy_efficiency'];
    }

    /**
     * Sets wall_energy_efficiency
     *
     * @param \Enbisys\Avm\Model\EnergyEfficiency|null $wall_energy_efficiency wall_energy_efficiency
     *
     * @return $this
     */
    public function setWallEnergyEfficiency($wall_energy_efficiency)
    {
        $this->container['wall_energy_efficiency'] = $wall_energy_efficiency;

        return $this;
    }

    /**
     * Gets roof_type
     *
     * @return \Enbisys\Avm\Model\RoofType|null
     */
    public function getRoofType()
    {
        return $this->container['roof_type'];
    }

    /**
     * Sets roof_type
     *
     * @param \Enbisys\Avm\Model\RoofType|null $roof_type roof_type
     *
     * @return $this
     */
    public function setRoofType($roof_type)
    {
        $this->container['roof_type'] = $roof_type;

        return $this;
    }

    /**
     * Gets roof_insulation
     *
     * @return \Enbisys\Avm\Model\RoofInsulation|null
     */
    public function getRoofInsulation()
    {
        return $this->container['roof_insulation'];
    }

    /**
     * Sets roof_insulation
     *
     * @param \Enbisys\Avm\Model\RoofInsulation|null $roof_insulation roof_insulation
     *
     * @return $this
     */
    public function setRoofInsulation($roof_insulation)
    {
        $this->container['roof_insulation'] = $roof_insulation;

        return $this;
    }

    /**
     * Gets roof_energy_efficiency
     *
     * @return \Enbisys\Avm\Model\EnergyEfficiency|null
     */
    public function getRoofEnergyEfficiency()
    {
        return $this->container['roof_energy_efficiency'];
    }

    /**
     * Sets roof_energy_efficiency
     *
     * @param \Enbisys\Avm\Model\EnergyEfficiency|null $roof_energy_efficiency roof_energy_efficiency
     *
     * @return $this
     */
    public function setRoofEnergyEfficiency($roof_energy_efficiency)
    {
        $this->container['roof_energy_efficiency'] = $roof_energy_efficiency;

        return $this;
    }

    /**
     * Gets window_glazing_type
     *
     * @return \Enbisys\Avm\Model\WindowGlazingType|null
     */
    public function getWindowGlazingType()
    {
        return $this->container['window_glazing_type'];
    }

    /**
     * Sets window_glazing_type
     *
     * @param \Enbisys\Avm\Model\WindowGlazingType|null $window_glazing_type window_glazing_type
     *
     * @return $this
     */
    public function setWindowGlazingType($window_glazing_type)
    {
        $this->container['window_glazing_type'] = $window_glazing_type;

        return $this;
    }

    /**
     * Gets window_energy_efficiency
     *
     * @return \Enbisys\Avm\Model\EnergyEfficiency|null
     */
    public function getWindowEnergyEfficiency()
    {
        return $this->container['window_energy_efficiency'];
    }

    /**
     * Sets window_energy_efficiency
     *
     * @param \Enbisys\Avm\Model\EnergyEfficiency|null $window_energy_efficiency window_energy_efficiency
     *
     * @return $this
     */
    public function setWindowEnergyEfficiency($window_energy_efficiency)
    {
        $this->container['window_energy_efficiency'] = $window_energy_efficiency;

        return $this;
    }

    /**
     * Gets current_energy_rating
     *
     * @return \Enbisys\Avm\Model\EnergyRating|null
     */
    public function getCurrentEnergyRating()
    {
        return $this->container['current_energy_rating'];
    }

    /**
     * Sets current_energy_rating
     *
     * @param \Enbisys\Avm\Model\EnergyRating|null $current_energy_rating current_energy_rating
     *
     * @return $this
     */
    public function setCurrentEnergyRating($current_energy_rating)
    {
        $this->container['current_energy_rating'] = $current_energy_rating;

        return $this;
    }

    /**
     * Gets potential_energy_rating
     *
     * @return \Enbisys\Avm\Model\EnergyRating|null
     */
    public function getPotentialEnergyRating()
    {
        return $this->container['potential_energy_rating'];
    }

    /**
     * Sets potential_energy_rating
     *
     * @param \Enbisys\Avm\Model\EnergyRating|null $potential_energy_rating potential_energy_rating
     *
     * @return $this
     */
    public function setPotentialEnergyRating($potential_energy_rating)
    {
        $this->container['potential_energy_rating'] = $potential_energy_rating;

        return $this;
    }

    /**
     * Gets annual_heating_cost_in_pounds
     *
     * @return int|null
     */
    public function getAnnualHeatingCostInPounds()
    {
        return $this->container['annual_heating_cost_in_pounds'];
    }

    /**
     * Sets annual_heating_cost_in_pounds
     *
     * @param int|null $annual_heating_cost_in_pounds annual_heating_cost_in_pounds
     *
     * @return $this
     */
    public function setAnnualHeatingCostInPounds($annual_heating_cost_in_pounds)
    {
        $this->container['annual_heating_cost_in_pounds'] = $annual_heating_cost_in_pounds;

        return $this;
    }

    /**
     * Gets annual_hot_water_cost_in_pounds
     *
     * @return int|null
     */
    public function getAnnualHotWaterCostInPounds()
    {
        return $this->container['annual_hot_water_cost_in_pounds'];
    }

    /**
     * Sets annual_hot_water_cost_in_pounds
     *
     * @param int|null $annual_hot_water_cost_in_pounds annual_hot_water_cost_in_pounds
     *
     * @return $this
     */
    public function setAnnualHotWaterCostInPounds($annual_hot_water_cost_in_pounds)
    {
        $this->container['annual_hot_water_cost_in_pounds'] = $annual_hot_water_cost_in_pounds;

        return $this;
    }

    /**
     * Gets annual_lighting_cost_in_pounds
     *
     * @return int|null
     */
    public function getAnnualLightingCostInPounds()
    {
        return $this->container['annual_lighting_cost_in_pounds'];
    }

    /**
     * Sets annual_lighting_cost_in_pounds
     *
     * @param int|null $annual_lighting_cost_in_pounds annual_lighting_cost_in_pounds
     *
     * @return $this
     */
    public function setAnnualLightingCostInPounds($annual_lighting_cost_in_pounds)
    {
        $this->container['annual_lighting_cost_in_pounds'] = $annual_lighting_cost_in_pounds;

        return $this;
    }

    /**
     * Gets annual_energy_consumption_in_k_wh
     *
     * @return int|null
     */
    public function getAnnualEnergyConsumptionInKWh()
    {
        return $this->container['annual_energy_consumption_in_k_wh'];
    }

    /**
     * Sets annual_energy_consumption_in_k_wh
     *
     * @param int|null $annual_energy_consumption_in_k_wh annual_energy_consumption_in_k_wh
     *
     * @return $this
     */
    public function setAnnualEnergyConsumptionInKWh($annual_energy_consumption_in_k_wh)
    {
        $this->container['annual_energy_consumption_in_k_wh'] = $annual_energy_consumption_in_k_wh;

        return $this;
    }

    /**
     * Gets floor_height_in_foot
     *
     * @return float|null
     */
    public function getFloorHeightInFoot()
    {
        return $this->container['floor_height_in_foot'];
    }

    /**
     * Sets floor_height_in_foot
     *
     * @param float|null $floor_height_in_foot floor_height_in_foot
     *
     * @return $this
     */
    public function setFloorHeightInFoot($floor_height_in_foot)
    {
        $this->container['floor_height_in_foot'] = $floor_height_in_foot;

        return $this;
    }

    /**
     * Gets built_form
     *
     * @return \Enbisys\Avm\Model\BuiltForm|null
     */
    public function getBuiltForm()
    {
        return $this->container['built_form'];
    }

    /**
     * Sets built_form
     *
     * @param \Enbisys\Avm\Model\BuiltForm|null $built_form built_form
     *
     * @return $this
     */
    public function setBuiltForm($built_form)
    {
        $this->container['built_form'] = $built_form;

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



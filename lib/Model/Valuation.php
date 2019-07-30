<?php
/**
 * Valuation
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
 * Valuation Class Doc Comment
 *
 * @category Class
 * @package  Enbisys\Avm
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Valuation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Valuation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'most_probable_price' => 'int',
        'price_range_from' => 'int',
        'price_range_to' => 'int',
        'confidence' => 'int',
        'price_distribution' => '\Enbisys\Avm\Model\ValuationPriceDistribution[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'most_probable_price' => null,
        'price_range_from' => null,
        'price_range_to' => null,
        'confidence' => null,
        'price_distribution' => null
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
        'most_probable_price' => 'mostProbablePrice',
        'price_range_from' => 'priceRangeFrom',
        'price_range_to' => 'priceRangeTo',
        'confidence' => 'confidence',
        'price_distribution' => 'priceDistribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'most_probable_price' => 'setMostProbablePrice',
        'price_range_from' => 'setPriceRangeFrom',
        'price_range_to' => 'setPriceRangeTo',
        'confidence' => 'setConfidence',
        'price_distribution' => 'setPriceDistribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'most_probable_price' => 'getMostProbablePrice',
        'price_range_from' => 'getPriceRangeFrom',
        'price_range_to' => 'getPriceRangeTo',
        'confidence' => 'getConfidence',
        'price_distribution' => 'getPriceDistribution'
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
        $this->container['most_probable_price'] = isset($data['most_probable_price']) ? $data['most_probable_price'] : null;
        $this->container['price_range_from'] = isset($data['price_range_from']) ? $data['price_range_from'] : null;
        $this->container['price_range_to'] = isset($data['price_range_to']) ? $data['price_range_to'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['price_distribution'] = isset($data['price_distribution']) ? $data['price_distribution'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets most_probable_price
     *
     * @return int|null
     */
    public function getMostProbablePrice()
    {
        return $this->container['most_probable_price'];
    }

    /**
     * Sets most_probable_price
     *
     * @param int|null $most_probable_price Predicted price, pound
     *
     * @return $this
     */
    public function setMostProbablePrice($most_probable_price)
    {
        $this->container['most_probable_price'] = $most_probable_price;

        return $this;
    }

    /**
     * Gets price_range_from
     *
     * @return int|null
     */
    public function getPriceRangeFrom()
    {
        return $this->container['price_range_from'];
    }

    /**
     * Sets price_range_from
     *
     * @param int|null $price_range_from Lower price boundary, pound
     *
     * @return $this
     */
    public function setPriceRangeFrom($price_range_from)
    {
        $this->container['price_range_from'] = $price_range_from;

        return $this;
    }

    /**
     * Gets price_range_to
     *
     * @return int|null
     */
    public function getPriceRangeTo()
    {
        return $this->container['price_range_to'];
    }

    /**
     * Sets price_range_to
     *
     * @param int|null $price_range_to Higher price boundary, pound
     *
     * @return $this
     */
    public function setPriceRangeTo($price_range_to)
    {
        $this->container['price_range_to'] = $price_range_to;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return int|null
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param int|null $confidence Probability (in percents) that actual price is within the specified boundaries
     *
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets price_distribution
     *
     * @return \Enbisys\Avm\Model\ValuationPriceDistribution[]|null
     */
    public function getPriceDistribution()
    {
        return $this->container['price_distribution'];
    }

    /**
     * Sets price_distribution
     *
     * @param \Enbisys\Avm\Model\ValuationPriceDistribution[]|null $price_distribution Describes the probabilities (in percents) that actual price is within particular subranges
     *
     * @return $this
     */
    public function setPriceDistribution($price_distribution)
    {
        $this->container['price_distribution'] = $price_distribution;

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


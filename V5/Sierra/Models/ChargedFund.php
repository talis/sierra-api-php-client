<?php
/**
 * ChargedFund
 *
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra\V5
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace III\Sierra\V5\Models;

use \ArrayAccess;
use \III\Sierra\V5\ObjectSerializer;

/**
 * ChargedFund Class Doc Comment
 *
 * @category Class
 * @description order data related to one fund
 * @package  III\Sierra\V5
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChargedFund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChargedFund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'displayOrder' => 'int',
        'fund' => 'string',
        'copies' => 'int',
        'location' => '\III\Sierra\V5\Models\Location'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'displayOrder' => 'int32',
        'fund' => null,
        'copies' => 'int32',
        'location' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'displayOrder' => 'displayOrder',
        'fund' => 'fund',
        'copies' => 'copies',
        'location' => 'location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayOrder' => 'setDisplayOrder',
        'fund' => 'setFund',
        'copies' => 'setCopies',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayOrder' => 'getDisplayOrder',
        'fund' => 'getFund',
        'copies' => 'getCopies',
        'location' => 'getLocation'
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
        return self::$swaggerModelName;
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
        $this->container['displayOrder'] = isset($data['displayOrder']) ? $data['displayOrder'] : null;
        $this->container['fund'] = isset($data['fund']) ? $data['fund'] : null;
        $this->container['copies'] = isset($data['copies']) ? $data['copies'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['displayOrder'] === null) {
            $invalidProperties[] = "'displayOrder' can't be null";
        }
        if ($this->container['fund'] === null) {
            $invalidProperties[] = "'fund' can't be null";
        }
        if ($this->container['copies'] === null) {
            $invalidProperties[] = "'copies' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
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
     * Gets displayOrder
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->container['displayOrder'];
    }

    /**
     * Sets displayOrder
     *
     * @param int $displayOrder an integer to manage the display order of a list
     *
     * @return $this
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->container['displayOrder'] = $displayOrder;

        return $this;
    }

    /**
     * Gets fund
     *
     * @return string
     */
    public function getFund()
    {
        return $this->container['fund'];
    }

    /**
     * Sets fund
     *
     * @param string $fund the fund to be charged for the ordered items
     *
     * @return $this
     */
    public function setFund($fund)
    {
        $this->container['fund'] = $fund;

        return $this;
    }

    /**
     * Gets copies
     *
     * @return int
     */
    public function getCopies()
    {
        return $this->container['copies'];
    }

    /**
     * Sets copies
     *
     * @param int $copies the number of copies ordered
     *
     * @return $this
     */
    public function setCopies($copies)
    {
        $this->container['copies'] = $copies;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \III\Sierra\V5\Models\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \III\Sierra\V5\Models\Location $location the location code that corresponds to the physical location of the item ordered
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



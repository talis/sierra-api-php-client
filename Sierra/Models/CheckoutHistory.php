<?php
/**
 * CheckoutHistory
 *
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace III\Sierra\Models;

use \ArrayAccess;
use \III\Sierra\ObjectSerializer;

/**
 * CheckoutHistory Class Doc Comment
 *
 * @category Class
 * @description the data describing the checkout history
 * @package  III\Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'patron' => 'string',
        'item' => 'string',
        'bib' => 'string',
        'outDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'patron' => null,
        'item' => null,
        'bib' => null,
        'outDate' => 'date-time'
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
        'patron' => 'patron',
        'item' => 'item',
        'bib' => 'bib',
        'outDate' => 'outDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'patron' => 'setPatron',
        'item' => 'setItem',
        'bib' => 'setBib',
        'outDate' => 'setOutDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'patron' => 'getPatron',
        'item' => 'getItem',
        'bib' => 'getBib',
        'outDate' => 'getOutDate'
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
        $this->container['patron'] = isset($data['patron']) ? $data['patron'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['bib'] = isset($data['bib']) ? $data['bib'] : null;
        $this->container['outDate'] = isset($data['outDate']) ? $data['outDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['patron'] === null) {
            $invalidProperties[] = "'patron' can't be null";
        }
        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
        }
        if ($this->container['bib'] === null) {
            $invalidProperties[] = "'bib' can't be null";
        }
        if ($this->container['outDate'] === null) {
            $invalidProperties[] = "'outDate' can't be null";
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

        if ($this->container['patron'] === null) {
            return false;
        }
        if ($this->container['item'] === null) {
            return false;
        }
        if ($this->container['bib'] === null) {
            return false;
        }
        if ($this->container['outDate'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets patron
     *
     * @return string
     */
    public function getPatron()
    {
        return $this->container['patron'];
    }

    /**
     * Sets patron
     *
     * @param string $patron the patron record number associated with the checkout
     *
     * @return $this
     */
    public function setPatron($patron)
    {
        $this->container['patron'] = $patron;

        return $this;
    }

    /**
     * Gets item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param string $item the item record number associated with the checkout
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets bib
     *
     * @return string
     */
    public function getBib()
    {
        return $this->container['bib'];
    }

    /**
     * Sets bib
     *
     * @param string $bib the bib record number associated with the checkout
     *
     * @return $this
     */
    public function setBib($bib)
    {
        $this->container['bib'] = $bib;

        return $this;
    }

    /**
     * Gets outDate
     *
     * @return \DateTime
     */
    public function getOutDate()
    {
        return $this->container['outDate'];
    }

    /**
     * Sets outDate
     *
     * @param \DateTime $outDate the checkout date and time for the item, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setOutDate($outDate)
    {
        $this->container['outDate'] = $outDate;

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



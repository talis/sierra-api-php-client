<?php
/**
 * OrderBibLinks
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
 * OrderBibLinks Class Doc Comment
 *
 * @category Class
 * @description the links to the new order and bib records
 * @package  III\Sierra\V5
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderBibLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderBibLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'controlNumber' => 'string',
        'orderId' => 'string',
        'bibId' => 'string',
        'warnings' => 'string[]',
        'vendorIDNumbers' => 'string[]',
        'legacyOrderId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'controlNumber' => null,
        'orderId' => null,
        'bibId' => null,
        'warnings' => null,
        'vendorIDNumbers' => null,
        'legacyOrderId' => null
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
        'controlNumber' => 'controlNumber',
        'orderId' => 'orderId',
        'bibId' => 'bibId',
        'warnings' => 'warnings',
        'vendorIDNumbers' => 'vendorIDNumbers',
        'legacyOrderId' => 'legacyOrderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'controlNumber' => 'setControlNumber',
        'orderId' => 'setOrderId',
        'bibId' => 'setBibId',
        'warnings' => 'setWarnings',
        'vendorIDNumbers' => 'setVendorIDNumbers',
        'legacyOrderId' => 'setLegacyOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'controlNumber' => 'getControlNumber',
        'orderId' => 'getOrderId',
        'bibId' => 'getBibId',
        'warnings' => 'getWarnings',
        'vendorIDNumbers' => 'getVendorIDNumbers',
        'legacyOrderId' => 'getLegacyOrderId'
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
        $this->container['controlNumber'] = isset($data['controlNumber']) ? $data['controlNumber'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['bibId'] = isset($data['bibId']) ? $data['bibId'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['vendorIDNumbers'] = isset($data['vendorIDNumbers']) ? $data['vendorIDNumbers'] : null;
        $this->container['legacyOrderId'] = isset($data['legacyOrderId']) ? $data['legacyOrderId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
        if ($this->container['bibId'] === null) {
            $invalidProperties[] = "'bibId' can't be null";
        }
        if ($this->container['legacyOrderId'] === null) {
            $invalidProperties[] = "'legacyOrderId' can't be null";
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
     * Gets controlNumber
     *
     * @return string
     */
    public function getControlNumber()
    {
        return $this->container['controlNumber'];
    }

    /**
     * Sets controlNumber
     *
     * @param string $controlNumber the control number of the MARC record
     *
     * @return $this
     */
    public function setControlNumber($controlNumber)
    {
        $this->container['controlNumber'] = $controlNumber;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId the order ID
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets bibId
     *
     * @return string
     */
    public function getBibId()
    {
        return $this->container['bibId'];
    }

    /**
     * Sets bibId
     *
     * @param string $bibId the bib ID
     *
     * @return $this
     */
    public function setBibId($bibId)
    {
        $this->container['bibId'] = $bibId;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return string[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param string[] $warnings the warnings generated, if any, when creating orders and bibs
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets vendorIDNumbers
     *
     * @return string[]
     */
    public function getVendorIDNumbers()
    {
        return $this->container['vendorIDNumbers'];
    }

    /**
     * Sets vendorIDNumbers
     *
     * @param string[] $vendorIDNumbers the list of the vendor's identification numbers for the associated title
     *
     * @return $this
     */
    public function setVendorIDNumbers($vendorIDNumbers)
    {
        $this->container['vendorIDNumbers'] = $vendorIDNumbers;

        return $this;
    }

    /**
     * Gets legacyOrderId
     *
     * @return string
     */
    public function getLegacyOrderId()
    {
        return $this->container['legacyOrderId'];
    }

    /**
     * Sets legacyOrderId
     *
     * @param string $legacyOrderId the order ID in Innovative format, e.g., '.o12345678'
     *
     * @return $this
     */
    public function setLegacyOrderId($legacyOrderId)
    {
        $this->container['legacyOrderId'] = $legacyOrderId;

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



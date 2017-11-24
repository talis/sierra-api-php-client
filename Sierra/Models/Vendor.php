<?php
/**
 * Vendor
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Sierra\Models;

use \ArrayAccess;
use \Sierra\ObjectSerializer;

/**
 * Vendor Class Doc Comment
 *
 * @category Class
 * @description an invoice vendor record
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Vendor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Vendor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vendor_code' => 'string',
        'voucher_num' => 'int',
        'voucher_total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vendor_code' => null,
        'voucher_num' => 'int32',
        'voucher_total' => 'int32'
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
        'vendor_code' => 'vendorCode',
        'voucher_num' => 'voucherNum',
        'voucher_total' => 'voucherTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendor_code' => 'setVendorCode',
        'voucher_num' => 'setVoucherNum',
        'voucher_total' => 'setVoucherTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendor_code' => 'getVendorCode',
        'voucher_num' => 'getVoucherNum',
        'voucher_total' => 'getVoucherTotal'
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
        $this->container['vendor_code'] = isset($data['vendor_code']) ? $data['vendor_code'] : null;
        $this->container['voucher_num'] = isset($data['voucher_num']) ? $data['voucher_num'] : null;
        $this->container['voucher_total'] = isset($data['voucher_total']) ? $data['voucher_total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['vendor_code'] === null) {
            $invalidProperties[] = "'vendor_code' can't be null";
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

        if ($this->container['vendor_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets vendor_code
     *
     * @return string
     */
    public function getVendorCode()
    {
        return $this->container['vendor_code'];
    }

    /**
     * Sets vendor_code
     *
     * @param string $vendor_code the vendor code
     *
     * @return $this
     */
    public function setVendorCode($vendor_code)
    {
        $this->container['vendor_code'] = $vendor_code;

        return $this;
    }

    /**
     * Gets voucher_num
     *
     * @return int
     */
    public function getVoucherNum()
    {
        return $this->container['voucher_num'];
    }

    /**
     * Sets voucher_num
     *
     * @param int $voucher_num the voucher number
     *
     * @return $this
     */
    public function setVoucherNum($voucher_num)
    {
        $this->container['voucher_num'] = $voucher_num;

        return $this;
    }

    /**
     * Gets voucher_total
     *
     * @return int
     */
    public function getVoucherTotal()
    {
        return $this->container['voucher_total'];
    }

    /**
     * Sets voucher_total
     *
     * @param int $voucher_total the voucher total
     *
     * @return $this
     */
    public function setVoucherTotal($voucher_total)
    {
        $this->container['voucher_total'] = $voucher_total;

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


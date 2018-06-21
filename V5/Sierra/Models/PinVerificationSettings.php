<?php
/**
 * PinVerificationSettings
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
 * PinVerificationSettings Class Doc Comment
 *
 * @category Class
 * @description the settings for PIN verification
 * @package  III\Sierra\V5
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PinVerificationSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PinVerificationSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'minimumChars' => 'int',
        'maximumChars' => 'int',
        'numOnly' => 'bool',
        'mixed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'minimumChars' => 'int32',
        'maximumChars' => 'int32',
        'numOnly' => null,
        'mixed' => null
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
        'minimumChars' => 'minimumChars',
        'maximumChars' => 'maximumChars',
        'numOnly' => 'numOnly',
        'mixed' => 'mixed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minimumChars' => 'setMinimumChars',
        'maximumChars' => 'setMaximumChars',
        'numOnly' => 'setNumOnly',
        'mixed' => 'setMixed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minimumChars' => 'getMinimumChars',
        'maximumChars' => 'getMaximumChars',
        'numOnly' => 'getNumOnly',
        'mixed' => 'getMixed'
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
        $this->container['minimumChars'] = isset($data['minimumChars']) ? $data['minimumChars'] : null;
        $this->container['maximumChars'] = isset($data['maximumChars']) ? $data['maximumChars'] : null;
        $this->container['numOnly'] = isset($data['numOnly']) ? $data['numOnly'] : null;
        $this->container['mixed'] = isset($data['mixed']) ? $data['mixed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['minimumChars'] === null) {
            $invalidProperties[] = "'minimumChars' can't be null";
        }
        if ($this->container['maximumChars'] === null) {
            $invalidProperties[] = "'maximumChars' can't be null";
        }
        if ($this->container['numOnly'] === null) {
            $invalidProperties[] = "'numOnly' can't be null";
        }
        if ($this->container['mixed'] === null) {
            $invalidProperties[] = "'mixed' can't be null";
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
     * Gets minimumChars
     *
     * @return int
     */
    public function getMinimumChars()
    {
        return $this->container['minimumChars'];
    }

    /**
     * Sets minimumChars
     *
     * @param int $minimumChars the minimum number of characters allowed for a PIN
     *
     * @return $this
     */
    public function setMinimumChars($minimumChars)
    {
        $this->container['minimumChars'] = $minimumChars;

        return $this;
    }

    /**
     * Gets maximumChars
     *
     * @return int
     */
    public function getMaximumChars()
    {
        return $this->container['maximumChars'];
    }

    /**
     * Sets maximumChars
     *
     * @param int $maximumChars the maximum number of characters allowed for a PIN
     *
     * @return $this
     */
    public function setMaximumChars($maximumChars)
    {
        $this->container['maximumChars'] = $maximumChars;

        return $this;
    }

    /**
     * Gets numOnly
     *
     * @return bool
     */
    public function getNumOnly()
    {
        return $this->container['numOnly'];
    }

    /**
     * Sets numOnly
     *
     * @param bool $numOnly whether the PIN must contain only numbers
     *
     * @return $this
     */
    public function setNumOnly($numOnly)
    {
        $this->container['numOnly'] = $numOnly;

        return $this;
    }

    /**
     * Gets mixed
     *
     * @return bool
     */
    public function getMixed()
    {
        return $this->container['mixed'];
    }

    /**
     * Sets mixed
     *
     * @param bool $mixed whether the PIN must contain both numbers and letters
     *
     * @return $this
     */
    public function setMixed($mixed)
    {
        $this->container['mixed'] = $mixed;

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



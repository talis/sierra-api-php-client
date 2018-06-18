<?php
/**
 * XClientSettings
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
 * XClientSettings Class Doc Comment
 *
 * @category Class
 * @description the xclient settings
 * @package  III\Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XClientSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XClientSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'host' => 'string',
        'port' => 'int',
        'readTimeoutMs' => 'int',
        'connectionTimeoutMs' => 'int',
        'pilotEducator' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'host' => null,
        'port' => 'int32',
        'readTimeoutMs' => 'int32',
        'connectionTimeoutMs' => 'int32',
        'pilotEducator' => 'int32'
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
        'host' => 'host',
        'port' => 'port',
        'readTimeoutMs' => 'readTimeoutMs',
        'connectionTimeoutMs' => 'connectionTimeoutMs',
        'pilotEducator' => 'pilotEducator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host' => 'setHost',
        'port' => 'setPort',
        'readTimeoutMs' => 'setReadTimeoutMs',
        'connectionTimeoutMs' => 'setConnectionTimeoutMs',
        'pilotEducator' => 'setPilotEducator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host' => 'getHost',
        'port' => 'getPort',
        'readTimeoutMs' => 'getReadTimeoutMs',
        'connectionTimeoutMs' => 'getConnectionTimeoutMs',
        'pilotEducator' => 'getPilotEducator'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['readTimeoutMs'] = isset($data['readTimeoutMs']) ? $data['readTimeoutMs'] : null;
        $this->container['connectionTimeoutMs'] = isset($data['connectionTimeoutMs']) ? $data['connectionTimeoutMs'] : null;
        $this->container['pilotEducator'] = isset($data['pilotEducator']) ? $data['pilotEducator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['readTimeoutMs'] === null) {
            $invalidProperties[] = "'readTimeoutMs' can't be null";
        }
        if ($this->container['connectionTimeoutMs'] === null) {
            $invalidProperties[] = "'connectionTimeoutMs' can't be null";
        }
        if ($this->container['pilotEducator'] === null) {
            $invalidProperties[] = "'pilotEducator' can't be null";
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

        if ($this->container['host'] === null) {
            return false;
        }
        if ($this->container['port'] === null) {
            return false;
        }
        if ($this->container['readTimeoutMs'] === null) {
            return false;
        }
        if ($this->container['connectionTimeoutMs'] === null) {
            return false;
        }
        if ($this->container['pilotEducator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host the xclient host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port the xclient port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets readTimeoutMs
     *
     * @return int
     */
    public function getReadTimeoutMs()
    {
        return $this->container['readTimeoutMs'];
    }

    /**
     * Sets readTimeoutMs
     *
     * @param int $readTimeoutMs the xclient read timeout in milliseconds
     *
     * @return $this
     */
    public function setReadTimeoutMs($readTimeoutMs)
    {
        $this->container['readTimeoutMs'] = $readTimeoutMs;

        return $this;
    }

    /**
     * Gets connectionTimeoutMs
     *
     * @return int
     */
    public function getConnectionTimeoutMs()
    {
        return $this->container['connectionTimeoutMs'];
    }

    /**
     * Sets connectionTimeoutMs
     *
     * @param int $connectionTimeoutMs the xclient connection timeout in milliseconds
     *
     * @return $this
     */
    public function setConnectionTimeoutMs($connectionTimeoutMs)
    {
        $this->container['connectionTimeoutMs'] = $connectionTimeoutMs;

        return $this;
    }

    /**
     * Gets pilotEducator
     *
     * @return int
     */
    public function getPilotEducator()
    {
        return $this->container['pilotEducator'];
    }

    /**
     * Sets pilotEducator
     *
     * @param int $pilotEducator the xclient pilot educator
     *
     * @return $this
     */
    public function setPilotEducator($pilotEducator)
    {
        $this->container['pilotEducator'] = $pilotEducator;

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



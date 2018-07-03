<?php
/**
 * DbSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra\V4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace III\Sierra\V4\Models;

use \ArrayAccess;
use \III\Sierra\V4\ObjectSerializer;

/**
 * DbSettings Class Doc Comment
 *
 * @category Class
 * @description The database settings
 * @package  III\Sierra\V4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DbSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DbSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vendor' => 'string',
        'host' => 'string',
        'port' => 'int',
        'database' => 'string',
        'options' => 'string',
        'username' => 'string',
        'password' => 'string',
        'minPoolSize' => 'int',
        'maxPoolSize' => 'int',
        'poolIncrement' => 'int',
        'testConnectionOnCheckout' => 'bool',
        'testConnectionOnCheckin' => 'bool',
        'idleConnectionTestPeriod' => 'int',
        'useJavaMelody' => 'bool',
        'path' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vendor' => null,
        'host' => null,
        'port' => 'int32',
        'database' => null,
        'options' => null,
        'username' => null,
        'password' => null,
        'minPoolSize' => 'int32',
        'maxPoolSize' => 'int32',
        'poolIncrement' => 'int32',
        'testConnectionOnCheckout' => null,
        'testConnectionOnCheckin' => null,
        'idleConnectionTestPeriod' => 'int32',
        'useJavaMelody' => null,
        'path' => null
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
        'vendor' => 'vendor',
        'host' => 'host',
        'port' => 'port',
        'database' => 'database',
        'options' => 'options',
        'username' => 'username',
        'password' => 'password',
        'minPoolSize' => 'minPoolSize',
        'maxPoolSize' => 'maxPoolSize',
        'poolIncrement' => 'poolIncrement',
        'testConnectionOnCheckout' => 'testConnectionOnCheckout',
        'testConnectionOnCheckin' => 'testConnectionOnCheckin',
        'idleConnectionTestPeriod' => 'idleConnectionTestPeriod',
        'useJavaMelody' => 'useJavaMelody',
        'path' => 'path'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendor' => 'setVendor',
        'host' => 'setHost',
        'port' => 'setPort',
        'database' => 'setDatabase',
        'options' => 'setOptions',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'minPoolSize' => 'setMinPoolSize',
        'maxPoolSize' => 'setMaxPoolSize',
        'poolIncrement' => 'setPoolIncrement',
        'testConnectionOnCheckout' => 'setTestConnectionOnCheckout',
        'testConnectionOnCheckin' => 'setTestConnectionOnCheckin',
        'idleConnectionTestPeriod' => 'setIdleConnectionTestPeriod',
        'useJavaMelody' => 'setUseJavaMelody',
        'path' => 'setPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendor' => 'getVendor',
        'host' => 'getHost',
        'port' => 'getPort',
        'database' => 'getDatabase',
        'options' => 'getOptions',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'minPoolSize' => 'getMinPoolSize',
        'maxPoolSize' => 'getMaxPoolSize',
        'poolIncrement' => 'getPoolIncrement',
        'testConnectionOnCheckout' => 'getTestConnectionOnCheckout',
        'testConnectionOnCheckin' => 'getTestConnectionOnCheckin',
        'idleConnectionTestPeriod' => 'getIdleConnectionTestPeriod',
        'useJavaMelody' => 'getUseJavaMelody',
        'path' => 'getPath'
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
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['minPoolSize'] = isset($data['minPoolSize']) ? $data['minPoolSize'] : null;
        $this->container['maxPoolSize'] = isset($data['maxPoolSize']) ? $data['maxPoolSize'] : null;
        $this->container['poolIncrement'] = isset($data['poolIncrement']) ? $data['poolIncrement'] : null;
        $this->container['testConnectionOnCheckout'] = isset($data['testConnectionOnCheckout']) ? $data['testConnectionOnCheckout'] : null;
        $this->container['testConnectionOnCheckin'] = isset($data['testConnectionOnCheckin']) ? $data['testConnectionOnCheckin'] : null;
        $this->container['idleConnectionTestPeriod'] = isset($data['idleConnectionTestPeriod']) ? $data['idleConnectionTestPeriod'] : null;
        $this->container['useJavaMelody'] = isset($data['useJavaMelody']) ? $data['useJavaMelody'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
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
     * Gets vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string $vendor the database vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
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
     * @param string $host the database host
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
     * @param int $port the database port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets database
     *
     * @return string
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param string $database the database name
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string $options the database options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username the database username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password the database password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets minPoolSize
     *
     * @return int
     */
    public function getMinPoolSize()
    {
        return $this->container['minPoolSize'];
    }

    /**
     * Sets minPoolSize
     *
     * @param int $minPoolSize the database minimum pool size
     *
     * @return $this
     */
    public function setMinPoolSize($minPoolSize)
    {
        $this->container['minPoolSize'] = $minPoolSize;

        return $this;
    }

    /**
     * Gets maxPoolSize
     *
     * @return int
     */
    public function getMaxPoolSize()
    {
        return $this->container['maxPoolSize'];
    }

    /**
     * Sets maxPoolSize
     *
     * @param int $maxPoolSize the database maximum pool size
     *
     * @return $this
     */
    public function setMaxPoolSize($maxPoolSize)
    {
        $this->container['maxPoolSize'] = $maxPoolSize;

        return $this;
    }

    /**
     * Gets poolIncrement
     *
     * @return int
     */
    public function getPoolIncrement()
    {
        return $this->container['poolIncrement'];
    }

    /**
     * Sets poolIncrement
     *
     * @param int $poolIncrement the database pool increment
     *
     * @return $this
     */
    public function setPoolIncrement($poolIncrement)
    {
        $this->container['poolIncrement'] = $poolIncrement;

        return $this;
    }

    /**
     * Gets testConnectionOnCheckout
     *
     * @return bool
     */
    public function getTestConnectionOnCheckout()
    {
        return $this->container['testConnectionOnCheckout'];
    }

    /**
     * Sets testConnectionOnCheckout
     *
     * @param bool $testConnectionOnCheckout the database connection pool on every connection checkout to verify that the connection is valid
     *
     * @return $this
     */
    public function setTestConnectionOnCheckout($testConnectionOnCheckout)
    {
        $this->container['testConnectionOnCheckout'] = $testConnectionOnCheckout;

        return $this;
    }

    /**
     * Gets testConnectionOnCheckin
     *
     * @return bool
     */
    public function getTestConnectionOnCheckin()
    {
        return $this->container['testConnectionOnCheckin'];
    }

    /**
     * Sets testConnectionOnCheckin
     *
     * @param bool $testConnectionOnCheckin the database connection pool an operation will be performed asynchronously at every connection checkin to verify that the connection is valid
     *
     * @return $this
     */
    public function setTestConnectionOnCheckin($testConnectionOnCheckin)
    {
        $this->container['testConnectionOnCheckin'] = $testConnectionOnCheckin;

        return $this;
    }

    /**
     * Gets idleConnectionTestPeriod
     *
     * @return int
     */
    public function getIdleConnectionTestPeriod()
    {
        return $this->container['idleConnectionTestPeriod'];
    }

    /**
     * Sets idleConnectionTestPeriod
     *
     * @param int $idleConnectionTestPeriod the database connection pool if this is a number greater than 0, c3p0 will test all idle, pooled but unchecked-out connections, every this number of seconds.
     *
     * @return $this
     */
    public function setIdleConnectionTestPeriod($idleConnectionTestPeriod)
    {
        $this->container['idleConnectionTestPeriod'] = $idleConnectionTestPeriod;

        return $this;
    }

    /**
     * Gets useJavaMelody
     *
     * @return bool
     */
    public function getUseJavaMelody()
    {
        return $this->container['useJavaMelody'];
    }

    /**
     * Sets useJavaMelody
     *
     * @param bool $useJavaMelody whether the database uses java melody
     *
     * @return $this
     */
    public function setUseJavaMelody($useJavaMelody)
    {
        $this->container['useJavaMelody'] = $useJavaMelody;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path the database path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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



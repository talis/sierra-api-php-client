<?php
/**
 * DbSettings
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
 * DbSettings Class Doc Comment
 *
 * @category Class
 * @description The database settings
 * @package  Sierra
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
        'min_pool_size' => 'int',
        'max_pool_size' => 'int',
        'pool_increment' => 'int',
        'test_connection_on_checkout' => 'bool',
        'test_connection_on_checkin' => 'bool',
        'idle_connection_test_period' => 'int',
        'use_java_melody' => 'bool',
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
        'min_pool_size' => 'int32',
        'max_pool_size' => 'int32',
        'pool_increment' => 'int32',
        'test_connection_on_checkout' => null,
        'test_connection_on_checkin' => null,
        'idle_connection_test_period' => 'int32',
        'use_java_melody' => null,
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
        'min_pool_size' => 'minPoolSize',
        'max_pool_size' => 'maxPoolSize',
        'pool_increment' => 'poolIncrement',
        'test_connection_on_checkout' => 'testConnectionOnCheckout',
        'test_connection_on_checkin' => 'testConnectionOnCheckin',
        'idle_connection_test_period' => 'idleConnectionTestPeriod',
        'use_java_melody' => 'useJavaMelody',
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
        'min_pool_size' => 'setMinPoolSize',
        'max_pool_size' => 'setMaxPoolSize',
        'pool_increment' => 'setPoolIncrement',
        'test_connection_on_checkout' => 'setTestConnectionOnCheckout',
        'test_connection_on_checkin' => 'setTestConnectionOnCheckin',
        'idle_connection_test_period' => 'setIdleConnectionTestPeriod',
        'use_java_melody' => 'setUseJavaMelody',
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
        'min_pool_size' => 'getMinPoolSize',
        'max_pool_size' => 'getMaxPoolSize',
        'pool_increment' => 'getPoolIncrement',
        'test_connection_on_checkout' => 'getTestConnectionOnCheckout',
        'test_connection_on_checkin' => 'getTestConnectionOnCheckin',
        'idle_connection_test_period' => 'getIdleConnectionTestPeriod',
        'use_java_melody' => 'getUseJavaMelody',
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
        $this->container['min_pool_size'] = isset($data['min_pool_size']) ? $data['min_pool_size'] : null;
        $this->container['max_pool_size'] = isset($data['max_pool_size']) ? $data['max_pool_size'] : null;
        $this->container['pool_increment'] = isset($data['pool_increment']) ? $data['pool_increment'] : null;
        $this->container['test_connection_on_checkout'] = isset($data['test_connection_on_checkout']) ? $data['test_connection_on_checkout'] : null;
        $this->container['test_connection_on_checkin'] = isset($data['test_connection_on_checkin']) ? $data['test_connection_on_checkin'] : null;
        $this->container['idle_connection_test_period'] = isset($data['idle_connection_test_period']) ? $data['idle_connection_test_period'] : null;
        $this->container['use_java_melody'] = isset($data['use_java_melody']) ? $data['use_java_melody'] : null;
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

        return true;
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
     * Gets min_pool_size
     *
     * @return int
     */
    public function getMinPoolSize()
    {
        return $this->container['min_pool_size'];
    }

    /**
     * Sets min_pool_size
     *
     * @param int $min_pool_size the database minimum pool size
     *
     * @return $this
     */
    public function setMinPoolSize($min_pool_size)
    {
        $this->container['min_pool_size'] = $min_pool_size;

        return $this;
    }

    /**
     * Gets max_pool_size
     *
     * @return int
     */
    public function getMaxPoolSize()
    {
        return $this->container['max_pool_size'];
    }

    /**
     * Sets max_pool_size
     *
     * @param int $max_pool_size the database maximum pool size
     *
     * @return $this
     */
    public function setMaxPoolSize($max_pool_size)
    {
        $this->container['max_pool_size'] = $max_pool_size;

        return $this;
    }

    /**
     * Gets pool_increment
     *
     * @return int
     */
    public function getPoolIncrement()
    {
        return $this->container['pool_increment'];
    }

    /**
     * Sets pool_increment
     *
     * @param int $pool_increment the database pool increment
     *
     * @return $this
     */
    public function setPoolIncrement($pool_increment)
    {
        $this->container['pool_increment'] = $pool_increment;

        return $this;
    }

    /**
     * Gets test_connection_on_checkout
     *
     * @return bool
     */
    public function getTestConnectionOnCheckout()
    {
        return $this->container['test_connection_on_checkout'];
    }

    /**
     * Sets test_connection_on_checkout
     *
     * @param bool $test_connection_on_checkout the database connection pool on every connection checkout to verify that the connection is valid
     *
     * @return $this
     */
    public function setTestConnectionOnCheckout($test_connection_on_checkout)
    {
        $this->container['test_connection_on_checkout'] = $test_connection_on_checkout;

        return $this;
    }

    /**
     * Gets test_connection_on_checkin
     *
     * @return bool
     */
    public function getTestConnectionOnCheckin()
    {
        return $this->container['test_connection_on_checkin'];
    }

    /**
     * Sets test_connection_on_checkin
     *
     * @param bool $test_connection_on_checkin the database connection pool an operation will be performed asynchronously at every connection checkin to verify that the connection is valid
     *
     * @return $this
     */
    public function setTestConnectionOnCheckin($test_connection_on_checkin)
    {
        $this->container['test_connection_on_checkin'] = $test_connection_on_checkin;

        return $this;
    }

    /**
     * Gets idle_connection_test_period
     *
     * @return int
     */
    public function getIdleConnectionTestPeriod()
    {
        return $this->container['idle_connection_test_period'];
    }

    /**
     * Sets idle_connection_test_period
     *
     * @param int $idle_connection_test_period the database connection pool if this is a number greater than 0, c3p0 will test all idle, pooled but unchecked-out connections, every this number of seconds.
     *
     * @return $this
     */
    public function setIdleConnectionTestPeriod($idle_connection_test_period)
    {
        $this->container['idle_connection_test_period'] = $idle_connection_test_period;

        return $this;
    }

    /**
     * Gets use_java_melody
     *
     * @return bool
     */
    public function getUseJavaMelody()
    {
        return $this->container['use_java_melody'];
    }

    /**
     * Sets use_java_melody
     *
     * @param bool $use_java_melody whether the database uses java melody
     *
     * @return $this
     */
    public function setUseJavaMelody($use_java_melody)
    {
        $this->container['use_java_melody'] = $use_java_melody;

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



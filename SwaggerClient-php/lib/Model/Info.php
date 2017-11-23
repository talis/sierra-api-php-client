<?php
/**
 * Info
 *
 * PHP version 5
 *
 * @category Class
 * @package  SierraApi
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

namespace SierraApi\Model;

use \ArrayAccess;
use \SierraApi\ObjectSerializer;

/**
 * Info Class Doc Comment
 *
 * @category Class
 * @description API information details
 * @package  SierraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Info implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_info' => '\SierraApi\Model\DisplayableApiInfo',
        'db_settings' => '\SierraApi\Model\DbSettings',
        'ds_settings' => '\SierraApi\Model\DsSettings',
        'admin_settings' => '\SierraApi\Model\AdminSettings',
        'webpac_settings' => '\SierraApi\Model\WebpacPXClientSettings',
        'pin_verification_settings' => '\SierraApi\Model\PinVerificationSettings',
        'marc2_inn_settings' => '\SierraApi\Model\Marc2INNSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_info' => null,
        'db_settings' => null,
        'ds_settings' => null,
        'admin_settings' => null,
        'webpac_settings' => null,
        'pin_verification_settings' => null,
        'marc2_inn_settings' => null
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
        'api_info' => 'apiInfo',
        'db_settings' => 'dbSettings',
        'ds_settings' => 'dsSettings',
        'admin_settings' => 'adminSettings',
        'webpac_settings' => 'webpacSettings',
        'pin_verification_settings' => 'pinVerificationSettings',
        'marc2_inn_settings' => 'marc2INNSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_info' => 'setApiInfo',
        'db_settings' => 'setDbSettings',
        'ds_settings' => 'setDsSettings',
        'admin_settings' => 'setAdminSettings',
        'webpac_settings' => 'setWebpacSettings',
        'pin_verification_settings' => 'setPinVerificationSettings',
        'marc2_inn_settings' => 'setMarc2InnSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_info' => 'getApiInfo',
        'db_settings' => 'getDbSettings',
        'ds_settings' => 'getDsSettings',
        'admin_settings' => 'getAdminSettings',
        'webpac_settings' => 'getWebpacSettings',
        'pin_verification_settings' => 'getPinVerificationSettings',
        'marc2_inn_settings' => 'getMarc2InnSettings'
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
        $this->container['api_info'] = isset($data['api_info']) ? $data['api_info'] : null;
        $this->container['db_settings'] = isset($data['db_settings']) ? $data['db_settings'] : null;
        $this->container['ds_settings'] = isset($data['ds_settings']) ? $data['ds_settings'] : null;
        $this->container['admin_settings'] = isset($data['admin_settings']) ? $data['admin_settings'] : null;
        $this->container['webpac_settings'] = isset($data['webpac_settings']) ? $data['webpac_settings'] : null;
        $this->container['pin_verification_settings'] = isset($data['pin_verification_settings']) ? $data['pin_verification_settings'] : null;
        $this->container['marc2_inn_settings'] = isset($data['marc2_inn_settings']) ? $data['marc2_inn_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['api_info'] === null) {
            $invalidProperties[] = "'api_info' can't be null";
        }
        if ($this->container['db_settings'] === null) {
            $invalidProperties[] = "'db_settings' can't be null";
        }
        if ($this->container['ds_settings'] === null) {
            $invalidProperties[] = "'ds_settings' can't be null";
        }
        if ($this->container['admin_settings'] === null) {
            $invalidProperties[] = "'admin_settings' can't be null";
        }
        if ($this->container['webpac_settings'] === null) {
            $invalidProperties[] = "'webpac_settings' can't be null";
        }
        if ($this->container['pin_verification_settings'] === null) {
            $invalidProperties[] = "'pin_verification_settings' can't be null";
        }
        if ($this->container['marc2_inn_settings'] === null) {
            $invalidProperties[] = "'marc2_inn_settings' can't be null";
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

        if ($this->container['api_info'] === null) {
            return false;
        }
        if ($this->container['db_settings'] === null) {
            return false;
        }
        if ($this->container['ds_settings'] === null) {
            return false;
        }
        if ($this->container['admin_settings'] === null) {
            return false;
        }
        if ($this->container['webpac_settings'] === null) {
            return false;
        }
        if ($this->container['pin_verification_settings'] === null) {
            return false;
        }
        if ($this->container['marc2_inn_settings'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets api_info
     *
     * @return \SierraApi\Model\DisplayableApiInfo
     */
    public function getApiInfo()
    {
        return $this->container['api_info'];
    }

    /**
     * Sets api_info
     *
     * @param \SierraApi\Model\DisplayableApiInfo $api_info the API name, version, and revision
     *
     * @return $this
     */
    public function setApiInfo($api_info)
    {
        $this->container['api_info'] = $api_info;

        return $this;
    }

    /**
     * Gets db_settings
     *
     * @return \SierraApi\Model\DbSettings
     */
    public function getDbSettings()
    {
        return $this->container['db_settings'];
    }

    /**
     * Sets db_settings
     *
     * @param \SierraApi\Model\DbSettings $db_settings the database settings
     *
     * @return $this
     */
    public function setDbSettings($db_settings)
    {
        $this->container['db_settings'] = $db_settings;

        return $this;
    }

    /**
     * Gets ds_settings
     *
     * @return \SierraApi\Model\DsSettings
     */
    public function getDsSettings()
    {
        return $this->container['ds_settings'];
    }

    /**
     * Sets ds_settings
     *
     * @param \SierraApi\Model\DsSettings $ds_settings the dataservice settings
     *
     * @return $this
     */
    public function setDsSettings($ds_settings)
    {
        $this->container['ds_settings'] = $ds_settings;

        return $this;
    }

    /**
     * Gets admin_settings
     *
     * @return \SierraApi\Model\AdminSettings
     */
    public function getAdminSettings()
    {
        return $this->container['admin_settings'];
    }

    /**
     * Sets admin_settings
     *
     * @param \SierraApi\Model\AdminSettings $admin_settings the admin settings
     *
     * @return $this
     */
    public function setAdminSettings($admin_settings)
    {
        $this->container['admin_settings'] = $admin_settings;

        return $this;
    }

    /**
     * Gets webpac_settings
     *
     * @return \SierraApi\Model\WebpacPXClientSettings
     */
    public function getWebpacSettings()
    {
        return $this->container['webpac_settings'];
    }

    /**
     * Sets webpac_settings
     *
     * @param \SierraApi\Model\WebpacPXClientSettings $webpac_settings the WebPAC settings
     *
     * @return $this
     */
    public function setWebpacSettings($webpac_settings)
    {
        $this->container['webpac_settings'] = $webpac_settings;

        return $this;
    }

    /**
     * Gets pin_verification_settings
     *
     * @return \SierraApi\Model\PinVerificationSettings
     */
    public function getPinVerificationSettings()
    {
        return $this->container['pin_verification_settings'];
    }

    /**
     * Sets pin_verification_settings
     *
     * @param \SierraApi\Model\PinVerificationSettings $pin_verification_settings the settings for PIN verification
     *
     * @return $this
     */
    public function setPinVerificationSettings($pin_verification_settings)
    {
        $this->container['pin_verification_settings'] = $pin_verification_settings;

        return $this;
    }

    /**
     * Gets marc2_inn_settings
     *
     * @return \SierraApi\Model\Marc2INNSettings
     */
    public function getMarc2InnSettings()
    {
        return $this->container['marc2_inn_settings'];
    }

    /**
     * Sets marc2_inn_settings
     *
     * @param \SierraApi\Model\Marc2INNSettings $marc2_inn_settings the settings for marc2INN
     *
     * @return $this
     */
    public function setMarc2InnSettings($marc2_inn_settings)
    {
        $this->container['marc2_inn_settings'] = $marc2_inn_settings;

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


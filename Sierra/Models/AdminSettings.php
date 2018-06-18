<?php
/**
 * AdminSettings
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
 * OpenAPI spec version: 5
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
 * AdminSettings Class Doc Comment
 *
 * @category Class
 * @description Administrator settings
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdminSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdminSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email_host' => 'string',
        'email_user' => 'string',
        'email_sender_name' => 'string',
        'email_sender_email' => 'string',
        'email_subject' => 'string',
        'api_enabled' => 'bool',
        'can_config' => 'bool',
        'access_tier' => 'string',
        'root_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email_host' => null,
        'email_user' => null,
        'email_sender_name' => null,
        'email_sender_email' => null,
        'email_subject' => null,
        'api_enabled' => null,
        'can_config' => null,
        'access_tier' => null,
        'root_url' => null
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
        'email_host' => 'emailHost',
        'email_user' => 'emailUser',
        'email_sender_name' => 'emailSenderName',
        'email_sender_email' => 'emailSenderEmail',
        'email_subject' => 'emailSubject',
        'api_enabled' => 'apiEnabled',
        'can_config' => 'canConfig',
        'access_tier' => 'accessTier',
        'root_url' => 'rootUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_host' => 'setEmailHost',
        'email_user' => 'setEmailUser',
        'email_sender_name' => 'setEmailSenderName',
        'email_sender_email' => 'setEmailSenderEmail',
        'email_subject' => 'setEmailSubject',
        'api_enabled' => 'setApiEnabled',
        'can_config' => 'setCanConfig',
        'access_tier' => 'setAccessTier',
        'root_url' => 'setRootUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_host' => 'getEmailHost',
        'email_user' => 'getEmailUser',
        'email_sender_name' => 'getEmailSenderName',
        'email_sender_email' => 'getEmailSenderEmail',
        'email_subject' => 'getEmailSubject',
        'api_enabled' => 'getApiEnabled',
        'can_config' => 'getCanConfig',
        'access_tier' => 'getAccessTier',
        'root_url' => 'getRootUrl'
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
        $this->container['email_host'] = isset($data['email_host']) ? $data['email_host'] : null;
        $this->container['email_user'] = isset($data['email_user']) ? $data['email_user'] : null;
        $this->container['email_sender_name'] = isset($data['email_sender_name']) ? $data['email_sender_name'] : null;
        $this->container['email_sender_email'] = isset($data['email_sender_email']) ? $data['email_sender_email'] : null;
        $this->container['email_subject'] = isset($data['email_subject']) ? $data['email_subject'] : null;
        $this->container['api_enabled'] = isset($data['api_enabled']) ? $data['api_enabled'] : null;
        $this->container['can_config'] = isset($data['can_config']) ? $data['can_config'] : null;
        $this->container['access_tier'] = isset($data['access_tier']) ? $data['access_tier'] : null;
        $this->container['root_url'] = isset($data['root_url']) ? $data['root_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email_host'] === null) {
            $invalidProperties[] = "'email_host' can't be null";
        }
        if ($this->container['email_user'] === null) {
            $invalidProperties[] = "'email_user' can't be null";
        }
        if ($this->container['email_sender_name'] === null) {
            $invalidProperties[] = "'email_sender_name' can't be null";
        }
        if ($this->container['email_sender_email'] === null) {
            $invalidProperties[] = "'email_sender_email' can't be null";
        }
        if ($this->container['email_subject'] === null) {
            $invalidProperties[] = "'email_subject' can't be null";
        }
        if ($this->container['api_enabled'] === null) {
            $invalidProperties[] = "'api_enabled' can't be null";
        }
        if ($this->container['can_config'] === null) {
            $invalidProperties[] = "'can_config' can't be null";
        }
        if ($this->container['access_tier'] === null) {
            $invalidProperties[] = "'access_tier' can't be null";
        }
        if ($this->container['root_url'] === null) {
            $invalidProperties[] = "'root_url' can't be null";
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

        if ($this->container['email_host'] === null) {
            return false;
        }
        if ($this->container['email_user'] === null) {
            return false;
        }
        if ($this->container['email_sender_name'] === null) {
            return false;
        }
        if ($this->container['email_sender_email'] === null) {
            return false;
        }
        if ($this->container['email_subject'] === null) {
            return false;
        }
        if ($this->container['api_enabled'] === null) {
            return false;
        }
        if ($this->container['can_config'] === null) {
            return false;
        }
        if ($this->container['access_tier'] === null) {
            return false;
        }
        if ($this->container['root_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets email_host
     *
     * @return string
     */
    public function getEmailHost()
    {
        return $this->container['email_host'];
    }

    /**
     * Sets email_host
     *
     * @param string $email_host the email host server
     *
     * @return $this
     */
    public function setEmailHost($email_host)
    {
        $this->container['email_host'] = $email_host;

        return $this;
    }

    /**
     * Gets email_user
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->container['email_user'];
    }

    /**
     * Sets email_user
     *
     * @param string $email_user the email account user name
     *
     * @return $this
     */
    public function setEmailUser($email_user)
    {
        $this->container['email_user'] = $email_user;

        return $this;
    }

    /**
     * Gets email_sender_name
     *
     * @return string
     */
    public function getEmailSenderName()
    {
        return $this->container['email_sender_name'];
    }

    /**
     * Sets email_sender_name
     *
     * @param string $email_sender_name the email sender's name
     *
     * @return $this
     */
    public function setEmailSenderName($email_sender_name)
    {
        $this->container['email_sender_name'] = $email_sender_name;

        return $this;
    }

    /**
     * Gets email_sender_email
     *
     * @return string
     */
    public function getEmailSenderEmail()
    {
        return $this->container['email_sender_email'];
    }

    /**
     * Sets email_sender_email
     *
     * @param string $email_sender_email the email sender's email address
     *
     * @return $this
     */
    public function setEmailSenderEmail($email_sender_email)
    {
        $this->container['email_sender_email'] = $email_sender_email;

        return $this;
    }

    /**
     * Gets email_subject
     *
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->container['email_subject'];
    }

    /**
     * Sets email_subject
     *
     * @param string $email_subject the email subject line
     *
     * @return $this
     */
    public function setEmailSubject($email_subject)
    {
        $this->container['email_subject'] = $email_subject;

        return $this;
    }

    /**
     * Gets api_enabled
     *
     * @return bool
     */
    public function getApiEnabled()
    {
        return $this->container['api_enabled'];
    }

    /**
     * Sets api_enabled
     *
     * @param bool $api_enabled whether the API is enabled
     *
     * @return $this
     */
    public function setApiEnabled($api_enabled)
    {
        $this->container['api_enabled'] = $api_enabled;

        return $this;
    }

    /**
     * Gets can_config
     *
     * @return bool
     */
    public function getCanConfig()
    {
        return $this->container['can_config'];
    }

    /**
     * Sets can_config
     *
     * @param bool $can_config whether the API management interface is enabled
     *
     * @return $this
     */
    public function setCanConfig($can_config)
    {
        $this->container['can_config'] = $can_config;

        return $this;
    }

    /**
     * Gets access_tier
     *
     * @return string
     */
    public function getAccessTier()
    {
        return $this->container['access_tier'];
    }

    /**
     * Sets access_tier
     *
     * @param string $access_tier the site's access tier (basic or premium)
     *
     * @return $this
     */
    public function setAccessTier($access_tier)
    {
        $this->container['access_tier'] = $access_tier;

        return $this;
    }

    /**
     * Gets root_url
     *
     * @return string
     */
    public function getRootUrl()
    {
        return $this->container['root_url'];
    }

    /**
     * Sets root_url
     *
     * @param string $root_url the root URL for the Sierra API
     *
     * @return $this
     */
    public function setRootUrl($root_url)
    {
        $this->container['root_url'] = $root_url;

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



<?php
/**
 * AdminSettings
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
 * AdminSettings Class Doc Comment
 *
 * @category Class
 * @description Administrator settings
 * @package  III\Sierra
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
        'emailHost' => 'string',
        'emailUser' => 'string',
        'emailSenderName' => 'string',
        'emailSenderEmail' => 'string',
        'emailSubject' => 'string',
        'apiEnabled' => 'bool',
        'canConfig' => 'bool',
        'accessTier' => 'string',
        'rootUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emailHost' => null,
        'emailUser' => null,
        'emailSenderName' => null,
        'emailSenderEmail' => null,
        'emailSubject' => null,
        'apiEnabled' => null,
        'canConfig' => null,
        'accessTier' => null,
        'rootUrl' => null
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
        'emailHost' => 'emailHost',
        'emailUser' => 'emailUser',
        'emailSenderName' => 'emailSenderName',
        'emailSenderEmail' => 'emailSenderEmail',
        'emailSubject' => 'emailSubject',
        'apiEnabled' => 'apiEnabled',
        'canConfig' => 'canConfig',
        'accessTier' => 'accessTier',
        'rootUrl' => 'rootUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emailHost' => 'setEmailHost',
        'emailUser' => 'setEmailUser',
        'emailSenderName' => 'setEmailSenderName',
        'emailSenderEmail' => 'setEmailSenderEmail',
        'emailSubject' => 'setEmailSubject',
        'apiEnabled' => 'setApiEnabled',
        'canConfig' => 'setCanConfig',
        'accessTier' => 'setAccessTier',
        'rootUrl' => 'setRootUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emailHost' => 'getEmailHost',
        'emailUser' => 'getEmailUser',
        'emailSenderName' => 'getEmailSenderName',
        'emailSenderEmail' => 'getEmailSenderEmail',
        'emailSubject' => 'getEmailSubject',
        'apiEnabled' => 'getApiEnabled',
        'canConfig' => 'getCanConfig',
        'accessTier' => 'getAccessTier',
        'rootUrl' => 'getRootUrl'
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
        $this->container['emailHost'] = isset($data['emailHost']) ? $data['emailHost'] : null;
        $this->container['emailUser'] = isset($data['emailUser']) ? $data['emailUser'] : null;
        $this->container['emailSenderName'] = isset($data['emailSenderName']) ? $data['emailSenderName'] : null;
        $this->container['emailSenderEmail'] = isset($data['emailSenderEmail']) ? $data['emailSenderEmail'] : null;
        $this->container['emailSubject'] = isset($data['emailSubject']) ? $data['emailSubject'] : null;
        $this->container['apiEnabled'] = isset($data['apiEnabled']) ? $data['apiEnabled'] : null;
        $this->container['canConfig'] = isset($data['canConfig']) ? $data['canConfig'] : null;
        $this->container['accessTier'] = isset($data['accessTier']) ? $data['accessTier'] : null;
        $this->container['rootUrl'] = isset($data['rootUrl']) ? $data['rootUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['emailHost'] === null) {
            $invalidProperties[] = "'emailHost' can't be null";
        }
        if ($this->container['emailUser'] === null) {
            $invalidProperties[] = "'emailUser' can't be null";
        }
        if ($this->container['emailSenderName'] === null) {
            $invalidProperties[] = "'emailSenderName' can't be null";
        }
        if ($this->container['emailSenderEmail'] === null) {
            $invalidProperties[] = "'emailSenderEmail' can't be null";
        }
        if ($this->container['emailSubject'] === null) {
            $invalidProperties[] = "'emailSubject' can't be null";
        }
        if ($this->container['apiEnabled'] === null) {
            $invalidProperties[] = "'apiEnabled' can't be null";
        }
        if ($this->container['canConfig'] === null) {
            $invalidProperties[] = "'canConfig' can't be null";
        }
        if ($this->container['accessTier'] === null) {
            $invalidProperties[] = "'accessTier' can't be null";
        }
        if ($this->container['rootUrl'] === null) {
            $invalidProperties[] = "'rootUrl' can't be null";
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

        if ($this->container['emailHost'] === null) {
            return false;
        }
        if ($this->container['emailUser'] === null) {
            return false;
        }
        if ($this->container['emailSenderName'] === null) {
            return false;
        }
        if ($this->container['emailSenderEmail'] === null) {
            return false;
        }
        if ($this->container['emailSubject'] === null) {
            return false;
        }
        if ($this->container['apiEnabled'] === null) {
            return false;
        }
        if ($this->container['canConfig'] === null) {
            return false;
        }
        if ($this->container['accessTier'] === null) {
            return false;
        }
        if ($this->container['rootUrl'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets emailHost
     *
     * @return string
     */
    public function getEmailHost()
    {
        return $this->container['emailHost'];
    }

    /**
     * Sets emailHost
     *
     * @param string $emailHost the email host server
     *
     * @return $this
     */
    public function setEmailHost($emailHost)
    {
        $this->container['emailHost'] = $emailHost;

        return $this;
    }

    /**
     * Gets emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->container['emailUser'];
    }

    /**
     * Sets emailUser
     *
     * @param string $emailUser the email account user name
     *
     * @return $this
     */
    public function setEmailUser($emailUser)
    {
        $this->container['emailUser'] = $emailUser;

        return $this;
    }

    /**
     * Gets emailSenderName
     *
     * @return string
     */
    public function getEmailSenderName()
    {
        return $this->container['emailSenderName'];
    }

    /**
     * Sets emailSenderName
     *
     * @param string $emailSenderName the email sender's name
     *
     * @return $this
     */
    public function setEmailSenderName($emailSenderName)
    {
        $this->container['emailSenderName'] = $emailSenderName;

        return $this;
    }

    /**
     * Gets emailSenderEmail
     *
     * @return string
     */
    public function getEmailSenderEmail()
    {
        return $this->container['emailSenderEmail'];
    }

    /**
     * Sets emailSenderEmail
     *
     * @param string $emailSenderEmail the email sender's email address
     *
     * @return $this
     */
    public function setEmailSenderEmail($emailSenderEmail)
    {
        $this->container['emailSenderEmail'] = $emailSenderEmail;

        return $this;
    }

    /**
     * Gets emailSubject
     *
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->container['emailSubject'];
    }

    /**
     * Sets emailSubject
     *
     * @param string $emailSubject the email subject line
     *
     * @return $this
     */
    public function setEmailSubject($emailSubject)
    {
        $this->container['emailSubject'] = $emailSubject;

        return $this;
    }

    /**
     * Gets apiEnabled
     *
     * @return bool
     */
    public function getApiEnabled()
    {
        return $this->container['apiEnabled'];
    }

    /**
     * Sets apiEnabled
     *
     * @param bool $apiEnabled whether the API is enabled
     *
     * @return $this
     */
    public function setApiEnabled($apiEnabled)
    {
        $this->container['apiEnabled'] = $apiEnabled;

        return $this;
    }

    /**
     * Gets canConfig
     *
     * @return bool
     */
    public function getCanConfig()
    {
        return $this->container['canConfig'];
    }

    /**
     * Sets canConfig
     *
     * @param bool $canConfig whether the API management interface is enabled
     *
     * @return $this
     */
    public function setCanConfig($canConfig)
    {
        $this->container['canConfig'] = $canConfig;

        return $this;
    }

    /**
     * Gets accessTier
     *
     * @return string
     */
    public function getAccessTier()
    {
        return $this->container['accessTier'];
    }

    /**
     * Sets accessTier
     *
     * @param string $accessTier the site's access tier (basic or premium)
     *
     * @return $this
     */
    public function setAccessTier($accessTier)
    {
        $this->container['accessTier'] = $accessTier;

        return $this;
    }

    /**
     * Gets rootUrl
     *
     * @return string
     */
    public function getRootUrl()
    {
        return $this->container['rootUrl'];
    }

    /**
     * Sets rootUrl
     *
     * @param string $rootUrl the root URL for the Sierra API
     *
     * @return $this
     */
    public function setRootUrl($rootUrl)
    {
        $this->container['rootUrl'] = $rootUrl;

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



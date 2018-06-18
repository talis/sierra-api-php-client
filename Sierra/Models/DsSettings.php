<?php
/**
 * DsSettings
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
 * DsSettings Class Doc Comment
 *
 * @category Class
 * @description The data service settings
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DsSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataservice_url' => 'string',
        'milsh_port' => 'int',
        'x_circ_settings' => '\Sierra\Models\XClientSettings',
        'x_circ2_settings' => '\Sierra\Models\XClientSettings',
        'message_tag' => 'string',
        'mildata_settings' => '\Sierra\Models\MildataSettings',
        'milproto_settings' => '\Sierra\Models\MilprotoSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataservice_url' => null,
        'milsh_port' => 'int32',
        'x_circ_settings' => null,
        'x_circ2_settings' => null,
        'message_tag' => null,
        'mildata_settings' => null,
        'milproto_settings' => null
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
        'dataservice_url' => 'dataserviceUrl',
        'milsh_port' => 'milshPort',
        'x_circ_settings' => 'xCircSettings',
        'x_circ2_settings' => 'xCirc2Settings',
        'message_tag' => 'messageTag',
        'mildata_settings' => 'mildataSettings',
        'milproto_settings' => 'milprotoSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataservice_url' => 'setDataserviceUrl',
        'milsh_port' => 'setMilshPort',
        'x_circ_settings' => 'setXCircSettings',
        'x_circ2_settings' => 'setXCirc2Settings',
        'message_tag' => 'setMessageTag',
        'mildata_settings' => 'setMildataSettings',
        'milproto_settings' => 'setMilprotoSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataservice_url' => 'getDataserviceUrl',
        'milsh_port' => 'getMilshPort',
        'x_circ_settings' => 'getXCircSettings',
        'x_circ2_settings' => 'getXCirc2Settings',
        'message_tag' => 'getMessageTag',
        'mildata_settings' => 'getMildataSettings',
        'milproto_settings' => 'getMilprotoSettings'
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
        $this->container['dataservice_url'] = isset($data['dataservice_url']) ? $data['dataservice_url'] : null;
        $this->container['milsh_port'] = isset($data['milsh_port']) ? $data['milsh_port'] : null;
        $this->container['x_circ_settings'] = isset($data['x_circ_settings']) ? $data['x_circ_settings'] : null;
        $this->container['x_circ2_settings'] = isset($data['x_circ2_settings']) ? $data['x_circ2_settings'] : null;
        $this->container['message_tag'] = isset($data['message_tag']) ? $data['message_tag'] : null;
        $this->container['mildata_settings'] = isset($data['mildata_settings']) ? $data['mildata_settings'] : null;
        $this->container['milproto_settings'] = isset($data['milproto_settings']) ? $data['milproto_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dataservice_url'] === null) {
            $invalidProperties[] = "'dataservice_url' can't be null";
        }
        if ($this->container['milsh_port'] === null) {
            $invalidProperties[] = "'milsh_port' can't be null";
        }
        if ($this->container['x_circ_settings'] === null) {
            $invalidProperties[] = "'x_circ_settings' can't be null";
        }
        if ($this->container['x_circ2_settings'] === null) {
            $invalidProperties[] = "'x_circ2_settings' can't be null";
        }
        if ($this->container['message_tag'] === null) {
            $invalidProperties[] = "'message_tag' can't be null";
        }
        if ($this->container['mildata_settings'] === null) {
            $invalidProperties[] = "'mildata_settings' can't be null";
        }
        if ($this->container['milproto_settings'] === null) {
            $invalidProperties[] = "'milproto_settings' can't be null";
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

        if ($this->container['dataservice_url'] === null) {
            return false;
        }
        if ($this->container['milsh_port'] === null) {
            return false;
        }
        if ($this->container['x_circ_settings'] === null) {
            return false;
        }
        if ($this->container['x_circ2_settings'] === null) {
            return false;
        }
        if ($this->container['message_tag'] === null) {
            return false;
        }
        if ($this->container['mildata_settings'] === null) {
            return false;
        }
        if ($this->container['milproto_settings'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets dataservice_url
     *
     * @return string
     */
    public function getDataserviceUrl()
    {
        return $this->container['dataservice_url'];
    }

    /**
     * Sets dataservice_url
     *
     * @param string $dataservice_url the data service URL
     *
     * @return $this
     */
    public function setDataserviceUrl($dataservice_url)
    {
        $this->container['dataservice_url'] = $dataservice_url;

        return $this;
    }

    /**
     * Gets milsh_port
     *
     * @return int
     */
    public function getMilshPort()
    {
        return $this->container['milsh_port'];
    }

    /**
     * Sets milsh_port
     *
     * @param int $milsh_port the data service milsh port
     *
     * @return $this
     */
    public function setMilshPort($milsh_port)
    {
        $this->container['milsh_port'] = $milsh_port;

        return $this;
    }

    /**
     * Gets x_circ_settings
     *
     * @return \Sierra\Models\XClientSettings
     */
    public function getXCircSettings()
    {
        return $this->container['x_circ_settings'];
    }

    /**
     * Sets x_circ_settings
     *
     * @param \Sierra\Models\XClientSettings $x_circ_settings the default data service xcirc settings
     *
     * @return $this
     */
    public function setXCircSettings($x_circ_settings)
    {
        $this->container['x_circ_settings'] = $x_circ_settings;

        return $this;
    }

    /**
     * Gets x_circ2_settings
     *
     * @return \Sierra\Models\XClientSettings
     */
    public function getXCirc2Settings()
    {
        return $this->container['x_circ2_settings'];
    }

    /**
     * Sets x_circ2_settings
     *
     * @param \Sierra\Models\XClientSettings $x_circ2_settings the data service xcirc2 settings
     *
     * @return $this
     */
    public function setXCirc2Settings($x_circ2_settings)
    {
        $this->container['x_circ2_settings'] = $x_circ2_settings;

        return $this;
    }

    /**
     * Gets message_tag
     *
     * @return string
     */
    public function getMessageTag()
    {
        return $this->container['message_tag'];
    }

    /**
     * Sets message_tag
     *
     * @param string $message_tag a data service message tag
     *
     * @return $this
     */
    public function setMessageTag($message_tag)
    {
        $this->container['message_tag'] = $message_tag;

        return $this;
    }

    /**
     * Gets mildata_settings
     *
     * @return \Sierra\Models\MildataSettings
     */
    public function getMildataSettings()
    {
        return $this->container['mildata_settings'];
    }

    /**
     * Sets mildata_settings
     *
     * @param \Sierra\Models\MildataSettings $mildata_settings MILDATA settings
     *
     * @return $this
     */
    public function setMildataSettings($mildata_settings)
    {
        $this->container['mildata_settings'] = $mildata_settings;

        return $this;
    }

    /**
     * Gets milproto_settings
     *
     * @return \Sierra\Models\MilprotoSettings
     */
    public function getMilprotoSettings()
    {
        return $this->container['milproto_settings'];
    }

    /**
     * Sets milproto_settings
     *
     * @param \Sierra\Models\MilprotoSettings $milproto_settings MILPROTO settings
     *
     * @return $this
     */
    public function setMilprotoSettings($milproto_settings)
    {
        $this->container['milproto_settings'] = $milproto_settings;

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



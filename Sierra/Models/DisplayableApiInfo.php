<?php
/**
 * DisplayableApiInfo
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
 * DisplayableApiInfo Class Doc Comment
 *
 * @category Class
 * @description API displayable information details
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisplayableApiInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DisplayableApiInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'version' => 'string',
        'sierra_version' => 'string',
        'full_version' => 'string',
        'revision' => 'string',
        'revision_date' => 'string',
        'backwards_compatible_versions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'version' => null,
        'sierra_version' => null,
        'full_version' => null,
        'revision' => null,
        'revision_date' => null,
        'backwards_compatible_versions' => null
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
        'name' => 'name',
        'version' => 'version',
        'sierra_version' => 'sierraVersion',
        'full_version' => 'fullVersion',
        'revision' => 'revision',
        'revision_date' => 'revisionDate',
        'backwards_compatible_versions' => 'backwardsCompatibleVersions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'version' => 'setVersion',
        'sierra_version' => 'setSierraVersion',
        'full_version' => 'setFullVersion',
        'revision' => 'setRevision',
        'revision_date' => 'setRevisionDate',
        'backwards_compatible_versions' => 'setBackwardsCompatibleVersions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'version' => 'getVersion',
        'sierra_version' => 'getSierraVersion',
        'full_version' => 'getFullVersion',
        'revision' => 'getRevision',
        'revision_date' => 'getRevisionDate',
        'backwards_compatible_versions' => 'getBackwardsCompatibleVersions'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['sierra_version'] = isset($data['sierra_version']) ? $data['sierra_version'] : null;
        $this->container['full_version'] = isset($data['full_version']) ? $data['full_version'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['revision_date'] = isset($data['revision_date']) ? $data['revision_date'] : null;
        $this->container['backwards_compatible_versions'] = isset($data['backwards_compatible_versions']) ? $data['backwards_compatible_versions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['sierra_version'] === null) {
            $invalidProperties[] = "'sierra_version' can't be null";
        }
        if ($this->container['full_version'] === null) {
            $invalidProperties[] = "'full_version' can't be null";
        }
        if ($this->container['revision'] === null) {
            $invalidProperties[] = "'revision' can't be null";
        }
        if ($this->container['revision_date'] === null) {
            $invalidProperties[] = "'revision_date' can't be null";
        }
        if ($this->container['backwards_compatible_versions'] === null) {
            $invalidProperties[] = "'backwards_compatible_versions' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['sierra_version'] === null) {
            return false;
        }
        if ($this->container['full_version'] === null) {
            return false;
        }
        if ($this->container['revision'] === null) {
            return false;
        }
        if ($this->container['revision_date'] === null) {
            return false;
        }
        if ($this->container['backwards_compatible_versions'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name the API name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version the API version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets sierra_version
     *
     * @return string
     */
    public function getSierraVersion()
    {
        return $this->container['sierra_version'];
    }

    /**
     * Sets sierra_version
     *
     * @param string $sierra_version the intended version of sierra the API works with
     *
     * @return $this
     */
    public function setSierraVersion($sierra_version)
    {
        $this->container['sierra_version'] = $sierra_version;

        return $this;
    }

    /**
     * Gets full_version
     *
     * @return string
     */
    public function getFullVersion()
    {
        return $this->container['full_version'];
    }

    /**
     * Sets full_version
     *
     * @param string $full_version the full version, includes sierra version and API version
     *
     * @return $this
     */
    public function setFullVersion($full_version)
    {
        $this->container['full_version'] = $full_version;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param string $revision the API revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets revision_date
     *
     * @return string
     */
    public function getRevisionDate()
    {
        return $this->container['revision_date'];
    }

    /**
     * Sets revision_date
     *
     * @param string $revision_date the API revision date
     *
     * @return $this
     */
    public function setRevisionDate($revision_date)
    {
        $this->container['revision_date'] = $revision_date;

        return $this;
    }

    /**
     * Gets backwards_compatible_versions
     *
     * @return string
     */
    public function getBackwardsCompatibleVersions()
    {
        return $this->container['backwards_compatible_versions'];
    }

    /**
     * Sets backwards_compatible_versions
     *
     * @param string $backwards_compatible_versions the previous versions of the API this version supports
     *
     * @return $this
     */
    public function setBackwardsCompatibleVersions($backwards_compatible_versions)
    {
        $this->container['backwards_compatible_versions'] = $backwards_compatible_versions;

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



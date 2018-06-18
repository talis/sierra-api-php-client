<?php
/**
 * MarcSummary
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
 * MarcSummary Class Doc Comment
 *
 * @category Class
 * @description a summary of the generated binary MARC data file
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarcSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MarcSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file' => 'string',
        'input_records' => 'int',
        'deleted_records' => 'int',
        'output_records' => 'int',
        'errors' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file' => null,
        'input_records' => 'int32',
        'deleted_records' => 'int32',
        'output_records' => 'int32',
        'errors' => 'int32'
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
        'file' => 'file',
        'input_records' => 'inputRecords',
        'deleted_records' => 'deletedRecords',
        'output_records' => 'outputRecords',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file' => 'setFile',
        'input_records' => 'setInputRecords',
        'deleted_records' => 'setDeletedRecords',
        'output_records' => 'setOutputRecords',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file' => 'getFile',
        'input_records' => 'getInputRecords',
        'deleted_records' => 'getDeletedRecords',
        'output_records' => 'getOutputRecords',
        'errors' => 'getErrors'
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['input_records'] = isset($data['input_records']) ? $data['input_records'] : null;
        $this->container['deleted_records'] = isset($data['deleted_records']) ? $data['deleted_records'] : null;
        $this->container['output_records'] = isset($data['output_records']) ? $data['output_records'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if ($this->container['input_records'] === null) {
            $invalidProperties[] = "'input_records' can't be null";
        }
        if ($this->container['output_records'] === null) {
            $invalidProperties[] = "'output_records' can't be null";
        }
        if ($this->container['errors'] === null) {
            $invalidProperties[] = "'errors' can't be null";
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

        if ($this->container['file'] === null) {
            return false;
        }
        if ($this->container['input_records'] === null) {
            return false;
        }
        if ($this->container['output_records'] === null) {
            return false;
        }
        if ($this->container['errors'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file a link to the generated binary MARC data file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets input_records
     *
     * @return int
     */
    public function getInputRecords()
    {
        return $this->container['input_records'];
    }

    /**
     * Sets input_records
     *
     * @param int $input_records the number of bibs processed
     *
     * @return $this
     */
    public function setInputRecords($input_records)
    {
        $this->container['input_records'] = $input_records;

        return $this;
    }

    /**
     * Gets deleted_records
     *
     * @return int
     */
    public function getDeletedRecords()
    {
        return $this->container['deleted_records'];
    }

    /**
     * Sets deleted_records
     *
     * @param int $deleted_records the number of bibs processed that were in a deleted state
     *
     * @return $this
     */
    public function setDeletedRecords($deleted_records)
    {
        $this->container['deleted_records'] = $deleted_records;

        return $this;
    }

    /**
     * Gets output_records
     *
     * @return int
     */
    public function getOutputRecords()
    {
        return $this->container['output_records'];
    }

    /**
     * Sets output_records
     *
     * @param int $output_records the number of bibs written to the MARC data file
     *
     * @return $this
     */
    public function setOutputRecords($output_records)
    {
        $this->container['output_records'] = $output_records;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return int
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param int $errors the number of errors that occurred during the MARC data file generation
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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



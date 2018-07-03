<?php
/**
 * Item
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
 * Item Class Doc Comment
 *
 * @category Class
 * @description an item record
 * @package  III\Sierra\V5
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Item implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'updatedDate' => '\DateTime',
        'createdDate' => '\DateTime',
        'deletedDate' => '\DateTime',
        'deleted' => 'bool',
        'bibIds' => 'string[]',
        'location' => '\III\Sierra\V5\Models\Location',
        'status' => '\III\Sierra\V5\Models\ItemStatus',
        'barcode' => 'string',
        'callNumber' => 'string',
        'itemType' => 'string',
        'fixedFields' => '\III\Sierra\V5\Models\map',
        'varFields' => '\III\Sierra\V5\Models\VarField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'updatedDate' => 'date-time',
        'createdDate' => 'date-time',
        'deletedDate' => 'date',
        'deleted' => null,
        'bibIds' => null,
        'location' => null,
        'status' => null,
        'barcode' => null,
        'callNumber' => null,
        'itemType' => null,
        'fixedFields' => null,
        'varFields' => null
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
        'id' => 'id',
        'updatedDate' => 'updatedDate',
        'createdDate' => 'createdDate',
        'deletedDate' => 'deletedDate',
        'deleted' => 'deleted',
        'bibIds' => 'bibIds',
        'location' => 'location',
        'status' => 'status',
        'barcode' => 'barcode',
        'callNumber' => 'callNumber',
        'itemType' => 'itemType',
        'fixedFields' => 'fixedFields',
        'varFields' => 'varFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'updatedDate' => 'setUpdatedDate',
        'createdDate' => 'setCreatedDate',
        'deletedDate' => 'setDeletedDate',
        'deleted' => 'setDeleted',
        'bibIds' => 'setBibIds',
        'location' => 'setLocation',
        'status' => 'setStatus',
        'barcode' => 'setBarcode',
        'callNumber' => 'setCallNumber',
        'itemType' => 'setItemType',
        'fixedFields' => 'setFixedFields',
        'varFields' => 'setVarFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'updatedDate' => 'getUpdatedDate',
        'createdDate' => 'getCreatedDate',
        'deletedDate' => 'getDeletedDate',
        'deleted' => 'getDeleted',
        'bibIds' => 'getBibIds',
        'location' => 'getLocation',
        'status' => 'getStatus',
        'barcode' => 'getBarcode',
        'callNumber' => 'getCallNumber',
        'itemType' => 'getItemType',
        'fixedFields' => 'getFixedFields',
        'varFields' => 'getVarFields'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['updatedDate'] = isset($data['updatedDate']) ? $data['updatedDate'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['deletedDate'] = isset($data['deletedDate']) ? $data['deletedDate'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['bibIds'] = isset($data['bibIds']) ? $data['bibIds'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['callNumber'] = isset($data['callNumber']) ? $data['callNumber'] : null;
        $this->container['itemType'] = isset($data['itemType']) ? $data['itemType'] : null;
        $this->container['fixedFields'] = isset($data['fixedFields']) ? $data['fixedFields'] : null;
        $this->container['varFields'] = isset($data['varFields']) ? $data['varFields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
        if ($this->container['bibIds'] === null) {
            $invalidProperties[] = "'bibIds' can't be null";
        }
        if ($this->container['fixedFields'] === null) {
            $invalidProperties[] = "'fixedFields' can't be null";
        }
        if ($this->container['varFields'] === null) {
            $invalidProperties[] = "'varFields' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id the item record ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updatedDate'];
    }

    /**
     * Sets updatedDate
     *
     * @param \DateTime $updatedDate the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->container['updatedDate'] = $updatedDate;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate the date and time the record was created, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets deletedDate
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->container['deletedDate'];
    }

    /**
     * Sets deletedDate
     *
     * @param \DateTime $deletedDate the date the record was deleted, in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setDeletedDate($deletedDate)
    {
        $this->container['deletedDate'] = $deletedDate;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted whether the record has been deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets bibIds
     *
     * @return string[]
     */
    public function getBibIds()
    {
        return $this->container['bibIds'];
    }

    /**
     * Sets bibIds
     *
     * @param string[] $bibIds the IDs of the bibliographic records to which this item is linked
     *
     * @return $this
     */
    public function setBibIds($bibIds)
    {
        $this->container['bibIds'] = $bibIds;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \III\Sierra\V5\Models\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \III\Sierra\V5\Models\Location $location the location of the item, with the location code and name
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \III\Sierra\V5\Models\ItemStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \III\Sierra\V5\Models\ItemStatus $status the status of the item, with the code and display value, and a due date if the item is checked out
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode the barcode found in the item record
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets callNumber
     *
     * @return string
     */
    public function getCallNumber()
    {
        return $this->container['callNumber'];
    }

    /**
     * Sets callNumber
     *
     * @param string $callNumber the call number found in the item record
     *
     * @return $this
     */
    public function setCallNumber($callNumber)
    {
        $this->container['callNumber'] = $callNumber;

        return $this;
    }

    /**
     * Gets itemType
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->container['itemType'];
    }

    /**
     * Sets itemType
     *
     * @param string $itemType the type of the item record
     *
     * @return $this
     */
    public function setItemType($itemType)
    {
        $this->container['itemType'] = $itemType;

        return $this;
    }

    /**
     * Gets fixedFields
     *
     * @return \III\Sierra\V5\Models\map
     */
    public function getFixedFields()
    {
        return $this->container['fixedFields'];
    }

    /**
     * Sets fixedFields
     *
     * @param \III\Sierra\V5\Models\map $fixedFields the fixed-length fields from the item record
     *
     * @return $this
     */
    public function setFixedFields($fixedFields)
    {
        $this->container['fixedFields'] = $fixedFields;

        return $this;
    }

    /**
     * Gets varFields
     *
     * @return \III\Sierra\V5\Models\VarField[]
     */
    public function getVarFields()
    {
        return $this->container['varFields'];
    }

    /**
     * Sets varFields
     *
     * @param \III\Sierra\V5\Models\VarField[] $varFields the variable-length fields from the item record
     *
     * @return $this
     */
    public function setVarFields($varFields)
    {
        $this->container['varFields'] = $varFields;

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



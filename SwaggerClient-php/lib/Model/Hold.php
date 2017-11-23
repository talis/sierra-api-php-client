<?php
/**
 * Hold
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
 * Hold Class Doc Comment
 *
 * @category Class
 * @description the data describing a hold
 * @package  SierraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Hold implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hold';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'record' => 'string',
        'patron' => 'string',
        'frozen' => 'bool',
        'placed' => '\DateTime',
        'not_needed_after_date' => '\DateTime',
        'not_wanted_before_date' => '\DateTime',
        'location' => '\SierraApi\Model\Location',
        'pickup_location' => '\SierraApi\Model\Location',
        'status' => '\SierraApi\Model\HoldStatus',
        'record_type' => 'string',
        'priority' => 'int',
        'priority_queue_length' => 'int',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'record' => null,
        'patron' => null,
        'frozen' => null,
        'placed' => 'date',
        'not_needed_after_date' => 'date',
        'not_wanted_before_date' => 'date',
        'location' => null,
        'pickup_location' => null,
        'status' => null,
        'record_type' => null,
        'priority' => 'int32',
        'priority_queue_length' => 'int32',
        'note' => null
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
        'record' => 'record',
        'patron' => 'patron',
        'frozen' => 'frozen',
        'placed' => 'placed',
        'not_needed_after_date' => 'notNeededAfterDate',
        'not_wanted_before_date' => 'notWantedBeforeDate',
        'location' => 'location',
        'pickup_location' => 'pickupLocation',
        'status' => 'status',
        'record_type' => 'recordType',
        'priority' => 'priority',
        'priority_queue_length' => 'priorityQueueLength',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'record' => 'setRecord',
        'patron' => 'setPatron',
        'frozen' => 'setFrozen',
        'placed' => 'setPlaced',
        'not_needed_after_date' => 'setNotNeededAfterDate',
        'not_wanted_before_date' => 'setNotWantedBeforeDate',
        'location' => 'setLocation',
        'pickup_location' => 'setPickupLocation',
        'status' => 'setStatus',
        'record_type' => 'setRecordType',
        'priority' => 'setPriority',
        'priority_queue_length' => 'setPriorityQueueLength',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'record' => 'getRecord',
        'patron' => 'getPatron',
        'frozen' => 'getFrozen',
        'placed' => 'getPlaced',
        'not_needed_after_date' => 'getNotNeededAfterDate',
        'not_wanted_before_date' => 'getNotWantedBeforeDate',
        'location' => 'getLocation',
        'pickup_location' => 'getPickupLocation',
        'status' => 'getStatus',
        'record_type' => 'getRecordType',
        'priority' => 'getPriority',
        'priority_queue_length' => 'getPriorityQueueLength',
        'note' => 'getNote'
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
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['patron'] = isset($data['patron']) ? $data['patron'] : null;
        $this->container['frozen'] = isset($data['frozen']) ? $data['frozen'] : null;
        $this->container['placed'] = isset($data['placed']) ? $data['placed'] : null;
        $this->container['not_needed_after_date'] = isset($data['not_needed_after_date']) ? $data['not_needed_after_date'] : null;
        $this->container['not_wanted_before_date'] = isset($data['not_wanted_before_date']) ? $data['not_wanted_before_date'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['pickup_location'] = isset($data['pickup_location']) ? $data['pickup_location'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['record_type'] = isset($data['record_type']) ? $data['record_type'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['priority_queue_length'] = isset($data['priority_queue_length']) ? $data['priority_queue_length'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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
        if ($this->container['patron'] === null) {
            $invalidProperties[] = "'patron' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['patron'] === null) {
            return false;
        }
        return true;
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
     * @param string $id the hold ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets record
     *
     * @return string
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param string $record the bib, item, or volume record number associated with the hold (the endpoint returned for volume holds is not a valid API endpoint; it is returned for volume record ID information only)
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * Gets patron
     *
     * @return string
     */
    public function getPatron()
    {
        return $this->container['patron'];
    }

    /**
     * Sets patron
     *
     * @param string $patron the patron record number associated with the hold
     *
     * @return $this
     */
    public function setPatron($patron)
    {
        $this->container['patron'] = $patron;

        return $this;
    }

    /**
     * Gets frozen
     *
     * @return bool
     */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
     * Sets frozen
     *
     * @param bool $frozen whether the record is frozen
     *
     * @return $this
     */
    public function setFrozen($frozen)
    {
        $this->container['frozen'] = $frozen;

        return $this;
    }

    /**
     * Gets placed
     *
     * @return \DateTime
     */
    public function getPlaced()
    {
        return $this->container['placed'];
    }

    /**
     * Sets placed
     *
     * @param \DateTime $placed the date the hold was placed, in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setPlaced($placed)
    {
        $this->container['placed'] = $placed;

        return $this;
    }

    /**
     * Gets not_needed_after_date
     *
     * @return \DateTime
     */
    public function getNotNeededAfterDate()
    {
        return $this->container['not_needed_after_date'];
    }

    /**
     * Sets not_needed_after_date
     *
     * @param \DateTime $not_needed_after_date the date the hold expires, in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setNotNeededAfterDate($not_needed_after_date)
    {
        $this->container['not_needed_after_date'] = $not_needed_after_date;

        return $this;
    }

    /**
     * Gets not_wanted_before_date
     *
     * @return \DateTime
     */
    public function getNotWantedBeforeDate()
    {
        return $this->container['not_wanted_before_date'];
    }

    /**
     * Sets not_wanted_before_date
     *
     * @param \DateTime $not_wanted_before_date the date before which the system should not fill the hold, in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setNotWantedBeforeDate($not_wanted_before_date)
    {
        $this->container['not_wanted_before_date'] = $not_wanted_before_date;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \SierraApi\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \SierraApi\Model\Location $location the code of the location from which to fill the hold, if the hold is set for \"Limit to Location\" (does not apply to item-level holds)
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets pickup_location
     *
     * @return \SierraApi\Model\Location
     */
    public function getPickupLocation()
    {
        return $this->container['pickup_location'];
    }

    /**
     * Sets pickup_location
     *
     * @param \SierraApi\Model\Location $pickup_location the location code of the hold's pickup location
     *
     * @return $this
     */
    public function setPickupLocation($pickup_location)
    {
        $this->container['pickup_location'] = $pickup_location;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SierraApi\Model\HoldStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SierraApi\Model\HoldStatus $status the hold status code and description
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets record_type
     *
     * @return string
     */
    public function getRecordType()
    {
        return $this->container['record_type'];
    }

    /**
     * Sets record_type
     *
     * @param string $record_type a record type code, i.e., bib (b), item (i), or volume (j)
     *
     * @return $this
     */
    public function setRecordType($record_type)
    {
        $this->container['record_type'] = $record_type;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority the priority (place in line) of the hold
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets priority_queue_length
     *
     * @return int
     */
    public function getPriorityQueueLength()
    {
        return $this->container['priority_queue_length'];
    }

    /**
     * Sets priority_queue_length
     *
     * @param int $priority_queue_length the length of the hold queue
     *
     * @return $this
     */
    public function setPriorityQueueLength($priority_queue_length)
    {
        $this->container['priority_queue_length'] = $priority_queue_length;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note an informational note related to the hold
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


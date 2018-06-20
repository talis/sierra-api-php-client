<?php
/**
 * Hold
 *
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra\V5
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Models;

use \ArrayAccess;
/**
 * Hold Class Doc Comment
 *
 * @category    Class
 * @description the data describing a hold
 * @package     III\Sierra\V5
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Hold implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'record' => 'string',
        'patron' => 'string',
        'frozen' => 'bool',
        'placed' => '\DateTime',
        'notNeededAfterDate' => '\DateTime',
        'notWantedBeforeDate' => '\DateTime',
        'pickupByDate' => '\DateTime',
        'location' => '\Models\Location',
        'pickupLocation' => '\Models\Location',
        'status' => '\Models\HoldStatus',
        'recordType' => 'string',
        'priority' => 'int',
        'priorityQueueLength' => 'int',
        'note' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'record' => 'record',
        'patron' => 'patron',
        'frozen' => 'frozen',
        'placed' => 'placed',
        'notNeededAfterDate' => 'notNeededAfterDate',
        'notWantedBeforeDate' => 'notWantedBeforeDate',
        'pickupByDate' => 'pickupByDate',
        'location' => 'location',
        'pickupLocation' => 'pickupLocation',
        'status' => 'status',
        'recordType' => 'recordType',
        'priority' => 'priority',
        'priorityQueueLength' => 'priorityQueueLength',
        'note' => 'note'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'record' => 'setRecord',
        'patron' => 'setPatron',
        'frozen' => 'setFrozen',
        'placed' => 'setPlaced',
        'notNeededAfterDate' => 'setNotNeededAfterDate',
        'notWantedBeforeDate' => 'setNotWantedBeforeDate',
        'pickupByDate' => 'setPickupByDate',
        'location' => 'setLocation',
        'pickupLocation' => 'setPickupLocation',
        'status' => 'setStatus',
        'recordType' => 'setRecordType',
        'priority' => 'setPriority',
        'priorityQueueLength' => 'setPriorityQueueLength',
        'note' => 'setNote'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'record' => 'getRecord',
        'patron' => 'getPatron',
        'frozen' => 'getFrozen',
        'placed' => 'getPlaced',
        'notNeededAfterDate' => 'getNotNeededAfterDate',
        'notWantedBeforeDate' => 'getNotWantedBeforeDate',
        'pickupByDate' => 'getPickupByDate',
        'location' => 'getLocation',
        'pickupLocation' => 'getPickupLocation',
        'status' => 'getStatus',
        'recordType' => 'getRecordType',
        'priority' => 'getPriority',
        'priorityQueueLength' => 'getPriorityQueueLength',
        'note' => 'getNote'
    );
  
    
    /**
      * $id the hold ID
      * @var string
      */
    protected $id;
    
    /**
      * $record the bib, item, or volume record number associated with the hold (the endpoint returned for volume holds is not a valid API endpoint; it is returned for volume record ID information only)
      * @var string
      */
    protected $record;
    
    /**
      * $patron the patron record number associated with the hold
      * @var string
      */
    protected $patron;
    
    /**
      * $frozen whether the record is frozen
      * @var bool
      */
    protected $frozen;
    
    /**
      * $placed the date the hold was placed, in ISO 8601 format (yyyy-MM-dd)
      * @var \DateTime
      */
    protected $placed;
    
    /**
      * $notNeededAfterDate the date the hold expires, in ISO 8601 format (yyyy-MM-dd)
      * @var \DateTime
      */
    protected $notNeededAfterDate;
    
    /**
      * $notWantedBeforeDate the date before which the system should not fill the hold, in ISO 8601 format (yyyy-MM-dd)
      * @var \DateTime
      */
    protected $notWantedBeforeDate;
    
    /**
      * $pickupByDate the date that the hold is picked up by (in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ))
      * @var \DateTime
      */
    protected $pickupByDate;
    
    /**
      * $location the code of the location from which to fill the hold, if the hold is set for \"Limit to Location\" (does not apply to item-level holds)
      * @var \Models\Location
      */
    protected $location;
    
    /**
      * $pickupLocation the location code of the hold's pickup location
      * @var \Models\Location
      */
    protected $pickupLocation;
    
    /**
      * $status the hold status code and description
      * @var \Models\HoldStatus
      */
    protected $status;
    
    /**
      * $recordType a record type code, i.e., bib (b), item (i), or volume (j)
      * @var string
      */
    protected $recordType;
    
    /**
      * $priority the priority (place in line) of the hold
      * @var int
      */
    protected $priority;
    
    /**
      * $priorityQueueLength the length of the hold queue
      * @var int
      */
    protected $priorityQueueLength;
    
    /**
      * $note an informational note related to the hold
      * @var string
      */
    protected $note;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->record = $data["record"];
            $this->patron = $data["patron"];
            $this->frozen = $data["frozen"];
            $this->placed = $data["placed"];
            $this->notNeededAfterDate = $data["notNeededAfterDate"];
            $this->notWantedBeforeDate = $data["notWantedBeforeDate"];
            $this->pickupByDate = $data["pickupByDate"];
            $this->location = $data["location"];
            $this->pickupLocation = $data["pickupLocation"];
            $this->status = $data["status"];
            $this->recordType = $data["recordType"];
            $this->priority = $data["priority"];
            $this->priorityQueueLength = $data["priorityQueueLength"];
            $this->note = $data["note"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id the hold ID
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets record
     * @return string
     */
    public function getRecord()
    {
        return $this->record;
    }
  
    /**
     * Sets record
     * @param string $record the bib, item, or volume record number associated with the hold (the endpoint returned for volume holds is not a valid API endpoint; it is returned for volume record ID information only)
     * @return $this
     */
    public function setRecord($record)
    {
        
        $this->record = $record;
        return $this;
    }
    
    /**
     * Gets patron
     * @return string
     */
    public function getPatron()
    {
        return $this->patron;
    }
  
    /**
     * Sets patron
     * @param string $patron the patron record number associated with the hold
     * @return $this
     */
    public function setPatron($patron)
    {
        
        $this->patron = $patron;
        return $this;
    }
    
    /**
     * Gets frozen
     * @return bool
     */
    public function getFrozen()
    {
        return $this->frozen;
    }
  
    /**
     * Sets frozen
     * @param bool $frozen whether the record is frozen
     * @return $this
     */
    public function setFrozen($frozen)
    {
        
        $this->frozen = $frozen;
        return $this;
    }
    
    /**
     * Gets placed
     * @return \DateTime
     */
    public function getPlaced()
    {
        return $this->placed;
    }
  
    /**
     * Sets placed
     * @param \DateTime $placed the date the hold was placed, in ISO 8601 format (yyyy-MM-dd)
     * @return $this
     */
    public function setPlaced($placed)
    {
        
        $this->placed = $placed;
        return $this;
    }
    
    /**
     * Gets notNeededAfterDate
     * @return \DateTime
     */
    public function getNotNeededAfterDate()
    {
        return $this->notNeededAfterDate;
    }
  
    /**
     * Sets notNeededAfterDate
     * @param \DateTime $notNeededAfterDate the date the hold expires, in ISO 8601 format (yyyy-MM-dd)
     * @return $this
     */
    public function setNotNeededAfterDate($notNeededAfterDate)
    {
        
        $this->notNeededAfterDate = $notNeededAfterDate;
        return $this;
    }
    
    /**
     * Gets notWantedBeforeDate
     * @return \DateTime
     */
    public function getNotWantedBeforeDate()
    {
        return $this->notWantedBeforeDate;
    }
  
    /**
     * Sets notWantedBeforeDate
     * @param \DateTime $notWantedBeforeDate the date before which the system should not fill the hold, in ISO 8601 format (yyyy-MM-dd)
     * @return $this
     */
    public function setNotWantedBeforeDate($notWantedBeforeDate)
    {
        
        $this->notWantedBeforeDate = $notWantedBeforeDate;
        return $this;
    }
    
    /**
     * Gets pickupByDate
     * @return \DateTime
     */
    public function getPickupByDate()
    {
        return $this->pickupByDate;
    }
  
    /**
     * Sets pickupByDate
     * @param \DateTime $pickupByDate the date that the hold is picked up by (in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ))
     * @return $this
     */
    public function setPickupByDate($pickupByDate)
    {
        
        $this->pickupByDate = $pickupByDate;
        return $this;
    }
    
    /**
     * Gets location
     * @return \Models\Location
     */
    public function getLocation()
    {
        return $this->location;
    }
  
    /**
     * Sets location
     * @param \Models\Location $location the code of the location from which to fill the hold, if the hold is set for \"Limit to Location\" (does not apply to item-level holds)
     * @return $this
     */
    public function setLocation($location)
    {
        
        $this->location = $location;
        return $this;
    }
    
    /**
     * Gets pickupLocation
     * @return \Models\Location
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }
  
    /**
     * Sets pickupLocation
     * @param \Models\Location $pickupLocation the location code of the hold's pickup location
     * @return $this
     */
    public function setPickupLocation($pickupLocation)
    {
        
        $this->pickupLocation = $pickupLocation;
        return $this;
    }
    
    /**
     * Gets status
     * @return \Models\HoldStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param \Models\HoldStatus $status the hold status code and description
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets recordType
     * @return string
     */
    public function getRecordType()
    {
        return $this->recordType;
    }
  
    /**
     * Sets recordType
     * @param string $recordType a record type code, i.e., bib (b), item (i), or volume (j)
     * @return $this
     */
    public function setRecordType($recordType)
    {
        
        $this->recordType = $recordType;
        return $this;
    }
    
    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }
  
    /**
     * Sets priority
     * @param int $priority the priority (place in line) of the hold
     * @return $this
     */
    public function setPriority($priority)
    {
        
        $this->priority = $priority;
        return $this;
    }
    
    /**
     * Gets priorityQueueLength
     * @return int
     */
    public function getPriorityQueueLength()
    {
        return $this->priorityQueueLength;
    }
  
    /**
     * Sets priorityQueueLength
     * @param int $priorityQueueLength the length of the hold queue
     * @return $this
     */
    public function setPriorityQueueLength($priorityQueueLength)
    {
        
        $this->priorityQueueLength = $priorityQueueLength;
        return $this;
    }
    
    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string $note an informational note related to the hold
     * @return $this
     */
    public function setNote($note)
    {
        
        $this->note = $note;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}

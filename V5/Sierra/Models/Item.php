<?php
/**
 * Item
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
 * Item Class Doc Comment
 *
 * @category    Class
 * @description an item record
 * @package     III\Sierra\V5
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Item implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'updatedDate' => '\DateTime',
        'createdDate' => '\DateTime',
        'deletedDate' => '\DateTime',
        'deleted' => 'bool',
        'bibIds' => 'string[]',
        'location' => '\Models\Location',
        'status' => '\Models\ItemStatus',
        'barcode' => 'string',
        'callNumber' => 'string',
        'itemType' => 'string',
        'fixedFields' => '\Models\map',
        'varFields' => '\Models\VarField[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
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
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
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
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
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
    );
  
    
    /**
      * $id the item record ID
      * @var string
      */
    protected $id;
    
    /**
      * $updatedDate the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
      * @var \DateTime
      */
    protected $updatedDate;
    
    /**
      * $createdDate the date and time the record was created, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
      * @var \DateTime
      */
    protected $createdDate;
    
    /**
      * $deletedDate the date the record was deleted, in ISO 8601 format (yyyy-MM-dd)
      * @var \DateTime
      */
    protected $deletedDate;
    
    /**
      * $deleted whether the record has been deleted
      * @var bool
      */
    protected $deleted;
    
    /**
      * $bibIds the IDs of the bibliographic records to which this item is linked
      * @var string[]
      */
    protected $bibIds;
    
    /**
      * $location the location of the item, with the location code and name
      * @var \Models\Location
      */
    protected $location;
    
    /**
      * $status the status of the item, with the code and display value, and a due date if the item is checked out
      * @var \Models\ItemStatus
      */
    protected $status;
    
    /**
      * $barcode the barcode found in the item record
      * @var string
      */
    protected $barcode;
    
    /**
      * $callNumber the call number found in the item record
      * @var string
      */
    protected $callNumber;
    
    /**
      * $itemType the type of the item record
      * @var string
      */
    protected $itemType;
    
    /**
      * $fixedFields the fixed-length fields from the item record
      * @var \Models\map
      */
    protected $fixedFields;
    
    /**
      * $varFields the variable-length fields from the item record
      * @var \Models\VarField[]
      */
    protected $varFields;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->updatedDate = $data["updatedDate"];
            $this->createdDate = $data["createdDate"];
            $this->deletedDate = $data["deletedDate"];
            $this->deleted = $data["deleted"];
            $this->bibIds = $data["bibIds"];
            $this->location = $data["location"];
            $this->status = $data["status"];
            $this->barcode = $data["barcode"];
            $this->callNumber = $data["callNumber"];
            $this->itemType = $data["itemType"];
            $this->fixedFields = $data["fixedFields"];
            $this->varFields = $data["varFields"];
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
     * @param string $id the item record ID
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets updatedDate
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }
  
    /**
     * Sets updatedDate
     * @param \DateTime $updatedDate the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     * @return $this
     */
    public function setUpdatedDate($updatedDate)
    {
        
        $this->updatedDate = $updatedDate;
        return $this;
    }
    
    /**
     * Gets createdDate
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
  
    /**
     * Sets createdDate
     * @param \DateTime $createdDate the date and time the record was created, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        
        $this->createdDate = $createdDate;
        return $this;
    }
    
    /**
     * Gets deletedDate
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }
  
    /**
     * Sets deletedDate
     * @param \DateTime $deletedDate the date the record was deleted, in ISO 8601 format (yyyy-MM-dd)
     * @return $this
     */
    public function setDeletedDate($deletedDate)
    {
        
        $this->deletedDate = $deletedDate;
        return $this;
    }
    
    /**
     * Gets deleted
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
  
    /**
     * Sets deleted
     * @param bool $deleted whether the record has been deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        
        $this->deleted = $deleted;
        return $this;
    }
    
    /**
     * Gets bibIds
     * @return string[]
     */
    public function getBibIds()
    {
        return $this->bibIds;
    }
  
    /**
     * Sets bibIds
     * @param string[] $bibIds the IDs of the bibliographic records to which this item is linked
     * @return $this
     */
    public function setBibIds($bibIds)
    {
        
        $this->bibIds = $bibIds;
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
     * @param \Models\Location $location the location of the item, with the location code and name
     * @return $this
     */
    public function setLocation($location)
    {
        
        $this->location = $location;
        return $this;
    }
    
    /**
     * Gets status
     * @return \Models\ItemStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param \Models\ItemStatus $status the status of the item, with the code and display value, and a due date if the item is checked out
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets barcode
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
  
    /**
     * Sets barcode
     * @param string $barcode the barcode found in the item record
     * @return $this
     */
    public function setBarcode($barcode)
    {
        
        $this->barcode = $barcode;
        return $this;
    }
    
    /**
     * Gets callNumber
     * @return string
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }
  
    /**
     * Sets callNumber
     * @param string $callNumber the call number found in the item record
     * @return $this
     */
    public function setCallNumber($callNumber)
    {
        
        $this->callNumber = $callNumber;
        return $this;
    }
    
    /**
     * Gets itemType
     * @return string
     */
    public function getItemType()
    {
        return $this->itemType;
    }
  
    /**
     * Sets itemType
     * @param string $itemType the type of the item record
     * @return $this
     */
    public function setItemType($itemType)
    {
        
        $this->itemType = $itemType;
        return $this;
    }
    
    /**
     * Gets fixedFields
     * @return \Models\map
     */
    public function getFixedFields()
    {
        return $this->fixedFields;
    }
  
    /**
     * Sets fixedFields
     * @param \Models\map $fixedFields the fixed-length fields from the item record
     * @return $this
     */
    public function setFixedFields($fixedFields)
    {
        
        $this->fixedFields = $fixedFields;
        return $this;
    }
    
    /**
     * Gets varFields
     * @return \Models\VarField[]
     */
    public function getVarFields()
    {
        return $this->varFields;
    }
  
    /**
     * Sets varFields
     * @param \Models\VarField[] $varFields the variable-length fields from the item record
     * @return $this
     */
    public function setVarFields($varFields)
    {
        
        $this->varFields = $varFields;
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

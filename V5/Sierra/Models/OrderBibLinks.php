<?php
/**
 * OrderBibLinks
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
 * OrderBibLinks Class Doc Comment
 *
 * @category    Class
 * @description the links to the new order and bib records
 * @package     III\Sierra\V5
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderBibLinks implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'controlNumber' => 'string',
        'orderId' => 'string',
        'bibId' => 'string',
        'warnings' => 'string[]',
        'vendorIDNumbers' => 'string[]',
        'legacyOrderId' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'controlNumber' => 'controlNumber',
        'orderId' => 'orderId',
        'bibId' => 'bibId',
        'warnings' => 'warnings',
        'vendorIDNumbers' => 'vendorIDNumbers',
        'legacyOrderId' => 'legacyOrderId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'controlNumber' => 'setControlNumber',
        'orderId' => 'setOrderId',
        'bibId' => 'setBibId',
        'warnings' => 'setWarnings',
        'vendorIDNumbers' => 'setVendorIDNumbers',
        'legacyOrderId' => 'setLegacyOrderId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'controlNumber' => 'getControlNumber',
        'orderId' => 'getOrderId',
        'bibId' => 'getBibId',
        'warnings' => 'getWarnings',
        'vendorIDNumbers' => 'getVendorIDNumbers',
        'legacyOrderId' => 'getLegacyOrderId'
    );
  
    
    /**
      * $controlNumber the control number of the MARC record
      * @var string
      */
    protected $controlNumber;
    
    /**
      * $orderId the order ID
      * @var string
      */
    protected $orderId;
    
    /**
      * $bibId the bib ID
      * @var string
      */
    protected $bibId;
    
    /**
      * $warnings the warnings generated, if any, when creating orders and bibs
      * @var string[]
      */
    protected $warnings;
    
    /**
      * $vendorIDNumbers the list of the vendor's identification numbers for the associated title
      * @var string[]
      */
    protected $vendorIDNumbers;
    
    /**
      * $legacyOrderId the order ID in Innovative format, e.g., '.o12345678'
      * @var string
      */
    protected $legacyOrderId;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->controlNumber = $data["controlNumber"];
            $this->orderId = $data["orderId"];
            $this->bibId = $data["bibId"];
            $this->warnings = $data["warnings"];
            $this->vendorIDNumbers = $data["vendorIDNumbers"];
            $this->legacyOrderId = $data["legacyOrderId"];
        }
    }
    
    /**
     * Gets controlNumber
     * @return string
     */
    public function getControlNumber()
    {
        return $this->controlNumber;
    }
  
    /**
     * Sets controlNumber
     * @param string $controlNumber the control number of the MARC record
     * @return $this
     */
    public function setControlNumber($controlNumber)
    {
        
        $this->controlNumber = $controlNumber;
        return $this;
    }
    
    /**
     * Gets orderId
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
  
    /**
     * Sets orderId
     * @param string $orderId the order ID
     * @return $this
     */
    public function setOrderId($orderId)
    {
        
        $this->orderId = $orderId;
        return $this;
    }
    
    /**
     * Gets bibId
     * @return string
     */
    public function getBibId()
    {
        return $this->bibId;
    }
  
    /**
     * Sets bibId
     * @param string $bibId the bib ID
     * @return $this
     */
    public function setBibId($bibId)
    {
        
        $this->bibId = $bibId;
        return $this;
    }
    
    /**
     * Gets warnings
     * @return string[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
  
    /**
     * Sets warnings
     * @param string[] $warnings the warnings generated, if any, when creating orders and bibs
     * @return $this
     */
    public function setWarnings($warnings)
    {
        
        $this->warnings = $warnings;
        return $this;
    }
    
    /**
     * Gets vendorIDNumbers
     * @return string[]
     */
    public function getVendorIDNumbers()
    {
        return $this->vendorIDNumbers;
    }
  
    /**
     * Sets vendorIDNumbers
     * @param string[] $vendorIDNumbers the list of the vendor's identification numbers for the associated title
     * @return $this
     */
    public function setVendorIDNumbers($vendorIDNumbers)
    {
        
        $this->vendorIDNumbers = $vendorIDNumbers;
        return $this;
    }
    
    /**
     * Gets legacyOrderId
     * @return string
     */
    public function getLegacyOrderId()
    {
        return $this->legacyOrderId;
    }
  
    /**
     * Sets legacyOrderId
     * @param string $legacyOrderId the order ID in Innovative format, e.g., '.o12345678'
     * @return $this
     */
    public function setLegacyOrderId($legacyOrderId)
    {
        
        $this->legacyOrderId = $legacyOrderId;
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

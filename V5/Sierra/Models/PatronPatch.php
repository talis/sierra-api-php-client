<?php
/**
 * PatronPatch
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
 * PatronPatch Class Doc Comment
 *
 * @category    Class
 * @description a patron PUT request
 * @package     III\Sierra\V5
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PatronPatch implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'emails' => 'string[]',
        'names' => 'string[]',
        'addresses' => '\Models\Address[]',
        'phones' => '\Models\Phone[]',
        'pin' => 'string',
        'barcodes' => 'string[]',
        'patronType' => 'int',
        'expirationDate' => '\DateTime',
        'birthDate' => '\DateTime',
        'patronCodes' => '\Models\Codes',
        'blockInfo' => '\Models\Block',
        'uniqueIds' => 'string[]',
        'pMessage' => 'string',
        'homeLibraryCode' => 'string',
        'langPref' => 'string',
        'fixedFields' => '\Models\map',
        'varFields' => '\Models\VarField[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'emails' => 'emails',
        'names' => 'names',
        'addresses' => 'addresses',
        'phones' => 'phones',
        'pin' => 'pin',
        'barcodes' => 'barcodes',
        'patronType' => 'patronType',
        'expirationDate' => 'expirationDate',
        'birthDate' => 'birthDate',
        'patronCodes' => 'patronCodes',
        'blockInfo' => 'blockInfo',
        'uniqueIds' => 'uniqueIds',
        'pMessage' => 'pMessage',
        'homeLibraryCode' => 'homeLibraryCode',
        'langPref' => 'langPref',
        'fixedFields' => 'fixedFields',
        'varFields' => 'varFields'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'emails' => 'setEmails',
        'names' => 'setNames',
        'addresses' => 'setAddresses',
        'phones' => 'setPhones',
        'pin' => 'setPin',
        'barcodes' => 'setBarcodes',
        'patronType' => 'setPatronType',
        'expirationDate' => 'setExpirationDate',
        'birthDate' => 'setBirthDate',
        'patronCodes' => 'setPatronCodes',
        'blockInfo' => 'setBlockInfo',
        'uniqueIds' => 'setUniqueIds',
        'pMessage' => 'setPMessage',
        'homeLibraryCode' => 'setHomeLibraryCode',
        'langPref' => 'setLangPref',
        'fixedFields' => 'setFixedFields',
        'varFields' => 'setVarFields'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'emails' => 'getEmails',
        'names' => 'getNames',
        'addresses' => 'getAddresses',
        'phones' => 'getPhones',
        'pin' => 'getPin',
        'barcodes' => 'getBarcodes',
        'patronType' => 'getPatronType',
        'expirationDate' => 'getExpirationDate',
        'birthDate' => 'getBirthDate',
        'patronCodes' => 'getPatronCodes',
        'blockInfo' => 'getBlockInfo',
        'uniqueIds' => 'getUniqueIds',
        'pMessage' => 'getPMessage',
        'homeLibraryCode' => 'getHomeLibraryCode',
        'langPref' => 'getLangPref',
        'fixedFields' => 'getFixedFields',
        'varFields' => 'getVarFields'
    );
  
    
    /**
      * $emails a list of the patron's emails (must include all applicable email addresses for the patron)
      * @var string[]
      */
    protected $emails;
    
    /**
      * $names a list of the patron's names (must include all applicable names for the patron)
      * @var string[]
      */
    protected $names;
    
    /**
      * $addresses a list of the patron's addresses (must include all applicable addresses for the patron)
      * @var \Models\Address[]
      */
    protected $addresses;
    
    /**
      * $phones a list of the patron's phone numbers (must include all applicable phone numbers for the patron)
      * @var \Models\Phone[]
      */
    protected $phones;
    
    /**
      * $pin the patron's Personal Identification Number
      * @var string
      */
    protected $pin;
    
    /**
      * $barcodes patron's barcode
      * @var string[]
      */
    protected $barcodes;
    
    /**
      * $patronType the patron type code
      * @var int
      */
    protected $patronType;
    
    /**
      * $expirationDate the expiration date of the patron's borrowing privileges in ISO 8601 format (yyyy-MM-dd)
      * @var \DateTime
      */
    protected $expirationDate;
    
    /**
      * $birthDate the patron's date of birth in ISO 8601 format (yyyy-MM-dd)
      * @var \DateTime
      */
    protected $birthDate;
    
    /**
      * $patronCodes a list of patron codes
      * @var \Models\Codes
      */
    protected $patronCodes;
    
    /**
      * $blockInfo patron block information
      * @var \Models\Block
      */
    protected $blockInfo;
    
    /**
      * $uniqueIds the patron's unique IDs
      * @var string[]
      */
    protected $uniqueIds;
    
    /**
      * $pMessage the patron's message
      * @var string
      */
    protected $pMessage;
    
    /**
      * $homeLibraryCode the patron's home library
      * @var string
      */
    protected $homeLibraryCode;
    
    /**
      * $langPref the patron's language preference
      * @var string
      */
    protected $langPref;
    
    /**
      * $fixedFields the fixed-length fields from the patron record
      * @var \Models\map
      */
    protected $fixedFields;
    
    /**
      * $varFields the variable-length fields from the patron record
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
            $this->emails = $data["emails"];
            $this->names = $data["names"];
            $this->addresses = $data["addresses"];
            $this->phones = $data["phones"];
            $this->pin = $data["pin"];
            $this->barcodes = $data["barcodes"];
            $this->patronType = $data["patronType"];
            $this->expirationDate = $data["expirationDate"];
            $this->birthDate = $data["birthDate"];
            $this->patronCodes = $data["patronCodes"];
            $this->blockInfo = $data["blockInfo"];
            $this->uniqueIds = $data["uniqueIds"];
            $this->pMessage = $data["pMessage"];
            $this->homeLibraryCode = $data["homeLibraryCode"];
            $this->langPref = $data["langPref"];
            $this->fixedFields = $data["fixedFields"];
            $this->varFields = $data["varFields"];
        }
    }
    
    /**
     * Gets emails
     * @return string[]
     */
    public function getEmails()
    {
        return $this->emails;
    }
  
    /**
     * Sets emails
     * @param string[] $emails a list of the patron's emails (must include all applicable email addresses for the patron)
     * @return $this
     */
    public function setEmails($emails)
    {
        
        $this->emails = $emails;
        return $this;
    }
    
    /**
     * Gets names
     * @return string[]
     */
    public function getNames()
    {
        return $this->names;
    }
  
    /**
     * Sets names
     * @param string[] $names a list of the patron's names (must include all applicable names for the patron)
     * @return $this
     */
    public function setNames($names)
    {
        
        $this->names = $names;
        return $this;
    }
    
    /**
     * Gets addresses
     * @return \Models\Address[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
  
    /**
     * Sets addresses
     * @param \Models\Address[] $addresses a list of the patron's addresses (must include all applicable addresses for the patron)
     * @return $this
     */
    public function setAddresses($addresses)
    {
        
        $this->addresses = $addresses;
        return $this;
    }
    
    /**
     * Gets phones
     * @return \Models\Phone[]
     */
    public function getPhones()
    {
        return $this->phones;
    }
  
    /**
     * Sets phones
     * @param \Models\Phone[] $phones a list of the patron's phone numbers (must include all applicable phone numbers for the patron)
     * @return $this
     */
    public function setPhones($phones)
    {
        
        $this->phones = $phones;
        return $this;
    }
    
    /**
     * Gets pin
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }
  
    /**
     * Sets pin
     * @param string $pin the patron's Personal Identification Number
     * @return $this
     */
    public function setPin($pin)
    {
        
        $this->pin = $pin;
        return $this;
    }
    
    /**
     * Gets barcodes
     * @return string[]
     */
    public function getBarcodes()
    {
        return $this->barcodes;
    }
  
    /**
     * Sets barcodes
     * @param string[] $barcodes patron's barcode
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        
        $this->barcodes = $barcodes;
        return $this;
    }
    
    /**
     * Gets patronType
     * @return int
     */
    public function getPatronType()
    {
        return $this->patronType;
    }
  
    /**
     * Sets patronType
     * @param int $patronType the patron type code
     * @return $this
     */
    public function setPatronType($patronType)
    {
        
        $this->patronType = $patronType;
        return $this;
    }
    
    /**
     * Gets expirationDate
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
  
    /**
     * Sets expirationDate
     * @param \DateTime $expirationDate the expiration date of the patron's borrowing privileges in ISO 8601 format (yyyy-MM-dd)
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        
        $this->expirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Gets birthDate
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
  
    /**
     * Sets birthDate
     * @param \DateTime $birthDate the patron's date of birth in ISO 8601 format (yyyy-MM-dd)
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        
        $this->birthDate = $birthDate;
        return $this;
    }
    
    /**
     * Gets patronCodes
     * @return \Models\Codes
     */
    public function getPatronCodes()
    {
        return $this->patronCodes;
    }
  
    /**
     * Sets patronCodes
     * @param \Models\Codes $patronCodes a list of patron codes
     * @return $this
     */
    public function setPatronCodes($patronCodes)
    {
        
        $this->patronCodes = $patronCodes;
        return $this;
    }
    
    /**
     * Gets blockInfo
     * @return \Models\Block
     */
    public function getBlockInfo()
    {
        return $this->blockInfo;
    }
  
    /**
     * Sets blockInfo
     * @param \Models\Block $blockInfo patron block information
     * @return $this
     */
    public function setBlockInfo($blockInfo)
    {
        
        $this->blockInfo = $blockInfo;
        return $this;
    }
    
    /**
     * Gets uniqueIds
     * @return string[]
     */
    public function getUniqueIds()
    {
        return $this->uniqueIds;
    }
  
    /**
     * Sets uniqueIds
     * @param string[] $uniqueIds the patron's unique IDs
     * @return $this
     */
    public function setUniqueIds($uniqueIds)
    {
        
        $this->uniqueIds = $uniqueIds;
        return $this;
    }
    
    /**
     * Gets pMessage
     * @return string
     */
    public function getPMessage()
    {
        return $this->pMessage;
    }
  
    /**
     * Sets pMessage
     * @param string $pMessage the patron's message
     * @return $this
     */
    public function setPMessage($pMessage)
    {
        
        $this->pMessage = $pMessage;
        return $this;
    }
    
    /**
     * Gets homeLibraryCode
     * @return string
     */
    public function getHomeLibraryCode()
    {
        return $this->homeLibraryCode;
    }
  
    /**
     * Sets homeLibraryCode
     * @param string $homeLibraryCode the patron's home library
     * @return $this
     */
    public function setHomeLibraryCode($homeLibraryCode)
    {
        
        $this->homeLibraryCode = $homeLibraryCode;
        return $this;
    }
    
    /**
     * Gets langPref
     * @return string
     */
    public function getLangPref()
    {
        return $this->langPref;
    }
  
    /**
     * Sets langPref
     * @param string $langPref the patron's language preference
     * @return $this
     */
    public function setLangPref($langPref)
    {
        
        $this->langPref = $langPref;
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
     * @param \Models\map $fixedFields the fixed-length fields from the patron record
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
     * @param \Models\VarField[] $varFields the variable-length fields from the patron record
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

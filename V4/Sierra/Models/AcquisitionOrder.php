<?php
/**
 * AcquisitionOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra\V4
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
 * AcquisitionOrder Class Doc Comment
 *
 * @category    Class
 * @description the aquisition order&#39;s details
 * @package     III\Sierra\V4
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AcquisitionOrder implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'login' => 'string',
        'copies' => 'int',
        'allocation' => '\Models\AcquisitionOrderAllocation[]',
        'vendor' => 'string',
        'price' => 'double',
        'acquisitionType' => 'string',
        'claim' => 'string',
        'code1' => 'string',
        'code2' => 'string',
        'code3' => 'string',
        'code4' => 'string',
        'format' => 'string',
        'orderNote' => 'string',
        'orderType' => 'string',
        'raction' => 'string',
        'rloc' => 'string',
        'bloc' => 'string',
        'status' => 'string',
        'tloc' => 'string',
        'odate' => 'string',
        'language' => 'string',
        'country' => 'string',
        'volume' => 'int',
        'note' => 'string[]',
        'staffNote' => 'string[]',
        'vendorNote' => 'string[]',
        'vendorIDNumber' => 'string[]',
        'selector' => 'string[]',
        'vendorAccount' => 'string[]',
        'currencyCode' => 'string',
        'identity' => 'string[]',
        'shipTo' => 'string[]',
        'requestor' => 'string[]',
        'oldOrderNumber' => 'string[]',
        'paidNote' => 'string[]',
        'vendorAddress' => 'string[]',
        'customVarField1' => 'string[]',
        'customVarField2' => 'string[]',
        'customVarField3' => 'string[]',
        'customVarField4' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'login' => 'login',
        'copies' => 'copies',
        'allocation' => 'allocation',
        'vendor' => 'vendor',
        'price' => 'price',
        'acquisitionType' => 'acquisitionType',
        'claim' => 'claim',
        'code1' => 'code1',
        'code2' => 'code2',
        'code3' => 'code3',
        'code4' => 'code4',
        'format' => 'format',
        'orderNote' => 'orderNote',
        'orderType' => 'orderType',
        'raction' => 'raction',
        'rloc' => 'rloc',
        'bloc' => 'bloc',
        'status' => 'status',
        'tloc' => 'tloc',
        'odate' => 'odate',
        'language' => 'language',
        'country' => 'country',
        'volume' => 'volume',
        'note' => 'note',
        'staffNote' => 'staffNote',
        'vendorNote' => 'vendorNote',
        'vendorIDNumber' => 'vendorIDNumber',
        'selector' => 'selector',
        'vendorAccount' => 'vendorAccount',
        'currencyCode' => 'currencyCode',
        'identity' => 'identity',
        'shipTo' => 'shipTo',
        'requestor' => 'requestor',
        'oldOrderNumber' => 'oldOrderNumber',
        'paidNote' => 'paidNote',
        'vendorAddress' => 'vendorAddress',
        'customVarField1' => 'customVarField1',
        'customVarField2' => 'customVarField2',
        'customVarField3' => 'customVarField3',
        'customVarField4' => 'customVarField4'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'login' => 'setLogin',
        'copies' => 'setCopies',
        'allocation' => 'setAllocation',
        'vendor' => 'setVendor',
        'price' => 'setPrice',
        'acquisitionType' => 'setAcquisitionType',
        'claim' => 'setClaim',
        'code1' => 'setCode1',
        'code2' => 'setCode2',
        'code3' => 'setCode3',
        'code4' => 'setCode4',
        'format' => 'setFormat',
        'orderNote' => 'setOrderNote',
        'orderType' => 'setOrderType',
        'raction' => 'setRaction',
        'rloc' => 'setRloc',
        'bloc' => 'setBloc',
        'status' => 'setStatus',
        'tloc' => 'setTloc',
        'odate' => 'setOdate',
        'language' => 'setLanguage',
        'country' => 'setCountry',
        'volume' => 'setVolume',
        'note' => 'setNote',
        'staffNote' => 'setStaffNote',
        'vendorNote' => 'setVendorNote',
        'vendorIDNumber' => 'setVendorIDNumber',
        'selector' => 'setSelector',
        'vendorAccount' => 'setVendorAccount',
        'currencyCode' => 'setCurrencyCode',
        'identity' => 'setIdentity',
        'shipTo' => 'setShipTo',
        'requestor' => 'setRequestor',
        'oldOrderNumber' => 'setOldOrderNumber',
        'paidNote' => 'setPaidNote',
        'vendorAddress' => 'setVendorAddress',
        'customVarField1' => 'setCustomVarField1',
        'customVarField2' => 'setCustomVarField2',
        'customVarField3' => 'setCustomVarField3',
        'customVarField4' => 'setCustomVarField4'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'login' => 'getLogin',
        'copies' => 'getCopies',
        'allocation' => 'getAllocation',
        'vendor' => 'getVendor',
        'price' => 'getPrice',
        'acquisitionType' => 'getAcquisitionType',
        'claim' => 'getClaim',
        'code1' => 'getCode1',
        'code2' => 'getCode2',
        'code3' => 'getCode3',
        'code4' => 'getCode4',
        'format' => 'getFormat',
        'orderNote' => 'getOrderNote',
        'orderType' => 'getOrderType',
        'raction' => 'getRaction',
        'rloc' => 'getRloc',
        'bloc' => 'getBloc',
        'status' => 'getStatus',
        'tloc' => 'getTloc',
        'odate' => 'getOdate',
        'language' => 'getLanguage',
        'country' => 'getCountry',
        'volume' => 'getVolume',
        'note' => 'getNote',
        'staffNote' => 'getStaffNote',
        'vendorNote' => 'getVendorNote',
        'vendorIDNumber' => 'getVendorIDNumber',
        'selector' => 'getSelector',
        'vendorAccount' => 'getVendorAccount',
        'currencyCode' => 'getCurrencyCode',
        'identity' => 'getIdentity',
        'shipTo' => 'getShipTo',
        'requestor' => 'getRequestor',
        'oldOrderNumber' => 'getOldOrderNumber',
        'paidNote' => 'getPaidNote',
        'vendorAddress' => 'getVendorAddress',
        'customVarField1' => 'getCustomVarField1',
        'customVarField2' => 'getCustomVarField2',
        'customVarField3' => 'getCustomVarField3',
        'customVarField4' => 'getCustomVarField4'
    );
  
    
    /**
      * $login the Sierra username to associate with created orders
      * @var string
      */
    protected $login;
    
    /**
      * $copies the number of copies ordered
      * @var int
      */
    protected $copies;
    
    /**
      * $allocation a list of data describing how the order is allocated
      * @var \Models\AcquisitionOrderAllocation[]
      */
    protected $allocation;
    
    /**
      * $vendor the library-defined code for the vendor who handles the order
      * @var string
      */
    protected $vendor;
    
    /**
      * $price the estimated price per copy
      * @var double
      */
    protected $price;
    
    /**
      * $acquisitionType the library-defined acquisition type code or the method of paying for the material
      * @var string
      */
    protected $acquisitionType;
    
    /**
      * $claim the claiming activity code
      * @var string
      */
    protected $claim;
    
    /**
      * $code1 the library-defined order code 1
      * @var string
      */
    protected $code1;
    
    /**
      * $code2 the library-defined order code 2
      * @var string
      */
    protected $code2;
    
    /**
      * $code3 the library-defined order code 3
      * @var string
      */
    protected $code3;
    
    /**
      * $code4 the library-defined order code 4
      * @var string
      */
    protected $code4;
    
    /**
      * $format a code representing the physical form of the material (any hash mark symbols '#' must be URL encoded
      * @var string
      */
    protected $format;
    
    /**
      * $orderNote a code representing an order note to print on the purchase order form
      * @var string
      */
    protected $orderNote;
    
    /**
      * $orderType a code representing the type of order
      * @var string
      */
    protected $orderType;
    
    /**
      * $raction a code representing the receiving action
      * @var string
      */
    protected $raction;
    
    /**
      * $rloc a code representing the receiving location
      * @var string
      */
    protected $rloc;
    
    /**
      * $bloc a code representing the billing location
      * @var string
      */
    protected $bloc;
    
    /**
      * $status a system-generated code representing the financial encumbering or disencumbering status of a record
      * @var string
      */
    protected $status;
    
    /**
      * $tloc a code representing a temporary shelving location
      * @var string
      */
    protected $tloc;
    
    /**
      * $odate the date the material was ordered, in the format mm-dd-yy
      * @var string
      */
    protected $odate;
    
    /**
      * $language the language of the material, based on the MARC 21 Code List for Languages (also used by UNIMARC format)
      * @var string
      */
    protected $language;
    
    /**
      * $country the country of publication, based on the MARC 21 Code List of Countries, or ISO 3166/MA standard for UNIMARC systems
      * @var string
      */
    protected $country;
    
    /**
      * $volume the number of volumes for this title
      * @var int
      */
    protected $volume;
    
    /**
      * $note a free-text note (repeatable parameter)
      * @var string[]
      */
    protected $note;
    
    /**
      * $staffNote a free-text internal (staff) note (repeatable parameter)
      * @var string[]
      */
    protected $staffNote;
    
    /**
      * $vendorNote a free-text note for vendor order information (repeatable parameter)
      * @var string[]
      */
    protected $vendorNote;
    
    /**
      * $vendorIDNumber the vendor's identification number for this title (repeatable parameter)
      * @var string[]
      */
    protected $vendorIDNumber;
    
    /**
      * $selector a free text note identifying the selector of the item (repeatable parameter)
      * @var string[]
      */
    protected $selector;
    
    /**
      * $vendorAccount the vendor account number (repeatable parameter)
      * @var string[]
      */
    protected $vendorAccount;
    
    /**
      * $currencyCode the foreign currency code
      * @var string
      */
    protected $currencyCode;
    
    /**
      * $identity a free text note, used to distinguish between order records (repeatable parameter)
      * @var string[]
      */
    protected $identity;
    
    /**
      * $shipTo the library address to which the vendor should ship materials (repeatable parameter)
      * @var string[]
      */
    protected $shipTo;
    
    /**
      * $requestor the requestor (repeatable parameter)
      * @var string[]
      */
    protected $requestor;
    
    /**
      * $oldOrderNumber the old order number (repeatable parameter)
      * @var string[]
      */
    protected $oldOrderNumber;
    
    /**
      * $paidNote the paid note (repeatable parameter)
      * @var string[]
      */
    protected $paidNote;
    
    /**
      * $vendorAddress the vendor address (repeatable parameter)
      * @var string[]
      */
    protected $vendorAddress;
    
    /**
      * $customVarField1 custom var field 1 (repeatable parameter)
      * @var string[]
      */
    protected $customVarField1;
    
    /**
      * $customVarField2 custom var field 2 (repeatable parameter)
      * @var string[]
      */
    protected $customVarField2;
    
    /**
      * $customVarField3 custom var field 3 (repeatable parameter)
      * @var string[]
      */
    protected $customVarField3;
    
    /**
      * $customVarField4 custom var field 4 (repeatable parameter)
      * @var string[]
      */
    protected $customVarField4;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->login = $data["login"];
            $this->copies = $data["copies"];
            $this->allocation = $data["allocation"];
            $this->vendor = $data["vendor"];
            $this->price = $data["price"];
            $this->acquisitionType = $data["acquisitionType"];
            $this->claim = $data["claim"];
            $this->code1 = $data["code1"];
            $this->code2 = $data["code2"];
            $this->code3 = $data["code3"];
            $this->code4 = $data["code4"];
            $this->format = $data["format"];
            $this->orderNote = $data["orderNote"];
            $this->orderType = $data["orderType"];
            $this->raction = $data["raction"];
            $this->rloc = $data["rloc"];
            $this->bloc = $data["bloc"];
            $this->status = $data["status"];
            $this->tloc = $data["tloc"];
            $this->odate = $data["odate"];
            $this->language = $data["language"];
            $this->country = $data["country"];
            $this->volume = $data["volume"];
            $this->note = $data["note"];
            $this->staffNote = $data["staffNote"];
            $this->vendorNote = $data["vendorNote"];
            $this->vendorIDNumber = $data["vendorIDNumber"];
            $this->selector = $data["selector"];
            $this->vendorAccount = $data["vendorAccount"];
            $this->currencyCode = $data["currencyCode"];
            $this->identity = $data["identity"];
            $this->shipTo = $data["shipTo"];
            $this->requestor = $data["requestor"];
            $this->oldOrderNumber = $data["oldOrderNumber"];
            $this->paidNote = $data["paidNote"];
            $this->vendorAddress = $data["vendorAddress"];
            $this->customVarField1 = $data["customVarField1"];
            $this->customVarField2 = $data["customVarField2"];
            $this->customVarField3 = $data["customVarField3"];
            $this->customVarField4 = $data["customVarField4"];
        }
    }
    
    /**
     * Gets login
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
  
    /**
     * Sets login
     * @param string $login the Sierra username to associate with created orders
     * @return $this
     */
    public function setLogin($login)
    {
        
        $this->login = $login;
        return $this;
    }
    
    /**
     * Gets copies
     * @return int
     */
    public function getCopies()
    {
        return $this->copies;
    }
  
    /**
     * Sets copies
     * @param int $copies the number of copies ordered
     * @return $this
     */
    public function setCopies($copies)
    {
        
        $this->copies = $copies;
        return $this;
    }
    
    /**
     * Gets allocation
     * @return \Models\AcquisitionOrderAllocation[]
     */
    public function getAllocation()
    {
        return $this->allocation;
    }
  
    /**
     * Sets allocation
     * @param \Models\AcquisitionOrderAllocation[] $allocation a list of data describing how the order is allocated
     * @return $this
     */
    public function setAllocation($allocation)
    {
        
        $this->allocation = $allocation;
        return $this;
    }
    
    /**
     * Gets vendor
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }
  
    /**
     * Sets vendor
     * @param string $vendor the library-defined code for the vendor who handles the order
     * @return $this
     */
    public function setVendor($vendor)
    {
        
        $this->vendor = $vendor;
        return $this;
    }
    
    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }
  
    /**
     * Sets price
     * @param double $price the estimated price per copy
     * @return $this
     */
    public function setPrice($price)
    {
        
        $this->price = $price;
        return $this;
    }
    
    /**
     * Gets acquisitionType
     * @return string
     */
    public function getAcquisitionType()
    {
        return $this->acquisitionType;
    }
  
    /**
     * Sets acquisitionType
     * @param string $acquisitionType the library-defined acquisition type code or the method of paying for the material
     * @return $this
     */
    public function setAcquisitionType($acquisitionType)
    {
        
        $this->acquisitionType = $acquisitionType;
        return $this;
    }
    
    /**
     * Gets claim
     * @return string
     */
    public function getClaim()
    {
        return $this->claim;
    }
  
    /**
     * Sets claim
     * @param string $claim the claiming activity code
     * @return $this
     */
    public function setClaim($claim)
    {
        
        $this->claim = $claim;
        return $this;
    }
    
    /**
     * Gets code1
     * @return string
     */
    public function getCode1()
    {
        return $this->code1;
    }
  
    /**
     * Sets code1
     * @param string $code1 the library-defined order code 1
     * @return $this
     */
    public function setCode1($code1)
    {
        
        $this->code1 = $code1;
        return $this;
    }
    
    /**
     * Gets code2
     * @return string
     */
    public function getCode2()
    {
        return $this->code2;
    }
  
    /**
     * Sets code2
     * @param string $code2 the library-defined order code 2
     * @return $this
     */
    public function setCode2($code2)
    {
        
        $this->code2 = $code2;
        return $this;
    }
    
    /**
     * Gets code3
     * @return string
     */
    public function getCode3()
    {
        return $this->code3;
    }
  
    /**
     * Sets code3
     * @param string $code3 the library-defined order code 3
     * @return $this
     */
    public function setCode3($code3)
    {
        
        $this->code3 = $code3;
        return $this;
    }
    
    /**
     * Gets code4
     * @return string
     */
    public function getCode4()
    {
        return $this->code4;
    }
  
    /**
     * Sets code4
     * @param string $code4 the library-defined order code 4
     * @return $this
     */
    public function setCode4($code4)
    {
        
        $this->code4 = $code4;
        return $this;
    }
    
    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
  
    /**
     * Sets format
     * @param string $format a code representing the physical form of the material (any hash mark symbols '#' must be URL encoded
     * @return $this
     */
    public function setFormat($format)
    {
        
        $this->format = $format;
        return $this;
    }
    
    /**
     * Gets orderNote
     * @return string
     */
    public function getOrderNote()
    {
        return $this->orderNote;
    }
  
    /**
     * Sets orderNote
     * @param string $orderNote a code representing an order note to print on the purchase order form
     * @return $this
     */
    public function setOrderNote($orderNote)
    {
        
        $this->orderNote = $orderNote;
        return $this;
    }
    
    /**
     * Gets orderType
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }
  
    /**
     * Sets orderType
     * @param string $orderType a code representing the type of order
     * @return $this
     */
    public function setOrderType($orderType)
    {
        
        $this->orderType = $orderType;
        return $this;
    }
    
    /**
     * Gets raction
     * @return string
     */
    public function getRaction()
    {
        return $this->raction;
    }
  
    /**
     * Sets raction
     * @param string $raction a code representing the receiving action
     * @return $this
     */
    public function setRaction($raction)
    {
        
        $this->raction = $raction;
        return $this;
    }
    
    /**
     * Gets rloc
     * @return string
     */
    public function getRloc()
    {
        return $this->rloc;
    }
  
    /**
     * Sets rloc
     * @param string $rloc a code representing the receiving location
     * @return $this
     */
    public function setRloc($rloc)
    {
        
        $this->rloc = $rloc;
        return $this;
    }
    
    /**
     * Gets bloc
     * @return string
     */
    public function getBloc()
    {
        return $this->bloc;
    }
  
    /**
     * Sets bloc
     * @param string $bloc a code representing the billing location
     * @return $this
     */
    public function setBloc($bloc)
    {
        
        $this->bloc = $bloc;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status a system-generated code representing the financial encumbering or disencumbering status of a record
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets tloc
     * @return string
     */
    public function getTloc()
    {
        return $this->tloc;
    }
  
    /**
     * Sets tloc
     * @param string $tloc a code representing a temporary shelving location
     * @return $this
     */
    public function setTloc($tloc)
    {
        
        $this->tloc = $tloc;
        return $this;
    }
    
    /**
     * Gets odate
     * @return string
     */
    public function getOdate()
    {
        return $this->odate;
    }
  
    /**
     * Sets odate
     * @param string $odate the date the material was ordered, in the format mm-dd-yy
     * @return $this
     */
    public function setOdate($odate)
    {
        
        $this->odate = $odate;
        return $this;
    }
    
    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
  
    /**
     * Sets language
     * @param string $language the language of the material, based on the MARC 21 Code List for Languages (also used by UNIMARC format)
     * @return $this
     */
    public function setLanguage($language)
    {
        
        $this->language = $language;
        return $this;
    }
    
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country the country of publication, based on the MARC 21 Code List of Countries, or ISO 3166/MA standard for UNIMARC systems
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets volume
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }
  
    /**
     * Sets volume
     * @param int $volume the number of volumes for this title
     * @return $this
     */
    public function setVolume($volume)
    {
        
        $this->volume = $volume;
        return $this;
    }
    
    /**
     * Gets note
     * @return string[]
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string[] $note a free-text note (repeatable parameter)
     * @return $this
     */
    public function setNote($note)
    {
        
        $this->note = $note;
        return $this;
    }
    
    /**
     * Gets staffNote
     * @return string[]
     */
    public function getStaffNote()
    {
        return $this->staffNote;
    }
  
    /**
     * Sets staffNote
     * @param string[] $staffNote a free-text internal (staff) note (repeatable parameter)
     * @return $this
     */
    public function setStaffNote($staffNote)
    {
        
        $this->staffNote = $staffNote;
        return $this;
    }
    
    /**
     * Gets vendorNote
     * @return string[]
     */
    public function getVendorNote()
    {
        return $this->vendorNote;
    }
  
    /**
     * Sets vendorNote
     * @param string[] $vendorNote a free-text note for vendor order information (repeatable parameter)
     * @return $this
     */
    public function setVendorNote($vendorNote)
    {
        
        $this->vendorNote = $vendorNote;
        return $this;
    }
    
    /**
     * Gets vendorIDNumber
     * @return string[]
     */
    public function getVendorIDNumber()
    {
        return $this->vendorIDNumber;
    }
  
    /**
     * Sets vendorIDNumber
     * @param string[] $vendorIDNumber the vendor's identification number for this title (repeatable parameter)
     * @return $this
     */
    public function setVendorIDNumber($vendorIDNumber)
    {
        
        $this->vendorIDNumber = $vendorIDNumber;
        return $this;
    }
    
    /**
     * Gets selector
     * @return string[]
     */
    public function getSelector()
    {
        return $this->selector;
    }
  
    /**
     * Sets selector
     * @param string[] $selector a free text note identifying the selector of the item (repeatable parameter)
     * @return $this
     */
    public function setSelector($selector)
    {
        
        $this->selector = $selector;
        return $this;
    }
    
    /**
     * Gets vendorAccount
     * @return string[]
     */
    public function getVendorAccount()
    {
        return $this->vendorAccount;
    }
  
    /**
     * Sets vendorAccount
     * @param string[] $vendorAccount the vendor account number (repeatable parameter)
     * @return $this
     */
    public function setVendorAccount($vendorAccount)
    {
        
        $this->vendorAccount = $vendorAccount;
        return $this;
    }
    
    /**
     * Gets currencyCode
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
  
    /**
     * Sets currencyCode
     * @param string $currencyCode the foreign currency code
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        
        $this->currencyCode = $currencyCode;
        return $this;
    }
    
    /**
     * Gets identity
     * @return string[]
     */
    public function getIdentity()
    {
        return $this->identity;
    }
  
    /**
     * Sets identity
     * @param string[] $identity a free text note, used to distinguish between order records (repeatable parameter)
     * @return $this
     */
    public function setIdentity($identity)
    {
        
        $this->identity = $identity;
        return $this;
    }
    
    /**
     * Gets shipTo
     * @return string[]
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }
  
    /**
     * Sets shipTo
     * @param string[] $shipTo the library address to which the vendor should ship materials (repeatable parameter)
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        
        $this->shipTo = $shipTo;
        return $this;
    }
    
    /**
     * Gets requestor
     * @return string[]
     */
    public function getRequestor()
    {
        return $this->requestor;
    }
  
    /**
     * Sets requestor
     * @param string[] $requestor the requestor (repeatable parameter)
     * @return $this
     */
    public function setRequestor($requestor)
    {
        
        $this->requestor = $requestor;
        return $this;
    }
    
    /**
     * Gets oldOrderNumber
     * @return string[]
     */
    public function getOldOrderNumber()
    {
        return $this->oldOrderNumber;
    }
  
    /**
     * Sets oldOrderNumber
     * @param string[] $oldOrderNumber the old order number (repeatable parameter)
     * @return $this
     */
    public function setOldOrderNumber($oldOrderNumber)
    {
        
        $this->oldOrderNumber = $oldOrderNumber;
        return $this;
    }
    
    /**
     * Gets paidNote
     * @return string[]
     */
    public function getPaidNote()
    {
        return $this->paidNote;
    }
  
    /**
     * Sets paidNote
     * @param string[] $paidNote the paid note (repeatable parameter)
     * @return $this
     */
    public function setPaidNote($paidNote)
    {
        
        $this->paidNote = $paidNote;
        return $this;
    }
    
    /**
     * Gets vendorAddress
     * @return string[]
     */
    public function getVendorAddress()
    {
        return $this->vendorAddress;
    }
  
    /**
     * Sets vendorAddress
     * @param string[] $vendorAddress the vendor address (repeatable parameter)
     * @return $this
     */
    public function setVendorAddress($vendorAddress)
    {
        
        $this->vendorAddress = $vendorAddress;
        return $this;
    }
    
    /**
     * Gets customVarField1
     * @return string[]
     */
    public function getCustomVarField1()
    {
        return $this->customVarField1;
    }
  
    /**
     * Sets customVarField1
     * @param string[] $customVarField1 custom var field 1 (repeatable parameter)
     * @return $this
     */
    public function setCustomVarField1($customVarField1)
    {
        
        $this->customVarField1 = $customVarField1;
        return $this;
    }
    
    /**
     * Gets customVarField2
     * @return string[]
     */
    public function getCustomVarField2()
    {
        return $this->customVarField2;
    }
  
    /**
     * Sets customVarField2
     * @param string[] $customVarField2 custom var field 2 (repeatable parameter)
     * @return $this
     */
    public function setCustomVarField2($customVarField2)
    {
        
        $this->customVarField2 = $customVarField2;
        return $this;
    }
    
    /**
     * Gets customVarField3
     * @return string[]
     */
    public function getCustomVarField3()
    {
        return $this->customVarField3;
    }
  
    /**
     * Sets customVarField3
     * @param string[] $customVarField3 custom var field 3 (repeatable parameter)
     * @return $this
     */
    public function setCustomVarField3($customVarField3)
    {
        
        $this->customVarField3 = $customVarField3;
        return $this;
    }
    
    /**
     * Gets customVarField4
     * @return string[]
     */
    public function getCustomVarField4()
    {
        return $this->customVarField4;
    }
  
    /**
     * Sets customVarField4
     * @param string[] $customVarField4 custom var field 4 (repeatable parameter)
     * @return $this
     */
    public function setCustomVarField4($customVarField4)
    {
        
        $this->customVarField4 = $customVarField4;
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

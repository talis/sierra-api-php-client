<?php
/**
 * AcquisitionOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra\V4
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

namespace III\Sierra\V4\Models;

use \ArrayAccess;
use \III\Sierra\V4\ObjectSerializer;

/**
 * AcquisitionOrder Class Doc Comment
 *
 * @category Class
 * @description the aquisition order&#39;s details
 * @package  III\Sierra\V4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AcquisitionOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AcquisitionOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'login' => 'string',
        'copies' => 'int',
        'allocation' => '\III\Sierra\V4\Models\AcquisitionOrderAllocation[]',
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
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'login' => null,
        'copies' => 'int32',
        'allocation' => null,
        'vendor' => null,
        'price' => 'double',
        'acquisitionType' => null,
        'claim' => null,
        'code1' => null,
        'code2' => null,
        'code3' => null,
        'code4' => null,
        'format' => null,
        'orderNote' => null,
        'orderType' => null,
        'raction' => null,
        'rloc' => null,
        'bloc' => null,
        'status' => null,
        'tloc' => null,
        'odate' => null,
        'language' => null,
        'country' => null,
        'volume' => 'int32',
        'note' => null,
        'staffNote' => null,
        'vendorNote' => null,
        'vendorIDNumber' => null,
        'selector' => null,
        'vendorAccount' => null,
        'currencyCode' => null,
        'identity' => null,
        'shipTo' => null,
        'requestor' => null,
        'oldOrderNumber' => null,
        'paidNote' => null,
        'vendorAddress' => null,
        'customVarField1' => null,
        'customVarField2' => null,
        'customVarField3' => null,
        'customVarField4' => null
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
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
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
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
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
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['copies'] = isset($data['copies']) ? $data['copies'] : null;
        $this->container['allocation'] = isset($data['allocation']) ? $data['allocation'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['acquisitionType'] = isset($data['acquisitionType']) ? $data['acquisitionType'] : null;
        $this->container['claim'] = isset($data['claim']) ? $data['claim'] : null;
        $this->container['code1'] = isset($data['code1']) ? $data['code1'] : null;
        $this->container['code2'] = isset($data['code2']) ? $data['code2'] : null;
        $this->container['code3'] = isset($data['code3']) ? $data['code3'] : null;
        $this->container['code4'] = isset($data['code4']) ? $data['code4'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['orderNote'] = isset($data['orderNote']) ? $data['orderNote'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['raction'] = isset($data['raction']) ? $data['raction'] : null;
        $this->container['rloc'] = isset($data['rloc']) ? $data['rloc'] : null;
        $this->container['bloc'] = isset($data['bloc']) ? $data['bloc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tloc'] = isset($data['tloc']) ? $data['tloc'] : null;
        $this->container['odate'] = isset($data['odate']) ? $data['odate'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['staffNote'] = isset($data['staffNote']) ? $data['staffNote'] : null;
        $this->container['vendorNote'] = isset($data['vendorNote']) ? $data['vendorNote'] : null;
        $this->container['vendorIDNumber'] = isset($data['vendorIDNumber']) ? $data['vendorIDNumber'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['vendorAccount'] = isset($data['vendorAccount']) ? $data['vendorAccount'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['requestor'] = isset($data['requestor']) ? $data['requestor'] : null;
        $this->container['oldOrderNumber'] = isset($data['oldOrderNumber']) ? $data['oldOrderNumber'] : null;
        $this->container['paidNote'] = isset($data['paidNote']) ? $data['paidNote'] : null;
        $this->container['vendorAddress'] = isset($data['vendorAddress']) ? $data['vendorAddress'] : null;
        $this->container['customVarField1'] = isset($data['customVarField1']) ? $data['customVarField1'] : null;
        $this->container['customVarField2'] = isset($data['customVarField2']) ? $data['customVarField2'] : null;
        $this->container['customVarField3'] = isset($data['customVarField3']) ? $data['customVarField3'] : null;
        $this->container['customVarField4'] = isset($data['customVarField4']) ? $data['customVarField4'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['login'] === null) {
            $invalidProperties[] = "'login' can't be null";
        }
        if ($this->container['allocation'] === null) {
            $invalidProperties[] = "'allocation' can't be null";
        }
        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['staffNote'] === null) {
            $invalidProperties[] = "'staffNote' can't be null";
        }
        if ($this->container['vendorNote'] === null) {
            $invalidProperties[] = "'vendorNote' can't be null";
        }
        if ($this->container['vendorIDNumber'] === null) {
            $invalidProperties[] = "'vendorIDNumber' can't be null";
        }
        if ($this->container['selector'] === null) {
            $invalidProperties[] = "'selector' can't be null";
        }
        if ($this->container['vendorAccount'] === null) {
            $invalidProperties[] = "'vendorAccount' can't be null";
        }
        if ($this->container['identity'] === null) {
            $invalidProperties[] = "'identity' can't be null";
        }
        if ($this->container['shipTo'] === null) {
            $invalidProperties[] = "'shipTo' can't be null";
        }
        if ($this->container['requestor'] === null) {
            $invalidProperties[] = "'requestor' can't be null";
        }
        if ($this->container['oldOrderNumber'] === null) {
            $invalidProperties[] = "'oldOrderNumber' can't be null";
        }
        if ($this->container['paidNote'] === null) {
            $invalidProperties[] = "'paidNote' can't be null";
        }
        if ($this->container['vendorAddress'] === null) {
            $invalidProperties[] = "'vendorAddress' can't be null";
        }
        if ($this->container['customVarField1'] === null) {
            $invalidProperties[] = "'customVarField1' can't be null";
        }
        if ($this->container['customVarField2'] === null) {
            $invalidProperties[] = "'customVarField2' can't be null";
        }
        if ($this->container['customVarField3'] === null) {
            $invalidProperties[] = "'customVarField3' can't be null";
        }
        if ($this->container['customVarField4'] === null) {
            $invalidProperties[] = "'customVarField4' can't be null";
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

        if ($this->container['login'] === null) {
            return false;
        }
        if ($this->container['allocation'] === null) {
            return false;
        }
        if ($this->container['vendor'] === null) {
            return false;
        }
        if ($this->container['note'] === null) {
            return false;
        }
        if ($this->container['staffNote'] === null) {
            return false;
        }
        if ($this->container['vendorNote'] === null) {
            return false;
        }
        if ($this->container['vendorIDNumber'] === null) {
            return false;
        }
        if ($this->container['selector'] === null) {
            return false;
        }
        if ($this->container['vendorAccount'] === null) {
            return false;
        }
        if ($this->container['identity'] === null) {
            return false;
        }
        if ($this->container['shipTo'] === null) {
            return false;
        }
        if ($this->container['requestor'] === null) {
            return false;
        }
        if ($this->container['oldOrderNumber'] === null) {
            return false;
        }
        if ($this->container['paidNote'] === null) {
            return false;
        }
        if ($this->container['vendorAddress'] === null) {
            return false;
        }
        if ($this->container['customVarField1'] === null) {
            return false;
        }
        if ($this->container['customVarField2'] === null) {
            return false;
        }
        if ($this->container['customVarField3'] === null) {
            return false;
        }
        if ($this->container['customVarField4'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string $login the Sierra username to associate with created orders
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets copies
     *
     * @return int
     */
    public function getCopies()
    {
        return $this->container['copies'];
    }

    /**
     * Sets copies
     *
     * @param int $copies the number of copies ordered
     *
     * @return $this
     */
    public function setCopies($copies)
    {
        $this->container['copies'] = $copies;

        return $this;
    }

    /**
     * Gets allocation
     *
     * @return \III\Sierra\V4\Models\AcquisitionOrderAllocation[]
     */
    public function getAllocation()
    {
        return $this->container['allocation'];
    }

    /**
     * Sets allocation
     *
     * @param \III\Sierra\V4\Models\AcquisitionOrderAllocation[] $allocation a list of data describing how the order is allocated
     *
     * @return $this
     */
    public function setAllocation($allocation)
    {
        $this->container['allocation'] = $allocation;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string $vendor the library-defined code for the vendor who handles the order
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price the estimated price per copy
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets acquisitionType
     *
     * @return string
     */
    public function getAcquisitionType()
    {
        return $this->container['acquisitionType'];
    }

    /**
     * Sets acquisitionType
     *
     * @param string $acquisitionType the library-defined acquisition type code or the method of paying for the material
     *
     * @return $this
     */
    public function setAcquisitionType($acquisitionType)
    {
        $this->container['acquisitionType'] = $acquisitionType;

        return $this;
    }

    /**
     * Gets claim
     *
     * @return string
     */
    public function getClaim()
    {
        return $this->container['claim'];
    }

    /**
     * Sets claim
     *
     * @param string $claim the claiming activity code
     *
     * @return $this
     */
    public function setClaim($claim)
    {
        $this->container['claim'] = $claim;

        return $this;
    }

    /**
     * Gets code1
     *
     * @return string
     */
    public function getCode1()
    {
        return $this->container['code1'];
    }

    /**
     * Sets code1
     *
     * @param string $code1 the library-defined order code 1
     *
     * @return $this
     */
    public function setCode1($code1)
    {
        $this->container['code1'] = $code1;

        return $this;
    }

    /**
     * Gets code2
     *
     * @return string
     */
    public function getCode2()
    {
        return $this->container['code2'];
    }

    /**
     * Sets code2
     *
     * @param string $code2 the library-defined order code 2
     *
     * @return $this
     */
    public function setCode2($code2)
    {
        $this->container['code2'] = $code2;

        return $this;
    }

    /**
     * Gets code3
     *
     * @return string
     */
    public function getCode3()
    {
        return $this->container['code3'];
    }

    /**
     * Sets code3
     *
     * @param string $code3 the library-defined order code 3
     *
     * @return $this
     */
    public function setCode3($code3)
    {
        $this->container['code3'] = $code3;

        return $this;
    }

    /**
     * Gets code4
     *
     * @return string
     */
    public function getCode4()
    {
        return $this->container['code4'];
    }

    /**
     * Sets code4
     *
     * @param string $code4 the library-defined order code 4
     *
     * @return $this
     */
    public function setCode4($code4)
    {
        $this->container['code4'] = $code4;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format a code representing the physical form of the material (any hash mark symbols '#' must be URL encoded
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets orderNote
     *
     * @return string
     */
    public function getOrderNote()
    {
        return $this->container['orderNote'];
    }

    /**
     * Sets orderNote
     *
     * @param string $orderNote a code representing an order note to print on the purchase order form
     *
     * @return $this
     */
    public function setOrderNote($orderNote)
    {
        $this->container['orderNote'] = $orderNote;

        return $this;
    }

    /**
     * Gets orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param string $orderType a code representing the type of order
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;

        return $this;
    }

    /**
     * Gets raction
     *
     * @return string
     */
    public function getRaction()
    {
        return $this->container['raction'];
    }

    /**
     * Sets raction
     *
     * @param string $raction a code representing the receiving action
     *
     * @return $this
     */
    public function setRaction($raction)
    {
        $this->container['raction'] = $raction;

        return $this;
    }

    /**
     * Gets rloc
     *
     * @return string
     */
    public function getRloc()
    {
        return $this->container['rloc'];
    }

    /**
     * Sets rloc
     *
     * @param string $rloc a code representing the receiving location
     *
     * @return $this
     */
    public function setRloc($rloc)
    {
        $this->container['rloc'] = $rloc;

        return $this;
    }

    /**
     * Gets bloc
     *
     * @return string
     */
    public function getBloc()
    {
        return $this->container['bloc'];
    }

    /**
     * Sets bloc
     *
     * @param string $bloc a code representing the billing location
     *
     * @return $this
     */
    public function setBloc($bloc)
    {
        $this->container['bloc'] = $bloc;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status a system-generated code representing the financial encumbering or disencumbering status of a record
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tloc
     *
     * @return string
     */
    public function getTloc()
    {
        return $this->container['tloc'];
    }

    /**
     * Sets tloc
     *
     * @param string $tloc a code representing a temporary shelving location
     *
     * @return $this
     */
    public function setTloc($tloc)
    {
        $this->container['tloc'] = $tloc;

        return $this;
    }

    /**
     * Gets odate
     *
     * @return string
     */
    public function getOdate()
    {
        return $this->container['odate'];
    }

    /**
     * Sets odate
     *
     * @param string $odate the date the material was ordered, in the format mm-dd-yy
     *
     * @return $this
     */
    public function setOdate($odate)
    {
        $this->container['odate'] = $odate;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language the language of the material, based on the MARC 21 Code List for Languages (also used by UNIMARC format)
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country the country of publication, based on the MARC 21 Code List of Countries, or ISO 3166/MA standard for UNIMARC systems
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param int $volume the number of volumes for this title
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string[]
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string[] $note a free-text note (repeatable parameter)
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets staffNote
     *
     * @return string[]
     */
    public function getStaffNote()
    {
        return $this->container['staffNote'];
    }

    /**
     * Sets staffNote
     *
     * @param string[] $staffNote a free-text internal (staff) note (repeatable parameter)
     *
     * @return $this
     */
    public function setStaffNote($staffNote)
    {
        $this->container['staffNote'] = $staffNote;

        return $this;
    }

    /**
     * Gets vendorNote
     *
     * @return string[]
     */
    public function getVendorNote()
    {
        return $this->container['vendorNote'];
    }

    /**
     * Sets vendorNote
     *
     * @param string[] $vendorNote a free-text note for vendor order information (repeatable parameter)
     *
     * @return $this
     */
    public function setVendorNote($vendorNote)
    {
        $this->container['vendorNote'] = $vendorNote;

        return $this;
    }

    /**
     * Gets vendorIDNumber
     *
     * @return string[]
     */
    public function getVendorIDNumber()
    {
        return $this->container['vendorIDNumber'];
    }

    /**
     * Sets vendorIDNumber
     *
     * @param string[] $vendorIDNumber the vendor's identification number for this title (repeatable parameter)
     *
     * @return $this
     */
    public function setVendorIDNumber($vendorIDNumber)
    {
        $this->container['vendorIDNumber'] = $vendorIDNumber;

        return $this;
    }

    /**
     * Gets selector
     *
     * @return string[]
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     *
     * @param string[] $selector a free text note identifying the selector of the item (repeatable parameter)
     *
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

        return $this;
    }

    /**
     * Gets vendorAccount
     *
     * @return string[]
     */
    public function getVendorAccount()
    {
        return $this->container['vendorAccount'];
    }

    /**
     * Sets vendorAccount
     *
     * @param string[] $vendorAccount the vendor account number (repeatable parameter)
     *
     * @return $this
     */
    public function setVendorAccount($vendorAccount)
    {
        $this->container['vendorAccount'] = $vendorAccount;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode the foreign currency code
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string[]
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string[] $identity a free text note, used to distinguish between order records (repeatable parameter)
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets shipTo
     *
     * @return string[]
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     *
     * @param string[] $shipTo the library address to which the vendor should ship materials (repeatable parameter)
     *
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets requestor
     *
     * @return string[]
     */
    public function getRequestor()
    {
        return $this->container['requestor'];
    }

    /**
     * Sets requestor
     *
     * @param string[] $requestor the requestor (repeatable parameter)
     *
     * @return $this
     */
    public function setRequestor($requestor)
    {
        $this->container['requestor'] = $requestor;

        return $this;
    }

    /**
     * Gets oldOrderNumber
     *
     * @return string[]
     */
    public function getOldOrderNumber()
    {
        return $this->container['oldOrderNumber'];
    }

    /**
     * Sets oldOrderNumber
     *
     * @param string[] $oldOrderNumber the old order number (repeatable parameter)
     *
     * @return $this
     */
    public function setOldOrderNumber($oldOrderNumber)
    {
        $this->container['oldOrderNumber'] = $oldOrderNumber;

        return $this;
    }

    /**
     * Gets paidNote
     *
     * @return string[]
     */
    public function getPaidNote()
    {
        return $this->container['paidNote'];
    }

    /**
     * Sets paidNote
     *
     * @param string[] $paidNote the paid note (repeatable parameter)
     *
     * @return $this
     */
    public function setPaidNote($paidNote)
    {
        $this->container['paidNote'] = $paidNote;

        return $this;
    }

    /**
     * Gets vendorAddress
     *
     * @return string[]
     */
    public function getVendorAddress()
    {
        return $this->container['vendorAddress'];
    }

    /**
     * Sets vendorAddress
     *
     * @param string[] $vendorAddress the vendor address (repeatable parameter)
     *
     * @return $this
     */
    public function setVendorAddress($vendorAddress)
    {
        $this->container['vendorAddress'] = $vendorAddress;

        return $this;
    }

    /**
     * Gets customVarField1
     *
     * @return string[]
     */
    public function getCustomVarField1()
    {
        return $this->container['customVarField1'];
    }

    /**
     * Sets customVarField1
     *
     * @param string[] $customVarField1 custom var field 1 (repeatable parameter)
     *
     * @return $this
     */
    public function setCustomVarField1($customVarField1)
    {
        $this->container['customVarField1'] = $customVarField1;

        return $this;
    }

    /**
     * Gets customVarField2
     *
     * @return string[]
     */
    public function getCustomVarField2()
    {
        return $this->container['customVarField2'];
    }

    /**
     * Sets customVarField2
     *
     * @param string[] $customVarField2 custom var field 2 (repeatable parameter)
     *
     * @return $this
     */
    public function setCustomVarField2($customVarField2)
    {
        $this->container['customVarField2'] = $customVarField2;

        return $this;
    }

    /**
     * Gets customVarField3
     *
     * @return string[]
     */
    public function getCustomVarField3()
    {
        return $this->container['customVarField3'];
    }

    /**
     * Sets customVarField3
     *
     * @param string[] $customVarField3 custom var field 3 (repeatable parameter)
     *
     * @return $this
     */
    public function setCustomVarField3($customVarField3)
    {
        $this->container['customVarField3'] = $customVarField3;

        return $this;
    }

    /**
     * Gets customVarField4
     *
     * @return string[]
     */
    public function getCustomVarField4()
    {
        return $this->container['customVarField4'];
    }

    /**
     * Sets customVarField4
     *
     * @param string[] $customVarField4 custom var field 4 (repeatable parameter)
     *
     * @return $this
     */
    public function setCustomVarField4($customVarField4)
    {
        $this->container['customVarField4'] = $customVarField4;

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



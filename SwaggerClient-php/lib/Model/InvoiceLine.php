<?php
/**
 * InvoiceLine
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
 * InvoiceLine Class Doc Comment
 *
 * @category Class
 * @description an invoice line item record
 * @package  SierraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'invoice' => 'string',
        'order' => 'string',
        'paid_amount' => 'double',
        'lien_amount' => 'double',
        'lien_flag' => 'int',
        'list_price' => 'double',
        'fund' => 'string',
        'sub_fund' => 'int',
        'no_of_copies' => 'int',
        'external_fund' => 'int',
        'order_status' => 'string',
        'use_tax' => 'bool',
        'line_item_note' => 'string',
        'title' => 'string',
        'multi_flag' => 'string',
        'vendor' => 'string',
        'sub_starting_date' => '\DateTime',
        'sub_ending_date' => '\DateTime',
        'tax' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'invoice' => null,
        'order' => null,
        'paid_amount' => 'double',
        'lien_amount' => 'double',
        'lien_flag' => 'int32',
        'list_price' => 'double',
        'fund' => null,
        'sub_fund' => 'int32',
        'no_of_copies' => 'int32',
        'external_fund' => 'int32',
        'order_status' => null,
        'use_tax' => null,
        'line_item_note' => null,
        'title' => null,
        'multi_flag' => null,
        'vendor' => null,
        'sub_starting_date' => 'date-time',
        'sub_ending_date' => 'date-time',
        'tax' => 'double'
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
        'invoice' => 'invoice',
        'order' => 'order',
        'paid_amount' => 'paidAmount',
        'lien_amount' => 'lienAmount',
        'lien_flag' => 'lienFlag',
        'list_price' => 'listPrice',
        'fund' => 'fund',
        'sub_fund' => 'subFund',
        'no_of_copies' => 'noOfCopies',
        'external_fund' => 'externalFund',
        'order_status' => 'orderStatus',
        'use_tax' => 'useTax',
        'line_item_note' => 'lineItemNote',
        'title' => 'title',
        'multi_flag' => 'multiFlag',
        'vendor' => 'vendor',
        'sub_starting_date' => 'subStartingDate',
        'sub_ending_date' => 'subEndingDate',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'invoice' => 'setInvoice',
        'order' => 'setOrder',
        'paid_amount' => 'setPaidAmount',
        'lien_amount' => 'setLienAmount',
        'lien_flag' => 'setLienFlag',
        'list_price' => 'setListPrice',
        'fund' => 'setFund',
        'sub_fund' => 'setSubFund',
        'no_of_copies' => 'setNoOfCopies',
        'external_fund' => 'setExternalFund',
        'order_status' => 'setOrderStatus',
        'use_tax' => 'setUseTax',
        'line_item_note' => 'setLineItemNote',
        'title' => 'setTitle',
        'multi_flag' => 'setMultiFlag',
        'vendor' => 'setVendor',
        'sub_starting_date' => 'setSubStartingDate',
        'sub_ending_date' => 'setSubEndingDate',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'invoice' => 'getInvoice',
        'order' => 'getOrder',
        'paid_amount' => 'getPaidAmount',
        'lien_amount' => 'getLienAmount',
        'lien_flag' => 'getLienFlag',
        'list_price' => 'getListPrice',
        'fund' => 'getFund',
        'sub_fund' => 'getSubFund',
        'no_of_copies' => 'getNoOfCopies',
        'external_fund' => 'getExternalFund',
        'order_status' => 'getOrderStatus',
        'use_tax' => 'getUseTax',
        'line_item_note' => 'getLineItemNote',
        'title' => 'getTitle',
        'multi_flag' => 'getMultiFlag',
        'vendor' => 'getVendor',
        'sub_starting_date' => 'getSubStartingDate',
        'sub_ending_date' => 'getSubEndingDate',
        'tax' => 'getTax'
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
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['paid_amount'] = isset($data['paid_amount']) ? $data['paid_amount'] : null;
        $this->container['lien_amount'] = isset($data['lien_amount']) ? $data['lien_amount'] : null;
        $this->container['lien_flag'] = isset($data['lien_flag']) ? $data['lien_flag'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['fund'] = isset($data['fund']) ? $data['fund'] : null;
        $this->container['sub_fund'] = isset($data['sub_fund']) ? $data['sub_fund'] : null;
        $this->container['no_of_copies'] = isset($data['no_of_copies']) ? $data['no_of_copies'] : null;
        $this->container['external_fund'] = isset($data['external_fund']) ? $data['external_fund'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['use_tax'] = isset($data['use_tax']) ? $data['use_tax'] : null;
        $this->container['line_item_note'] = isset($data['line_item_note']) ? $data['line_item_note'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['multi_flag'] = isset($data['multi_flag']) ? $data['multi_flag'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['sub_starting_date'] = isset($data['sub_starting_date']) ? $data['sub_starting_date'] : null;
        $this->container['sub_ending_date'] = isset($data['sub_ending_date']) ? $data['sub_ending_date'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
        if ($this->container['invoice'] === null) {
            $invalidProperties[] = "'invoice' can't be null";
        }
        if ($this->container['multi_flag'] === null) {
            $invalidProperties[] = "'multi_flag' can't be null";
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
        if ($this->container['invoice'] === null) {
            return false;
        }
        if ($this->container['multi_flag'] === null) {
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
     * @param string $id system generated line number
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param string $invoice link to invoice ID
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order link to order ID associated with this line item
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets paid_amount
     *
     * @return double
     */
    public function getPaidAmount()
    {
        return $this->container['paid_amount'];
    }

    /**
     * Sets paid_amount
     *
     * @param double $paid_amount paid amount, entered by user
     *
     * @return $this
     */
    public function setPaidAmount($paid_amount)
    {
        $this->container['paid_amount'] = $paid_amount;

        return $this;
    }

    /**
     * Gets lien_amount
     *
     * @return double
     */
    public function getLienAmount()
    {
        return $this->container['lien_amount'];
    }

    /**
     * Sets lien_amount
     *
     * @param double $lien_amount lien amount
     *
     * @return $this
     */
    public function setLienAmount($lien_amount)
    {
        $this->container['lien_amount'] = $lien_amount;

        return $this;
    }

    /**
     * Gets lien_flag
     *
     * @return int
     */
    public function getLienFlag()
    {
        return $this->container['lien_flag'];
    }

    /**
     * Sets lien_flag
     *
     * @param int $lien_flag lien flag
     *
     * @return $this
     */
    public function setLienFlag($lien_flag)
    {
        $this->container['lien_flag'] = $lien_flag;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return double
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param double $list_price list price
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets fund
     *
     * @return string
     */
    public function getFund()
    {
        return $this->container['fund'];
    }

    /**
     * Sets fund
     *
     * @param string $fund internal fund code
     *
     * @return $this
     */
    public function setFund($fund)
    {
        $this->container['fund'] = $fund;

        return $this;
    }

    /**
     * Gets sub_fund
     *
     * @return int
     */
    public function getSubFund()
    {
        return $this->container['sub_fund'];
    }

    /**
     * Sets sub_fund
     *
     * @param int $sub_fund sub-fund associated with an internal fund code (max 7 per fund)
     *
     * @return $this
     */
    public function setSubFund($sub_fund)
    {
        $this->container['sub_fund'] = $sub_fund;

        return $this;
    }

    /**
     * Gets no_of_copies
     *
     * @return int
     */
    public function getNoOfCopies()
    {
        return $this->container['no_of_copies'];
    }

    /**
     * Sets no_of_copies
     *
     * @param int $no_of_copies number of copies of the material contained in this line item
     *
     * @return $this
     */
    public function setNoOfCopies($no_of_copies)
    {
        $this->container['no_of_copies'] = $no_of_copies;

        return $this;
    }

    /**
     * Gets external_fund
     *
     * @return int
     */
    public function getExternalFund()
    {
        return $this->container['external_fund'];
    }

    /**
     * Sets external_fund
     *
     * @param int $external_fund external fund code
     *
     * @return $this
     */
    public function setExternalFund($external_fund)
    {
        $this->container['external_fund'] = $external_fund;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status status of this line item
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets use_tax
     *
     * @return bool
     */
    public function getUseTax()
    {
        return $this->container['use_tax'];
    }

    /**
     * Sets use_tax
     *
     * @param bool $use_tax whether use tax is used for this line item
     *
     * @return $this
     */
    public function setUseTax($use_tax)
    {
        $this->container['use_tax'] = $use_tax;

        return $this;
    }

    /**
     * Gets line_item_note
     *
     * @return string
     */
    public function getLineItemNote()
    {
        return $this->container['line_item_note'];
    }

    /**
     * Sets line_item_note
     *
     * @param string $line_item_note note associated with this line item, entered by user
     *
     * @return $this
     */
    public function setLineItemNote($line_item_note)
    {
        $this->container['line_item_note'] = $line_item_note;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title of material, supplied by system
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets multi_flag
     *
     * @return string
     */
    public function getMultiFlag()
    {
        return $this->container['multi_flag'];
    }

    /**
     * Sets multi_flag
     *
     * @param string $multi_flag multi-fund group code
     *
     * @return $this
     */
    public function setMultiFlag($multi_flag)
    {
        $this->container['multi_flag'] = $multi_flag;

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
     * @param string $vendor 5-char vendor code
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets sub_starting_date
     *
     * @return \DateTime
     */
    public function getSubStartingDate()
    {
        return $this->container['sub_starting_date'];
    }

    /**
     * Sets sub_starting_date
     *
     * @param \DateTime $sub_starting_date subscription starting date, entered by user
     *
     * @return $this
     */
    public function setSubStartingDate($sub_starting_date)
    {
        $this->container['sub_starting_date'] = $sub_starting_date;

        return $this;
    }

    /**
     * Gets sub_ending_date
     *
     * @return \DateTime
     */
    public function getSubEndingDate()
    {
        return $this->container['sub_ending_date'];
    }

    /**
     * Sets sub_ending_date
     *
     * @param \DateTime $sub_ending_date subscription end date, entered by user
     *
     * @return $this
     */
    public function setSubEndingDate($sub_ending_date)
    {
        $this->container['sub_ending_date'] = $sub_ending_date;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return double
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double $tax amount of tax for the line item, system generated
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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



<?php
/**
 * Fine
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
 * Fine Class Doc Comment
 *
 * @category Class
 * @description a patron fine
 * @package  SierraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Fine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Fine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'patron' => 'string',
        'item' => 'string',
        'assessed_date' => '\DateTime',
        'description' => 'string',
        'invoice_number' => 'int',
        'charge_type' => '\SierraApi\Model\ChargeType',
        'item_charge' => 'double',
        'processing_fee' => 'double',
        'billing_fee' => 'double',
        'paid_amount' => 'double',
        'location' => '\SierraApi\Model\Location',
        'initials' => 'string',
        'creation_method' => 'string',
        'date_paid' => '\DateTime',
        'original_patron' => 'string',
        'print_bill' => 'bool',
        'terminal_number' => 'int',
        'transfer_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'patron' => null,
        'item' => null,
        'assessed_date' => 'date-time',
        'description' => null,
        'invoice_number' => 'int64',
        'charge_type' => null,
        'item_charge' => 'double',
        'processing_fee' => 'double',
        'billing_fee' => 'double',
        'paid_amount' => 'double',
        'location' => null,
        'initials' => null,
        'creation_method' => null,
        'date_paid' => 'date-time',
        'original_patron' => null,
        'print_bill' => null,
        'terminal_number' => 'int32',
        'transfer_date' => 'date-time'
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
        'patron' => 'patron',
        'item' => 'item',
        'assessed_date' => 'assessedDate',
        'description' => 'description',
        'invoice_number' => 'invoiceNumber',
        'charge_type' => 'chargeType',
        'item_charge' => 'itemCharge',
        'processing_fee' => 'processingFee',
        'billing_fee' => 'billingFee',
        'paid_amount' => 'paidAmount',
        'location' => 'location',
        'initials' => 'initials',
        'creation_method' => 'creationMethod',
        'date_paid' => 'datePaid',
        'original_patron' => 'originalPatron',
        'print_bill' => 'printBill',
        'terminal_number' => 'terminalNumber',
        'transfer_date' => 'transferDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'patron' => 'setPatron',
        'item' => 'setItem',
        'assessed_date' => 'setAssessedDate',
        'description' => 'setDescription',
        'invoice_number' => 'setInvoiceNumber',
        'charge_type' => 'setChargeType',
        'item_charge' => 'setItemCharge',
        'processing_fee' => 'setProcessingFee',
        'billing_fee' => 'setBillingFee',
        'paid_amount' => 'setPaidAmount',
        'location' => 'setLocation',
        'initials' => 'setInitials',
        'creation_method' => 'setCreationMethod',
        'date_paid' => 'setDatePaid',
        'original_patron' => 'setOriginalPatron',
        'print_bill' => 'setPrintBill',
        'terminal_number' => 'setTerminalNumber',
        'transfer_date' => 'setTransferDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'patron' => 'getPatron',
        'item' => 'getItem',
        'assessed_date' => 'getAssessedDate',
        'description' => 'getDescription',
        'invoice_number' => 'getInvoiceNumber',
        'charge_type' => 'getChargeType',
        'item_charge' => 'getItemCharge',
        'processing_fee' => 'getProcessingFee',
        'billing_fee' => 'getBillingFee',
        'paid_amount' => 'getPaidAmount',
        'location' => 'getLocation',
        'initials' => 'getInitials',
        'creation_method' => 'getCreationMethod',
        'date_paid' => 'getDatePaid',
        'original_patron' => 'getOriginalPatron',
        'print_bill' => 'getPrintBill',
        'terminal_number' => 'getTerminalNumber',
        'transfer_date' => 'getTransferDate'
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
        $this->container['patron'] = isset($data['patron']) ? $data['patron'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['assessed_date'] = isset($data['assessed_date']) ? $data['assessed_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['item_charge'] = isset($data['item_charge']) ? $data['item_charge'] : null;
        $this->container['processing_fee'] = isset($data['processing_fee']) ? $data['processing_fee'] : null;
        $this->container['billing_fee'] = isset($data['billing_fee']) ? $data['billing_fee'] : null;
        $this->container['paid_amount'] = isset($data['paid_amount']) ? $data['paid_amount'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['creation_method'] = isset($data['creation_method']) ? $data['creation_method'] : null;
        $this->container['date_paid'] = isset($data['date_paid']) ? $data['date_paid'] : null;
        $this->container['original_patron'] = isset($data['original_patron']) ? $data['original_patron'] : null;
        $this->container['print_bill'] = isset($data['print_bill']) ? $data['print_bill'] : null;
        $this->container['terminal_number'] = isset($data['terminal_number']) ? $data['terminal_number'] : null;
        $this->container['transfer_date'] = isset($data['transfer_date']) ? $data['transfer_date'] : null;
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
        if ($this->container['item_charge'] === null) {
            $invalidProperties[] = "'item_charge' can't be null";
        }
        if ($this->container['processing_fee'] === null) {
            $invalidProperties[] = "'processing_fee' can't be null";
        }
        if ($this->container['billing_fee'] === null) {
            $invalidProperties[] = "'billing_fee' can't be null";
        }
        if ($this->container['paid_amount'] === null) {
            $invalidProperties[] = "'paid_amount' can't be null";
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
        if ($this->container['item_charge'] === null) {
            return false;
        }
        if ($this->container['processing_fee'] === null) {
            return false;
        }
        if ($this->container['billing_fee'] === null) {
            return false;
        }
        if ($this->container['paid_amount'] === null) {
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
     * @param string $id the ID of the fine
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $patron the patron record number associated with the fine
     *
     * @return $this
     */
    public function setPatron($patron)
    {
        $this->container['patron'] = $patron;

        return $this;
    }

    /**
     * Gets item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param string $item the item record number associated with the fine
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets assessed_date
     *
     * @return \DateTime
     */
    public function getAssessedDate()
    {
        return $this->container['assessed_date'];
    }

    /**
     * Sets assessed_date
     *
     * @param \DateTime $assessed_date the date the fine was assessed, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setAssessedDate($assessed_date)
    {
        $this->container['assessed_date'] = $assessed_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description the reason for the charge
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param int $invoice_number the fine's invoice number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return \SierraApi\Model\ChargeType
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param \SierraApi\Model\ChargeType $charge_type the code representing the type of charge assessed
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets item_charge
     *
     * @return double
     */
    public function getItemCharge()
    {
        return $this->container['item_charge'];
    }

    /**
     * Sets item_charge
     *
     * @param double $item_charge a fine amount related to the item (the exact meaning depends on the charge code)
     *
     * @return $this
     */
    public function setItemCharge($item_charge)
    {
        $this->container['item_charge'] = $item_charge;

        return $this;
    }

    /**
     * Gets processing_fee
     *
     * @return double
     */
    public function getProcessingFee()
    {
        return $this->container['processing_fee'];
    }

    /**
     * Sets processing_fee
     *
     * @param double $processing_fee a processing fee amount (the exact meaning depends on the charge code)
     *
     * @return $this
     */
    public function setProcessingFee($processing_fee)
    {
        $this->container['processing_fee'] = $processing_fee;

        return $this;
    }

    /**
     * Gets billing_fee
     *
     * @return double
     */
    public function getBillingFee()
    {
        return $this->container['billing_fee'];
    }

    /**
     * Sets billing_fee
     *
     * @param double $billing_fee a billing fee amount (the exact meaning depends on the charge code)
     *
     * @return $this
     */
    public function setBillingFee($billing_fee)
    {
        $this->container['billing_fee'] = $billing_fee;

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
     * @param double $paid_amount the amount already paid for this fine
     *
     * @return $this
     */
    public function setPaidAmount($paid_amount)
    {
        $this->container['paid_amount'] = $paid_amount;

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
     * @param \SierraApi\Model\Location $location the charge location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string $initials initials
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

        return $this;
    }

    /**
     * Gets creation_method
     *
     * @return string
     */
    public function getCreationMethod()
    {
        return $this->container['creation_method'];
    }

    /**
     * Sets creation_method
     *
     * @param string $creation_method the method that was used to create the fine
     *
     * @return $this
     */
    public function setCreationMethod($creation_method)
    {
        $this->container['creation_method'] = $creation_method;

        return $this;
    }

    /**
     * Gets date_paid
     *
     * @return \DateTime
     */
    public function getDatePaid()
    {
        return $this->container['date_paid'];
    }

    /**
     * Sets date_paid
     *
     * @param \DateTime $date_paid the date the fine was paid
     *
     * @return $this
     */
    public function setDatePaid($date_paid)
    {
        $this->container['date_paid'] = $date_paid;

        return $this;
    }

    /**
     * Gets original_patron
     *
     * @return string
     */
    public function getOriginalPatron()
    {
        return $this->container['original_patron'];
    }

    /**
     * Sets original_patron
     *
     * @param string $original_patron the original patron record number associated with the fine
     *
     * @return $this
     */
    public function setOriginalPatron($original_patron)
    {
        $this->container['original_patron'] = $original_patron;

        return $this;
    }

    /**
     * Gets print_bill
     *
     * @return bool
     */
    public function getPrintBill()
    {
        return $this->container['print_bill'];
    }

    /**
     * Sets print_bill
     *
     * @param bool $print_bill has the bill been printed
     *
     * @return $this
     */
    public function setPrintBill($print_bill)
    {
        $this->container['print_bill'] = $print_bill;

        return $this;
    }

    /**
     * Gets terminal_number
     *
     * @return int
     */
    public function getTerminalNumber()
    {
        return $this->container['terminal_number'];
    }

    /**
     * Sets terminal_number
     *
     * @param int $terminal_number the terminal number
     *
     * @return $this
     */
    public function setTerminalNumber($terminal_number)
    {
        $this->container['terminal_number'] = $terminal_number;

        return $this;
    }

    /**
     * Gets transfer_date
     *
     * @return \DateTime
     */
    public function getTransferDate()
    {
        return $this->container['transfer_date'];
    }

    /**
     * Sets transfer_date
     *
     * @param \DateTime $transfer_date the original transfer date
     *
     * @return $this
     */
    public function setTransferDate($transfer_date)
    {
        $this->container['transfer_date'] = $transfer_date;

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


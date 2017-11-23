<?php
/**
 * Patron
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
 * Patron Class Doc Comment
 *
 * @category Class
 * @description a patron record
 * @package  SierraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Patron implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Patron';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'updated_date' => '\DateTime',
        'created_date' => '\DateTime',
        'deleted_date' => '\DateTime',
        'deleted' => 'bool',
        'suppressed' => 'bool',
        'names' => 'string[]',
        'barcodes' => 'string[]',
        'expiration_date' => '\DateTime',
        'birth_date' => '\DateTime',
        'emails' => 'string[]',
        'patron_type' => 'int',
        'patron_codes' => '\SierraApi\Model\Codes',
        'home_library_code' => 'string',
        'message' => '\SierraApi\Model\Message',
        'block_info' => '\SierraApi\Model\Block',
        'addresses' => '\SierraApi\Model\Address[]',
        'phones' => '\SierraApi\Model\Phone[]',
        'unique_ids' => 'string[]',
        'money_owed' => 'double',
        'p_message' => 'string',
        'lang_pref' => 'string',
        'fixed_fields' => '\SierraApi\Model\map',
        'var_fields' => '\SierraApi\Model\VarField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'updated_date' => 'date-time',
        'created_date' => 'date-time',
        'deleted_date' => 'date',
        'deleted' => null,
        'suppressed' => null,
        'names' => null,
        'barcodes' => null,
        'expiration_date' => 'date',
        'birth_date' => 'date',
        'emails' => null,
        'patron_type' => 'int32',
        'patron_codes' => null,
        'home_library_code' => null,
        'message' => null,
        'block_info' => null,
        'addresses' => null,
        'phones' => null,
        'unique_ids' => null,
        'money_owed' => 'double',
        'p_message' => null,
        'lang_pref' => null,
        'fixed_fields' => null,
        'var_fields' => null
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
        'updated_date' => 'updatedDate',
        'created_date' => 'createdDate',
        'deleted_date' => 'deletedDate',
        'deleted' => 'deleted',
        'suppressed' => 'suppressed',
        'names' => 'names',
        'barcodes' => 'barcodes',
        'expiration_date' => 'expirationDate',
        'birth_date' => 'birthDate',
        'emails' => 'emails',
        'patron_type' => 'patronType',
        'patron_codes' => 'patronCodes',
        'home_library_code' => 'homeLibraryCode',
        'message' => 'message',
        'block_info' => 'blockInfo',
        'addresses' => 'addresses',
        'phones' => 'phones',
        'unique_ids' => 'uniqueIds',
        'money_owed' => 'moneyOwed',
        'p_message' => 'pMessage',
        'lang_pref' => 'langPref',
        'fixed_fields' => 'fixedFields',
        'var_fields' => 'varFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'updated_date' => 'setUpdatedDate',
        'created_date' => 'setCreatedDate',
        'deleted_date' => 'setDeletedDate',
        'deleted' => 'setDeleted',
        'suppressed' => 'setSuppressed',
        'names' => 'setNames',
        'barcodes' => 'setBarcodes',
        'expiration_date' => 'setExpirationDate',
        'birth_date' => 'setBirthDate',
        'emails' => 'setEmails',
        'patron_type' => 'setPatronType',
        'patron_codes' => 'setPatronCodes',
        'home_library_code' => 'setHomeLibraryCode',
        'message' => 'setMessage',
        'block_info' => 'setBlockInfo',
        'addresses' => 'setAddresses',
        'phones' => 'setPhones',
        'unique_ids' => 'setUniqueIds',
        'money_owed' => 'setMoneyOwed',
        'p_message' => 'setPMessage',
        'lang_pref' => 'setLangPref',
        'fixed_fields' => 'setFixedFields',
        'var_fields' => 'setVarFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'updated_date' => 'getUpdatedDate',
        'created_date' => 'getCreatedDate',
        'deleted_date' => 'getDeletedDate',
        'deleted' => 'getDeleted',
        'suppressed' => 'getSuppressed',
        'names' => 'getNames',
        'barcodes' => 'getBarcodes',
        'expiration_date' => 'getExpirationDate',
        'birth_date' => 'getBirthDate',
        'emails' => 'getEmails',
        'patron_type' => 'getPatronType',
        'patron_codes' => 'getPatronCodes',
        'home_library_code' => 'getHomeLibraryCode',
        'message' => 'getMessage',
        'block_info' => 'getBlockInfo',
        'addresses' => 'getAddresses',
        'phones' => 'getPhones',
        'unique_ids' => 'getUniqueIds',
        'money_owed' => 'getMoneyOwed',
        'p_message' => 'getPMessage',
        'lang_pref' => 'getLangPref',
        'fixed_fields' => 'getFixedFields',
        'var_fields' => 'getVarFields'
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
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['deleted_date'] = isset($data['deleted_date']) ? $data['deleted_date'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['suppressed'] = isset($data['suppressed']) ? $data['suppressed'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['patron_type'] = isset($data['patron_type']) ? $data['patron_type'] : null;
        $this->container['patron_codes'] = isset($data['patron_codes']) ? $data['patron_codes'] : null;
        $this->container['home_library_code'] = isset($data['home_library_code']) ? $data['home_library_code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['block_info'] = isset($data['block_info']) ? $data['block_info'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['unique_ids'] = isset($data['unique_ids']) ? $data['unique_ids'] : null;
        $this->container['money_owed'] = isset($data['money_owed']) ? $data['money_owed'] : null;
        $this->container['p_message'] = isset($data['p_message']) ? $data['p_message'] : null;
        $this->container['lang_pref'] = isset($data['lang_pref']) ? $data['lang_pref'] : null;
        $this->container['fixed_fields'] = isset($data['fixed_fields']) ? $data['fixed_fields'] : null;
        $this->container['var_fields'] = isset($data['var_fields']) ? $data['var_fields'] : null;
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
        if ($this->container['fixed_fields'] === null) {
            $invalidProperties[] = "'fixed_fields' can't be null";
        }
        if ($this->container['var_fields'] === null) {
            $invalidProperties[] = "'var_fields' can't be null";
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
        if ($this->container['deleted'] === null) {
            return false;
        }
        if ($this->container['fixed_fields'] === null) {
            return false;
        }
        if ($this->container['var_fields'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id the patron record ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets updated_date
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     *
     * @param \DateTime $updated_date the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date the date and time the record was created, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets deleted_date
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->container['deleted_date'];
    }

    /**
     * Sets deleted_date
     *
     * @param \DateTime $deleted_date the date the record was deleted, in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setDeletedDate($deleted_date)
    {
        $this->container['deleted_date'] = $deleted_date;

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
     * Gets suppressed
     *
     * @return bool
     */
    public function getSuppressed()
    {
        return $this->container['suppressed'];
    }

    /**
     * Sets suppressed
     *
     * @param bool $suppressed whether the record is suppressed from public display
     *
     * @return $this
     */
    public function setSuppressed($suppressed)
    {
        $this->container['suppressed'] = $suppressed;

        return $this;
    }

    /**
     * Gets names
     *
     * @return string[]
     */
    public function getNames()
    {
        return $this->container['names'];
    }

    /**
     * Sets names
     *
     * @param string[] $names a list of the patron's names
     *
     * @return $this
     */
    public function setNames($names)
    {
        $this->container['names'] = $names;

        return $this;
    }

    /**
     * Gets barcodes
     *
     * @return string[]
     */
    public function getBarcodes()
    {
        return $this->container['barcodes'];
    }

    /**
     * Sets barcodes
     *
     * @param string[] $barcodes the patron's barcode(s)
     *
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->container['barcodes'] = $barcodes;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date the expiration date of the patron's borrowing privileges in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date the patron's date of birth in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails the patron's email addresses
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets patron_type
     *
     * @return int
     */
    public function getPatronType()
    {
        return $this->container['patron_type'];
    }

    /**
     * Sets patron_type
     *
     * @param int $patron_type the patron type code
     *
     * @return $this
     */
    public function setPatronType($patron_type)
    {
        $this->container['patron_type'] = $patron_type;

        return $this;
    }

    /**
     * Gets patron_codes
     *
     * @return \SierraApi\Model\Codes
     */
    public function getPatronCodes()
    {
        return $this->container['patron_codes'];
    }

    /**
     * Sets patron_codes
     *
     * @param \SierraApi\Model\Codes $patron_codes the library-defined pcodes associated with the patron
     *
     * @return $this
     */
    public function setPatronCodes($patron_codes)
    {
        $this->container['patron_codes'] = $patron_codes;

        return $this;
    }

    /**
     * Gets home_library_code
     *
     * @return string
     */
    public function getHomeLibraryCode()
    {
        return $this->container['home_library_code'];
    }

    /**
     * Sets home_library_code
     *
     * @param string $home_library_code the patron's home library
     *
     * @return $this
     */
    public function setHomeLibraryCode($home_library_code)
    {
        $this->container['home_library_code'] = $home_library_code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \SierraApi\Model\Message
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \SierraApi\Model\Message $message message-related data for the patron
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets block_info
     *
     * @return \SierraApi\Model\Block
     */
    public function getBlockInfo()
    {
        return $this->container['block_info'];
    }

    /**
     * Sets block_info
     *
     * @param \SierraApi\Model\Block $block_info patron block information
     *
     * @return $this
     */
    public function setBlockInfo($block_info)
    {
        $this->container['block_info'] = $block_info;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \SierraApi\Model\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \SierraApi\Model\Address[] $addresses the patron's addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return \SierraApi\Model\Phone[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \SierraApi\Model\Phone[] $phones the patron's telephone numbers
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets unique_ids
     *
     * @return string[]
     */
    public function getUniqueIds()
    {
        return $this->container['unique_ids'];
    }

    /**
     * Sets unique_ids
     *
     * @param string[] $unique_ids the patron's unique IDs
     *
     * @return $this
     */
    public function setUniqueIds($unique_ids)
    {
        $this->container['unique_ids'] = $unique_ids;

        return $this;
    }

    /**
     * Gets money_owed
     *
     * @return double
     */
    public function getMoneyOwed()
    {
        return $this->container['money_owed'];
    }

    /**
     * Sets money_owed
     *
     * @param double $money_owed the amount of money the patron owes in fines and charges
     *
     * @return $this
     */
    public function setMoneyOwed($money_owed)
    {
        $this->container['money_owed'] = $money_owed;

        return $this;
    }

    /**
     * Gets p_message
     *
     * @return string
     */
    public function getPMessage()
    {
        return $this->container['p_message'];
    }

    /**
     * Sets p_message
     *
     * @param string $p_message the patron's message
     *
     * @return $this
     */
    public function setPMessage($p_message)
    {
        $this->container['p_message'] = $p_message;

        return $this;
    }

    /**
     * Gets lang_pref
     *
     * @return string
     */
    public function getLangPref()
    {
        return $this->container['lang_pref'];
    }

    /**
     * Sets lang_pref
     *
     * @param string $lang_pref the patron's language preference
     *
     * @return $this
     */
    public function setLangPref($lang_pref)
    {
        $this->container['lang_pref'] = $lang_pref;

        return $this;
    }

    /**
     * Gets fixed_fields
     *
     * @return \SierraApi\Model\map
     */
    public function getFixedFields()
    {
        return $this->container['fixed_fields'];
    }

    /**
     * Sets fixed_fields
     *
     * @param \SierraApi\Model\map $fixed_fields the fixed-length fields from the patron record
     *
     * @return $this
     */
    public function setFixedFields($fixed_fields)
    {
        $this->container['fixed_fields'] = $fixed_fields;

        return $this;
    }

    /**
     * Gets var_fields
     *
     * @return \SierraApi\Model\VarField[]
     */
    public function getVarFields()
    {
        return $this->container['var_fields'];
    }

    /**
     * Sets var_fields
     *
     * @param \SierraApi\Model\VarField[] $var_fields the variable-length fields from the patron record
     *
     * @return $this
     */
    public function setVarFields($var_fields)
    {
        $this->container['var_fields'] = $var_fields;

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



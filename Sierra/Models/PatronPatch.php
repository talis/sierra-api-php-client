<?php
/**
 * PatronPatch
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Sierra\Models;

use \ArrayAccess;
use \Sierra\ObjectSerializer;

/**
 * PatronPatch Class Doc Comment
 *
 * @category Class
 * @description a patron PUT request
 * @package  Sierra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PatronPatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PatronPatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emails' => 'string[]',
        'names' => 'string[]',
        'addresses' => '\Sierra\Models\Address[]',
        'phones' => '\Sierra\Models\Phone[]',
        'pin' => 'string',
        'barcodes' => 'string[]',
        'patron_type' => 'int',
        'expiration_date' => '\DateTime',
        'birth_date' => '\DateTime',
        'patron_codes' => '\Sierra\Models\Codes',
        'block_info' => '\Sierra\Models\Block',
        'unique_ids' => 'string[]',
        'p_message' => 'string',
        'home_library_code' => 'string',
        'lang_pref' => 'string',
        'fixed_fields' => '\Sierra\Models\map',
        'var_fields' => '\Sierra\Models\VarField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emails' => null,
        'names' => null,
        'addresses' => null,
        'phones' => null,
        'pin' => null,
        'barcodes' => null,
        'patron_type' => 'int32',
        'expiration_date' => 'date',
        'birth_date' => 'date',
        'patron_codes' => null,
        'block_info' => null,
        'unique_ids' => null,
        'p_message' => null,
        'home_library_code' => null,
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
        'emails' => 'emails',
        'names' => 'names',
        'addresses' => 'addresses',
        'phones' => 'phones',
        'pin' => 'pin',
        'barcodes' => 'barcodes',
        'patron_type' => 'patronType',
        'expiration_date' => 'expirationDate',
        'birth_date' => 'birthDate',
        'patron_codes' => 'patronCodes',
        'block_info' => 'blockInfo',
        'unique_ids' => 'uniqueIds',
        'p_message' => 'pMessage',
        'home_library_code' => 'homeLibraryCode',
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
        'emails' => 'setEmails',
        'names' => 'setNames',
        'addresses' => 'setAddresses',
        'phones' => 'setPhones',
        'pin' => 'setPin',
        'barcodes' => 'setBarcodes',
        'patron_type' => 'setPatronType',
        'expiration_date' => 'setExpirationDate',
        'birth_date' => 'setBirthDate',
        'patron_codes' => 'setPatronCodes',
        'block_info' => 'setBlockInfo',
        'unique_ids' => 'setUniqueIds',
        'p_message' => 'setPMessage',
        'home_library_code' => 'setHomeLibraryCode',
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
        'emails' => 'getEmails',
        'names' => 'getNames',
        'addresses' => 'getAddresses',
        'phones' => 'getPhones',
        'pin' => 'getPin',
        'barcodes' => 'getBarcodes',
        'patron_type' => 'getPatronType',
        'expiration_date' => 'getExpirationDate',
        'birth_date' => 'getBirthDate',
        'patron_codes' => 'getPatronCodes',
        'block_info' => 'getBlockInfo',
        'unique_ids' => 'getUniqueIds',
        'p_message' => 'getPMessage',
        'home_library_code' => 'getHomeLibraryCode',
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
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['pin'] = isset($data['pin']) ? $data['pin'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
        $this->container['patron_type'] = isset($data['patron_type']) ? $data['patron_type'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['patron_codes'] = isset($data['patron_codes']) ? $data['patron_codes'] : null;
        $this->container['block_info'] = isset($data['block_info']) ? $data['block_info'] : null;
        $this->container['unique_ids'] = isset($data['unique_ids']) ? $data['unique_ids'] : null;
        $this->container['p_message'] = isset($data['p_message']) ? $data['p_message'] : null;
        $this->container['home_library_code'] = isset($data['home_library_code']) ? $data['home_library_code'] : null;
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

        return true;
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
     * @param string[] $emails a list of the patron's emails (must include all applicable email addresses for the patron)
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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
     * @param string[] $names a list of the patron's names (must include all applicable names for the patron)
     *
     * @return $this
     */
    public function setNames($names)
    {
        $this->container['names'] = $names;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Sierra\Models\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Sierra\Models\Address[] $addresses a list of the patron's addresses (must include all applicable addresses for the patron)
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
     * @return \Sierra\Models\Phone[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \Sierra\Models\Phone[] $phones a list of the patron's phone numbers (must include all applicable phone numbers for the patron)
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string $pin the patron's Personal Identification Number
     *
     * @return $this
     */
    public function setPin($pin)
    {
        $this->container['pin'] = $pin;

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
     * @param string[] $barcodes patron's barcode
     *
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->container['barcodes'] = $barcodes;

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
     * Gets patron_codes
     *
     * @return \Sierra\Models\Codes
     */
    public function getPatronCodes()
    {
        return $this->container['patron_codes'];
    }

    /**
     * Sets patron_codes
     *
     * @param \Sierra\Models\Codes $patron_codes a list of patron codes
     *
     * @return $this
     */
    public function setPatronCodes($patron_codes)
    {
        $this->container['patron_codes'] = $patron_codes;

        return $this;
    }

    /**
     * Gets block_info
     *
     * @return \Sierra\Models\Block
     */
    public function getBlockInfo()
    {
        return $this->container['block_info'];
    }

    /**
     * Sets block_info
     *
     * @param \Sierra\Models\Block $block_info patron block information
     *
     * @return $this
     */
    public function setBlockInfo($block_info)
    {
        $this->container['block_info'] = $block_info;

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
     * @return \Sierra\Models\map
     */
    public function getFixedFields()
    {
        return $this->container['fixed_fields'];
    }

    /**
     * Sets fixed_fields
     *
     * @param \Sierra\Models\map $fixed_fields the fixed-length fields from the patron record
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
     * @return \Sierra\Models\VarField[]
     */
    public function getVarFields()
    {
        return $this->container['var_fields'];
    }

    /**
     * Sets var_fields
     *
     * @param \Sierra\Models\VarField[] $var_fields the variable-length fields from the patron record
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



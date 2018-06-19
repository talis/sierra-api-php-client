<?php
/**
 * Patron
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
 * Patron Class Doc Comment
 *
 * @category Class
 * @description a patron record
 * @package  III\Sierra\V4
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
        'updatedDate' => '\DateTime',
        'createdDate' => '\DateTime',
        'deletedDate' => '\DateTime',
        'deleted' => 'bool',
        'suppressed' => 'bool',
        'names' => 'string[]',
        'barcodes' => 'string[]',
        'expirationDate' => '\DateTime',
        'birthDate' => '\DateTime',
        'emails' => 'string[]',
        'patronType' => 'int',
        'patronCodes' => '\III\Sierra\V4\Models\Codes',
        'homeLibraryCode' => 'string',
        'message' => '\III\Sierra\V4\Models\Message',
        'blockInfo' => '\III\Sierra\V4\Models\Block',
        'addresses' => '\III\Sierra\V4\Models\Address[]',
        'phones' => '\III\Sierra\V4\Models\Phone[]',
        'uniqueIds' => 'string[]',
        'moneyOwed' => 'double',
        'fixedFields' => '\III\Sierra\V4\Models\map',
        'varFields' => '\III\Sierra\V4\Models\VarField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'updatedDate' => 'date-time',
        'createdDate' => 'date-time',
        'deletedDate' => 'date',
        'deleted' => null,
        'suppressed' => null,
        'names' => null,
        'barcodes' => null,
        'expirationDate' => 'date',
        'birthDate' => 'date',
        'emails' => null,
        'patronType' => 'int32',
        'patronCodes' => null,
        'homeLibraryCode' => null,
        'message' => null,
        'blockInfo' => null,
        'addresses' => null,
        'phones' => null,
        'uniqueIds' => null,
        'moneyOwed' => 'double',
        'fixedFields' => null,
        'varFields' => null
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
        'updatedDate' => 'updatedDate',
        'createdDate' => 'createdDate',
        'deletedDate' => 'deletedDate',
        'deleted' => 'deleted',
        'suppressed' => 'suppressed',
        'names' => 'names',
        'barcodes' => 'barcodes',
        'expirationDate' => 'expirationDate',
        'birthDate' => 'birthDate',
        'emails' => 'emails',
        'patronType' => 'patronType',
        'patronCodes' => 'patronCodes',
        'homeLibraryCode' => 'homeLibraryCode',
        'message' => 'message',
        'blockInfo' => 'blockInfo',
        'addresses' => 'addresses',
        'phones' => 'phones',
        'uniqueIds' => 'uniqueIds',
        'moneyOwed' => 'moneyOwed',
        'fixedFields' => 'fixedFields',
        'varFields' => 'varFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'updatedDate' => 'setUpdatedDate',
        'createdDate' => 'setCreatedDate',
        'deletedDate' => 'setDeletedDate',
        'deleted' => 'setDeleted',
        'suppressed' => 'setSuppressed',
        'names' => 'setNames',
        'barcodes' => 'setBarcodes',
        'expirationDate' => 'setExpirationDate',
        'birthDate' => 'setBirthDate',
        'emails' => 'setEmails',
        'patronType' => 'setPatronType',
        'patronCodes' => 'setPatronCodes',
        'homeLibraryCode' => 'setHomeLibraryCode',
        'message' => 'setMessage',
        'blockInfo' => 'setBlockInfo',
        'addresses' => 'setAddresses',
        'phones' => 'setPhones',
        'uniqueIds' => 'setUniqueIds',
        'moneyOwed' => 'setMoneyOwed',
        'fixedFields' => 'setFixedFields',
        'varFields' => 'setVarFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'updatedDate' => 'getUpdatedDate',
        'createdDate' => 'getCreatedDate',
        'deletedDate' => 'getDeletedDate',
        'deleted' => 'getDeleted',
        'suppressed' => 'getSuppressed',
        'names' => 'getNames',
        'barcodes' => 'getBarcodes',
        'expirationDate' => 'getExpirationDate',
        'birthDate' => 'getBirthDate',
        'emails' => 'getEmails',
        'patronType' => 'getPatronType',
        'patronCodes' => 'getPatronCodes',
        'homeLibraryCode' => 'getHomeLibraryCode',
        'message' => 'getMessage',
        'blockInfo' => 'getBlockInfo',
        'addresses' => 'getAddresses',
        'phones' => 'getPhones',
        'uniqueIds' => 'getUniqueIds',
        'moneyOwed' => 'getMoneyOwed',
        'fixedFields' => 'getFixedFields',
        'varFields' => 'getVarFields'
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
        $this->container['updatedDate'] = isset($data['updatedDate']) ? $data['updatedDate'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['deletedDate'] = isset($data['deletedDate']) ? $data['deletedDate'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['suppressed'] = isset($data['suppressed']) ? $data['suppressed'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['patronType'] = isset($data['patronType']) ? $data['patronType'] : null;
        $this->container['patronCodes'] = isset($data['patronCodes']) ? $data['patronCodes'] : null;
        $this->container['homeLibraryCode'] = isset($data['homeLibraryCode']) ? $data['homeLibraryCode'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['blockInfo'] = isset($data['blockInfo']) ? $data['blockInfo'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['uniqueIds'] = isset($data['uniqueIds']) ? $data['uniqueIds'] : null;
        $this->container['moneyOwed'] = isset($data['moneyOwed']) ? $data['moneyOwed'] : null;
        $this->container['fixedFields'] = isset($data['fixedFields']) ? $data['fixedFields'] : null;
        $this->container['varFields'] = isset($data['varFields']) ? $data['varFields'] : null;
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
        if ($this->container['fixedFields'] === null) {
            $invalidProperties[] = "'fixedFields' can't be null";
        }
        if ($this->container['varFields'] === null) {
            $invalidProperties[] = "'varFields' can't be null";
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
        if ($this->container['fixedFields'] === null) {
            return false;
        }
        if ($this->container['varFields'] === null) {
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
     * Gets updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updatedDate'];
    }

    /**
     * Sets updatedDate
     *
     * @param \DateTime $updatedDate the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->container['updatedDate'] = $updatedDate;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate the date and time the record was created, in ISO 8601 format (yyyy-MM-dd'T'HH:mm:ssZZ)
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets deletedDate
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->container['deletedDate'];
    }

    /**
     * Sets deletedDate
     *
     * @param \DateTime $deletedDate the date the record was deleted, in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setDeletedDate($deletedDate)
    {
        $this->container['deletedDate'] = $deletedDate;

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
     * Gets expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \DateTime $expirationDate the expiration date of the patron's borrowing privileges in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birthDate'];
    }

    /**
     * Sets birthDate
     *
     * @param \DateTime $birthDate the patron's date of birth in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;

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
     * Gets patronType
     *
     * @return int
     */
    public function getPatronType()
    {
        return $this->container['patronType'];
    }

    /**
     * Sets patronType
     *
     * @param int $patronType the patron type code
     *
     * @return $this
     */
    public function setPatronType($patronType)
    {
        $this->container['patronType'] = $patronType;

        return $this;
    }

    /**
     * Gets patronCodes
     *
     * @return \III\Sierra\V4\Models\Codes
     */
    public function getPatronCodes()
    {
        return $this->container['patronCodes'];
    }

    /**
     * Sets patronCodes
     *
     * @param \III\Sierra\V4\Models\Codes $patronCodes the library-defined pcodes associated with the patron
     *
     * @return $this
     */
    public function setPatronCodes($patronCodes)
    {
        $this->container['patronCodes'] = $patronCodes;

        return $this;
    }

    /**
     * Gets homeLibraryCode
     *
     * @return string
     */
    public function getHomeLibraryCode()
    {
        return $this->container['homeLibraryCode'];
    }

    /**
     * Sets homeLibraryCode
     *
     * @param string $homeLibraryCode the patron's home library
     *
     * @return $this
     */
    public function setHomeLibraryCode($homeLibraryCode)
    {
        $this->container['homeLibraryCode'] = $homeLibraryCode;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \III\Sierra\V4\Models\Message
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \III\Sierra\V4\Models\Message $message message-related data for the patron
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets blockInfo
     *
     * @return \III\Sierra\V4\Models\Block
     */
    public function getBlockInfo()
    {
        return $this->container['blockInfo'];
    }

    /**
     * Sets blockInfo
     *
     * @param \III\Sierra\V4\Models\Block $blockInfo patron block information
     *
     * @return $this
     */
    public function setBlockInfo($blockInfo)
    {
        $this->container['blockInfo'] = $blockInfo;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \III\Sierra\V4\Models\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \III\Sierra\V4\Models\Address[] $addresses the patron's addresses
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
     * @return \III\Sierra\V4\Models\Phone[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \III\Sierra\V4\Models\Phone[] $phones the patron's telephone numbers
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets uniqueIds
     *
     * @return string[]
     */
    public function getUniqueIds()
    {
        return $this->container['uniqueIds'];
    }

    /**
     * Sets uniqueIds
     *
     * @param string[] $uniqueIds the patron's unique IDs
     *
     * @return $this
     */
    public function setUniqueIds($uniqueIds)
    {
        $this->container['uniqueIds'] = $uniqueIds;

        return $this;
    }

    /**
     * Gets moneyOwed
     *
     * @return double
     */
    public function getMoneyOwed()
    {
        return $this->container['moneyOwed'];
    }

    /**
     * Sets moneyOwed
     *
     * @param double $moneyOwed the amount of money the patron owes in fines and charges
     *
     * @return $this
     */
    public function setMoneyOwed($moneyOwed)
    {
        $this->container['moneyOwed'] = $moneyOwed;

        return $this;
    }

    /**
     * Gets fixedFields
     *
     * @return \III\Sierra\V4\Models\map
     */
    public function getFixedFields()
    {
        return $this->container['fixedFields'];
    }

    /**
     * Sets fixedFields
     *
     * @param \III\Sierra\V4\Models\map $fixedFields the fixed-length fields from the patron record
     *
     * @return $this
     */
    public function setFixedFields($fixedFields)
    {
        $this->container['fixedFields'] = $fixedFields;

        return $this;
    }

    /**
     * Gets varFields
     *
     * @return \III\Sierra\V4\Models\VarField[]
     */
    public function getVarFields()
    {
        return $this->container['varFields'];
    }

    /**
     * Sets varFields
     *
     * @param \III\Sierra\V4\Models\VarField[] $varFields the variable-length fields from the patron record
     *
     * @return $this
     */
    public function setVarFields($varFields)
    {
        $this->container['varFields'] = $varFields;

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



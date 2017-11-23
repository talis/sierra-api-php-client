<?php
/**
 * Bib
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
 * Bib Class Doc Comment
 *
 * @category Class
 * @description a bibliographic record
 * @package  SierraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Bib implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Bib';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'updated_date' => '\DateTime',
        'created_date' => '\DateTime',
        'deleted_date' => '\DateTime',
        'deleted' => 'bool',
        'suppressed' => 'bool',
        'available' => 'bool',
        'lang' => '\SierraApi\Model\Language',
        'title' => 'string',
        'author' => 'string',
        'material_type' => '\SierraApi\Model\MaterialType',
        'bib_level' => '\SierraApi\Model\BibLevel',
        'publish_year' => 'int',
        'catalog_date' => '\DateTime',
        'country' => '\SierraApi\Model\Country',
        'orders' => '\SierraApi\Model\OrderInfo[]',
        'norm_title' => 'string',
        'norm_author' => 'string',
        'locations' => '\SierraApi\Model\Location[]',
        'fixed_fields' => '\SierraApi\Model\map',
        'var_fields' => '\SierraApi\Model\VarField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'updated_date' => 'date-time',
        'created_date' => 'date-time',
        'deleted_date' => 'date',
        'deleted' => null,
        'suppressed' => null,
        'available' => null,
        'lang' => null,
        'title' => null,
        'author' => null,
        'material_type' => null,
        'bib_level' => null,
        'publish_year' => 'int32',
        'catalog_date' => 'date',
        'country' => null,
        'orders' => null,
        'norm_title' => null,
        'norm_author' => null,
        'locations' => null,
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
        'available' => 'available',
        'lang' => 'lang',
        'title' => 'title',
        'author' => 'author',
        'material_type' => 'materialType',
        'bib_level' => 'bibLevel',
        'publish_year' => 'publishYear',
        'catalog_date' => 'catalogDate',
        'country' => 'country',
        'orders' => 'orders',
        'norm_title' => 'normTitle',
        'norm_author' => 'normAuthor',
        'locations' => 'locations',
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
        'available' => 'setAvailable',
        'lang' => 'setLang',
        'title' => 'setTitle',
        'author' => 'setAuthor',
        'material_type' => 'setMaterialType',
        'bib_level' => 'setBibLevel',
        'publish_year' => 'setPublishYear',
        'catalog_date' => 'setCatalogDate',
        'country' => 'setCountry',
        'orders' => 'setOrders',
        'norm_title' => 'setNormTitle',
        'norm_author' => 'setNormAuthor',
        'locations' => 'setLocations',
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
        'available' => 'getAvailable',
        'lang' => 'getLang',
        'title' => 'getTitle',
        'author' => 'getAuthor',
        'material_type' => 'getMaterialType',
        'bib_level' => 'getBibLevel',
        'publish_year' => 'getPublishYear',
        'catalog_date' => 'getCatalogDate',
        'country' => 'getCountry',
        'orders' => 'getOrders',
        'norm_title' => 'getNormTitle',
        'norm_author' => 'getNormAuthor',
        'locations' => 'getLocations',
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
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['material_type'] = isset($data['material_type']) ? $data['material_type'] : null;
        $this->container['bib_level'] = isset($data['bib_level']) ? $data['bib_level'] : null;
        $this->container['publish_year'] = isset($data['publish_year']) ? $data['publish_year'] : null;
        $this->container['catalog_date'] = isset($data['catalog_date']) ? $data['catalog_date'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['norm_title'] = isset($data['norm_title']) ? $data['norm_title'] : null;
        $this->container['norm_author'] = isset($data['norm_author']) ? $data['norm_author'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
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
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
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
        if ($this->container['orders'] === null) {
            return false;
        }
        if ($this->container['locations'] === null) {
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id the record ID
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
     * Gets available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool $available whether the record is available for checkout
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return \SierraApi\Model\Language
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param \SierraApi\Model\Language $lang the language of the material (display value)
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

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
     * @param string $title the title from the bib record
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author the most authoritative available representation of the author's name
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets material_type
     *
     * @return \SierraApi\Model\MaterialType
     */
    public function getMaterialType()
    {
        return $this->container['material_type'];
    }

    /**
     * Sets material_type
     *
     * @param \SierraApi\Model\MaterialType $material_type the material type, such as book, serial, map, and so forth, based on MARC 21 Leader/06 values, or UNIMARC Label/06 values
     *
     * @return $this
     */
    public function setMaterialType($material_type)
    {
        $this->container['material_type'] = $material_type;

        return $this;
    }

    /**
     * Gets bib_level
     *
     * @return \SierraApi\Model\BibLevel
     */
    public function getBibLevel()
    {
        return $this->container['bib_level'];
    }

    /**
     * Sets bib_level
     *
     * @param \SierraApi\Model\BibLevel $bib_level the bibliographic level, based on MARC 21 Leader/07 values or UNIMARC Label/07 values
     *
     * @return $this
     */
    public function setBibLevel($bib_level)
    {
        $this->container['bib_level'] = $bib_level;

        return $this;
    }

    /**
     * Gets publish_year
     *
     * @return int
     */
    public function getPublishYear()
    {
        return $this->container['publish_year'];
    }

    /**
     * Sets publish_year
     *
     * @param int $publish_year the year of publication
     *
     * @return $this
     */
    public function setPublishYear($publish_year)
    {
        $this->container['publish_year'] = $publish_year;

        return $this;
    }

    /**
     * Gets catalog_date
     *
     * @return \DateTime
     */
    public function getCatalogDate()
    {
        return $this->container['catalog_date'];
    }

    /**
     * Sets catalog_date
     *
     * @param \DateTime $catalog_date the date the record was added to the catalog, in ISO 8601 format (yyyy-MM-dd)
     *
     * @return $this
     */
    public function setCatalogDate($catalog_date)
    {
        $this->container['catalog_date'] = $catalog_date;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \SierraApi\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \SierraApi\Model\Country $country the country of publication (display value)
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \SierraApi\Model\OrderInfo[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \SierraApi\Model\OrderInfo[] $orders the order information for the bib record
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets norm_title
     *
     * @return string
     */
    public function getNormTitle()
    {
        return $this->container['norm_title'];
    }

    /**
     * Sets norm_title
     *
     * @param string $norm_title the normalized form of the most authoritative available version of the title
     *
     * @return $this
     */
    public function setNormTitle($norm_title)
    {
        $this->container['norm_title'] = $norm_title;

        return $this;
    }

    /**
     * Gets norm_author
     *
     * @return string
     */
    public function getNormAuthor()
    {
        return $this->container['norm_author'];
    }

    /**
     * Sets norm_author
     *
     * @param string $norm_author the normalized form of the most authoritative available representation of the author's name
     *
     * @return $this
     */
    public function setNormAuthor($norm_author)
    {
        $this->container['norm_author'] = $norm_author;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \SierraApi\Model\Location[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \SierraApi\Model\Location[] $locations the locations associated with the bib
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

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
     * @param \SierraApi\Model\map $fixed_fields the fixed-length fields from the bib record
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
     * @param \SierraApi\Model\VarField[] $var_fields the variable-length fields from the bib record
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



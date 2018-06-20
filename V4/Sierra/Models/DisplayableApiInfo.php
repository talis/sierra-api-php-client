<?php
/**
 * DisplayableApiInfo
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
 * DisplayableApiInfo Class Doc Comment
 *
 * @category    Class
 * @description API displayable information details
 * @package     III\Sierra\V4
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DisplayableApiInfo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'version' => 'string',
        'sierraVersion' => 'string',
        'fullVersion' => 'string',
        'revision' => 'string',
        'revisionDate' => 'string',
        'backwardsCompatibleVersions' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'version' => 'version',
        'sierraVersion' => 'sierraVersion',
        'fullVersion' => 'fullVersion',
        'revision' => 'revision',
        'revisionDate' => 'revisionDate',
        'backwardsCompatibleVersions' => 'backwardsCompatibleVersions'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'version' => 'setVersion',
        'sierraVersion' => 'setSierraVersion',
        'fullVersion' => 'setFullVersion',
        'revision' => 'setRevision',
        'revisionDate' => 'setRevisionDate',
        'backwardsCompatibleVersions' => 'setBackwardsCompatibleVersions'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'version' => 'getVersion',
        'sierraVersion' => 'getSierraVersion',
        'fullVersion' => 'getFullVersion',
        'revision' => 'getRevision',
        'revisionDate' => 'getRevisionDate',
        'backwardsCompatibleVersions' => 'getBackwardsCompatibleVersions'
    );
  
    
    /**
      * $name the API name
      * @var string
      */
    protected $name;
    
    /**
      * $version the API version
      * @var string
      */
    protected $version;
    
    /**
      * $sierraVersion the intended version of sierra the API works with
      * @var string
      */
    protected $sierraVersion;
    
    /**
      * $fullVersion the full version, includes sierra version and API version
      * @var string
      */
    protected $fullVersion;
    
    /**
      * $revision the API revision
      * @var string
      */
    protected $revision;
    
    /**
      * $revisionDate the API revision date
      * @var string
      */
    protected $revisionDate;
    
    /**
      * $backwardsCompatibleVersions the previous versions of the API this version supports
      * @var string
      */
    protected $backwardsCompatibleVersions;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->name = $data["name"];
            $this->version = $data["version"];
            $this->sierraVersion = $data["sierraVersion"];
            $this->fullVersion = $data["fullVersion"];
            $this->revision = $data["revision"];
            $this->revisionDate = $data["revisionDate"];
            $this->backwardsCompatibleVersions = $data["backwardsCompatibleVersions"];
        }
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name the API name
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
  
    /**
     * Sets version
     * @param string $version the API version
     * @return $this
     */
    public function setVersion($version)
    {
        
        $this->version = $version;
        return $this;
    }
    
    /**
     * Gets sierraVersion
     * @return string
     */
    public function getSierraVersion()
    {
        return $this->sierraVersion;
    }
  
    /**
     * Sets sierraVersion
     * @param string $sierraVersion the intended version of sierra the API works with
     * @return $this
     */
    public function setSierraVersion($sierraVersion)
    {
        
        $this->sierraVersion = $sierraVersion;
        return $this;
    }
    
    /**
     * Gets fullVersion
     * @return string
     */
    public function getFullVersion()
    {
        return $this->fullVersion;
    }
  
    /**
     * Sets fullVersion
     * @param string $fullVersion the full version, includes sierra version and API version
     * @return $this
     */
    public function setFullVersion($fullVersion)
    {
        
        $this->fullVersion = $fullVersion;
        return $this;
    }
    
    /**
     * Gets revision
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }
  
    /**
     * Sets revision
     * @param string $revision the API revision
     * @return $this
     */
    public function setRevision($revision)
    {
        
        $this->revision = $revision;
        return $this;
    }
    
    /**
     * Gets revisionDate
     * @return string
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }
  
    /**
     * Sets revisionDate
     * @param string $revisionDate the API revision date
     * @return $this
     */
    public function setRevisionDate($revisionDate)
    {
        
        $this->revisionDate = $revisionDate;
        return $this;
    }
    
    /**
     * Gets backwardsCompatibleVersions
     * @return string
     */
    public function getBackwardsCompatibleVersions()
    {
        return $this->backwardsCompatibleVersions;
    }
  
    /**
     * Sets backwardsCompatibleVersions
     * @param string $backwardsCompatibleVersions the previous versions of the API this version supports
     * @return $this
     */
    public function setBackwardsCompatibleVersions($backwardsCompatibleVersions)
    {
        
        $this->backwardsCompatibleVersions = $backwardsCompatibleVersions;
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

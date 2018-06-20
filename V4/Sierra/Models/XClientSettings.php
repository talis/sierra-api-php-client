<?php
/**
 * XClientSettings
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
 * XClientSettings Class Doc Comment
 *
 * @category    Class
 * @description the xclient settings
 * @package     III\Sierra\V4
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class XClientSettings implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'host' => 'string',
        'port' => 'int',
        'readTimeoutMs' => 'int',
        'connectionTimeoutMs' => 'int',
        'pilotEducator' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'host' => 'host',
        'port' => 'port',
        'readTimeoutMs' => 'readTimeoutMs',
        'connectionTimeoutMs' => 'connectionTimeoutMs',
        'pilotEducator' => 'pilotEducator'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'host' => 'setHost',
        'port' => 'setPort',
        'readTimeoutMs' => 'setReadTimeoutMs',
        'connectionTimeoutMs' => 'setConnectionTimeoutMs',
        'pilotEducator' => 'setPilotEducator'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'host' => 'getHost',
        'port' => 'getPort',
        'readTimeoutMs' => 'getReadTimeoutMs',
        'connectionTimeoutMs' => 'getConnectionTimeoutMs',
        'pilotEducator' => 'getPilotEducator'
    );
  
    
    /**
      * $host the xclient host
      * @var string
      */
    protected $host;
    
    /**
      * $port the xclient port
      * @var int
      */
    protected $port;
    
    /**
      * $readTimeoutMs the xclient read timeout in milliseconds
      * @var int
      */
    protected $readTimeoutMs;
    
    /**
      * $connectionTimeoutMs the xclient connection timeout in milliseconds
      * @var int
      */
    protected $connectionTimeoutMs;
    
    /**
      * $pilotEducator the xclient pilot educator
      * @var int
      */
    protected $pilotEducator;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->host = $data["host"];
            $this->port = $data["port"];
            $this->readTimeoutMs = $data["readTimeoutMs"];
            $this->connectionTimeoutMs = $data["connectionTimeoutMs"];
            $this->pilotEducator = $data["pilotEducator"];
        }
    }
    
    /**
     * Gets host
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
  
    /**
     * Sets host
     * @param string $host the xclient host
     * @return $this
     */
    public function setHost($host)
    {
        
        $this->host = $host;
        return $this;
    }
    
    /**
     * Gets port
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }
  
    /**
     * Sets port
     * @param int $port the xclient port
     * @return $this
     */
    public function setPort($port)
    {
        
        $this->port = $port;
        return $this;
    }
    
    /**
     * Gets readTimeoutMs
     * @return int
     */
    public function getReadTimeoutMs()
    {
        return $this->readTimeoutMs;
    }
  
    /**
     * Sets readTimeoutMs
     * @param int $readTimeoutMs the xclient read timeout in milliseconds
     * @return $this
     */
    public function setReadTimeoutMs($readTimeoutMs)
    {
        
        $this->readTimeoutMs = $readTimeoutMs;
        return $this;
    }
    
    /**
     * Gets connectionTimeoutMs
     * @return int
     */
    public function getConnectionTimeoutMs()
    {
        return $this->connectionTimeoutMs;
    }
  
    /**
     * Sets connectionTimeoutMs
     * @param int $connectionTimeoutMs the xclient connection timeout in milliseconds
     * @return $this
     */
    public function setConnectionTimeoutMs($connectionTimeoutMs)
    {
        
        $this->connectionTimeoutMs = $connectionTimeoutMs;
        return $this;
    }
    
    /**
     * Gets pilotEducator
     * @return int
     */
    public function getPilotEducator()
    {
        return $this->pilotEducator;
    }
  
    /**
     * Sets pilotEducator
     * @param int $pilotEducator the xclient pilot educator
     * @return $this
     */
    public function setPilotEducator($pilotEducator)
    {
        
        $this->pilotEducator = $pilotEducator;
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

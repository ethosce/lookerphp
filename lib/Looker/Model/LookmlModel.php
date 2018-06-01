<?php
/**
 * LookmlModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Experimental Looker API 3.1 Preview
 *
 * This API 3.1 is in active development. Breaking changes are likely to occur to some API functions in future Looker releases until API 3.1 is officially launched and upgraded to beta status.  If you have time and interest to experiment with new or modified services exposed in this embryonic API 3.1, we welcome your participation and feedback!  For large development efforts or critical line-of-business projects, we strongly recommend you stick with the API 3.0 while API 3.1 is under construction.
 *
 * OpenAPI spec version: 3.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Looker\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LookmlModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookmlModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LookmlModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'project_name' => 'string',
        'allowed_db_connection_names' => 'string[]',
        'unlimited_db_connections' => 'bool',
        'has_content' => 'bool',
        'label' => 'string',
        'explores' => '\Swagger\Client\Looker\Model\LookmlModelNavExplore[]',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'project_name' => null,
        'allowed_db_connection_names' => null,
        'unlimited_db_connections' => null,
        'has_content' => null,
        'label' => null,
        'explores' => null,
        'can' => null
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
        'name' => 'name',
        'project_name' => 'project_name',
        'allowed_db_connection_names' => 'allowed_db_connection_names',
        'unlimited_db_connections' => 'unlimited_db_connections',
        'has_content' => 'has_content',
        'label' => 'label',
        'explores' => 'explores',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'project_name' => 'setProjectName',
        'allowed_db_connection_names' => 'setAllowedDbConnectionNames',
        'unlimited_db_connections' => 'setUnlimitedDbConnections',
        'has_content' => 'setHasContent',
        'label' => 'setLabel',
        'explores' => 'setExplores',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'project_name' => 'getProjectName',
        'allowed_db_connection_names' => 'getAllowedDbConnectionNames',
        'unlimited_db_connections' => 'getUnlimitedDbConnections',
        'has_content' => 'getHasContent',
        'label' => 'getLabel',
        'explores' => 'getExplores',
        'can' => 'getCan'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['allowed_db_connection_names'] = isset($data['allowed_db_connection_names']) ? $data['allowed_db_connection_names'] : null;
        $this->container['unlimited_db_connections'] = isset($data['unlimited_db_connections']) ? $data['unlimited_db_connections'] : null;
        $this->container['has_content'] = isset($data['has_content']) ? $data['has_content'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['explores'] = isset($data['explores']) ? $data['explores'] : null;
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the model. Also used as the unique identifier
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name Name of project containing the model
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets allowed_db_connection_names
     *
     * @return string[]
     */
    public function getAllowedDbConnectionNames()
    {
        return $this->container['allowed_db_connection_names'];
    }

    /**
     * Sets allowed_db_connection_names
     *
     * @param string[] $allowed_db_connection_names Array of names of connections this model is allowed to use
     *
     * @return $this
     */
    public function setAllowedDbConnectionNames($allowed_db_connection_names)
    {
        $this->container['allowed_db_connection_names'] = $allowed_db_connection_names;

        return $this;
    }

    /**
     * Gets unlimited_db_connections
     *
     * @return bool
     */
    public function getUnlimitedDbConnections()
    {
        return $this->container['unlimited_db_connections'];
    }

    /**
     * Sets unlimited_db_connections
     *
     * @param bool $unlimited_db_connections Is this model allowed to use all current and future connections
     *
     * @return $this
     */
    public function setUnlimitedDbConnections($unlimited_db_connections)
    {
        $this->container['unlimited_db_connections'] = $unlimited_db_connections;

        return $this;
    }

    /**
     * Gets has_content
     *
     * @return bool
     */
    public function getHasContent()
    {
        return $this->container['has_content'];
    }

    /**
     * Sets has_content
     *
     * @param bool $has_content Does this model declaration have have lookml content?
     *
     * @return $this
     */
    public function setHasContent($has_content)
    {
        $this->container['has_content'] = $has_content;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label UI-friendly name for this model
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets explores
     *
     * @return \Swagger\Client\Looker\Model\LookmlModelNavExplore[]
     */
    public function getExplores()
    {
        return $this->container['explores'];
    }

    /**
     * Sets explores
     *
     * @param \Swagger\Client\Looker\Model\LookmlModelNavExplore[] $explores Array of explores (if has_content)
     *
     * @return $this
     */
    public function setExplores($explores)
    {
        $this->container['explores'] = $explores;

        return $this;
    }

    /**
     * Gets can
     *
     * @return map[string,bool]
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param map[string,bool] $can Operations the current user is able to perform on this object
     *
     * @return $this
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

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


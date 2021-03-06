<?php
/**
 * DialectInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Looker
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

namespace Looker\Model;

use \ArrayAccess;
use \Looker\ObjectSerializer;

/**
 * DialectInfo Class Doc Comment
 *
 * @category Class
 * @package  Looker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DialectInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DialectInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'label' => 'string',
        'label_for_database_equivalent' => 'string',
        'default_port' => 'string',
        'default_max_connections' => 'string',
        'supported_options' => '\Looker\Model\DialectInfoOptions',
        'installed' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'label' => null,
        'label_for_database_equivalent' => null,
        'default_port' => null,
        'default_max_connections' => null,
        'supported_options' => null,
        'installed' => null,
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
        'label' => 'label',
        'label_for_database_equivalent' => 'label_for_database_equivalent',
        'default_port' => 'default_port',
        'default_max_connections' => 'default_max_connections',
        'supported_options' => 'supported_options',
        'installed' => 'installed',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'label' => 'setLabel',
        'label_for_database_equivalent' => 'setLabelForDatabaseEquivalent',
        'default_port' => 'setDefaultPort',
        'default_max_connections' => 'setDefaultMaxConnections',
        'supported_options' => 'setSupportedOptions',
        'installed' => 'setInstalled',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'label' => 'getLabel',
        'label_for_database_equivalent' => 'getLabelForDatabaseEquivalent',
        'default_port' => 'getDefaultPort',
        'default_max_connections' => 'getDefaultMaxConnections',
        'supported_options' => 'getSupportedOptions',
        'installed' => 'getInstalled',
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['label_for_database_equivalent'] = isset($data['label_for_database_equivalent']) ? $data['label_for_database_equivalent'] : null;
        $this->container['default_port'] = isset($data['default_port']) ? $data['default_port'] : null;
        $this->container['default_max_connections'] = isset($data['default_max_connections']) ? $data['default_max_connections'] : null;
        $this->container['supported_options'] = isset($data['supported_options']) ? $data['supported_options'] : null;
        $this->container['installed'] = isset($data['installed']) ? $data['installed'] : null;
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
     * @param string $name The name of the dialect
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $label The human-readable label of the connection
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label_for_database_equivalent
     *
     * @return string
     */
    public function getLabelForDatabaseEquivalent()
    {
        return $this->container['label_for_database_equivalent'];
    }

    /**
     * Sets label_for_database_equivalent
     *
     * @param string $label_for_database_equivalent What the dialect calls the equivalent of a normal SQL table
     *
     * @return $this
     */
    public function setLabelForDatabaseEquivalent($label_for_database_equivalent)
    {
        $this->container['label_for_database_equivalent'] = $label_for_database_equivalent;

        return $this;
    }

    /**
     * Gets default_port
     *
     * @return string
     */
    public function getDefaultPort()
    {
        return $this->container['default_port'];
    }

    /**
     * Sets default_port
     *
     * @param string $default_port Default port number
     *
     * @return $this
     */
    public function setDefaultPort($default_port)
    {
        $this->container['default_port'] = $default_port;

        return $this;
    }

    /**
     * Gets default_max_connections
     *
     * @return string
     */
    public function getDefaultMaxConnections()
    {
        return $this->container['default_max_connections'];
    }

    /**
     * Sets default_max_connections
     *
     * @param string $default_max_connections Default number max connections
     *
     * @return $this
     */
    public function setDefaultMaxConnections($default_max_connections)
    {
        $this->container['default_max_connections'] = $default_max_connections;

        return $this;
    }

    /**
     * Gets supported_options
     *
     * @return \Looker\Model\DialectInfoOptions
     */
    public function getSupportedOptions()
    {
        return $this->container['supported_options'];
    }

    /**
     * Sets supported_options
     *
     * @param \Looker\Model\DialectInfoOptions $supported_options Option support details
     *
     * @return $this
     */
    public function setSupportedOptions($supported_options)
    {
        $this->container['supported_options'] = $supported_options;

        return $this;
    }

    /**
     * Gets installed
     *
     * @return bool
     */
    public function getInstalled()
    {
        return $this->container['installed'];
    }

    /**
     * Sets installed
     *
     * @param bool $installed Is the supporting driver installed
     *
     * @return $this
     */
    public function setInstalled($installed)
    {
        $this->container['installed'] = $installed;

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



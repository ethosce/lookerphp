<?php
/**
 * Datagroup
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
 * Datagroup Class Doc Comment
 *
 * @category Class
 * @package  Looker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Datagroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Datagroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'model_name' => 'string',
        'trigger_value' => 'string',
        'trigger_error' => 'string',
        'stale_before' => 'int',
        'triggered_at' => 'int',
        'trigger_check_at' => 'int',
        'created_at' => 'int',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'model_name' => null,
        'trigger_value' => null,
        'trigger_error' => null,
        'stale_before' => 'int64',
        'triggered_at' => 'int64',
        'trigger_check_at' => 'int64',
        'created_at' => 'int64',
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
        'id' => 'id',
        'name' => 'name',
        'model_name' => 'model_name',
        'trigger_value' => 'trigger_value',
        'trigger_error' => 'trigger_error',
        'stale_before' => 'stale_before',
        'triggered_at' => 'triggered_at',
        'trigger_check_at' => 'trigger_check_at',
        'created_at' => 'created_at',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'model_name' => 'setModelName',
        'trigger_value' => 'setTriggerValue',
        'trigger_error' => 'setTriggerError',
        'stale_before' => 'setStaleBefore',
        'triggered_at' => 'setTriggeredAt',
        'trigger_check_at' => 'setTriggerCheckAt',
        'created_at' => 'setCreatedAt',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'model_name' => 'getModelName',
        'trigger_value' => 'getTriggerValue',
        'trigger_error' => 'getTriggerError',
        'stale_before' => 'getStaleBefore',
        'triggered_at' => 'getTriggeredAt',
        'trigger_check_at' => 'getTriggerCheckAt',
        'created_at' => 'getCreatedAt',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['model_name'] = isset($data['model_name']) ? $data['model_name'] : null;
        $this->container['trigger_value'] = isset($data['trigger_value']) ? $data['trigger_value'] : null;
        $this->container['trigger_error'] = isset($data['trigger_error']) ? $data['trigger_error'] : null;
        $this->container['stale_before'] = isset($data['stale_before']) ? $data['stale_before'] : null;
        $this->container['triggered_at'] = isset($data['triggered_at']) ? $data['triggered_at'] : null;
        $this->container['trigger_check_at'] = isset($data['trigger_check_at']) ? $data['trigger_check_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
     * @param int $id ID of the datagroup. Also used as the unique identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name Name of the datagroup. Unique when combined with model_name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name Name of the model containing the datagroup. Unique when combined with name.
     *
     * @return $this
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets trigger_value
     *
     * @return string
     */
    public function getTriggerValue()
    {
        return $this->container['trigger_value'];
    }

    /**
     * Sets trigger_value
     *
     * @param string $trigger_value The value of the trigger when last checked.
     *
     * @return $this
     */
    public function setTriggerValue($trigger_value)
    {
        $this->container['trigger_value'] = $trigger_value;

        return $this;
    }

    /**
     * Gets trigger_error
     *
     * @return string
     */
    public function getTriggerError()
    {
        return $this->container['trigger_error'];
    }

    /**
     * Sets trigger_error
     *
     * @param string $trigger_error The message returned with the error of the last trigger check.
     *
     * @return $this
     */
    public function setTriggerError($trigger_error)
    {
        $this->container['trigger_error'] = $trigger_error;

        return $this;
    }

    /**
     * Gets stale_before
     *
     * @return int
     */
    public function getStaleBefore()
    {
        return $this->container['stale_before'];
    }

    /**
     * Sets stale_before
     *
     * @param int $stale_before UNIX timestamp before which cache entries are considered stale. Cannot be in the future.
     *
     * @return $this
     */
    public function setStaleBefore($stale_before)
    {
        $this->container['stale_before'] = $stale_before;

        return $this;
    }

    /**
     * Gets triggered_at
     *
     * @return int
     */
    public function getTriggeredAt()
    {
        return $this->container['triggered_at'];
    }

    /**
     * Sets triggered_at
     *
     * @param int $triggered_at UNIX timestamp at which this entry became triggered. Cannot be in the future.
     *
     * @return $this
     */
    public function setTriggeredAt($triggered_at)
    {
        $this->container['triggered_at'] = $triggered_at;

        return $this;
    }

    /**
     * Gets trigger_check_at
     *
     * @return int
     */
    public function getTriggerCheckAt()
    {
        return $this->container['trigger_check_at'];
    }

    /**
     * Sets trigger_check_at
     *
     * @param int $trigger_check_at UNIX timestamp at which this entry trigger was last checked.
     *
     * @return $this
     */
    public function setTriggerCheckAt($trigger_check_at)
    {
        $this->container['trigger_check_at'] = $trigger_check_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at UNIX timestamp at which this entry was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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



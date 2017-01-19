<?php
/**
 * CustomFieldValue
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Time
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Time API
 *
 * ConnectWise Time API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Time\Model;

use \ArrayAccess;

/**
 * CustomFieldValue Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Time
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomFieldValue implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomFieldValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'caption' => 'string',
        'type' => 'string',
        'entry_method' => 'string',
        'number_of_decimals' => 'int',
        'value' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'caption' => 'caption',
        'type' => 'type',
        'entry_method' => 'entryMethod',
        'number_of_decimals' => 'numberOfDecimals',
        'value' => 'value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'type' => 'setType',
        'entry_method' => 'setEntryMethod',
        'number_of_decimals' => 'setNumberOfDecimals',
        'value' => 'setValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'type' => 'getType',
        'entry_method' => 'getEntryMethod',
        'number_of_decimals' => 'getNumberOfDecimals',
        'value' => 'getValue'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_TEXT = 'Text';
    const TYPE_BUTTON = 'Button';
    const TYPE_CURRENCY = 'Currency';
    const TYPE_DATE = 'Date';
    const TYPE_HYPERLINK = 'Hyperlink';
    const TYPE_IP_ADDRESS = 'IPAddress';
    const TYPE_CHECKBOX = 'Checkbox';
    const TYPE_NUMBER = 'Number';
    const TYPE_PERCENT = 'Percent';
    const TYPE_TEXT_AREA = 'TextArea';
    const TYPE_PASSWORD = 'Password';
    const ENTRY_METHOD_ENTRY_FIELD = 'EntryField';
    const ENTRY_METHOD_LIST = 'List';
    const ENTRY_METHOD_OPTION = 'Option';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_BUTTON,
            self::TYPE_CURRENCY,
            self::TYPE_DATE,
            self::TYPE_HYPERLINK,
            self::TYPE_IP_ADDRESS,
            self::TYPE_CHECKBOX,
            self::TYPE_NUMBER,
            self::TYPE_PERCENT,
            self::TYPE_TEXT_AREA,
            self::TYPE_PASSWORD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEntryMethodAllowableValues()
    {
        return [
            self::ENTRY_METHOD_ENTRY_FIELD,
            self::ENTRY_METHOD_LIST,
            self::ENTRY_METHOD_OPTION,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['entry_method'] = isset($data['entry_method']) ? $data['entry_method'] : null;
        $this->container['number_of_decimals'] = isset($data['number_of_decimals']) ? $data['number_of_decimals'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["Text", "Button", "Currency", "Date", "Hyperlink", "IPAddress", "Checkbox", "Number", "Percent", "TextArea", "Password"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        $allowed_values = ["EntryField", "List", "Option"];
        if (!in_array($this->container['entry_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'entry_method', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["Text", "Button", "Currency", "Date", "Hyperlink", "IPAddress", "Checkbox", "Number", "Percent", "TextArea", "Password"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["EntryField", "List", "Option"];
        if (!in_array($this->container['entry_method'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets caption
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     * @param string $caption
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('Text', 'Button', 'Currency', 'Date', 'Hyperlink', 'IPAddress', 'Checkbox', 'Number', 'Percent', 'TextArea', 'Password');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'Text', 'Button', 'Currency', 'Date', 'Hyperlink', 'IPAddress', 'Checkbox', 'Number', 'Percent', 'TextArea', 'Password'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets entry_method
     * @return string
     */
    public function getEntryMethod()
    {
        return $this->container['entry_method'];
    }

    /**
     * Sets entry_method
     * @param string $entry_method
     * @return $this
     */
    public function setEntryMethod($entry_method)
    {
        $allowed_values = array('EntryField', 'List', 'Option');
        if (!is_null($entry_method) && (!in_array($entry_method, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'entry_method', must be one of 'EntryField', 'List', 'Option'");
        }
        $this->container['entry_method'] = $entry_method;

        return $this;
    }

    /**
     * Gets number_of_decimals
     * @return int
     */
    public function getNumberOfDecimals()
    {
        return $this->container['number_of_decimals'];
    }

    /**
     * Sets number_of_decimals
     * @param int $number_of_decimals
     * @return $this
     */
    public function setNumberOfDecimals($number_of_decimals)
    {
        $this->container['number_of_decimals'] = $number_of_decimals;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Time\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Time\ObjectSerializer::sanitizeForSerialization($this));
    }
}



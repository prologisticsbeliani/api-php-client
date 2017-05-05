<?php
/**
 * PreviousFixPeriodInvoiceProrataInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Customer
 *
 * This API will gives you the ability to : - manage your account - manage your stores - shares your stores with your friends - manage your contracts - access to your invoices
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PreviousFixPeriodInvoiceProrataInfo Class Doc Comment
 *
 * @category    Class
 * @description Describe the prorata info based on your previous invoice
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PreviousFixPeriodInvoiceProrataInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'previousFixPeriodInvoiceProrataInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'computed_prorata_to_be_deducted' => 'double',
        'invoice_number' => 'string',
        'amount_to_be_paid' => 'double',
        'amount_after_tax' => 'double',
        'contract_id' => 'string',
        'fixed_period_end_date' => '\DateTime',
        'fixed_period_start_date' => '\DateTime'
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
        'computed_prorata_to_be_deducted' => 'computedProrataToBeDeducted',
        'invoice_number' => 'invoiceNumber',
        'amount_to_be_paid' => 'amountToBePaid',
        'amount_after_tax' => 'amountAfterTax',
        'contract_id' => 'contractId',
        'fixed_period_end_date' => 'fixedPeriodEndDate',
        'fixed_period_start_date' => 'fixedPeriodStartDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'computed_prorata_to_be_deducted' => 'setComputedProrataToBeDeducted',
        'invoice_number' => 'setInvoiceNumber',
        'amount_to_be_paid' => 'setAmountToBePaid',
        'amount_after_tax' => 'setAmountAfterTax',
        'contract_id' => 'setContractId',
        'fixed_period_end_date' => 'setFixedPeriodEndDate',
        'fixed_period_start_date' => 'setFixedPeriodStartDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'computed_prorata_to_be_deducted' => 'getComputedProrataToBeDeducted',
        'invoice_number' => 'getInvoiceNumber',
        'amount_to_be_paid' => 'getAmountToBePaid',
        'amount_after_tax' => 'getAmountAfterTax',
        'contract_id' => 'getContractId',
        'fixed_period_end_date' => 'getFixedPeriodEndDate',
        'fixed_period_start_date' => 'getFixedPeriodStartDate'
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
        $this->container['computed_prorata_to_be_deducted'] = isset($data['computed_prorata_to_be_deducted']) ? $data['computed_prorata_to_be_deducted'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['amount_to_be_paid'] = isset($data['amount_to_be_paid']) ? $data['amount_to_be_paid'] : null;
        $this->container['amount_after_tax'] = isset($data['amount_after_tax']) ? $data['amount_after_tax'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['fixed_period_end_date'] = isset($data['fixed_period_end_date']) ? $data['fixed_period_end_date'] : null;
        $this->container['fixed_period_start_date'] = isset($data['fixed_period_start_date']) ? $data['fixed_period_start_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets computed_prorata_to_be_deducted
     * @return double
     */
    public function getComputedProrataToBeDeducted()
    {
        return $this->container['computed_prorata_to_be_deducted'];
    }

    /**
     * Sets computed_prorata_to_be_deducted
     * @param double $computed_prorata_to_be_deducted The prorata amount
     * @return $this
     */
    public function setComputedProrataToBeDeducted($computed_prorata_to_be_deducted)
    {
        $this->container['computed_prorata_to_be_deducted'] = $computed_prorata_to_be_deducted;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param string $invoice_number The previous invoice number
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets amount_to_be_paid
     * @return double
     */
    public function getAmountToBePaid()
    {
        return $this->container['amount_to_be_paid'];
    }

    /**
     * Sets amount_to_be_paid
     * @param double $amount_to_be_paid The amount to be payed of the previous invoice
     * @return $this
     */
    public function setAmountToBePaid($amount_to_be_paid)
    {
        $this->container['amount_to_be_paid'] = $amount_to_be_paid;

        return $this;
    }

    /**
     * Gets amount_after_tax
     * @return double
     */
    public function getAmountAfterTax()
    {
        return $this->container['amount_after_tax'];
    }

    /**
     * Sets amount_after_tax
     * @param double $amount_after_tax The amout after tax of the previous invoice
     * @return $this
     */
    public function setAmountAfterTax($amount_after_tax)
    {
        $this->container['amount_after_tax'] = $amount_after_tax;

        return $this;
    }

    /**
     * Gets contract_id
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param string $contract_id The contract id related to the previous invoice
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets fixed_period_end_date
     * @return \DateTime
     */
    public function getFixedPeriodEndDate()
    {
        return $this->container['fixed_period_end_date'];
    }

    /**
     * Sets fixed_period_end_date
     * @param \DateTime $fixed_period_end_date The fixed end period of the previous invoice
     * @return $this
     */
    public function setFixedPeriodEndDate($fixed_period_end_date)
    {
        $this->container['fixed_period_end_date'] = $fixed_period_end_date;

        return $this;
    }

    /**
     * Gets fixed_period_start_date
     * @return \DateTime
     */
    public function getFixedPeriodStartDate()
    {
        return $this->container['fixed_period_start_date'];
    }

    /**
     * Sets fixed_period_start_date
     * @param \DateTime $fixed_period_start_date The fixed start period of the previous invoice
     * @return $this
     */
    public function setFixedPeriodStartDate($fixed_period_start_date)
    {
        $this->container['fixed_period_start_date'] = $fixed_period_start_date;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



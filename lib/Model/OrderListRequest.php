<?php
/**
 * OrderListRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * # The REST API of BeezUP system ## Overview The REST APIs provide programmatic access to read and write BeezUP data.  Basically, with this API you will be able to do everything like you were with your browser on https://go.beezup.com !  The main features are: - Register and manage your account - Create and manage and share your stores with your friends/co-workers. - Import your product catalog and schedule the auto importation - Search the channels your want to use - Configure your channels for your catalogs to export your product information:     - cost and general settings     - category and columns mappings     - your will be able to create and manage your custom column     - put in place exlusion filters based on simple conditions on your product data     - override product values     - get product vision for a channel catalog scope - Analyze and optimize your performance of your catalogs on all yours channels with different type of reportings by day, channel, category and by product. - Automatize your optimisation by using rules! - And of course... Manage your orders harvested from all your marketplaces:     - Synchronize your orders in an uniformized way     - Get the available actions and update the order status - ...and more!  ## Authentication credentials The public API with the base path **_/v2/public** have been put in place to give you an entry point to our system for the user registration, login and lost password. The public API does not require any credentials. We give you the some public list of values and public channels for our public commercial web site [www.beezup.com](http://www.beezup.com).  The user API with the base path **_/v2/user** requires a token which is available on this page: https://go.beezup.com/Account/MyAccount  ## Things to keep in mind ### API Rate Limits - The BeezUP REST API is limited to 100 calls/minute.  ### Media type The default media type for requests and responses is application/json. Where noted, some operations support other content types. If no additional content type is mentioned for a specific operation, then the media type is application/json.  ### Required content type The required and default encoding for the request and responses is UTF8.  ### Required date time format All our date time are formatted in ISO 8601 format: 2014-06-24T16:25:00Z.  ### Base URL The Base URL of the BeezUP API Order Management REST API conforms to the following template.  https://api.beezup.com  All URLs returned by the BeezUP API are relative to this base URL, and all requests to the REST API must use this base URL template.  You can test our API on https://api-docs.beezup.com/swagger-ui\\ You can contact us on [gitter, #BeezUP/API](https://gitter.im/BeezUP/API)
 *
 * OpenAPI spec version: 2.0
 * Contact: help@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderListRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderListRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_codes' => '\Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode[]',
        'marketplace_business_codes' => '\Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode[]',
        'account_ids' => '\Swagger\Client\Model\AccountId[]',
        'store_ids' => '\Swagger\Client\Model\BeezUPCommonStoreId[]',
        'beez_up_order_statuses' => '\Swagger\Client\Model\BeezUPOrderStatus[]',
        'date_search_type' => '\Swagger\Client\Model\DateSearchType',
        'begin_period_utc_date' => '\DateTime',
        'end_period_utc_date' => '\DateTime',
        'order_buyer_name' => '\Swagger\Client\Model\OrderBuyerName',
        'marketplace_order_ids' => '\Swagger\Client\Model\MarketplaceOrderId[]',
        'order_merchant_order_ids' => '\Swagger\Client\Model\OrderMerchantOrderId[]',
        'page_size' => '\Swagger\Client\Model\PageSize',
        'page_number' => '\Swagger\Client\Model\PageNumber'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_technical_codes' => null,
        'marketplace_business_codes' => null,
        'account_ids' => null,
        'store_ids' => null,
        'beez_up_order_statuses' => null,
        'date_search_type' => null,
        'begin_period_utc_date' => 'date-time',
        'end_period_utc_date' => 'date-time',
        'order_buyer_name' => null,
        'marketplace_order_ids' => null,
        'order_merchant_order_ids' => null,
        'page_size' => null,
        'page_number' => null
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
        'marketplace_technical_codes' => 'marketplaceTechnicalCodes',
        'marketplace_business_codes' => 'marketplaceBusinessCodes',
        'account_ids' => 'accountIds',
        'store_ids' => 'storeIds',
        'beez_up_order_statuses' => 'beezUPOrderStatuses',
        'date_search_type' => 'dateSearchType',
        'begin_period_utc_date' => 'beginPeriodUtcDate',
        'end_period_utc_date' => 'endPeriodUtcDate',
        'order_buyer_name' => 'order_Buyer_Name',
        'marketplace_order_ids' => 'marketplaceOrderIds',
        'order_merchant_order_ids' => 'order_MerchantOrderIds',
        'page_size' => 'pageSize',
        'page_number' => 'pageNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_technical_codes' => 'setMarketplaceTechnicalCodes',
        'marketplace_business_codes' => 'setMarketplaceBusinessCodes',
        'account_ids' => 'setAccountIds',
        'store_ids' => 'setStoreIds',
        'beez_up_order_statuses' => 'setBeezUpOrderStatuses',
        'date_search_type' => 'setDateSearchType',
        'begin_period_utc_date' => 'setBeginPeriodUtcDate',
        'end_period_utc_date' => 'setEndPeriodUtcDate',
        'order_buyer_name' => 'setOrderBuyerName',
        'marketplace_order_ids' => 'setMarketplaceOrderIds',
        'order_merchant_order_ids' => 'setOrderMerchantOrderIds',
        'page_size' => 'setPageSize',
        'page_number' => 'setPageNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_technical_codes' => 'getMarketplaceTechnicalCodes',
        'marketplace_business_codes' => 'getMarketplaceBusinessCodes',
        'account_ids' => 'getAccountIds',
        'store_ids' => 'getStoreIds',
        'beez_up_order_statuses' => 'getBeezUpOrderStatuses',
        'date_search_type' => 'getDateSearchType',
        'begin_period_utc_date' => 'getBeginPeriodUtcDate',
        'end_period_utc_date' => 'getEndPeriodUtcDate',
        'order_buyer_name' => 'getOrderBuyerName',
        'marketplace_order_ids' => 'getMarketplaceOrderIds',
        'order_merchant_order_ids' => 'getOrderMerchantOrderIds',
        'page_size' => 'getPageSize',
        'page_number' => 'getPageNumber'
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
        $this->container['marketplace_technical_codes'] = isset($data['marketplace_technical_codes']) ? $data['marketplace_technical_codes'] : null;
        $this->container['marketplace_business_codes'] = isset($data['marketplace_business_codes']) ? $data['marketplace_business_codes'] : null;
        $this->container['account_ids'] = isset($data['account_ids']) ? $data['account_ids'] : null;
        $this->container['store_ids'] = isset($data['store_ids']) ? $data['store_ids'] : null;
        $this->container['beez_up_order_statuses'] = isset($data['beez_up_order_statuses']) ? $data['beez_up_order_statuses'] : null;
        $this->container['date_search_type'] = isset($data['date_search_type']) ? $data['date_search_type'] : null;
        $this->container['begin_period_utc_date'] = isset($data['begin_period_utc_date']) ? $data['begin_period_utc_date'] : null;
        $this->container['end_period_utc_date'] = isset($data['end_period_utc_date']) ? $data['end_period_utc_date'] : null;
        $this->container['order_buyer_name'] = isset($data['order_buyer_name']) ? $data['order_buyer_name'] : null;
        $this->container['marketplace_order_ids'] = isset($data['marketplace_order_ids']) ? $data['marketplace_order_ids'] : null;
        $this->container['order_merchant_order_ids'] = isset($data['order_merchant_order_ids']) ? $data['order_merchant_order_ids'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date_search_type'] === null) {
            $invalidProperties[] = "'date_search_type' can't be null";
        }
        if ($this->container['begin_period_utc_date'] === null) {
            $invalidProperties[] = "'begin_period_utc_date' can't be null";
        }
        if ($this->container['end_period_utc_date'] === null) {
            $invalidProperties[] = "'end_period_utc_date' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
        }
        if ($this->container['page_number'] === null) {
            $invalidProperties[] = "'page_number' can't be null";
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

        if ($this->container['date_search_type'] === null) {
            return false;
        }
        if ($this->container['begin_period_utc_date'] === null) {
            return false;
        }
        if ($this->container['end_period_utc_date'] === null) {
            return false;
        }
        if ($this->container['page_size'] === null) {
            return false;
        }
        if ($this->container['page_number'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets marketplace_technical_codes
     *
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode[]
     */
    public function getMarketplaceTechnicalCodes()
    {
        return $this->container['marketplace_technical_codes'];
    }

    /**
     * Sets marketplace_technical_codes
     *
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode[] $marketplace_technical_codes marketplace_technical_codes
     *
     * @return $this
     */
    public function setMarketplaceTechnicalCodes($marketplace_technical_codes)
    {
        $this->container['marketplace_technical_codes'] = $marketplace_technical_codes;

        return $this;
    }

    /**
     * Gets marketplace_business_codes
     *
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode[]
     */
    public function getMarketplaceBusinessCodes()
    {
        return $this->container['marketplace_business_codes'];
    }

    /**
     * Sets marketplace_business_codes
     *
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode[] $marketplace_business_codes marketplace_business_codes
     *
     * @return $this
     */
    public function setMarketplaceBusinessCodes($marketplace_business_codes)
    {
        $this->container['marketplace_business_codes'] = $marketplace_business_codes;

        return $this;
    }

    /**
     * Gets account_ids
     *
     * @return \Swagger\Client\Model\AccountId[]
     */
    public function getAccountIds()
    {
        return $this->container['account_ids'];
    }

    /**
     * Sets account_ids
     *
     * @param \Swagger\Client\Model\AccountId[] $account_ids Account Id list
     *
     * @return $this
     */
    public function setAccountIds($account_ids)
    {
        $this->container['account_ids'] = $account_ids;

        return $this;
    }

    /**
     * Gets store_ids
     *
     * @return \Swagger\Client\Model\BeezUPCommonStoreId[]
     */
    public function getStoreIds()
    {
        return $this->container['store_ids'];
    }

    /**
     * Sets store_ids
     *
     * @param \Swagger\Client\Model\BeezUPCommonStoreId[] $store_ids Store Id list
     *
     * @return $this
     */
    public function setStoreIds($store_ids)
    {
        $this->container['store_ids'] = $store_ids;

        return $this;
    }

    /**
     * Gets beez_up_order_statuses
     *
     * @return \Swagger\Client\Model\BeezUPOrderStatus[]
     */
    public function getBeezUpOrderStatuses()
    {
        return $this->container['beez_up_order_statuses'];
    }

    /**
     * Sets beez_up_order_statuses
     *
     * @param \Swagger\Client\Model\BeezUPOrderStatus[] $beez_up_order_statuses beez_up_order_statuses
     *
     * @return $this
     */
    public function setBeezUpOrderStatuses($beez_up_order_statuses)
    {
        $this->container['beez_up_order_statuses'] = $beez_up_order_statuses;

        return $this;
    }

    /**
     * Gets date_search_type
     *
     * @return \Swagger\Client\Model\DateSearchType
     */
    public function getDateSearchType()
    {
        return $this->container['date_search_type'];
    }

    /**
     * Sets date_search_type
     *
     * @param \Swagger\Client\Model\DateSearchType $date_search_type date_search_type
     *
     * @return $this
     */
    public function setDateSearchType($date_search_type)
    {
        $this->container['date_search_type'] = $date_search_type;

        return $this;
    }

    /**
     * Gets begin_period_utc_date
     *
     * @return \DateTime
     */
    public function getBeginPeriodUtcDate()
    {
        return $this->container['begin_period_utc_date'];
    }

    /**
     * Sets begin_period_utc_date
     *
     * @param \DateTime $begin_period_utc_date The begin period you want to make the search. \\ The period MUST not be greater than 30 days. The begin period MUST be lower than the end period.
     *
     * @return $this
     */
    public function setBeginPeriodUtcDate($begin_period_utc_date)
    {
        $this->container['begin_period_utc_date'] = $begin_period_utc_date;

        return $this;
    }

    /**
     * Gets end_period_utc_date
     *
     * @return \DateTime
     */
    public function getEndPeriodUtcDate()
    {
        return $this->container['end_period_utc_date'];
    }

    /**
     * Sets end_period_utc_date
     *
     * @param \DateTime $end_period_utc_date The end period of you search. \\ The period MUST not be greater than 30 days. \\ The end period MUST be greater than the begin period. The end period MUST be lower to the current date.
     *
     * @return $this
     */
    public function setEndPeriodUtcDate($end_period_utc_date)
    {
        $this->container['end_period_utc_date'] = $end_period_utc_date;

        return $this;
    }

    /**
     * Gets order_buyer_name
     *
     * @return \Swagger\Client\Model\OrderBuyerName
     */
    public function getOrderBuyerName()
    {
        return $this->container['order_buyer_name'];
    }

    /**
     * Sets order_buyer_name
     *
     * @param \Swagger\Client\Model\OrderBuyerName $order_buyer_name order_buyer_name
     *
     * @return $this
     */
    public function setOrderBuyerName($order_buyer_name)
    {
        $this->container['order_buyer_name'] = $order_buyer_name;

        return $this;
    }

    /**
     * Gets marketplace_order_ids
     *
     * @return \Swagger\Client\Model\MarketplaceOrderId[]
     */
    public function getMarketplaceOrderIds()
    {
        return $this->container['marketplace_order_ids'];
    }

    /**
     * Sets marketplace_order_ids
     *
     * @param \Swagger\Client\Model\MarketplaceOrderId[] $marketplace_order_ids marketplace_order_ids
     *
     * @return $this
     */
    public function setMarketplaceOrderIds($marketplace_order_ids)
    {
        $this->container['marketplace_order_ids'] = $marketplace_order_ids;

        return $this;
    }

    /**
     * Gets order_merchant_order_ids
     *
     * @return \Swagger\Client\Model\OrderMerchantOrderId[]
     */
    public function getOrderMerchantOrderIds()
    {
        return $this->container['order_merchant_order_ids'];
    }

    /**
     * Sets order_merchant_order_ids
     *
     * @param \Swagger\Client\Model\OrderMerchantOrderId[] $order_merchant_order_ids Merchant order id list
     *
     * @return $this
     */
    public function setOrderMerchantOrderIds($order_merchant_order_ids)
    {
        $this->container['order_merchant_order_ids'] = $order_merchant_order_ids;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return \Swagger\Client\Model\PageSize
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param \Swagger\Client\Model\PageSize $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return \Swagger\Client\Model\PageNumber
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param \Swagger\Client\Model\PageNumber $page_number page_number
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

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


<?php
/**
 * OrderTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * OrderTest Class Doc Comment
 *
 * @category    Class
 * @description Order
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Order"
     */
    public function testOrder()
    {
    }

    /**
     * Test attribute "marketplace_technical_code"
     */
    public function testPropertyMarketplaceTechnicalCode()
    {
    }

    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
    }

    /**
     * Test attribute "beez_up_order_id"
     */
    public function testPropertyBeezUpOrderId()
    {
    }

    /**
     * Test attribute "beez_up_order_url"
     */
    public function testPropertyBeezUpOrderUrl()
    {
    }

    /**
     * Test attribute "marketplace_business_code"
     */
    public function testPropertyMarketplaceBusinessCode()
    {
    }

    /**
     * Test attribute "order_marketplace_order_id"
     */
    public function testPropertyOrderMarketplaceOrderId()
    {
    }

    /**
     * Test attribute "order_status_beez_up_order_status"
     */
    public function testPropertyOrderStatusBeezUpOrderStatus()
    {
    }

    /**
     * Test attribute "order_status_marketplace_order_status"
     */
    public function testPropertyOrderStatusMarketplaceOrderStatus()
    {
    }

    /**
     * Test attribute "order_merchant_order_id"
     */
    public function testPropertyOrderMerchantOrderId()
    {
    }

    /**
     * Test attribute "order_merchant_e_commerce_software_name"
     */
    public function testPropertyOrderMerchantECommerceSoftwareName()
    {
    }

    /**
     * Test attribute "order_merchant_e_commerce_software_version"
     */
    public function testPropertyOrderMerchantECommerceSoftwareVersion()
    {
    }

    /**
     * Test attribute "order_purchase_utc_date"
     */
    public function testPropertyOrderPurchaseUtcDate()
    {
    }

    /**
     * Test attribute "order_last_modification_utc_date"
     */
    public function testPropertyOrderLastModificationUtcDate()
    {
    }

    /**
     * Test attribute "order_marketplace_last_modification_utc_date"
     */
    public function testPropertyOrderMarketplaceLastModificationUtcDate()
    {
    }

    /**
     * Test attribute "order_buyer_name"
     */
    public function testPropertyOrderBuyerName()
    {
    }

    /**
     * Test attribute "order_total_price"
     */
    public function testPropertyOrderTotalPrice()
    {
    }

    /**
     * Test attribute "order_currency_code"
     */
    public function testPropertyOrderCurrencyCode()
    {
    }

    /**
     * Test attribute "processing"
     */
    public function testPropertyProcessing()
    {
    }

    /**
     * Test attribute "etag"
     */
    public function testPropertyEtag()
    {
    }

    /**
     * Test attribute "links"
     */
    public function testPropertyLinks()
    {
    }

    /**
     * Test attribute "order_market_place_channel"
     */
    public function testPropertyOrderMarketPlaceChannel()
    {
    }

    /**
     * Test attribute "order_total_tax"
     */
    public function testPropertyOrderTotalTax()
    {
    }

    /**
     * Test attribute "order_total_commission"
     */
    public function testPropertyOrderTotalCommission()
    {
    }

    /**
     * Test attribute "order_payment_method"
     */
    public function testPropertyOrderPaymentMethod()
    {
    }

    /**
     * Test attribute "order_paying_utc_date"
     */
    public function testPropertyOrderPayingUtcDate()
    {
    }

    /**
     * Test attribute "order_comment"
     */
    public function testPropertyOrderComment()
    {
    }

    /**
     * Test attribute "order_shipping_civility"
     */
    public function testPropertyOrderShippingCivility()
    {
    }

    /**
     * Test attribute "order_shipping_company_name"
     */
    public function testPropertyOrderShippingCompanyName()
    {
    }

    /**
     * Test attribute "order_shipping_address_name"
     */
    public function testPropertyOrderShippingAddressName()
    {
    }

    /**
     * Test attribute "order_shipping_email"
     */
    public function testPropertyOrderShippingEmail()
    {
    }

    /**
     * Test attribute "order_shipping_address_line1"
     */
    public function testPropertyOrderShippingAddressLine1()
    {
    }

    /**
     * Test attribute "order_shipping_address_line2"
     */
    public function testPropertyOrderShippingAddressLine2()
    {
    }

    /**
     * Test attribute "order_shipping_address_line3"
     */
    public function testPropertyOrderShippingAddressLine3()
    {
    }

    /**
     * Test attribute "order_shipping_address_postal_code"
     */
    public function testPropertyOrderShippingAddressPostalCode()
    {
    }

    /**
     * Test attribute "order_shipping_address_city"
     */
    public function testPropertyOrderShippingAddressCity()
    {
    }

    /**
     * Test attribute "order_shipping_address_state_or_region"
     */
    public function testPropertyOrderShippingAddressStateOrRegion()
    {
    }

    /**
     * Test attribute "order_shipping_address_country_name"
     */
    public function testPropertyOrderShippingAddressCountryName()
    {
    }

    /**
     * Test attribute "order_shipping_address_country_iso_code_alpha2"
     */
    public function testPropertyOrderShippingAddressCountryIsoCodeAlpha2()
    {
    }

    /**
     * Test attribute "order_shipping_phone"
     */
    public function testPropertyOrderShippingPhone()
    {
    }

    /**
     * Test attribute "order_shipping_mobile_phone"
     */
    public function testPropertyOrderShippingMobilePhone()
    {
    }

    /**
     * Test attribute "order_shipping_price"
     */
    public function testPropertyOrderShippingPrice()
    {
    }

    /**
     * Test attribute "order_shipping_method"
     */
    public function testPropertyOrderShippingMethod()
    {
    }

    /**
     * Test attribute "order_shipping_shipping_tax"
     */
    public function testPropertyOrderShippingShippingTax()
    {
    }

    /**
     * Test attribute "order_shipping_earliest_ship_utc_date"
     */
    public function testPropertyOrderShippingEarliestShipUtcDate()
    {
    }

    /**
     * Test attribute "order_shipping_latest_ship_utc_date"
     */
    public function testPropertyOrderShippingLatestShipUtcDate()
    {
    }

    /**
     * Test attribute "order_buyer_identifier"
     */
    public function testPropertyOrderBuyerIdentifier()
    {
    }

    /**
     * Test attribute "order_buyer_civility"
     */
    public function testPropertyOrderBuyerCivility()
    {
    }

    /**
     * Test attribute "order_buyer_company_name"
     */
    public function testPropertyOrderBuyerCompanyName()
    {
    }

    /**
     * Test attribute "order_buyer_email"
     */
    public function testPropertyOrderBuyerEmail()
    {
    }

    /**
     * Test attribute "order_buyer_address_line1"
     */
    public function testPropertyOrderBuyerAddressLine1()
    {
    }

    /**
     * Test attribute "order_buyer_address_line2"
     */
    public function testPropertyOrderBuyerAddressLine2()
    {
    }

    /**
     * Test attribute "order_buyer_address_line3"
     */
    public function testPropertyOrderBuyerAddressLine3()
    {
    }

    /**
     * Test attribute "order_buyer_address_postal_code"
     */
    public function testPropertyOrderBuyerAddressPostalCode()
    {
    }

    /**
     * Test attribute "order_buyer_address_city"
     */
    public function testPropertyOrderBuyerAddressCity()
    {
    }

    /**
     * Test attribute "order_buyer_address_state_or_region"
     */
    public function testPropertyOrderBuyerAddressStateOrRegion()
    {
    }

    /**
     * Test attribute "order_buyer_address_country_name"
     */
    public function testPropertyOrderBuyerAddressCountryName()
    {
    }

    /**
     * Test attribute "order_buyer_address_country_iso_code_alpha2"
     */
    public function testPropertyOrderBuyerAddressCountryIsoCodeAlpha2()
    {
    }

    /**
     * Test attribute "order_buyer_phone"
     */
    public function testPropertyOrderBuyerPhone()
    {
    }

    /**
     * Test attribute "order_buyer_mobile_phone"
     */
    public function testPropertyOrderBuyerMobilePhone()
    {
    }

    /**
     * Test attribute "order_order_source_uri"
     */
    public function testPropertyOrderOrderSourceUri()
    {
    }

    /**
     * Test attribute "order_order_items_source_uri"
     */
    public function testPropertyOrderOrderItemsSourceUri()
    {
    }

    /**
     * Test attribute "order_items"
     */
    public function testPropertyOrderItems()
    {
    }

    /**
     * Test attribute "transition_links"
     */
    public function testPropertyTransitionLinks()
    {
    }
}
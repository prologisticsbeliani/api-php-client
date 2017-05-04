# Swagger\Client\V2UserMarketplacesOrdersApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrder**](V2UserMarketplacesOrdersApi.md#changeOrder) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType} | Change your marketplace Order Information (accept, ship, etc.)
[**changeOrderList**](V2UserMarketplacesOrdersApi.md#changeOrderList) | **POST** /v2/user/marketplaces/orders/batches/changeOrders/{changeOrderType} | Send a batch of operations to change your marketplace Order information (accept, ship, etc.)
[**clearMerchantOrderInfo**](V2UserMarketplacesOrdersApi.md#clearMerchantOrderInfo) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo | Clear an Order&#39;s merchant information
[**clearMerchantOrderInfoList**](V2UserMarketplacesOrdersApi.md#clearMerchantOrderInfoList) | **POST** /v2/user/marketplaces/orders/batches/clearMerchantOrderInfos | Send a batch of operations to clear an Order&#39;s merchant information
[**configureAutomaticTransitions**](V2UserMarketplacesOrdersApi.md#configureAutomaticTransitions) | **POST** /v2/user/marketplaces/orders/automaticTransitions | Configure new or existing automatic Order status transition
[**exportOrders**](V2UserMarketplacesOrdersApi.md#exportOrders) | **POST** /v2/user/marketplaces/orders/exportations | Request a new Order report exportation to be generated
[**getAutomaticTransitions**](V2UserMarketplacesOrdersApi.md#getAutomaticTransitions) | **GET** /v2/user/marketplaces/orders/automaticTransitions | Get list of configured automatic Order status transitions
[**getMarketplaceAccountsSynchronization**](V2UserMarketplacesOrdersApi.md#getMarketplaceAccountsSynchronization) | **GET** /v2/user/marketplaces/orders/status | Get current synchronization status between your marketplaces and BeezUP accounts
[**getOrder**](V2UserMarketplacesOrdersApi.md#getOrder) | **GET** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId} | Get full Order and Order Item(s) properties
[**getOrderExportations**](V2UserMarketplacesOrdersApi.md#getOrderExportations) | **GET** /v2/user/marketplaces/orders/exportations | Get a paginated list of Order report exportations
[**getOrderHistory**](V2UserMarketplacesOrdersApi.md#getOrderHistory) | **GET** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history | Get an Order&#39;s harvest and change history
[**getOrderListFull**](V2UserMarketplacesOrdersApi.md#getOrderListFull) | **POST** /v2/user/marketplaces/orders/list/full | Get a paginated list of all Orders with all Order and Order Item(s) properties
[**getOrderListLight**](V2UserMarketplacesOrdersApi.md#getOrderListLight) | **POST** /v2/user/marketplaces/orders/list/light | Get a paginated list of all Orders without details
[**harvestAll**](V2UserMarketplacesOrdersApi.md#harvestAll) | **POST** /v2/user/marketplaces/orders/harvest | Send harvest request to all your marketplaces
[**harvestOrder**](V2UserMarketplacesOrdersApi.md#harvestOrder) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest | Send harvest request for a single Order
[**setMerchantOrderInfo**](V2UserMarketplacesOrdersApi.md#setMerchantOrderInfo) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo | Set an Order&#39;s merchant information
[**setMerchantOrderInfoList**](V2UserMarketplacesOrdersApi.md#setMerchantOrderInfoList) | **POST** /v2/user/marketplaces/orders/batches/setMerchantOrderInfos | Send a batch of operations to set an Order&#39;s merchant information


# **changeOrder**
> changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $if_match, $test_mode)

Change your marketplace Order Information (accept, ship, etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \Swagger\Client\Model\ChangeOrderRequest(); // \Swagger\Client\Model\ChangeOrderRequest | 
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested Order, to ensure that you are making a change on the lastest version of the order.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $api_instance->changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->changeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |
 **change_order_type** | **string**| The Order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\Swagger\Client\Model\ChangeOrderRequest**](../Model/\Swagger\Client\Model\ChangeOrderRequest.md)|  |
 **if_match** | **string**| ETag value to identify the last known version of requested Order, to ensure that you are making a change on the lastest version of the order.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeOrderList**
> \Swagger\Client\Model\BatchOrderOperationResponse changeOrderList($change_order_type, $user_name, $request, $test_mode)

Send a batch of operations to change your marketplace Order information (accept, ship, etc.)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \Swagger\Client\Model\ChangeOrderListRequest(); // \Swagger\Client\Model\ChangeOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $api_instance->changeOrderList($change_order_type, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->changeOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_order_type** | **string**| The Order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\Swagger\Client\Model\ChangeOrderListRequest**](../Model/\Swagger\Client\Model\ChangeOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfo**
> clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id)

Clear an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $api_instance->clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->clearMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfoList**
> \Swagger\Client\Model\BatchOrderOperationResponse clearMerchantOrderInfoList($request)

Send a batch of operations to clear an Order's merchant information

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$request = new \Swagger\Client\Model\ClearMerchantOrderInfoListRequest(); // \Swagger\Client\Model\ClearMerchantOrderInfoListRequest | 

try {
    $result = $api_instance->clearMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->clearMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ClearMerchantOrderInfoListRequest**](../Model/\Swagger\Client\Model\ClearMerchantOrderInfoListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureAutomaticTransitions**
> configureAutomaticTransitions($request)

Configure new or existing automatic Order status transition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$request = new \Swagger\Client\Model\SaveAutomaticTransitionRequest(); // \Swagger\Client\Model\SaveAutomaticTransitionRequest | 

try {
    $api_instance->configureAutomaticTransitions($request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->configureAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SaveAutomaticTransitionRequest**](../Model/\Swagger\Client\Model\SaveAutomaticTransitionRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportOrders**
> exportOrders($format, $request)

Request a new Order report exportation to be generated

A new file will be generated containing a summary of all the Orders matching the requested filter settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$format = "csv"; // string | The type of the file to export
$request = new \Swagger\Client\Model\ExportOrderListRequest(); // \Swagger\Client\Model\ExportOrderListRequest | 

try {
    $api_instance->exportOrders($format, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->exportOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| The type of the file to export | [default to csv]
 **request** | [**\Swagger\Client\Model\ExportOrderListRequest**](../Model/\Swagger\Client\Model\ExportOrderListRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutomaticTransitions**
> \Swagger\Client\Model\AutomaticTransitionInfos getAutomaticTransitions()

Get list of configured automatic Order status transitions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();

try {
    $result = $api_instance->getAutomaticTransitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->getAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AutomaticTransitionInfos**](../Model/AutomaticTransitionInfos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketplaceAccountsSynchronization**
> \Swagger\Client\Model\AccountSynchronizations getMarketplaceAccountsSynchronization()

Get current synchronization status between your marketplaces and BeezUP accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();

try {
    $result = $api_instance->getMarketplaceAccountsSynchronization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->getMarketplaceAccountsSynchronization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AccountSynchronizations**](../Model/AccountSynchronizations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Swagger\Client\Model\Order getOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match)

Get full Order and Order Item(s) properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested Order\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $api_instance->getOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested Order\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderExportations**
> \Swagger\Client\Model\OrderExportations getOrderExportations($page_number, $page_size)

Get a paginated list of Order report exportations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$page_number = 1; // int | The page number you want to get
$page_size = 25; // int | The count of Order report exportations you want to get

try {
    $result = $api_instance->getOrderExportations($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->getOrderExportations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| The page number you want to get |
 **page_size** | **int**| The count of Order report exportations you want to get |

### Return type

[**\Swagger\Client\Model\OrderExportations**](../Model/OrderExportations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderHistory**
> \Swagger\Client\Model\OrderHistory getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id)

Get an Order's harvest and change history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $result = $api_instance->getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->getOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |

### Return type

[**\Swagger\Client\Model\OrderHistory**](../Model/OrderHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderListFull**
> \Swagger\Client\Model\OrderListFull getOrderListFull($accept_encoding, $request)

Get a paginated list of all Orders with all Order and Order Item(s) properties

The purpose of this operation is to reduce the amount of request to the API.\\ \\ Previous implmentation of this feature only returned a partial (light) version of the Orders. The purpose of this API is to reduce the number of incoming requests by returning the complete (full) Order and Order Item(s) properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$accept_encoding = array("accept_encoding_example"); // string[] | Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size
$request = new \Swagger\Client\Model\OrderListRequest(); // \Swagger\Client\Model\OrderListRequest | 

try {
    $result = $api_instance->getOrderListFull($accept_encoding, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->getOrderListFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_encoding** | [**string[]**](../Model/string.md)| Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size |
 **request** | [**\Swagger\Client\Model\OrderListRequest**](../Model/\Swagger\Client\Model\OrderListRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderListFull**](../Model/OrderListFull.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderListLight**
> \Swagger\Client\Model\OrderListLight getOrderListLight($request)

Get a paginated list of all Orders without details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$request = new \Swagger\Client\Model\OrderListRequest(); // \Swagger\Client\Model\OrderListRequest | 

try {
    $result = $api_instance->getOrderListLight($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->getOrderListLight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\OrderListRequest**](../Model/\Swagger\Client\Model\OrderListRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderListLight**](../Model/OrderListLight.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **harvestAll**
> harvestAll()

Send harvest request to all your marketplaces

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();

try {
    $api_instance->harvestAll();
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->harvestAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **harvestOrder**
> harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id)

Send harvest request for a single Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $api_instance->harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->harvestOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfo**
> setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request)

Set an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$request = new \Swagger\Client\Model\SetMerchantOrderInfoRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoRequest | 

try {
    $api_instance->setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->setMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |
 **request** | [**\Swagger\Client\Model\SetMerchantOrderInfoRequest**](../Model/\Swagger\Client\Model\SetMerchantOrderInfoRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfoList**
> \Swagger\Client\Model\BatchOrderOperationResponse setMerchantOrderInfoList($request)

Send a batch of operations to set an Order's merchant information

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesOrdersApi();
$request = new \Swagger\Client\Model\SetMerchantOrderInfoListRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoListRequest | 

try {
    $result = $api_instance->setMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesOrdersApi->setMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SetMerchantOrderInfoListRequest**](../Model/\Swagger\Client\Model\SetMerchantOrderInfoListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


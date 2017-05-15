# Swagger\Client\OrderApi

All URIs are relative to *https://api.beezup.com/v2/user/marketplaces/orders*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrder**](OrderApi.md#changeOrder) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType} | Change your marketplace Order Information (accept, ship, etc.)
[**clearMerchantOrderInfo**](OrderApi.md#clearMerchantOrderInfo) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo | Clear an Order&#39;s merchant information
[**getOrder**](OrderApi.md#getOrder) | **GET** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId} | Get full Order and Order Item(s) properties
[**getOrderHistory**](OrderApi.md#getOrderHistory) | **GET** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history | Get an Order&#39;s harvest and change history
[**harvestOrder**](OrderApi.md#harvestOrder) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest | Send harvest request for a single Order
[**setMerchantOrderInfo**](OrderApi.md#setMerchantOrderInfo) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo | Set an Order&#39;s merchant information


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

$api_instance = new Swagger\Client\Api\OrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \Swagger\Client\Model\ChangeOrderRequest(); // \Swagger\Client\Model\ChangeOrderRequest | 
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $api_instance->changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->changeOrder: ', $e->getMessage(), PHP_EOL;
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
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

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

$api_instance = new Swagger\Client\Api\OrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $api_instance->clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->clearMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\OrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $api_instance->getOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

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

$api_instance = new Swagger\Client\Api\OrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $result = $api_instance->getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderHistory: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\OrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $api_instance->harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->harvestOrder: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\OrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$request = new \Swagger\Client\Model\SetMerchantOrderInfoRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoRequest | 

try {
    $api_instance->setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->setMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
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


# Swagger\Client\BatchesApi

All URIs are relative to *https://api.beezup.com/v2/user/marketplaces/orders*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrderList**](BatchesApi.md#changeOrderList) | **POST** /batches/changeOrders/{changeOrderType} | Send a batch of operations to change your marketplace Order information (accept, ship, etc.)
[**clearMerchantOrderInfoList**](BatchesApi.md#clearMerchantOrderInfoList) | **POST** /batches/clearMerchantOrderInfos | Send a batch of operations to clear an Order&#39;s merchant information
[**setMerchantOrderInfoList**](BatchesApi.md#setMerchantOrderInfoList) | **POST** /batches/setMerchantOrderInfos | Send a batch of operations to set an Order&#39;s merchant information


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

$api_instance = new Swagger\Client\Api\BatchesApi();
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \Swagger\Client\Model\ChangeOrderListRequest(); // \Swagger\Client\Model\ChangeOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $api_instance->changeOrderList($change_order_type, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->changeOrderList: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BatchesApi();
$request = new \Swagger\Client\Model\ClearMerchantOrderInfoListRequest(); // \Swagger\Client\Model\ClearMerchantOrderInfoListRequest | 

try {
    $result = $api_instance->clearMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->clearMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BatchesApi();
$request = new \Swagger\Client\Model\SetMerchantOrderInfoListRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoListRequest | 

try {
    $result = $api_instance->setMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->setMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
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


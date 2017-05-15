# Swagger\Client\ListApi

All URIs are relative to *https://api.beezup.com/v2/user/marketplaces/orders*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderListFull**](ListApi.md#getOrderListFull) | **POST** /list/full | Get a paginated list of all Orders with all Order and Order Item(s) properties
[**getOrderListLight**](ListApi.md#getOrderListLight) | **POST** /list/light | Get a paginated list of all Orders without details


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

$api_instance = new Swagger\Client\Api\ListApi();
$accept_encoding = array("accept_encoding_example"); // string[] | Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size
$request = new \Swagger\Client\Model\OrderListRequest(); // \Swagger\Client\Model\OrderListRequest | 

try {
    $result = $api_instance->getOrderListFull($accept_encoding, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getOrderListFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_encoding** | [**string[]**](../Model/string.md)| Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size |
 **request** | [**\Swagger\Client\Model\OrderListRequest**](../Model/\Swagger\Client\Model\OrderListRequest.md)|  |

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

$api_instance = new Swagger\Client\Api\ListApi();
$request = new \Swagger\Client\Model\OrderListRequest(); // \Swagger\Client\Model\OrderListRequest | 

try {
    $result = $api_instance->getOrderListLight($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getOrderListLight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\OrderListRequest**](../Model/\Swagger\Client\Model\OrderListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\OrderListLight**](../Model/OrderListLight.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


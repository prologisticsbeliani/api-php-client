# Swagger\Client\ExportsApi

All URIs are relative to *https://api.beezup.com/v2/user/marketplaces/orders*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportOrders**](ExportsApi.md#exportOrders) | **POST** /exportations | Request a new Order report exportation to be generated
[**getOrderExportations**](ExportsApi.md#getOrderExportations) | **GET** /exportations | Get a paginated list of Order report exportations


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

$api_instance = new Swagger\Client\Api\ExportsApi();
$format = "csv"; // string | The type of the file to export
$request = new \Swagger\Client\Model\ExportOrderListRequest(); // \Swagger\Client\Model\ExportOrderListRequest | 

try {
    $api_instance->exportOrders($format, $request);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportOrders: ', $e->getMessage(), PHP_EOL;
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

# **getOrderExportations**
> \Swagger\Client\Model\OrderExportations getOrderExportations($page_number, $page_size, $store_id)

Get a paginated list of Order report exportations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ExportsApi();
$page_number = 1; // int | The page number you want to get
$page_size = 25; // int | The count of Order report exportations you want to get
$store_id = "store_id_example"; // string | The store identifier to regroup the order exportations

try {
    $result = $api_instance->getOrderExportations($page_number, $page_size, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->getOrderExportations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| The page number you want to get |
 **page_size** | **int**| The count of Order report exportations you want to get |
 **store_id** | **string**| The store identifier to regroup the order exportations |

### Return type

[**\Swagger\Client\Model\OrderExportations**](../Model/OrderExportations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


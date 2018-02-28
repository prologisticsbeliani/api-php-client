# Swagger\Client\ChannelCatalogsProductsApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportChannelCatalogProductInfoList**](ChannelCatalogsProductsApi.md#exportChannelCatalogProductInfoList) | **POST** /user/channelCatalogs/{channelCatalogId}/products/export | Export channel catalog product information list
[**getChannelCatalogProductByChannelCatalog**](ChannelCatalogsProductsApi.md#getChannelCatalogProductByChannelCatalog) | **POST** /user/channelCatalogs/products | Get channel catalog products related to these channel catalogs
[**getChannelCatalogProductInfo**](ChannelCatalogsProductsApi.md#getChannelCatalogProductInfo) | **GET** /user/channelCatalogs/{channelCatalogId}/products/{productId} | Get channel catalog product information
[**getChannelCatalogProductInfoList**](ChannelCatalogsProductsApi.md#getChannelCatalogProductInfoList) | **POST** /user/channelCatalogs/{channelCatalogId}/products | Get channel catalog product information list
[**getChannelCatalogProductsCounters**](ChannelCatalogsProductsApi.md#getChannelCatalogProductsCounters) | **GET** /user/channelCatalogs/{channelCatalogId}/products/counters | Get channel catalog products&#39; counters


# **exportChannelCatalogProductInfoList**
> \Swagger\Client\Model\BeezUPCommonLink3 exportChannelCatalogProductInfoList($channel_catalog_id, $format, $request)

Export channel catalog product information list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChannelCatalogsProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$format = "format_example"; // string | The file type of the exportation
$request = new \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest(); // \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest | The channel catalog product list filter

try {
    $result = $apiInstance->exportChannelCatalogProductInfoList($channel_catalog_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsApi->exportChannelCatalogProductInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **format** | **string**| The file type of the exportation |
 **request** | [**\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest**](../Model/GetChannelCatalogProductInfoListRequest.md)| The channel catalog product list filter |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink3**](../Model/BeezUPCommonLink3.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductByChannelCatalog**
> \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse getChannelCatalogProductByChannelCatalog($request)

Get channel catalog products related to these channel catalogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChannelCatalogsProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest(); // \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest | 

try {
    $result = $apiInstance->getChannelCatalogProductByChannelCatalog($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsApi->getChannelCatalogProductByChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest**](../Model/ChannelCatalogProductByChannelCatalogRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse**](../Model/ChannelCatalogProductByChannelCatalogResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductInfo**
> \Swagger\Client\Model\ChannelCatalogProductInfo getChannelCatalogProductInfo($channel_catalog_id, $product_id)

Get channel catalog product information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChannelCatalogsProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$product_id = "\"578419df-1bbf-41a6-96fa-862e42182b67\""; // string | The product identifier

try {
    $result = $apiInstance->getChannelCatalogProductInfo($channel_catalog_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsApi->getChannelCatalogProductInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductInfo**](../Model/ChannelCatalogProductInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductInfoList**
> \Swagger\Client\Model\ChannelCatalogProductInfoList getChannelCatalogProductInfoList($channel_catalog_id, $request)

Get channel catalog product information list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChannelCatalogsProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest(); // \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest | The channel catalog product list filter

try {
    $result = $apiInstance->getChannelCatalogProductInfoList($channel_catalog_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsApi->getChannelCatalogProductInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest**](../Model/GetChannelCatalogProductInfoListRequest.md)| The channel catalog product list filter |

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductInfoList**](../Model/ChannelCatalogProductInfoList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductsCounters**
> \Swagger\Client\Model\ChannelCatalogProductsCounters getChannelCatalogProductsCounters($channel_catalog_id)

Get channel catalog products' counters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChannelCatalogsProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_catalog_id = "\"6d6b04de-406b-4539-8e7e-bf3e8da5dfb0\""; // string | The channel catalog identifier

try {
    $result = $apiInstance->getChannelCatalogProductsCounters($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsProductsApi->getChannelCatalogProductsCounters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductsCounters**](../Model/ChannelCatalogProductsCounters.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


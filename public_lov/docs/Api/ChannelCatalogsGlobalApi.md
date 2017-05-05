# Swagger\Client\ChannelCatalogsGlobalApi

All URIs are relative to *https://api.beezup.com/v2/user/channelCatalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChannelCatalog**](ChannelCatalogsGlobalApi.md#createChannelCatalog) | **POST** / | Create a new channel catalog
[**deleteChannelCatalog**](ChannelCatalogsGlobalApi.md#deleteChannelCatalog) | **DELETE** /{channelCatalogId} | Delete the channel catalog
[**getChannelCatalog**](ChannelCatalogsGlobalApi.md#getChannelCatalog) | **GET** /{channelCatalogId} | Get the channel catalog information
[**getChannelCatalogs**](ChannelCatalogsGlobalApi.md#getChannelCatalogs) | **GET** / | List all your current channel catalogs


# **createChannelCatalog**
> \Swagger\Client\Model\BeezUPCommonLink2[] createChannelCatalog($request)

Create a new channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsGlobalApi();
$request = new \Swagger\Client\Model\CreateChannelCatalogRequest(); // \Swagger\Client\Model\CreateChannelCatalogRequest | 

try {
    $result = $api_instance->createChannelCatalog($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->createChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateChannelCatalogRequest**](../Model/\Swagger\Client\Model\CreateChannelCatalogRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannelCatalog**
> deleteChannelCatalog($channel_catalog_id)

Delete the channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsGlobalApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $api_instance->deleteChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->deleteChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalog**
> \Swagger\Client\Model\ChannelCatalog getChannelCatalog($channel_catalog_id)

Get the channel catalog information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsGlobalApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $result = $api_instance->getChannelCatalog($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->getChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalog**](../Model/ChannelCatalog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogs**
> \Swagger\Client\Model\ChannelCatalogList getChannelCatalogs($store_id)

List all your current channel catalogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsGlobalApi();
$store_id = "04730364-9826-4ff3-92e4-51fccd02bf10"; // string | The store identifier

try {
    $result = $api_instance->getChannelCatalogs($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsGlobalApi->getChannelCatalogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store identifier | [optional]

### Return type

[**\Swagger\Client\Model\ChannelCatalogList**](../Model/ChannelCatalogList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


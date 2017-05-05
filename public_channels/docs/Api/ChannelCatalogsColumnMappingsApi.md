# Swagger\Client\ChannelCatalogsColumnMappingsApi

All URIs are relative to *https://api.beezup.com/v2/user/channelCatalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mapChannelCatalogColumns**](ChannelCatalogsColumnMappingsApi.md#mapChannelCatalogColumns) | **PUT** /{channelCatalogId}/columnMappings | Configure channel catalog column mappings


# **mapChannelCatalogColumns**
> mapChannelCatalogColumns($channel_catalog_id, $request)

Configure channel catalog column mappings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsColumnMappingsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\ColumnMappingList(); // \Swagger\Client\Model\ColumnMappingList | 

try {
    $api_instance->mapChannelCatalogColumns($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsColumnMappingsApi->mapChannelCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\ColumnMappingList**](../Model/\Swagger\Client\Model\ColumnMappingList.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\ChannelsGlobalApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannelCategories**](ChannelsGlobalApi.md#getChannelCategories) | **GET** /v2/user/channels/{channelId}/categories | Get channel categories
[**getChannelColumns**](ChannelsGlobalApi.md#getChannelColumns) | **POST** /v2/user/channels/{channelId}/columns | Get channel columns
[**getChannelInfo**](ChannelsGlobalApi.md#getChannelInfo) | **GET** /v2/user/channels/{channelId} | Get channel information
[**getCurrentChannels**](ChannelsGlobalApi.md#getCurrentChannels) | **GET** /v2/user/channels/ | List all available channel for this store


# **getChannelCategories**
> \Swagger\Client\Model\ChannelRootCategory getChannelCategories($channel_id, $accept_encoding)

Get channel categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelsGlobalApi();
$channel_id = "2dc136a7-0d3d-4cc9-a825-a28a42c53e28"; // string | The channel identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.

try {
    $result = $api_instance->getChannelCategories($channel_id, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGlobalApi->getChannelCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |

### Return type

[**\Swagger\Client\Model\ChannelRootCategory**](../Model/ChannelRootCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelColumns**
> \Swagger\Client\Model\ChannelColumn[] getChannelColumns($channel_id, $accept_encoding, $request)

Get channel columns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelsGlobalApi();
$channel_id = "2dc136a7-0d3d-4cc9-a825-a28a42c53e28"; // string | The channel identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.
$request = array(new BeezUPCommonChannelColumnId()); // \Swagger\Client\Model\BeezUPCommonChannelColumnId[] | Allow you to filter the channel column identifier list your want to get

try {
    $result = $api_instance->getChannelColumns($channel_id, $accept_encoding, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGlobalApi->getChannelColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |
 **request** | [**\Swagger\Client\Model\BeezUPCommonChannelColumnId[]**](../Model/BeezUPCommonChannelColumnId.md)| Allow you to filter the channel column identifier list your want to get | [optional]

### Return type

[**\Swagger\Client\Model\ChannelColumn[]**](../Model/ChannelColumn.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelInfo**
> \Swagger\Client\Model\ChannelInfo getChannelInfo($channel_id)

Get channel information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelsGlobalApi();
$channel_id = "2dc136a7-0d3d-4cc9-a825-a28a42c53e28"; // string | The channel identifier

try {
    $result = $api_instance->getChannelInfo($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGlobalApi->getChannelInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |

### Return type

[**\Swagger\Client\Model\ChannelInfo**](../Model/ChannelInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentChannels**
> \Swagger\Client\Model\ChannelHeader[] getCurrentChannels($store_id)

List all available channel for this store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelsGlobalApi();
$store_id = "04730364-9826-4ff3-92e4-51fccd02bf10"; // string | The store identifier

try {
    $result = $api_instance->getCurrentChannels($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGlobalApi->getCurrentChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store identifier |

### Return type

[**\Swagger\Client\Model\ChannelHeader[]**](../Model/ChannelHeader.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


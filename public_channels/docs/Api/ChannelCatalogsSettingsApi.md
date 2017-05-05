# Swagger\Client\ChannelCatalogsSettingsApi

All URIs are relative to *https://api.beezup.com/v2/user/channelCatalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureChannelCatalogCostSettings**](ChannelCatalogsSettingsApi.md#configureChannelCatalogCostSettings) | **POST** /{channelCatalogId}/settings/cost | Disable a channel catalog
[**configureChannelCatalogGeneralSettings**](ChannelCatalogsSettingsApi.md#configureChannelCatalogGeneralSettings) | **POST** /{channelCatalogId}/settings/general | Disable a channel catalog
[**disableChannelCatalog**](ChannelCatalogsSettingsApi.md#disableChannelCatalog) | **POST** /{channelCatalogId}/disable | Disable a channel catalog
[**enableChannelCatalog**](ChannelCatalogsSettingsApi.md#enableChannelCatalog) | **POST** /{channelCatalogId}/enable | Enable a channel catalog


# **configureChannelCatalogCostSettings**
> configureChannelCatalogCostSettings($channel_catalog_id, $request)

Disable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsSettingsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\CostSettings(); // \Swagger\Client\Model\CostSettings | 

try {
    $api_instance->configureChannelCatalogCostSettings($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsSettingsApi->configureChannelCatalogCostSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\CostSettings**](../Model/\Swagger\Client\Model\CostSettings.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureChannelCatalogGeneralSettings**
> configureChannelCatalogGeneralSettings($channel_catalog_id, $request)

Disable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsSettingsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\GeneralSettings(); // \Swagger\Client\Model\GeneralSettings | 

try {
    $api_instance->configureChannelCatalogGeneralSettings($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsSettingsApi->configureChannelCatalogGeneralSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\GeneralSettings**](../Model/\Swagger\Client\Model\GeneralSettings.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableChannelCatalog**
> disableChannelCatalog($channel_catalog_id)

Disable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsSettingsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $api_instance->disableChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsSettingsApi->disableChannelCatalog: ', $e->getMessage(), PHP_EOL;
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

# **enableChannelCatalog**
> enableChannelCatalog($channel_catalog_id)

Enable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ChannelCatalogsSettingsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $api_instance->enableChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelCatalogsSettingsApi->enableChannelCatalog: ', $e->getMessage(), PHP_EOL;
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


# Swagger\Client\V2UserMarketplacesChannelCatalogsApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannelCatalogMarketplaceProperties**](V2UserMarketplacesChannelCatalogsApi.md#getChannelCatalogMarketplaceProperties) | **GET** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/properties | Get the marketplace properties for a channel catalog
[**getChannelCatalogMarketplaceSettings**](V2UserMarketplacesChannelCatalogsApi.md#getChannelCatalogMarketplaceSettings) | **GET** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Get the marketplace settings for a channel catalog
[**getMarketplaceAccountStores**](V2UserMarketplacesChannelCatalogsApi.md#getMarketplaceAccountStores) | **GET** /v2/user/marketplaces/channelcatalogs/ | Get  you marketplace channel catalog list
[**getPublications**](V2UserMarketplacesChannelCatalogsApi.md#getPublications) | **GET** /v2/user/marketplaces/channelcatalogs/publications/{marketplaceTechnicalCode}/{accountId}/history | Fetch the publication history for an account, sorted by descending start date
[**setChannelCatalogMarketplaceSettings**](V2UserMarketplacesChannelCatalogsApi.md#setChannelCatalogMarketplaceSettings) | **POST** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Save new marketplace settings for a channel catalog


# **getChannelCatalogMarketplaceProperties**
> \Swagger\Client\Model\ChannelCatalogMarketplaceProperties getChannelCatalogMarketplaceProperties($channel_catalog_id)

Get the marketplace properties for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesChannelCatalogsApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | 

try {
    $result = $api_instance->getChannelCatalogMarketplaceProperties($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesChannelCatalogsApi->getChannelCatalogMarketplaceProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ChannelCatalogMarketplaceProperties**](../Model/ChannelCatalogMarketplaceProperties.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogMarketplaceSettings**
> \Swagger\Client\Model\ChannelCatalogMarketplaceSettings getChannelCatalogMarketplaceSettings($channel_catalog_id)

Get the marketplace settings for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesChannelCatalogsApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query (required)

try {
    $result = $api_instance->getChannelCatalogMarketplaceSettings($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesChannelCatalogsApi->getChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query (required) |

### Return type

[**\Swagger\Client\Model\ChannelCatalogMarketplaceSettings**](../Model/ChannelCatalogMarketplaceSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketplaceAccountStores**
> \Swagger\Client\Model\MarketplaceChannelCatalogList getMarketplaceAccountStores()

Get  you marketplace channel catalog list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesChannelCatalogsApi();

try {
    $result = $api_instance->getMarketplaceAccountStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesChannelCatalogsApi->getMarketplaceAccountStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MarketplaceChannelCatalogList**](../Model/MarketplaceChannelCatalogList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublications**
> \Swagger\Client\Model\AccountPublications getPublications($marketplace_technical_code, $account_id, $channel_catalog_id, $count, $publication_types)

Fetch the publication history for an account, sorted by descending start date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesChannelCatalogsApi();
$marketplace_technical_code = "marketplace_technical_code_example"; // string | Marketplace Technical Code to query (required)
$account_id = 56; // int | Account Id to query (required)
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id by which to filter (optional)
$count = 10; // int | Amount of entries to fetch (optional, default set to 10)
$publication_types = array("publication_types_example"); // string[] | Publication types by which to filter (optional)

try {
    $result = $api_instance->getPublications($marketplace_technical_code, $account_id, $channel_catalog_id, $count, $publication_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesChannelCatalogsApi->getPublications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| Marketplace Technical Code to query (required) |
 **account_id** | **int**| Account Id to query (required) |
 **channel_catalog_id** | **string**| Channel Catalog Id by which to filter (optional) | [optional]
 **count** | **int**| Amount of entries to fetch (optional, default set to 10) | [optional] [default to 10]
 **publication_types** | [**string[]**](../Model/string.md)| Publication types by which to filter (optional) | [optional]

### Return type

[**\Swagger\Client\Model\AccountPublications**](../Model/AccountPublications.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setChannelCatalogMarketplaceSettings**
> setChannelCatalogMarketplaceSettings($channel_catalog_id, $model)

Save new marketplace settings for a channel catalog

Allow you to configure your marketplace settings.  Partial update accepted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserMarketplacesChannelCatalogsApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query
$model = new \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest(); // \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest | Settings to save

try {
    $api_instance->setChannelCatalogMarketplaceSettings($channel_catalog_id, $model);
} catch (Exception $e) {
    echo 'Exception when calling V2UserMarketplacesChannelCatalogsApi->setChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query |
 **model** | [**\Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest**](../Model/\Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest.md)| Settings to save |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


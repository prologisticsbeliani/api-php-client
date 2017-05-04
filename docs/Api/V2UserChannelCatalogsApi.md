# Swagger\Client\V2UserChannelCatalogsApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureChannelCatalogCostSettings**](V2UserChannelCatalogsApi.md#configureChannelCatalogCostSettings) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/settings/cost | Disable a channel catalog
[**configureChannelCatalogExclusionFilters**](V2UserChannelCatalogsApi.md#configureChannelCatalogExclusionFilters) | **PUT** /v2/user/channelCatalogs/{channelCatalogId}/exclusionFilters | Configure channel catalog exclusion filters
[**configureChannelCatalogGeneralSettings**](V2UserChannelCatalogsApi.md#configureChannelCatalogGeneralSettings) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/settings/general | Disable a channel catalog
[**createChannelCatalog**](V2UserChannelCatalogsApi.md#createChannelCatalog) | **POST** /v2/user/channelCatalogs/ | Create a new channel catalog
[**deleteChannelCatalog**](V2UserChannelCatalogsApi.md#deleteChannelCatalog) | **DELETE** /v2/user/channelCatalogs/{channelCatalogId} | Delete the channel catalog
[**deleteChannelCatalogProductValueOverride**](V2UserChannelCatalogsApi.md#deleteChannelCatalogProductValueOverride) | **DELETE** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides/{channelColumnId} | Delete a specific channel catalog product value override
[**disableChannelCatalog**](V2UserChannelCatalogsApi.md#disableChannelCatalog) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/disable | Disable a channel catalog
[**disableChannelCatalogProduct**](V2UserChannelCatalogsApi.md#disableChannelCatalogProduct) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/disable | Disable channel catalog product
[**enableChannelCatalog**](V2UserChannelCatalogsApi.md#enableChannelCatalog) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/enable | Enable a channel catalog
[**getChannelCatalog**](V2UserChannelCatalogsApi.md#getChannelCatalog) | **GET** /v2/user/channelCatalogs/{channelCatalogId} | Get the channel catalog information
[**getChannelCatalogCategories**](V2UserChannelCatalogsApi.md#getChannelCatalogCategories) | **GET** /v2/user/channelCatalogs/{channelCatalogId}/categoryMappings | Get channel catalog categories
[**getChannelCatalogExclusionFilterOperators**](V2UserChannelCatalogsApi.md#getChannelCatalogExclusionFilterOperators) | **GET** /v2/user/channelCatalogs/exclusionFilterOperators | Get channel catalog exclusion filter operators
[**getChannelCatalogProductInfo**](V2UserChannelCatalogsApi.md#getChannelCatalogProductInfo) | **GET** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId} | Get channel catalog product information
[**getChannelCatalogProductInfoList**](V2UserChannelCatalogsApi.md#getChannelCatalogProductInfoList) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/products | Get channel catalog product information list
[**getChannelCatalogs**](V2UserChannelCatalogsApi.md#getChannelCatalogs) | **GET** /v2/user/channelCatalogs/ | List all your current channel catalogs
[**mapChannelCatalogCategory**](V2UserChannelCatalogsApi.md#mapChannelCatalogCategory) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/categoryMappings/map | Map channel catalog category
[**mapChannelCatalogColumns**](V2UserChannelCatalogsApi.md#mapChannelCatalogColumns) | **PUT** /v2/user/channelCatalogs/{channelCatalogId}/columnMappings | Configure channel catalog column mappings
[**overrideChannelCatalogProductOverrides**](V2UserChannelCatalogsApi.md#overrideChannelCatalogProductOverrides) | **PUT** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides | Override channel catalog product values
[**reenableChannelCatalogProduct**](V2UserChannelCatalogsApi.md#reenableChannelCatalogProduct) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/reenable | Reenable channel catalog product
[**unmapChannelCatalogCategory**](V2UserChannelCatalogsApi.md#unmapChannelCatalogCategory) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/categoryMappings/unmap | Unmap channel catalog category


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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\CostSettings(); // \Swagger\Client\Model\CostSettings | 

try {
    $api_instance->configureChannelCatalogCostSettings($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->configureChannelCatalogCostSettings: ', $e->getMessage(), PHP_EOL;
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

# **configureChannelCatalogExclusionFilters**
> configureChannelCatalogExclusionFilters($channel_catalog_id, $request)

Configure channel catalog exclusion filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\ExclusionFilters(); // \Swagger\Client\Model\ExclusionFilters | 

try {
    $api_instance->configureChannelCatalogExclusionFilters($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->configureChannelCatalogExclusionFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\ExclusionFilters**](../Model/\Swagger\Client\Model\ExclusionFilters.md)|  |

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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\GeneralSettings(); // \Swagger\Client\Model\GeneralSettings | 

try {
    $api_instance->configureChannelCatalogGeneralSettings($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->configureChannelCatalogGeneralSettings: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$request = new \Swagger\Client\Model\CreateChannelCatalogRequest(); // \Swagger\Client\Model\CreateChannelCatalogRequest | 

try {
    $result = $api_instance->createChannelCatalog($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->createChannelCatalog: ', $e->getMessage(), PHP_EOL;
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
> deleteChannelCatalog()

Delete the channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();

try {
    $api_instance->deleteChannelCatalog();
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->deleteChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannelCatalogProductValueOverride**
> deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id)

Delete a specific channel catalog product value override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier
$channel_column_id = "8a76f06a-fefc-4c0d-bcfe-b210f1482977"; // string | The channel column identifier

try {
    $api_instance->deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->deleteChannelCatalogProductValueOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **channel_column_id** | **string**| The channel column identifier |

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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $api_instance->disableChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->disableChannelCatalog: ', $e->getMessage(), PHP_EOL;
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

# **disableChannelCatalogProduct**
> disableChannelCatalogProduct($channel_catalog_id, $product_id)

Disable channel catalog product

By default a all your catalog products are exposed to the channel. You can disable a product by using this operation. /!\\ In case of massive optimisation we recommand you to use the analytics api

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier

try {
    $api_instance->disableChannelCatalogProduct($channel_catalog_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->disableChannelCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $api_instance->enableChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->enableChannelCatalog: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $result = $api_instance->getChannelCatalog($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->getChannelCatalog: ', $e->getMessage(), PHP_EOL;
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

# **getChannelCatalogCategories**
> \Swagger\Client\Model\ChannelCatalogCategoryMappings getChannelCatalogCategories($channel_catalog_id)

Get channel catalog categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $result = $api_instance->getChannelCatalogCategories($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->getChannelCatalogCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalogCategoryMappings**](../Model/ChannelCatalogCategoryMappings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogExclusionFilterOperators**
> \Swagger\Client\Model\ExclusionFilterOperator[] getChannelCatalogExclusionFilterOperators()

Get channel catalog exclusion filter operators

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();

try {
    $result = $api_instance->getChannelCatalogExclusionFilterOperators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->getChannelCatalogExclusionFilterOperators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ExclusionFilterOperator[]**](../Model/ExclusionFilterOperator.md)

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier

try {
    $result = $api_instance->getChannelCatalogProductInfo($channel_catalog_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->getChannelCatalogProductInfo: ', $e->getMessage(), PHP_EOL;
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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest(); // \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest | The channel catalog product list filter

try {
    $result = $api_instance->getChannelCatalogProductInfoList($channel_catalog_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->getChannelCatalogProductInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest**](../Model/\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest.md)| The channel catalog product list filter | [optional]

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductInfoList**](../Model/ChannelCatalogProductInfoList.md)

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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$store_id = "04730364-9826-4ff3-92e4-51fccd02bf10"; // string | The store identifier

try {
    $result = $api_instance->getChannelCatalogs($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->getChannelCatalogs: ', $e->getMessage(), PHP_EOL;
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

# **mapChannelCatalogCategory**
> mapChannelCatalogCategory($channel_catalog_id, $request)

Map channel catalog category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\MapCategoryRequest(); // \Swagger\Client\Model\MapCategoryRequest | 

try {
    $api_instance->mapChannelCatalogCategory($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->mapChannelCatalogCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\MapCategoryRequest**](../Model/\Swagger\Client\Model\MapCategoryRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\ColumnMappingList(); // \Swagger\Client\Model\ColumnMappingList | 

try {
    $api_instance->mapChannelCatalogColumns($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->mapChannelCatalogColumns: ', $e->getMessage(), PHP_EOL;
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

# **overrideChannelCatalogProductOverrides**
> overrideChannelCatalogProductOverrides($channel_catalog_id, $product_id, $request)

Override channel catalog product values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier
$request = new \Swagger\Client\Model\ProductOverrides(); // \Swagger\Client\Model\ProductOverrides | 

try {
    $api_instance->overrideChannelCatalogProductOverrides($channel_catalog_id, $product_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->overrideChannelCatalogProductOverrides: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **request** | [**\Swagger\Client\Model\ProductOverrides**](../Model/\Swagger\Client\Model\ProductOverrides.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reenableChannelCatalogProduct**
> reenableChannelCatalogProduct($channel_catalog_id, $product_id)

Reenable channel catalog product

By default a all your catalog products are exposed to the channel. You can reenable a product by using this operation. /!\\ In case of massive optimisation we recommand you to use the analytics api

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier

try {
    $api_instance->reenableChannelCatalogProduct($channel_catalog_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->reenableChannelCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unmapChannelCatalogCategory**
> unmapChannelCatalogCategory($channel_catalog_id, $request)

Unmap channel catalog category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserChannelCatalogsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\UnmapCategoryRequest(); // \Swagger\Client\Model\UnmapCategoryRequest | 

try {
    $api_instance->unmapChannelCatalogCategory($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserChannelCatalogsApi->unmapChannelCatalogCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\UnmapCategoryRequest**](../Model/\Swagger\Client\Model\UnmapCategoryRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


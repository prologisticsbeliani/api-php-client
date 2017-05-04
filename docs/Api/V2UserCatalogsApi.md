# Swagger\Client\V2UserCatalogsApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autoConfigureAutoImportInterval**](V2UserCatalogsApi.md#autoConfigureAutoImportInterval) | **POST** /v2/user/catalogs/{storeId}/autoImport/scheduling/interval | Configure Auto Import Interval
[**autoDeleteAutoImport**](V2UserCatalogsApi.md#autoDeleteAutoImport) | **DELETE** /v2/user/catalogs/{storeId}/autoImport | Delete Auto Import
[**autoGetAutoImportConfiguration**](V2UserCatalogsApi.md#autoGetAutoImportConfiguration) | **GET** /v2/user/catalogs/{storeId}/autoImport | Get the auto import configuration
[**autoPauseAutoImport**](V2UserCatalogsApi.md#autoPauseAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/pause | Pause Auto Import
[**autoResumeAutoImport**](V2UserCatalogsApi.md#autoResumeAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/resume | Resume Auto Import
[**autoScheduleAutoImport**](V2UserCatalogsApi.md#autoScheduleAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/scheduling/schedules | Configure Auto Import Schedules
[**autoStartAutoImport**](V2UserCatalogsApi.md#autoStartAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/start | Start Auto Import Manually
[**catalogChangeCatalogColumnUserName**](V2UserCatalogsApi.md#catalogChangeCatalogColumnUserName) | **POST** /v2/user/catalogs/{storeId}/catalogColumns/{columnId}/rename | Change Catalog Column User Name
[**catalogChangeCustomColumnExpression**](V2UserCatalogsApi.md#catalogChangeCustomColumnExpression) | **PUT** /v2/user/catalogs/{storeId}/customColumns/{columnId}/expression | Change custom column expression
[**catalogChangeCustomColumnUserName**](V2UserCatalogsApi.md#catalogChangeCustomColumnUserName) | **POST** /v2/user/catalogs/{storeId}/customColumns/{columnId}/rename | Change Custom Column User Name
[**catalogComputeExpression**](V2UserCatalogsApi.md#catalogComputeExpression) | **POST** /v2/user/catalogs/{storeId}/customColumns/computeExpression | Compute the expression for this catalog.
[**catalogDeleteCustomColumn**](V2UserCatalogsApi.md#catalogDeleteCustomColumn) | **DELETE** /v2/user/catalogs/{storeId}/customColumns/{columnId} | Delete custom column
[**catalogGetBeezUPColumns**](V2UserCatalogsApi.md#catalogGetBeezUPColumns) | **GET** /v2/user/catalogs/beezupColumns | Get the BeezUP columns
[**catalogGetCatalogColumns**](V2UserCatalogsApi.md#catalogGetCatalogColumns) | **GET** /v2/user/catalogs/{storeId}/catalogColumns | Get catalog column list
[**catalogGetCategories**](V2UserCatalogsApi.md#catalogGetCategories) | **GET** /v2/user/catalogs/{storeId}/categories | Get category list
[**catalogGetCustomColumnExpression**](V2UserCatalogsApi.md#catalogGetCustomColumnExpression) | **GET** /v2/user/catalogs/{storeId}/customColumns/{columnId}/expression | Get the encrypted custom column expression
[**catalogGetCustomColumns**](V2UserCatalogsApi.md#catalogGetCustomColumns) | **GET** /v2/user/catalogs/{storeId}/customColumns | Get custom column list
[**catalogGetProduct**](V2UserCatalogsApi.md#catalogGetProduct) | **GET** /v2/user/catalogs/{storeId}/products/{productId} | Get product
[**catalogGetProducts**](V2UserCatalogsApi.md#catalogGetProducts) | **POST** /v2/user/catalogs/{storeId}/products | Get product list
[**catalogGetRandomProducts**](V2UserCatalogsApi.md#catalogGetRandomProducts) | **GET** /v2/user/catalogs/{storeId}/products/random | Get random product list
[**catalogSaveCustomColumn**](V2UserCatalogsApi.md#catalogSaveCustomColumn) | **PUT** /v2/user/catalogs/{storeId}/customColumns/{columnId} | Create or replace a custom column
[**importationActivateAutoImport**](V2UserCatalogsApi.md#importationActivateAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport | Activate the auto importation of the last successful manual catalog importation.
[**importationCancel**](V2UserCatalogsApi.md#importationCancel) | **DELETE** /v2/user/catalogs/{storeId}/importations/{executionId} | Cancel importation
[**importationCommit**](V2UserCatalogsApi.md#importationCommit) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/commit | Commit Importation
[**importationCommitColumns**](V2UserCatalogsApi.md#importationCommitColumns) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/commitColumns | Commit columns
[**importationConfigureCatalogColumn**](V2UserCatalogsApi.md#importationConfigureCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId} | Configure catalog column
[**importationConfigureRemainingCatalogColumns**](V2UserCatalogsApi.md#importationConfigureRemainingCatalogColumns) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/configureRemainingCatalogColumns | Configure remaining catalog columns
[**importationDeleteCustomColumn**](V2UserCatalogsApi.md#importationDeleteCustomColumn) | **DELETE** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Delete Custom Column
[**importationGetCustomColumnExpression**](V2UserCatalogsApi.md#importationGetCustomColumnExpression) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/expression | Get the encrypted custom column expression in this importation
[**importationGetCustomColumns**](V2UserCatalogsApi.md#importationGetCustomColumns) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns | Get custom columns currently place in this importation
[**importationGetDetectedCatalogColumns**](V2UserCatalogsApi.md#importationGetDetectedCatalogColumns) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns | Get detected catalog columns during this importation.
[**importationGetImportationMonitoring**](V2UserCatalogsApi.md#importationGetImportationMonitoring) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId} | Get the importation status
[**importationGetManualUpdateLastInputConfig**](V2UserCatalogsApi.md#importationGetManualUpdateLastInputConfig) | **GET** /v2/user/catalogs/{storeId}/inputConfiguration | Get the last input configuration
[**importationGetProductSample**](V2UserCatalogsApi.md#importationGetProductSample) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex} | Get the product sample related to this importation with all columns (catalog and custom)
[**importationGetProductSampleCustomColumnValue**](V2UserCatalogsApi.md#importationGetProductSampleCustomColumnValue) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex}/customColumns/{columnId} | Get product sample custom column value related to this importation.
[**importationGetReportings**](V2UserCatalogsApi.md#importationGetReportings) | **GET** /v2/user/catalogs/{storeId}/importations | Get the latest catalog importation reporting
[**importationIgnoreColumn**](V2UserCatalogsApi.md#importationIgnoreColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/ignore | Ignore Column
[**importationMapCatalogColumn**](V2UserCatalogsApi.md#importationMapCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/map | Map catalog column to a BeezUP column
[**importationMapCustomColumn**](V2UserCatalogsApi.md#importationMapCustomColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/map | Map custom column to a BeezUP column
[**importationReattendColumn**](V2UserCatalogsApi.md#importationReattendColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/reattend | Reattend Column
[**importationSaveCustomColumn**](V2UserCatalogsApi.md#importationSaveCustomColumn) | **PUT** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Create or replace a custom column
[**importationStartManualUpdate**](V2UserCatalogsApi.md#importationStartManualUpdate) | **POST** /v2/user/catalogs/{storeId}/importations | Start Manual Import
[**importationTechnicalProgression**](V2UserCatalogsApi.md#importationTechnicalProgression) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/technicalProgression | Get technical progression
[**importationUnmapCatalogColumn**](V2UserCatalogsApi.md#importationUnmapCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/unmap | Unmap catalog column
[**importationUnmapCustomColumn**](V2UserCatalogsApi.md#importationUnmapCustomColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/unmap | Unmap custom column


# **autoConfigureAutoImportInterval**
> autoConfigureAutoImportInterval($store_id, $request)

Configure Auto Import Interval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ConfigureAutoImportIntervalRequest(); // \Swagger\Client\Model\ConfigureAutoImportIntervalRequest | 

try {
    $api_instance->autoConfigureAutoImportInterval($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->autoConfigureAutoImportInterval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ConfigureAutoImportIntervalRequest**](../Model/\Swagger\Client\Model\ConfigureAutoImportIntervalRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoDeleteAutoImport**
> autoDeleteAutoImport($store_id)

Delete Auto Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->autoDeleteAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->autoDeleteAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoGetAutoImportConfiguration**
> \Swagger\Client\Model\AutoImportConfiguration autoGetAutoImportConfiguration($store_id)

Get the auto import configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->autoGetAutoImportConfiguration($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->autoGetAutoImportConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\AutoImportConfiguration**](../Model/AutoImportConfiguration.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPauseAutoImport**
> autoPauseAutoImport($store_id)

Pause Auto Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->autoPauseAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->autoPauseAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoResumeAutoImport**
> autoResumeAutoImport($store_id)

Resume Auto Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->autoResumeAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->autoResumeAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoScheduleAutoImport**
> autoScheduleAutoImport($store_id, $request)

Configure Auto Import Schedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ScheduleAutoImportRequest(); // \Swagger\Client\Model\ScheduleAutoImportRequest | 

try {
    $api_instance->autoScheduleAutoImport($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->autoScheduleAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ScheduleAutoImportRequest**](../Model/\Swagger\Client\Model\ScheduleAutoImportRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoStartAutoImport**
> \Swagger\Client\Model\BeezUPCommonLink2[] autoStartAutoImport($store_id)

Start Auto Import Manually

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->autoStartAutoImport($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->autoStartAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogChangeCatalogColumnUserName**
> catalogChangeCatalogColumnUserName($store_id, $column_id, $request)

Change Catalog Column User Name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The catalog column identifier
$request = new \Swagger\Client\Model\ChangeUserColumnNameRequest(); // \Swagger\Client\Model\ChangeUserColumnNameRequest | 

try {
    $api_instance->catalogChangeCatalogColumnUserName($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogChangeCatalogColumnUserName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The catalog column identifier |
 **request** | [**\Swagger\Client\Model\ChangeUserColumnNameRequest**](../Model/\Swagger\Client\Model\ChangeUserColumnNameRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogChangeCustomColumnExpression**
> catalogChangeCustomColumnExpression($store_id, $column_id, $request)

Change custom column expression

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeCustomColumnExpressionRequest(); // \Swagger\Client\Model\ChangeCustomColumnExpressionRequest | 

try {
    $api_instance->catalogChangeCustomColumnExpression($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogChangeCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeCustomColumnExpressionRequest**](../Model/\Swagger\Client\Model\ChangeCustomColumnExpressionRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogChangeCustomColumnUserName**
> catalogChangeCustomColumnUserName($store_id, $column_id, $request)

Change Custom Column User Name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeUserColumnNameRequest(); // \Swagger\Client\Model\ChangeUserColumnNameRequest | 

try {
    $api_instance->catalogChangeCustomColumnUserName($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogChangeCustomColumnUserName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeUserColumnNameRequest**](../Model/\Swagger\Client\Model\ChangeUserColumnNameRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogComputeExpression**
> string catalogComputeExpression($store_id, $request)

Compute the expression for this catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ComputeExpressionRequest(); // \Swagger\Client\Model\ComputeExpressionRequest | 

try {
    $result = $api_instance->catalogComputeExpression($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogComputeExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ComputeExpressionRequest**](../Model/\Swagger\Client\Model\ComputeExpressionRequest.md)|  |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogDeleteCustomColumn**
> catalogDeleteCustomColumn($store_id, $column_id)

Delete custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->catalogDeleteCustomColumn($store_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogDeleteCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetBeezUPColumns**
> \Swagger\Client\Model\BeezUPColumnConfiguration[] catalogGetBeezUPColumns()

Get the BeezUP columns

Get the BeezUP columns, this columns are used for mapping during the manual catalog importation process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();

try {
    $result = $api_instance->catalogGetBeezUPColumns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetBeezUPColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BeezUPColumnConfiguration[]**](../Model/BeezUPColumnConfiguration.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetCatalogColumns**
> \Swagger\Client\Model\CatalogColumns catalogGetCatalogColumns($store_id)

Get catalog column list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->catalogGetCatalogColumns($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\CatalogColumns**](../Model/CatalogColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetCategories**
> \Swagger\Client\Model\Categories catalogGetCategories($store_id, $accept_encoding)

Get category list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.

try {
    $result = $api_instance->catalogGetCategories($store_id, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |

### Return type

[**\Swagger\Client\Model\Categories**](../Model/Categories.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetCustomColumnExpression**
> string catalogGetCustomColumnExpression($store_id, $column_id)

Get the encrypted custom column expression

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->catalogGetCustomColumnExpression($store_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetCustomColumns**
> \Swagger\Client\Model\CustomColumns catalogGetCustomColumns($store_id)

Get custom column list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->catalogGetCustomColumns($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetCustomColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\CustomColumns**](../Model/CustomColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetProduct**
> \Swagger\Client\Model\Product catalogGetProduct($store_id, $product_id)

Get product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$product_id = "product_id_example"; // string | The product identifier you want to get

try {
    $result = $api_instance->catalogGetProduct($store_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **product_id** | **string**| The product identifier you want to get |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetProducts**
> \Swagger\Client\Model\Products catalogGetProducts($store_id, $request)

Get product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\GetProductsRequest(); // \Swagger\Client\Model\GetProductsRequest | 

try {
    $result = $api_instance->catalogGetProducts($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\GetProductsRequest**](../Model/\Swagger\Client\Model\GetProductsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Products**](../Model/Products.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetRandomProducts**
> \Swagger\Client\Model\Products catalogGetRandomProducts($store_id, $count)

Get random product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The count of random product you want to get

try {
    $result = $api_instance->catalogGetRandomProducts($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogGetRandomProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The count of random product you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\Products**](../Model/Products.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogSaveCustomColumn**
> catalogSaveCustomColumn($store_id, $column_id, $request)

Create or replace a custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\CreateCustomColumnRequest(); // \Swagger\Client\Model\CreateCustomColumnRequest | 

try {
    $api_instance->catalogSaveCustomColumn($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->catalogSaveCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\CreateCustomColumnRequest**](../Model/\Swagger\Client\Model\CreateCustomColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationActivateAutoImport**
> importationActivateAutoImport($store_id)

Activate the auto importation of the last successful manual catalog importation.

Once you have made your fist manual catalog importation with success, you can call this operation to import it automatically. No parameter required, we know which one it is.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->importationActivateAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationActivateAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationCancel**
> importationCancel($store_id, $execution_id)

Cancel importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationCancel($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationCommit**
> importationCommit($store_id, $execution_id)

Commit Importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationCommit($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationCommitColumns**
> importationCommitColumns($store_id, $execution_id)

Commit columns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationCommitColumns($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationCommitColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationConfigureCatalogColumn**
> importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request)

Configure catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest(); // \Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest | 

try {
    $api_instance->importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationConfigureCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest**](../Model/\Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationConfigureRemainingCatalogColumns**
> importationConfigureRemainingCatalogColumns($store_id, $execution_id)

Configure remaining catalog columns

This operation should be used after you have mapped the required BeezUP Columns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationConfigureRemainingCatalogColumns($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationConfigureRemainingCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationDeleteCustomColumn**
> importationDeleteCustomColumn($store_id, $execution_id, $column_id)

Delete Custom Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationDeleteCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationDeleteCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumnExpression**
> string importationGetCustomColumnExpression($store_id, $execution_id, $column_id)

Get the encrypted custom column expression in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->importationGetCustomColumnExpression($store_id, $execution_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumns**
> \Swagger\Client\Model\CustomColumns importationGetCustomColumns($store_id, $execution_id)

Get custom columns currently place in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetCustomColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetCustomColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\CustomColumns**](../Model/CustomColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetDetectedCatalogColumns**
> \Swagger\Client\Model\DetectedCatalogColumns importationGetDetectedCatalogColumns($store_id, $execution_id)

Get detected catalog columns during this importation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetDetectedCatalogColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetDetectedCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\DetectedCatalogColumns**](../Model/DetectedCatalogColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetImportationMonitoring**
> \Swagger\Client\Model\ImportationMonitoring importationGetImportationMonitoring($store_id, $execution_id)

Get the importation status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetImportationMonitoring($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetImportationMonitoring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\ImportationMonitoring**](../Model/ImportationMonitoring.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetManualUpdateLastInputConfig**
> \Swagger\Client\Model\LastManualImportInputConfiguration importationGetManualUpdateLastInputConfig($store_id)

Get the last input configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->importationGetManualUpdateLastInputConfig($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetManualUpdateLastInputConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\LastManualImportInputConfiguration**](../Model/LastManualImportInputConfiguration.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetProductSample**
> \Swagger\Client\Model\ProductSample importationGetProductSample($store_id, $execution_id, $product_sample_index)

Get the product sample related to this importation with all columns (catalog and custom)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.

try {
    $result = $api_instance->importationGetProductSample($store_id, $execution_id, $product_sample_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetProductSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |

### Return type

[**\Swagger\Client\Model\ProductSample**](../Model/ProductSample.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetProductSampleCustomColumnValue**
> string importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id)

Get product sample custom column value related to this importation.

/!\\ Use this operation only when you just changed the custom column expression and you want to get a precise the property value. Otherwise use the operation Importation_GetProductSample which will give you all property values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetProductSampleCustomColumnValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetReportings**
> \Swagger\Client\Model\ImportationReporting[] importationGetReportings($store_id)

Get the latest catalog importation reporting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->importationGetReportings($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationGetReportings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\ImportationReporting[]**](../Model/ImportationReporting.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationIgnoreColumn**
> importationIgnoreColumn($store_id, $execution_id, $column_id)

Ignore Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationIgnoreColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationIgnoreColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCatalogColumn**
> importationMapCatalogColumn($store_id, $execution_id, $column_id, $request)

Map catalog column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier
$request = new \Swagger\Client\Model\MapBeezUPColumnRequest(); // \Swagger\Client\Model\MapBeezUPColumnRequest | 

try {
    $api_instance->importationMapCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationMapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |
 **request** | [**\Swagger\Client\Model\MapBeezUPColumnRequest**](../Model/\Swagger\Client\Model\MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCustomColumn**
> importationMapCustomColumn($store_id, $execution_id, $column_id, $request)

Map custom column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\MapBeezUPColumnRequest(); // \Swagger\Client\Model\MapBeezUPColumnRequest | 

try {
    $api_instance->importationMapCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationMapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\MapBeezUPColumnRequest**](../Model/\Swagger\Client\Model\MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationReattendColumn**
> importationReattendColumn($store_id, $execution_id, $column_id)

Reattend Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationReattendColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationReattendColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationSaveCustomColumn**
> importationSaveCustomColumn($store_id, $execution_id, $column_id, $request)

Create or replace a custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeCustomColumnRequest(); // \Swagger\Client\Model\ChangeCustomColumnRequest | 

try {
    $api_instance->importationSaveCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationSaveCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeCustomColumnRequest**](../Model/\Swagger\Client\Model\ChangeCustomColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationStartManualUpdate**
> \Swagger\Client\Model\BeezUPCommonLink2[] importationStartManualUpdate($store_id, $request)

Start Manual Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\StartManualImportRequest(); // \Swagger\Client\Model\StartManualImportRequest | 

try {
    $result = $api_instance->importationStartManualUpdate($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationStartManualUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\StartManualImportRequest**](../Model/\Swagger\Client\Model\StartManualImportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationTechnicalProgression**
> \Swagger\Client\Model\ImportationTechnicalProgression importationTechnicalProgression($store_id, $execution_id)

Get technical progression

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationTechnicalProgression($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationTechnicalProgression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\ImportationTechnicalProgression**](../Model/ImportationTechnicalProgression.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCatalogColumn**
> importationUnmapCatalogColumn($store_id, $execution_id, $column_id)

Unmap catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier

try {
    $api_instance->importationUnmapCatalogColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationUnmapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCustomColumn**
> importationUnmapCustomColumn($store_id, $execution_id, $column_id)

Unmap custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCatalogsApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationUnmapCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCatalogsApi->importationUnmapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


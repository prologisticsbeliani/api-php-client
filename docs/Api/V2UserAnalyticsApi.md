# Swagger\Client\V2UserAnalyticsApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRule**](V2UserAnalyticsApi.md#createRule) | **POST** /v2/user/analytics/{storeId}/rules | Rule creation
[**deleteReportFilter**](V2UserAnalyticsApi.md#deleteReportFilter) | **DELETE** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Delete the report filter
[**deleteRule**](V2UserAnalyticsApi.md#deleteRule) | **DELETE** /v2/user/analytics/{storeId}/rules/{ruleId} | Delete Rule
[**disableRule**](V2UserAnalyticsApi.md#disableRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/disable | Disable rule
[**enableRule**](V2UserAnalyticsApi.md#enableRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/enable | Enable rule
[**exportStoreReportByCategory**](V2UserAnalyticsApi.md#exportStoreReportByCategory) | **POST** /v2/user/analytics/{storeId}/reports/bycategory/export | Export the report by category
[**exportStoreReportByChannel**](V2UserAnalyticsApi.md#exportStoreReportByChannel) | **POST** /v2/user/analytics/{storeId}/reports/bychannel/export | Export the report by channel
[**exportStoreReportByProduct**](V2UserAnalyticsApi.md#exportStoreReportByProduct) | **POST** /v2/user/analytics/{storeId}/reports/byproduct/export | Export the report by product
[**getReportFilter**](V2UserAnalyticsApi.md#getReportFilter) | **GET** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Get the report filter description
[**getReportFilters**](V2UserAnalyticsApi.md#getReportFilters) | **GET** /v2/user/analytics/{storeId}/reports/filters | Get report filter list for the given store
[**getRule**](V2UserAnalyticsApi.md#getRule) | **GET** /v2/user/analytics/{storeId}/rules/{ruleId} | Gets the rule
[**getRules**](V2UserAnalyticsApi.md#getRules) | **GET** /v2/user/analytics/{storeId}/rules | Gets the list of rules for a given store
[**getRulesExecutions**](V2UserAnalyticsApi.md#getRulesExecutions) | **GET** /v2/user/analytics/{storeId}/rules/executions | Get the rules execution history
[**getStoreReportByCategory**](V2UserAnalyticsApi.md#getStoreReportByCategory) | **POST** /v2/user/analytics/{storeId}/reports/bycategory | Get the report by category
[**getStoreReportByChannel**](V2UserAnalyticsApi.md#getStoreReportByChannel) | **POST** /v2/user/analytics/{storeId}/reports/bychannel | Get the report by channel
[**getStoreReportByDay**](V2UserAnalyticsApi.md#getStoreReportByDay) | **POST** /v2/user/analytics/{storeId}/reports/byday | Get the report by day
[**getStoreReportByDayExport**](V2UserAnalyticsApi.md#getStoreReportByDayExport) | **POST** /v2/user/analytics/{storeId}/reports/byday/export | Get the report by day
[**getStoreReportByProduct**](V2UserAnalyticsApi.md#getStoreReportByProduct) | **POST** /v2/user/analytics/{storeId}/reports/byproduct | Get the report by product
[**getStoreTrackedClicks**](V2UserAnalyticsApi.md#getStoreTrackedClicks) | **GET** /v2/user/analytics/{storeId}/tracking/clicks | Get the latest clicks tracked
[**getStoreTrackedExternalOrders**](V2UserAnalyticsApi.md#getStoreTrackedExternalOrders) | **GET** /v2/user/analytics/{storeId}/tracking/externalorders | Get the latest external orders tracked
[**getStoreTrackedOrders**](V2UserAnalyticsApi.md#getStoreTrackedOrders) | **GET** /v2/user/analytics/{storeId}/tracking/orders | Get the latest orders tracked
[**getStoreTrackingStatus**](V2UserAnalyticsApi.md#getStoreTrackingStatus) | **GET** /v2/user/analytics/{storeId}/tracking/status | Get store tracking synchronization status
[**getTrackingStatus**](V2UserAnalyticsApi.md#getTrackingStatus) | **GET** /v2/user/analytics/tracking/status | Display the synchronization status of the clicks and orders
[**moveDownRule**](V2UserAnalyticsApi.md#moveDownRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/movedown | Move the rule down
[**moveUpRule**](V2UserAnalyticsApi.md#moveUpRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/moveup | Move the rule up
[**optimise**](V2UserAnalyticsApi.md#optimise) | **POST** /v2/user/analytics/{storeId}/optimisations/{actionName} | Optimise products
[**optimiseByCategory**](V2UserAnalyticsApi.md#optimiseByCategory) | **POST** /v2/user/analytics/{storeId}/optimisations/bycategory/{catalogCategoryId}/{actionName} | Optimise products&#39;s category
[**optimiseByChannel**](V2UserAnalyticsApi.md#optimiseByChannel) | **POST** /v2/user/analytics/{storeId}/optimisations/bychannel/{channelId}/{actionName} | Optimise products&#39;s category
[**optimiseByProduct**](V2UserAnalyticsApi.md#optimiseByProduct) | **POST** /v2/user/analytics/{storeId}/optimisations/byproduct/{productId}/{actionName} | Optimise products
[**runRule**](V2UserAnalyticsApi.md#runRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/run | Run rule
[**runRules**](V2UserAnalyticsApi.md#runRules) | **POST** /v2/user/analytics/{storeId}/rules/run | Run all rules for this store
[**saveReportFilter**](V2UserAnalyticsApi.md#saveReportFilter) | **PUT** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Save the report filter
[**updateRule**](V2UserAnalyticsApi.md#updateRule) | **PATCH** /v2/user/analytics/{storeId}/rules/{ruleId} | Update Rule


# **createRule**
> createRule($store_id, $request)

Rule creation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\CreateRuleRequest(); // \Swagger\Client\Model\CreateRuleRequest | 

try {
    $api_instance->createRule($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->createRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\CreateRuleRequest**](../Model/\Swagger\Client\Model\CreateRuleRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReportFilter**
> deleteReportFilter($store_id, $report_filter_id)

Delete the report filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier

try {
    $api_instance->deleteReportFilter($store_id, $report_filter_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->deleteReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRule**
> deleteRule($store_id, $rule_id)

Delete Rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->deleteRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableRule**
> disableRule($store_id, $rule_id)

Disable rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->disableRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->disableRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableRule**
> enableRule($store_id, $rule_id)

Enable rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->enableRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->enableRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByCategory**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByCategory($store_id, $format, $request)

Export the report by category

Export the report by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByCategoryRequest(); // \Swagger\Client\Model\ReportByCategoryRequest | 

try {
    $result = $api_instance->exportStoreReportByCategory($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->exportStoreReportByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByCategoryRequest**](../Model/\Swagger\Client\Model\ReportByCategoryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByChannel**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByChannel($store_id, $format, $request)

Export the report by channel

Export the report by channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByChannelRequest(); // \Swagger\Client\Model\ReportByChannelRequest | 

try {
    $result = $api_instance->exportStoreReportByChannel($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->exportStoreReportByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByChannelRequest**](../Model/\Swagger\Client\Model\ReportByChannelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByProduct**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByProduct($store_id, $format, $request)

Export the report by product

Export the report by product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByProductRequest(); // \Swagger\Client\Model\ReportByProductRequest | 

try {
    $result = $api_instance->exportStoreReportByProduct($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->exportStoreReportByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByProductRequest**](../Model/\Swagger\Client\Model\ReportByProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportFilter**
> \Swagger\Client\Model\ReportFilter getReportFilter($store_id, $report_filter_id)

Get the report filter description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier

try {
    $result = $api_instance->getReportFilter($store_id, $report_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |

### Return type

[**\Swagger\Client\Model\ReportFilter**](../Model/ReportFilter.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportFilters**
> \Swagger\Client\Model\ReportFilters getReportFilters($store_id)

Get report filter list for the given store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getReportFilters($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getReportFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\ReportFilters**](../Model/ReportFilters.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRule**
> \Swagger\Client\Model\Rule getRule($store_id, $rule_id)

Gets the rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $result = $api_instance->getRule($store_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

[**\Swagger\Client\Model\Rule**](../Model/Rule.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRules**
> \Swagger\Client\Model\Rules getRules($store_id)

Gets the list of rules for a given store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getRules($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\Rules**](../Model/Rules.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRulesExecutions**
> \Swagger\Client\Model\RuleExecutionReportings getRulesExecutions($store_id, $page_number, $page_size)

Get the rules execution history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$page_number = 1; // int | The page to retrieve
$page_size = 10; // int | The count of rule history to retrieve

try {
    $result = $api_instance->getRulesExecutions($store_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getRulesExecutions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **page_number** | **int**| The page to retrieve | [default to 1]
 **page_size** | **int**| The count of rule history to retrieve | [default to 10]

### Return type

[**\Swagger\Client\Model\RuleExecutionReportings**](../Model/RuleExecutionReportings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByCategory**
> \Swagger\Client\Model\ReportByCategoryResponse getStoreReportByCategory($store_id, $request)

Get the report by category

Get the report by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByCategoryRequest(); // \Swagger\Client\Model\ReportByCategoryRequest | 

try {
    $result = $api_instance->getStoreReportByCategory($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreReportByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByCategoryRequest**](../Model/\Swagger\Client\Model\ReportByCategoryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByCategoryResponse**](../Model/ReportByCategoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByChannel**
> \Swagger\Client\Model\ReportByChannelResponse getStoreReportByChannel($store_id, $request)

Get the report by channel

Get the report by channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByChannelRequest(); // \Swagger\Client\Model\ReportByChannelRequest | 

try {
    $result = $api_instance->getStoreReportByChannel($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreReportByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByChannelRequest**](../Model/\Swagger\Client\Model\ReportByChannelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByChannelResponse**](../Model/ReportByChannelResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByDay**
> \Swagger\Client\Model\ReportByDayResponse getStoreReportByDay($store_id, $request)

Get the report by day

Get the report by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByDayRequest(); // \Swagger\Client\Model\ReportByDayRequest | 

try {
    $result = $api_instance->getStoreReportByDay($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreReportByDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByDayRequest**](../Model/\Swagger\Client\Model\ReportByDayRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByDayResponse**](../Model/ReportByDayResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByDayExport**
> \Swagger\Client\Model\BeezUPCommonLink2[] getStoreReportByDayExport($store_id, $format, $request)

Get the report by day

Get the report by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByDayRequest(); // \Swagger\Client\Model\ReportByDayRequest | 

try {
    $result = $api_instance->getStoreReportByDayExport($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreReportByDayExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByDayRequest**](../Model/\Swagger\Client\Model\ReportByDayRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByProduct**
> \Swagger\Client\Model\ReportByProductResponse getStoreReportByProduct($store_id, $request)

Get the report by product

Get the report by product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByProductRequest(); // \Swagger\Client\Model\ReportByProductRequest | 

try {
    $result = $api_instance->getStoreReportByProduct($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreReportByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByProductRequest**](../Model/\Swagger\Client\Model\ReportByProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByProductResponse**](../Model/ReportByProductResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackedClicks**
> \Swagger\Client\Model\TrackedClicks getStoreTrackedClicks($store_id, $count)

Get the latest clicks tracked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The click's count you want to get

try {
    $result = $api_instance->getStoreTrackedClicks($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreTrackedClicks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The click&#39;s count you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\TrackedClicks**](../Model/TrackedClicks.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackedExternalOrders**
> \Swagger\Client\Model\TrackedExternalOrders getStoreTrackedExternalOrders($store_id, $count)

Get the latest external orders tracked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The external order's count you want to get

try {
    $result = $api_instance->getStoreTrackedExternalOrders($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreTrackedExternalOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The external order&#39;s count you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\TrackedExternalOrders**](../Model/TrackedExternalOrders.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackedOrders**
> \Swagger\Client\Model\TrackedOrders getStoreTrackedOrders($store_id, $count)

Get the latest orders tracked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The order's count you want to get

try {
    $result = $api_instance->getStoreTrackedOrders($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreTrackedOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The order&#39;s count you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\TrackedOrders**](../Model/TrackedOrders.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackingStatus**
> \Swagger\Client\Model\StoreTrackingStatus getStoreTrackingStatus($store_id)

Get store tracking synchronization status

Your clicks and orders are eventually consistent. \\ This operation indicates you at which date the projections are for this store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getStoreTrackingStatus($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getStoreTrackingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\StoreTrackingStatus**](../Model/StoreTrackingStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingStatus**
> \Swagger\Client\Model\TrackingStatus getTrackingStatus()

Display the synchronization status of the clicks and orders

Your clicks and orders are eventually consistent. \\ This operation indicates you at which date the projections are.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();

try {
    $result = $api_instance->getTrackingStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->getTrackingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TrackingStatus**](../Model/TrackingStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveDownRule**
> moveDownRule($store_id, $rule_id)

Move the rule down

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->moveDownRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->moveDownRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveUpRule**
> moveUpRule($store_id, $rule_id)

Move the rule up

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->moveUpRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->moveUpRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimise**
> optimise($store_id, $action_name, $request)

Optimise products

/!\\ WARNING /!\\ \\ Apply the operation on every product related to this request. \\ This operation is used at the bottom of the analytics page result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$action_name = "action_name_example"; // string | 
$request = new \Swagger\Client\Model\OptimiseRequest(); // \Swagger\Client\Model\OptimiseRequest | 

try {
    $api_instance->optimise($store_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->optimise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **action_name** | **string**|  |
 **request** | [**\Swagger\Client\Model\OptimiseRequest**](../Model/\Swagger\Client\Model\OptimiseRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByCategory**
> optimiseByCategory($store_id, $catalog_category_id, $action_name, $request)

Optimise products's category

/!\\ WARNING /!\\ \\ This operation will reenable or disable products's category for every channel indicated in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$catalog_category_id = "catalog_category_id_example"; // string | The category identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 
$request = array(new string[]()); // string[] | The channel identifier list concerned by this optimisation

try {
    $api_instance->optimiseByCategory($store_id, $catalog_category_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->optimiseByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **catalog_category_id** | **string**| The category identifier concerned by this optimisation |
 **action_name** | **string**|  |
 **request** | **string[]**| The channel identifier list concerned by this optimisation | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByChannel**
> optimiseByChannel($store_id, $channel_id, $action_name)

Optimise products's category

/!\\ WARNING /!\\ \\ Apply the operation on every product on this channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$channel_id = "channel_id_example"; // string | The channel identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 

try {
    $api_instance->optimiseByChannel($store_id, $channel_id, $action_name);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->optimiseByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **channel_id** | **string**| The channel identifier concerned by this optimisation |
 **action_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByProduct**
> optimiseByProduct($store_id, $product_id, $action_name, $request)

Optimise products

/!\\ WARNING /!\\ \\ This operation will reenable or disable this product for every channel indicated in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$product_id = "product_id_example"; // string | The product identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 
$request = array(new string[]()); // string[] | The channel identifier list concerned by this optimisation

try {
    $api_instance->optimiseByProduct($store_id, $product_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->optimiseByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **product_id** | **string**| The product identifier concerned by this optimisation |
 **action_name** | **string**|  |
 **request** | **string[]**| The channel identifier list concerned by this optimisation | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runRule**
> runRule($store_id, $rule_id)

Run rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->runRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->runRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runRules**
> runRules($store_id)

Run all rules for this store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->runRules($store_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->runRules: ', $e->getMessage(), PHP_EOL;
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

# **saveReportFilter**
> saveReportFilter($store_id, $report_filter_id, $report_filter)

Save the report filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier
$report_filter = new \Swagger\Client\Model\SaveReportFilterRequest(); // \Swagger\Client\Model\SaveReportFilterRequest | 

try {
    $api_instance->saveReportFilter($store_id, $report_filter_id, $report_filter);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->saveReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |
 **report_filter** | [**\Swagger\Client\Model\SaveReportFilterRequest**](../Model/\Swagger\Client\Model\SaveReportFilterRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRule**
> updateRule($store_id, $rule_id, $request)

Update Rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserAnalyticsApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier
$request = new \Swagger\Client\Model\UpdateRuleRequest(); // \Swagger\Client\Model\UpdateRuleRequest | 

try {
    $api_instance->updateRule($store_id, $rule_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserAnalyticsApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |
 **request** | [**\Swagger\Client\Model\UpdateRuleRequest**](../Model/\Swagger\Client\Model\UpdateRuleRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


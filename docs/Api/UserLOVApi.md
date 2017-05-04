# Swagger\Client\UserLOVApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserListGroup**](UserLOVApi.md#getUserListGroup) | **GET** /v2/user/lov/groups/{listGroupName} | Get list of values related to this group name
[**getUserListGroupNames**](UserLOVApi.md#getUserListGroupNames) | **GET** /v2/user/lov/groups | Get list of group of list name
[**getUserListNames**](UserLOVApi.md#getUserListNames) | **GET** /v2/user/lov/ | Get all list names
[**getUserListOfValues**](UserLOVApi.md#getUserListOfValues) | **GET** /v2/user/lov/{listName} | Get the list of values related to this list name


# **getUserListGroup**
> \Swagger\Client\Model\BeezUPCommonLOVLink2[] getUserListGroup($list_group_name)

Get list of values related to this group name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\UserLOVApi();
$list_group_name = "list_group_name_example"; // string | The list group name your want to get

try {
    $result = $api_instance->getUserListGroup($list_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLOVApi->getUserListGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_group_name** | **string**| The list group name your want to get |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLOVLink2[]**](../Model/BeezUPCommonLOVLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserListGroupNames**
> \Swagger\Client\Model\BeezUPCommonLOVLink2[] getUserListGroupNames()

Get list of group of list name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\UserLOVApi();

try {
    $result = $api_instance->getUserListGroupNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLOVApi->getUserListGroupNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BeezUPCommonLOVLink2[]**](../Model/BeezUPCommonLOVLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserListNames**
> \Swagger\Client\Model\BeezUPCommonLOVLink2[] getUserListNames()

Get all list names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\UserLOVApi();

try {
    $result = $api_instance->getUserListNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLOVApi->getUserListNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BeezUPCommonLOVLink2[]**](../Model/BeezUPCommonLOVLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserListOfValues**
> \Swagger\Client\Model\BeezUPCommonListOfValueItem[] getUserListOfValues($list_name, $accept_language)

Get the list of values related to this list name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\UserLOVApi();
$list_name = "list_name_example"; // string | The list of value name your want to get
$accept_language = array("accept_language_example"); // string[] | Indicates that the client accepts the following languages.

try {
    $result = $api_instance->getUserListOfValues($list_name, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLOVApi->getUserListOfValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_name** | **string**| The list of value name your want to get |
 **accept_language** | [**string[]**](../Model/string.md)| Indicates that the client accepts the following languages. | [optional]

### Return type

[**\Swagger\Client\Model\BeezUPCommonListOfValueItem[]**](../Model/BeezUPCommonListOfValueItem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


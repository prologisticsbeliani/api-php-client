# Swagger\Client\GroupsApi

All URIs are relative to *https://api.beezup.com/v2/user/lov*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserListGroup**](GroupsApi.md#getUserListGroup) | **GET** /groups/{listGroupName} | Get list of values related to this group name
[**getUserListGroupNames**](GroupsApi.md#getUserListGroupNames) | **GET** /groups | Get list of group of list name


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

$api_instance = new Swagger\Client\Api\GroupsApi();
$list_group_name = "list_group_name_example"; // string | The list group name your want to get

try {
    $result = $api_instance->getUserListGroup($list_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getUserListGroup: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GroupsApi();

try {
    $result = $api_instance->getUserListGroupNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getUserListGroupNames: ', $e->getMessage(), PHP_EOL;
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


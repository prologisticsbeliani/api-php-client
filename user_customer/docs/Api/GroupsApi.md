# Swagger\Client\GroupsApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPublicListGroup**](GroupsApi.md#getPublicListGroup) | **GET** /v2/public/lov/groups/{listGroupName} | Get list of values related to this group name
[**getPublicListGroupNames**](GroupsApi.md#getPublicListGroupNames) | **GET** /v2/public/lov/groups | Get list of group of list name


# **getPublicListGroup**
> \Swagger\Client\Model\BeezUPCommonLOVLink2[] getPublicListGroup($list_group_name)

Get list of values related to this group name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GroupsApi();
$list_group_name = "list_group_name_example"; // string | The list group name your want to get

try {
    $result = $api_instance->getPublicListGroup($list_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getPublicListGroup: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicListGroupNames**
> \Swagger\Client\Model\BeezUPCommonLOVLink2[] getPublicListGroupNames()

Get list of group of list name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GroupsApi();

try {
    $result = $api_instance->getPublicListGroupNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getPublicListGroupNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BeezUPCommonLOVLink2[]**](../Model/BeezUPCommonLOVLink2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


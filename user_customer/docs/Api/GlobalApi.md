# Swagger\Client\GlobalApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogGetBeezUPColumns**](GlobalApi.md#catalogGetBeezUPColumns) | **GET** /beezupColumns | Get the BeezUP columns


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

$api_instance = new Swagger\Client\Api\GlobalApi();

try {
    $result = $api_instance->catalogGetBeezUPColumns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalApi->catalogGetBeezUPColumns: ', $e->getMessage(), PHP_EOL;
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


# Swagger\Client\PublicChannelsApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannels**](PublicChannelsApi.md#getChannels) | **GET** /BeezUP/public_channels/2.0/{countryIsoCode} | The channel list for one country
[**getChannelsByCountry**](PublicChannelsApi.md#getChannelsByCountry) | **GET** /BeezUP/public_channels/2.0/ | The channel list regrouped by country


# **getChannels**
> \Swagger\Client\Model\ChannelInfoList getChannels($country_iso_code, $accept_encoding)

The channel list for one country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicChannelsApi();
$country_iso_code = "country_iso_code_example"; // string | The country iso code alpha 3 based on this: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3#Decoding_table \\ To know which country are available you have to use the operation: GetChannelsByCountry
$accept_encoding = array("accept_encoding_example"); // string[] | Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size.

try {
    $result = $api_instance->getChannels($country_iso_code, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_iso_code** | **string**| The country iso code alpha 3 based on this: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3#Decoding_table \\ To know which country are available you have to use the operation: GetChannelsByCountry |
 **accept_encoding** | [**string[]**](../Model/string.md)| Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size. |

### Return type

[**\Swagger\Client\Model\ChannelInfoList**](../Model/ChannelInfoList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelsByCountry**
> map[string,string] getChannelsByCountry()

The channel list regrouped by country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicChannelsApi();

try {
    $result = $api_instance->getChannelsByCountry();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicChannelsApi->getChannelsByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,string]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


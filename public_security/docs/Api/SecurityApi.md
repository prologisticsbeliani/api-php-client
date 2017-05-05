# Swagger\Client\SecurityApi

All URIs are relative to *https://api.beezup.com/v2/public/security*

Method | HTTP request | Description
------------- | ------------- | -------------
[**login**](SecurityApi.md#login) | **POST** /login | Login
[**lostPassword**](SecurityApi.md#lostPassword) | **POST** /lostpassword | Lost password
[**register**](SecurityApi.md#register) | **POST** /register | User Registration


# **login**
> \Swagger\Client\Model\ApiCredentials login($request)

Login

User Login - The login will give your tokens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SecurityApi();
$request = new \Swagger\Client\Model\LoginRequest(); // \Swagger\Client\Model\LoginRequest | 

try {
    $result = $api_instance->login($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\LoginRequest**](../Model/\Swagger\Client\Model\LoginRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ApiCredentials**](../Model/ApiCredentials.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lostPassword**
> lostPassword($email)

Lost password

Lost password - Your password will be regenerated and sent to your email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SecurityApi();
$email = new \Swagger\Client\Model\BeezUPCommonEmail(); // \Swagger\Client\Model\BeezUPCommonEmail | Your email

try {
    $api_instance->lostPassword($email);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->lostPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**\Swagger\Client\Model\BeezUPCommonEmail**](../Model/\Swagger\Client\Model\BeezUPCommonEmail.md)| Your email |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> register($request)

User Registration

User Registration - Create a new user on BeezUP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SecurityApi();
$request = new \Swagger\Client\Model\RegisterRequest(); // \Swagger\Client\Model\RegisterRequest | 

try {
    $api_instance->register($request);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RegisterRequest**](../Model/\Swagger\Client\Model\RegisterRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


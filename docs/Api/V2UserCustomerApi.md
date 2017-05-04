# Swagger\Client\V2UserCustomerApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateUserAccount**](V2UserCustomerApi.md#activateUserAccount) | **POST** /v2/user/customer/account/activate | Activate the user account
[**changePassword**](V2UserCustomerApi.md#changePassword) | **POST** /v2/user/customer/account/changePassword | Change user password
[**createContract**](V2UserCustomerApi.md#createContract) | **POST** /v2/user/customer/contracts | Create a new contract
[**createStore**](V2UserCustomerApi.md#createStore) | **POST** /v2/user/customer/stores | Create a new store
[**deleteNextContract**](V2UserCustomerApi.md#deleteNextContract) | **DELETE** /v2/user/customer/contracts/next | Delete your next contract
[**deleteShare**](V2UserCustomerApi.md#deleteShare) | **DELETE** /v2/user/customer/stores/{storeId}/shares/{userId} | Delete a share to another user
[**deleteStore**](V2UserCustomerApi.md#deleteStore) | **DELETE** /v2/user/customer/stores/{storeId} | Delete a store
[**getBillingPeriods**](V2UserCustomerApi.md#getBillingPeriods) | **GET** /v2/user/customer/billingPeriods | Get billing periods conditions
[**getContracts**](V2UserCustomerApi.md#getContracts) | **GET** /v2/user/customer/contracts | Get contract list
[**getCreditCardInfo**](V2UserCustomerApi.md#getCreditCardInfo) | **GET** /v2/user/customer/account/creditCardInfo | Get credit card information
[**getFriendInfo**](V2UserCustomerApi.md#getFriendInfo) | **GET** /v2/user/customer/friends/{userId} | Get friend information
[**getInvoices**](V2UserCustomerApi.md#getInvoices) | **GET** /v2/user/customer/invoices | Get all your invoices
[**getOffer**](V2UserCustomerApi.md#getOffer) | **POST** /v2/user/customer/offers | Get offer pricing
[**getRights**](V2UserCustomerApi.md#getRights) | **POST** /v2/user/customer/stores/{storeId}/rights | Get store&#39;s rights
[**getShares**](V2UserCustomerApi.md#getShares) | **GET** /v2/user/customer/stores/{storeId}/shares | Get shares related to this store
[**getStandardOffers**](V2UserCustomerApi.md#getStandardOffers) | **GET** /v2/user/customer/offers | Get all standard offers
[**getStore**](V2UserCustomerApi.md#getStore) | **GET** /v2/user/customer/stores/{storeId} | Get store&#39;s information
[**getStoreAlerts**](V2UserCustomerApi.md#getStoreAlerts) | **GET** /v2/user/customer/stores/{storeId}/alerts | Get store&#39;s alerts
[**getStores**](V2UserCustomerApi.md#getStores) | **GET** /v2/user/customer/stores | Get store list
[**getUserAccountInfo**](V2UserCustomerApi.md#getUserAccountInfo) | **GET** /v2/user/customer/account | Get user account information
[**logout**](V2UserCustomerApi.md#logout) | **POST** /v2/user/customer/security/logout | Log out the current user from go2
[**reactivateCurrentContract**](V2UserCustomerApi.md#reactivateCurrentContract) | **POST** /v2/user/customer/contracts/current/reenableAutoRenewal | Reactivate your terminated contract.
[**resendEmailActivation**](V2UserCustomerApi.md#resendEmailActivation) | **POST** /v2/user/customer/account/resendEmailActivation | Resend email activation
[**saveCompanyInfo**](V2UserCustomerApi.md#saveCompanyInfo) | **PUT** /v2/user/customer/account/companyInfo | Change company information
[**saveCreditCardInfo**](V2UserCustomerApi.md#saveCreditCardInfo) | **PUT** /v2/user/customer/account/creditCardInfo | Save user credit card info
[**savePersonalInfo**](V2UserCustomerApi.md#savePersonalInfo) | **PUT** /v2/user/customer/account/personalInfo | Save user personal information
[**saveProfilePictureInfo**](V2UserCustomerApi.md#saveProfilePictureInfo) | **PUT** /v2/user/customer/account/profilePictureInfo | Change user picture information
[**saveStoreAlert**](V2UserCustomerApi.md#saveStoreAlert) | **PUT** /v2/user/customer/stores/{storeId}/alerts/{alertId} | Save store alert
[**share**](V2UserCustomerApi.md#share) | **POST** /v2/user/customer/stores/{storeId}/shares | Share a store to another user
[**terminateCurrentContract**](V2UserCustomerApi.md#terminateCurrentContract) | **POST** /v2/user/customer/contracts/current/disableAutoRenewal | Schedule termination of your current contract at the end of the commitment.
[**updateStore**](V2UserCustomerApi.md#updateStore) | **PATCH** /v2/user/customer/stores/{storeId} | Update some store&#39;s information.


# **activateUserAccount**
> activateUserAccount($email_activation_id)

Activate the user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$email_activation_id = "email_activation_id_example"; // string | The email activation id received by email.

try {
    $api_instance->activateUserAccount($email_activation_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->activateUserAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_activation_id** | **string**| The email activation id received by email. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changePassword**
> changePassword($request)

Change user password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\ChangePasswordRequest(); // \Swagger\Client\Model\ChangePasswordRequest | 

try {
    $api_instance->changePassword($request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ChangePasswordRequest**](../Model/\Swagger\Client\Model\ChangePasswordRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContract**
> \Swagger\Client\Model\BeezUPCommonInfoSummaries createContract($request)

Create a new contract

Now you are ready to create your contract. Before that, please ensure that you check the offer with the same request parameterts. /offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\CreateContract(); // \Swagger\Client\Model\CreateContract | 

try {
    $result = $api_instance->createContract($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->createContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateContract**](../Model/\Swagger\Client\Model\CreateContract.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonInfoSummaries**](../Model/BeezUPCommonInfoSummaries.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStore**
> \Swagger\Client\Model\LinksGetStoresLink createStore($request)

Create a new store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\CreateStoreRequest(); // \Swagger\Client\Model\CreateStoreRequest | 

try {
    $result = $api_instance->createStore($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->createStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateStoreRequest**](../Model/\Swagger\Client\Model\CreateStoreRequest.md)|  |

### Return type

[**\Swagger\Client\Model\LinksGetStoresLink**](../Model/LinksGetStoresLink.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNextContract**
> deleteNextContract()

Delete your next contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $api_instance->deleteNextContract();
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->deleteNextContract: ', $e->getMessage(), PHP_EOL;
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

# **deleteShare**
> deleteShare($store_id, $user_id)

Delete a share to another user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier
$user_id = "user_id_example"; // string | The friend user id

try {
    $api_instance->deleteShare($store_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->deleteShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **user_id** | **string**| The friend user id |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStore**
> deleteStore($store_id)

Delete a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->deleteStore($store_id);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->deleteStore: ', $e->getMessage(), PHP_EOL;
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

# **getBillingPeriods**
> \Swagger\Client\Model\BillingPeriods getBillingPeriods()

Get billing periods conditions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $result = $api_instance->getBillingPeriods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getBillingPeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BillingPeriods**](../Model/BillingPeriods.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContracts**
> \Swagger\Client\Model\Contracts getContracts()

Get contract list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $result = $api_instance->getContracts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Contracts**](../Model/Contracts.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditCardInfo**
> \Swagger\Client\Model\CreditCardInfoResponse getCreditCardInfo()

Get credit card information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $result = $api_instance->getCreditCardInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getCreditCardInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CreditCardInfoResponse**](../Model/CreditCardInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFriendInfo**
> \Swagger\Client\Model\UserFriendInfo getFriendInfo($user_id)

Get friend information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$user_id = "user_id_example"; // string | Your friend user id

try {
    $result = $api_instance->getFriendInfo($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getFriendInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Your friend user id |

### Return type

[**\Swagger\Client\Model\UserFriendInfo**](../Model/UserFriendInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \Swagger\Client\Model\Invoices getInvoices()

Get all your invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $result = $api_instance->getInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Invoices**](../Model/Invoices.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOffer**
> \Swagger\Client\Model\Offer getOffer($request)

Get offer pricing

Get the offer pricing then you can create your contract with the same request parameters. /v2/user/customer/contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\OfferRequest(); // \Swagger\Client\Model\OfferRequest | 

try {
    $result = $api_instance->getOffer($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\OfferRequest**](../Model/\Swagger\Client\Model\OfferRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRights**
> \Swagger\Client\Model\FunctionalityRightInfo[] getRights($store_id, $functionality_code_list)

Get store's rights

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier
$functionality_code_list = array(new string[]()); // string[] | The functionality code list you want to check

try {
    $result = $api_instance->getRights($store_id, $functionality_code_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **functionality_code_list** | **string[]**| The functionality code list you want to check |

### Return type

[**\Swagger\Client\Model\FunctionalityRightInfo[]**](../Model/FunctionalityRightInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShares**
> \Swagger\Client\Model\StoreShares getShares($store_id)

Get shares related to this store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getShares($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\StoreShares**](../Model/StoreShares.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStandardOffers**
> \Swagger\Client\Model\StandardOffers getStandardOffers()

Get all standard offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $result = $api_instance->getStandardOffers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getStandardOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StandardOffers**](../Model/StandardOffers.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStore**
> \Swagger\Client\Model\StoreHeader getStore($store_id)

Get store's information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getStore($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\StoreHeader**](../Model/StoreHeader.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreAlerts**
> \Swagger\Client\Model\StoreAlerts getStoreAlerts($store_id)

Get store's alerts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getStoreAlerts($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getStoreAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\StoreAlerts**](../Model/StoreAlerts.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStores**
> \Swagger\Client\Model\Stores getStores()

Get store list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $result = $api_instance->getStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Stores**](../Model/Stores.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAccountInfo**
> \Swagger\Client\Model\AccountInfo getUserAccountInfo()

Get user account information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $result = $api_instance->getUserAccountInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->getUserAccountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AccountInfo**](../Model/AccountInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout()

Log out the current user from go2

Log out the current user from go2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $api_instance->logout();
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->logout: ', $e->getMessage(), PHP_EOL;
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

# **reactivateCurrentContract**
> reactivateCurrentContract()

Reactivate your terminated contract.

By calling this operation you can re-enable the auto renewal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $api_instance->reactivateCurrentContract();
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->reactivateCurrentContract: ', $e->getMessage(), PHP_EOL;
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

# **resendEmailActivation**
> resendEmailActivation()

Resend email activation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();

try {
    $api_instance->resendEmailActivation();
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->resendEmailActivation: ', $e->getMessage(), PHP_EOL;
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

# **saveCompanyInfo**
> saveCompanyInfo($request)

Change company information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\CompanyInfo(); // \Swagger\Client\Model\CompanyInfo | 

try {
    $api_instance->saveCompanyInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->saveCompanyInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CompanyInfo**](../Model/\Swagger\Client\Model\CompanyInfo.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveCreditCardInfo**
> saveCreditCardInfo($request)

Save user credit card info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\CreditCardInfo(); // \Swagger\Client\Model\CreditCardInfo | Credit card info

try {
    $api_instance->saveCreditCardInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->saveCreditCardInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreditCardInfo**](../Model/\Swagger\Client\Model\CreditCardInfo.md)| Credit card info |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **savePersonalInfo**
> savePersonalInfo($request)

Save user personal information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\PersonalInfo(); // \Swagger\Client\Model\PersonalInfo | 

try {
    $api_instance->savePersonalInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->savePersonalInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PersonalInfo**](../Model/\Swagger\Client\Model\PersonalInfo.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveProfilePictureInfo**
> saveProfilePictureInfo($request)

Change user picture information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\ProfilePictureInfo(); // \Swagger\Client\Model\ProfilePictureInfo | 

try {
    $api_instance->saveProfilePictureInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->saveProfilePictureInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProfilePictureInfo**](../Model/\Swagger\Client\Model\ProfilePictureInfo.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveStoreAlert**
> saveStoreAlert($store_id, $alert_id, $request)

Save store alert

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier
$alert_id = 56; // int | 
$request = array(new SaveStoreAlertRequest()); // \Swagger\Client\Model\SaveStoreAlertRequest[] | 

try {
    $api_instance->saveStoreAlert($store_id, $alert_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->saveStoreAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **alert_id** | **int**|  |
 **request** | [**\Swagger\Client\Model\SaveStoreAlertRequest[]**](../Model/SaveStoreAlertRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **share**
> share($store_id, $email)

Share a store to another user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier
$email = new \Swagger\Client\Model\FriendEmail(); // \Swagger\Client\Model\FriendEmail | Your friend's email

try {
    $api_instance->share($store_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->share: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **email** | [**\Swagger\Client\Model\FriendEmail**](../Model/\Swagger\Client\Model\FriendEmail.md)| Your friend&#39;s email |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **terminateCurrentContract**
> terminateCurrentContract($request)

Schedule termination of your current contract at the end of the commitment.

By default your contract are automatically renew. By calling this operation you can disable the auto renewal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$request = new \Swagger\Client\Model\TerminateContract(); // \Swagger\Client\Model\TerminateContract | Indicate the termination reason

try {
    $api_instance->terminateCurrentContract($request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->terminateCurrentContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TerminateContract**](../Model/\Swagger\Client\Model\TerminateContract.md)| Indicate the termination reason |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStore**
> updateStore($store_id, $request)

Update some store's information.

Update some store's information. FYI, you cannot change the country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\V2UserCustomerApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\UpdateStoreRequest(); // \Swagger\Client\Model\UpdateStoreRequest | 

try {
    $api_instance->updateStore($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling V2UserCustomerApi->updateStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\UpdateStoreRequest**](../Model/\Swagger\Client\Model\UpdateStoreRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


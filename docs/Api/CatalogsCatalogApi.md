# Swagger\Client\CatalogsCatalogApi

All URIs are relative to *https://api.beezup.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogChangeCatalogColumnUserName**](CatalogsCatalogApi.md#catalogChangeCatalogColumnUserName) | **POST** /user/catalogs/{storeId}/catalogColumns/{columnId}/rename | Change Catalog Column User Name
[**catalogChangeCustomColumnExpression**](CatalogsCatalogApi.md#catalogChangeCustomColumnExpression) | **PUT** /user/catalogs/{storeId}/customColumns/{columnId}/expression | Change custom column expression
[**catalogChangeCustomColumnUserName**](CatalogsCatalogApi.md#catalogChangeCustomColumnUserName) | **POST** /user/catalogs/{storeId}/customColumns/{columnId}/rename | Change Custom Column User Name
[**catalogComputeExpression**](CatalogsCatalogApi.md#catalogComputeExpression) | **POST** /user/catalogs/{storeId}/customColumns/computeExpression | Compute the expression for this catalog.
[**catalogDeleteCustomColumn**](CatalogsCatalogApi.md#catalogDeleteCustomColumn) | **DELETE** /user/catalogs/{storeId}/customColumns/{columnId} | Delete custom column
[**catalogGetCatalogColumns**](CatalogsCatalogApi.md#catalogGetCatalogColumns) | **GET** /user/catalogs/{storeId}/catalogColumns | Get catalog column list
[**catalogGetCategories**](CatalogsCatalogApi.md#catalogGetCategories) | **GET** /user/catalogs/{storeId}/categories | Get category list
[**catalogGetCustomColumnExpression**](CatalogsCatalogApi.md#catalogGetCustomColumnExpression) | **GET** /user/catalogs/{storeId}/customColumns/{columnId}/expression | Get the encrypted custom column expression
[**catalogGetCustomColumns**](CatalogsCatalogApi.md#catalogGetCustomColumns) | **GET** /user/catalogs/{storeId}/customColumns | Get custom column list
[**catalogGetProductByProductId**](CatalogsCatalogApi.md#catalogGetProductByProductId) | **GET** /user/catalogs/{storeId}/products/{productId} | Get product by ProductId
[**catalogGetProductBySku**](CatalogsCatalogApi.md#catalogGetProductBySku) | **GET** /user/catalogs/{storeId}/products | Get product by Sku
[**catalogGetProducts**](CatalogsCatalogApi.md#catalogGetProducts) | **POST** /user/catalogs/{storeId}/products/list | Get product list
[**catalogGetRandomProducts**](CatalogsCatalogApi.md#catalogGetRandomProducts) | **GET** /user/catalogs/{storeId}/products/random | Get random product list
[**catalogSaveCustomColumn**](CatalogsCatalogApi.md#catalogSaveCustomColumn) | **PUT** /user/catalogs/{storeId}/customColumns/{columnId} | Create or replace a custom column
[**catalogStoreIndex**](CatalogsCatalogApi.md#catalogStoreIndex) | **GET** /user/catalogs/{storeId} | Get the index of the catalog API for this store
[**importationGetManualUpdateLastInputConfig**](CatalogsCatalogApi.md#importationGetManualUpdateLastInputConfig) | **GET** /user/catalogs/{storeId}/inputConfiguration | Get the last input configuration


# **catalogChangeCatalogColumnUserName**
> catalogChangeCatalogColumnUserName($store_id, $column_id, $request)

Change Catalog Column User Name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The catalog column identifier
$request = new \Swagger\Client\Model\ChangeUserColumnNameRequest(); // \Swagger\Client\Model\ChangeUserColumnNameRequest | 

try {
    $apiInstance->catalogChangeCatalogColumnUserName($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogChangeCatalogColumnUserName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The catalog column identifier |
 **request** | [**\Swagger\Client\Model\ChangeUserColumnNameRequest**](../Model/ChangeUserColumnNameRequest.md)|  |

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeCustomColumnExpressionRequest(); // \Swagger\Client\Model\ChangeCustomColumnExpressionRequest | 

try {
    $apiInstance->catalogChangeCustomColumnExpression($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogChangeCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeCustomColumnExpressionRequest**](../Model/ChangeCustomColumnExpressionRequest.md)|  |

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeUserColumnNameRequest(); // \Swagger\Client\Model\ChangeUserColumnNameRequest | 

try {
    $apiInstance->catalogChangeCustomColumnUserName($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogChangeCustomColumnUserName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeUserColumnNameRequest**](../Model/ChangeUserColumnNameRequest.md)|  |

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ComputeExpressionRequest(); // \Swagger\Client\Model\ComputeExpressionRequest | 

try {
    $result = $apiInstance->catalogComputeExpression($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogComputeExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ComputeExpressionRequest**](../Model/ComputeExpressionRequest.md)|  |

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $apiInstance->catalogDeleteCustomColumn($store_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogDeleteCustomColumn: ', $e->getMessage(), PHP_EOL;
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

# **catalogGetCatalogColumns**
> \Swagger\Client\Model\CatalogColumnList catalogGetCatalogColumns($store_id)

Get catalog column list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $apiInstance->catalogGetCatalogColumns($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\CatalogColumnList**](../Model/CatalogColumnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetCategories**
> \Swagger\Client\Model\CategoryList catalogGetCategories($store_id, $accept_encoding)

Get category list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.

try {
    $result = $apiInstance->catalogGetCategories($store_id, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |

### Return type

[**\Swagger\Client\Model\CategoryList**](../Model/CategoryList.md)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $apiInstance->catalogGetCustomColumnExpression($store_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\CustomColumnList catalogGetCustomColumns($store_id)

Get custom column list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $apiInstance->catalogGetCustomColumns($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetCustomColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\CustomColumnList**](../Model/CustomColumnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetProductByProductId**
> \Swagger\Client\Model\Product catalogGetProductByProductId($store_id, $product_id)

Get product by ProductId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$product_id = "product_id_example"; // string | The product identifier you want to get

try {
    $result = $apiInstance->catalogGetProductByProductId($store_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetProductByProductId: ', $e->getMessage(), PHP_EOL;
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

# **catalogGetProductBySku**
> \Swagger\Client\Model\Product catalogGetProductBySku($store_id, $sku)

Get product by Sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$sku = "sku_example"; // string | The product sku you want to get

try {
    $result = $apiInstance->catalogGetProductBySku($store_id, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetProductBySku: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **sku** | **string**| The product sku you want to get |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetProducts**
> \Swagger\Client\Model\ProductList catalogGetProducts($store_id, $request)

Get product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\GetProductsRequest(); // \Swagger\Client\Model\GetProductsRequest | 

try {
    $result = $apiInstance->catalogGetProducts($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\GetProductsRequest**](../Model/GetProductsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductList**](../Model/ProductList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetRandomProducts**
> \Swagger\Client\Model\RandomProductList catalogGetRandomProducts($store_id)

Get random product list

We will return 10 products randomly selected with all product values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $apiInstance->catalogGetRandomProducts($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogGetRandomProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\RandomProductList**](../Model/RandomProductList.md)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\CreateCustomColumnRequest(); // \Swagger\Client\Model\CreateCustomColumnRequest | 

try {
    $apiInstance->catalogSaveCustomColumn($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogSaveCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\CreateCustomColumnRequest**](../Model/CreateCustomColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogStoreIndex**
> \Swagger\Client\Model\CatalogStoreIndex catalogStoreIndex($store_id)

Get the index of the catalog API for this store

The operation will give you all the operations you will be able to do on this store for this API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $apiInstance->catalogStoreIndex($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->catalogStoreIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\CatalogStoreIndex**](../Model/CatalogStoreIndex.md)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CatalogsCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $apiInstance->importationGetManualUpdateLastInputConfig($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsCatalogApi->importationGetManualUpdateLastInputConfig: ', $e->getMessage(), PHP_EOL;
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


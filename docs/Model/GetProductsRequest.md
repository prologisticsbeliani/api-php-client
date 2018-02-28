# GetProductsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page_number** | [**\Swagger\Client\Model\BeezUPCommonPageNumber**](BeezUPCommonPageNumber.md) |  | 
**page_size** | [**\Swagger\Client\Model\BeezUPCommonPageSize**](BeezUPCommonPageSize.md) |  | 
**column_id_list** | [**\Swagger\Client\Model\BeezUPCommonCatalogColumnId[]**](BeezUPCommonCatalogColumnId.md) |  | 
**exists** | **bool** | Search for existing products or not. If null you will received both. | [optional] 
**product_id_list** | [**\Swagger\Client\Model\BeezUPCommonProductId[]**](BeezUPCommonProductId.md) | Filter with a list of product identifier | [optional] 
**sku** | **string** | Search for products containing this SKU (merchant product dentifier). | [optional] 
**title** | **string** | Search for products containing this title | [optional] 
**category_path** | [**\Swagger\Client\Model\BeezUPCommonCatalogCategoryPath**](BeezUPCommonCatalogCategoryPath.md) |  | [optional] 
**orderby_catalog_column_id** | [**\Swagger\Client\Model\BeezUPCommonCatalogColumnId**](BeezUPCommonCatalogColumnId.md) |  | [optional] 
**without_sub_categories** | **bool** | Do not retrieve sub categories. By default, this value is set to false | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



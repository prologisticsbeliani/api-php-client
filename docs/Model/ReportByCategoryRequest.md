# ReportByCategoryRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | [**\Swagger\Client\Model\BeezUPCommonChannelId**](BeezUPCommonChannelId.md) |  | [optional] 
**period_type** | [**\Swagger\Client\Model\ReportFilterPeriodType**](ReportFilterPeriodType.md) |  | 
**begin_period_utc_date** | [**\DateTime**](\DateTime.md) | The begin date period you want to get the report. It&#39;s required only in case of custom period type ! | [optional] 
**end_period_utc_date** | [**\DateTime**](\DateTime.md) | The end date period you want to get the report. It&#39;s required only in case of custom period type ! | [optional] 
**category_filter** | [**\Swagger\Client\Model\BeezUPCommonCatalogCategoryFilter**](BeezUPCommonCatalogCategoryFilter.md) |  | [optional] 
**performance_indicator_filters** | [**\Swagger\Client\Model\PerformanceIndicatorFilter[]**](PerformanceIndicatorFilter.md) |  | [optional] 
**advanced_filters** | [**\Swagger\Client\Model\ReportAdvancedFilters**](ReportAdvancedFilters.md) |  | 
**order_by** | [**\Swagger\Client\Model\PerformanceIndicatorType**](PerformanceIndicatorType.md) |  | [optional] 
**order_by_direction** | [**\Swagger\Client\Model\OrderByDirection**](OrderByDirection.md) |  | [optional] 
**page_size** | [**\Swagger\Client\Model\BeezUPCommonPageSize**](BeezUPCommonPageSize.md) |  | [optional] 
**page_number** | [**\Swagger\Client\Model\BeezUPCommonPageNumber**](BeezUPCommonPageNumber.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



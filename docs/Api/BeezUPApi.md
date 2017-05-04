# Swagger\Client\BeezUPApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateUserAccount**](BeezUPApi.md#activateUserAccount) | **POST** /v2/user/customer/account/activate | Activate the user account
[**autoConfigureAutoImportInterval**](BeezUPApi.md#autoConfigureAutoImportInterval) | **POST** /v2/user/catalogs/{storeId}/autoImport/scheduling/interval | Configure Auto Import Interval
[**autoDeleteAutoImport**](BeezUPApi.md#autoDeleteAutoImport) | **DELETE** /v2/user/catalogs/{storeId}/autoImport | Delete Auto Import
[**autoGetAutoImportConfiguration**](BeezUPApi.md#autoGetAutoImportConfiguration) | **GET** /v2/user/catalogs/{storeId}/autoImport | Get the auto import configuration
[**autoPauseAutoImport**](BeezUPApi.md#autoPauseAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/pause | Pause Auto Import
[**autoResumeAutoImport**](BeezUPApi.md#autoResumeAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/resume | Resume Auto Import
[**autoScheduleAutoImport**](BeezUPApi.md#autoScheduleAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/scheduling/schedules | Configure Auto Import Schedules
[**autoStartAutoImport**](BeezUPApi.md#autoStartAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport/start | Start Auto Import Manually
[**catalogChangeCatalogColumnUserName**](BeezUPApi.md#catalogChangeCatalogColumnUserName) | **POST** /v2/user/catalogs/{storeId}/catalogColumns/{columnId}/rename | Change Catalog Column User Name
[**catalogChangeCustomColumnExpression**](BeezUPApi.md#catalogChangeCustomColumnExpression) | **PUT** /v2/user/catalogs/{storeId}/customColumns/{columnId}/expression | Change custom column expression
[**catalogChangeCustomColumnUserName**](BeezUPApi.md#catalogChangeCustomColumnUserName) | **POST** /v2/user/catalogs/{storeId}/customColumns/{columnId}/rename | Change Custom Column User Name
[**catalogComputeExpression**](BeezUPApi.md#catalogComputeExpression) | **POST** /v2/user/catalogs/{storeId}/customColumns/computeExpression | Compute the expression for this catalog.
[**catalogDeleteCustomColumn**](BeezUPApi.md#catalogDeleteCustomColumn) | **DELETE** /v2/user/catalogs/{storeId}/customColumns/{columnId} | Delete custom column
[**catalogGetBeezUPColumns**](BeezUPApi.md#catalogGetBeezUPColumns) | **GET** /v2/user/catalogs/beezupColumns | Get the BeezUP columns
[**catalogGetCatalogColumns**](BeezUPApi.md#catalogGetCatalogColumns) | **GET** /v2/user/catalogs/{storeId}/catalogColumns | Get catalog column list
[**catalogGetCategories**](BeezUPApi.md#catalogGetCategories) | **GET** /v2/user/catalogs/{storeId}/categories | Get category list
[**catalogGetCustomColumnExpression**](BeezUPApi.md#catalogGetCustomColumnExpression) | **GET** /v2/user/catalogs/{storeId}/customColumns/{columnId}/expression | Get the encrypted custom column expression
[**catalogGetCustomColumns**](BeezUPApi.md#catalogGetCustomColumns) | **GET** /v2/user/catalogs/{storeId}/customColumns | Get custom column list
[**catalogGetProduct**](BeezUPApi.md#catalogGetProduct) | **GET** /v2/user/catalogs/{storeId}/products/{productId} | Get product
[**catalogGetProducts**](BeezUPApi.md#catalogGetProducts) | **POST** /v2/user/catalogs/{storeId}/products | Get product list
[**catalogGetRandomProducts**](BeezUPApi.md#catalogGetRandomProducts) | **GET** /v2/user/catalogs/{storeId}/products/random | Get random product list
[**catalogSaveCustomColumn**](BeezUPApi.md#catalogSaveCustomColumn) | **PUT** /v2/user/catalogs/{storeId}/customColumns/{columnId} | Create or replace a custom column
[**changeOrder**](BeezUPApi.md#changeOrder) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType} | Change your marketplace Order Information (accept, ship, etc.)
[**changeOrderList**](BeezUPApi.md#changeOrderList) | **POST** /v2/user/marketplaces/orders/batches/changeOrders/{changeOrderType} | Send a batch of operations to change your marketplace Order information (accept, ship, etc.)
[**changePassword**](BeezUPApi.md#changePassword) | **POST** /v2/user/customer/account/changePassword | Change user password
[**clearMerchantOrderInfo**](BeezUPApi.md#clearMerchantOrderInfo) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo | Clear an Order&#39;s merchant information
[**clearMerchantOrderInfoList**](BeezUPApi.md#clearMerchantOrderInfoList) | **POST** /v2/user/marketplaces/orders/batches/clearMerchantOrderInfos | Send a batch of operations to clear an Order&#39;s merchant information
[**configureAutomaticTransitions**](BeezUPApi.md#configureAutomaticTransitions) | **POST** /v2/user/marketplaces/orders/automaticTransitions | Configure new or existing automatic Order status transition
[**configureChannelCatalogCostSettings**](BeezUPApi.md#configureChannelCatalogCostSettings) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/settings/cost | Disable a channel catalog
[**configureChannelCatalogExclusionFilters**](BeezUPApi.md#configureChannelCatalogExclusionFilters) | **PUT** /v2/user/channelCatalogs/{channelCatalogId}/exclusionFilters | Configure channel catalog exclusion filters
[**configureChannelCatalogGeneralSettings**](BeezUPApi.md#configureChannelCatalogGeneralSettings) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/settings/general | Disable a channel catalog
[**createChannelCatalog**](BeezUPApi.md#createChannelCatalog) | **POST** /v2/user/channelCatalogs/ | Create a new channel catalog
[**createContract**](BeezUPApi.md#createContract) | **POST** /v2/user/customer/contracts | Create a new contract
[**createRule**](BeezUPApi.md#createRule) | **POST** /v2/user/analytics/{storeId}/rules | Rule creation
[**createStore**](BeezUPApi.md#createStore) | **POST** /v2/user/customer/stores | Create a new store
[**deleteChannelCatalog**](BeezUPApi.md#deleteChannelCatalog) | **DELETE** /v2/user/channelCatalogs/{channelCatalogId} | Delete the channel catalog
[**deleteChannelCatalogProductValueOverride**](BeezUPApi.md#deleteChannelCatalogProductValueOverride) | **DELETE** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides/{channelColumnId} | Delete a specific channel catalog product value override
[**deleteNextContract**](BeezUPApi.md#deleteNextContract) | **DELETE** /v2/user/customer/contracts/next | Delete your next contract
[**deleteReportFilter**](BeezUPApi.md#deleteReportFilter) | **DELETE** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Delete the report filter
[**deleteRule**](BeezUPApi.md#deleteRule) | **DELETE** /v2/user/analytics/{storeId}/rules/{ruleId} | Delete Rule
[**deleteShare**](BeezUPApi.md#deleteShare) | **DELETE** /v2/user/customer/stores/{storeId}/shares/{userId} | Delete a share to another user
[**deleteStore**](BeezUPApi.md#deleteStore) | **DELETE** /v2/user/customer/stores/{storeId} | Delete a store
[**disableChannelCatalog**](BeezUPApi.md#disableChannelCatalog) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/disable | Disable a channel catalog
[**disableChannelCatalogProduct**](BeezUPApi.md#disableChannelCatalogProduct) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/disable | Disable channel catalog product
[**disableRule**](BeezUPApi.md#disableRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/disable | Disable rule
[**enableChannelCatalog**](BeezUPApi.md#enableChannelCatalog) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/enable | Enable a channel catalog
[**enableRule**](BeezUPApi.md#enableRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/enable | Enable rule
[**exportOrders**](BeezUPApi.md#exportOrders) | **POST** /v2/user/marketplaces/orders/exportations | Request a new Order report exportation to be generated
[**exportStoreReportByCategory**](BeezUPApi.md#exportStoreReportByCategory) | **POST** /v2/user/analytics/{storeId}/reports/bycategory/export | Export the report by category
[**exportStoreReportByChannel**](BeezUPApi.md#exportStoreReportByChannel) | **POST** /v2/user/analytics/{storeId}/reports/bychannel/export | Export the report by channel
[**exportStoreReportByProduct**](BeezUPApi.md#exportStoreReportByProduct) | **POST** /v2/user/analytics/{storeId}/reports/byproduct/export | Export the report by product
[**getAutomaticTransitions**](BeezUPApi.md#getAutomaticTransitions) | **GET** /v2/user/marketplaces/orders/automaticTransitions | Get list of configured automatic Order status transitions
[**getBillingPeriods**](BeezUPApi.md#getBillingPeriods) | **GET** /v2/user/customer/billingPeriods | Get billing periods conditions
[**getChannelCatalog**](BeezUPApi.md#getChannelCatalog) | **GET** /v2/user/channelCatalogs/{channelCatalogId} | Get the channel catalog information
[**getChannelCatalogCategories**](BeezUPApi.md#getChannelCatalogCategories) | **GET** /v2/user/channelCatalogs/{channelCatalogId}/categoryMappings | Get channel catalog categories
[**getChannelCatalogExclusionFilterOperators**](BeezUPApi.md#getChannelCatalogExclusionFilterOperators) | **GET** /v2/user/channelCatalogs/exclusionFilterOperators | Get channel catalog exclusion filter operators
[**getChannelCatalogMarketplaceProperties**](BeezUPApi.md#getChannelCatalogMarketplaceProperties) | **GET** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/properties | Get the marketplace properties for a channel catalog
[**getChannelCatalogMarketplaceSettings**](BeezUPApi.md#getChannelCatalogMarketplaceSettings) | **GET** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Get the marketplace settings for a channel catalog
[**getChannelCatalogProductInfo**](BeezUPApi.md#getChannelCatalogProductInfo) | **GET** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId} | Get channel catalog product information
[**getChannelCatalogProductInfoList**](BeezUPApi.md#getChannelCatalogProductInfoList) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/products | Get channel catalog product information list
[**getChannelCatalogs**](BeezUPApi.md#getChannelCatalogs) | **GET** /v2/user/channelCatalogs/ | List all your current channel catalogs
[**getChannelCategories**](BeezUPApi.md#getChannelCategories) | **GET** /v2/user/channels/{channelId}/categories | Get channel categories
[**getChannelColumns**](BeezUPApi.md#getChannelColumns) | **POST** /v2/user/channels/{channelId}/columns | Get channel columns
[**getChannelInfo**](BeezUPApi.md#getChannelInfo) | **GET** /v2/user/channels/{channelId} | Get channel information
[**getContracts**](BeezUPApi.md#getContracts) | **GET** /v2/user/customer/contracts | Get contract list
[**getCreditCardInfo**](BeezUPApi.md#getCreditCardInfo) | **GET** /v2/user/customer/account/creditCardInfo | Get credit card information
[**getCurrentChannels**](BeezUPApi.md#getCurrentChannels) | **GET** /v2/user/channels/ | List all available channel for this store
[**getFriendInfo**](BeezUPApi.md#getFriendInfo) | **GET** /v2/user/customer/friends/{userId} | Get friend information
[**getInvoices**](BeezUPApi.md#getInvoices) | **GET** /v2/user/customer/invoices | Get all your invoices
[**getMarketplaceAccountStores**](BeezUPApi.md#getMarketplaceAccountStores) | **GET** /v2/user/marketplaces/channelcatalogs/ | Get  you marketplace channel catalog list
[**getMarketplaceAccountsSynchronization**](BeezUPApi.md#getMarketplaceAccountsSynchronization) | **GET** /v2/user/marketplaces/orders/status | Get current synchronization status between your marketplaces and BeezUP accounts
[**getOffer**](BeezUPApi.md#getOffer) | **POST** /v2/user/customer/offers | Get offer pricing
[**getOrder**](BeezUPApi.md#getOrder) | **GET** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId} | Get full Order and Order Item(s) properties
[**getOrderExportations**](BeezUPApi.md#getOrderExportations) | **GET** /v2/user/marketplaces/orders/exportations | Get a paginated list of Order report exportations
[**getOrderHistory**](BeezUPApi.md#getOrderHistory) | **GET** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history | Get an Order&#39;s harvest and change history
[**getOrderListFull**](BeezUPApi.md#getOrderListFull) | **POST** /v2/user/marketplaces/orders/list/full | Get a paginated list of all Orders with all Order and Order Item(s) properties
[**getOrderListLight**](BeezUPApi.md#getOrderListLight) | **POST** /v2/user/marketplaces/orders/list/light | Get a paginated list of all Orders without details
[**getPublications**](BeezUPApi.md#getPublications) | **GET** /v2/user/marketplaces/channelcatalogs/publications/{marketplaceTechnicalCode}/{accountId}/history | Fetch the publication history for an account, sorted by descending start date
[**getReportFilter**](BeezUPApi.md#getReportFilter) | **GET** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Get the report filter description
[**getReportFilters**](BeezUPApi.md#getReportFilters) | **GET** /v2/user/analytics/{storeId}/reports/filters | Get report filter list for the given store
[**getRights**](BeezUPApi.md#getRights) | **POST** /v2/user/customer/stores/{storeId}/rights | Get store&#39;s rights
[**getRule**](BeezUPApi.md#getRule) | **GET** /v2/user/analytics/{storeId}/rules/{ruleId} | Gets the rule
[**getRules**](BeezUPApi.md#getRules) | **GET** /v2/user/analytics/{storeId}/rules | Gets the list of rules for a given store
[**getRulesExecutions**](BeezUPApi.md#getRulesExecutions) | **GET** /v2/user/analytics/{storeId}/rules/executions | Get the rules execution history
[**getShares**](BeezUPApi.md#getShares) | **GET** /v2/user/customer/stores/{storeId}/shares | Get shares related to this store
[**getStandardOffers**](BeezUPApi.md#getStandardOffers) | **GET** /v2/user/customer/offers | Get all standard offers
[**getStore**](BeezUPApi.md#getStore) | **GET** /v2/user/customer/stores/{storeId} | Get store&#39;s information
[**getStoreAlerts**](BeezUPApi.md#getStoreAlerts) | **GET** /v2/user/customer/stores/{storeId}/alerts | Get store&#39;s alerts
[**getStoreReportByCategory**](BeezUPApi.md#getStoreReportByCategory) | **POST** /v2/user/analytics/{storeId}/reports/bycategory | Get the report by category
[**getStoreReportByChannel**](BeezUPApi.md#getStoreReportByChannel) | **POST** /v2/user/analytics/{storeId}/reports/bychannel | Get the report by channel
[**getStoreReportByDay**](BeezUPApi.md#getStoreReportByDay) | **POST** /v2/user/analytics/{storeId}/reports/byday | Get the report by day
[**getStoreReportByDayExport**](BeezUPApi.md#getStoreReportByDayExport) | **POST** /v2/user/analytics/{storeId}/reports/byday/export | Get the report by day
[**getStoreReportByProduct**](BeezUPApi.md#getStoreReportByProduct) | **POST** /v2/user/analytics/{storeId}/reports/byproduct | Get the report by product
[**getStoreTrackedClicks**](BeezUPApi.md#getStoreTrackedClicks) | **GET** /v2/user/analytics/{storeId}/tracking/clicks | Get the latest clicks tracked
[**getStoreTrackedExternalOrders**](BeezUPApi.md#getStoreTrackedExternalOrders) | **GET** /v2/user/analytics/{storeId}/tracking/externalorders | Get the latest external orders tracked
[**getStoreTrackedOrders**](BeezUPApi.md#getStoreTrackedOrders) | **GET** /v2/user/analytics/{storeId}/tracking/orders | Get the latest orders tracked
[**getStoreTrackingStatus**](BeezUPApi.md#getStoreTrackingStatus) | **GET** /v2/user/analytics/{storeId}/tracking/status | Get store tracking synchronization status
[**getStores**](BeezUPApi.md#getStores) | **GET** /v2/user/customer/stores | Get store list
[**getTrackingStatus**](BeezUPApi.md#getTrackingStatus) | **GET** /v2/user/analytics/tracking/status | Display the synchronization status of the clicks and orders
[**getUserAccountInfo**](BeezUPApi.md#getUserAccountInfo) | **GET** /v2/user/customer/account | Get user account information
[**getUserListGroup**](BeezUPApi.md#getUserListGroup) | **GET** /v2/user/lov/groups/{listGroupName} | Get list of values related to this group name
[**getUserListGroupNames**](BeezUPApi.md#getUserListGroupNames) | **GET** /v2/user/lov/groups | Get list of group of list name
[**getUserListNames**](BeezUPApi.md#getUserListNames) | **GET** /v2/user/lov/ | Get all list names
[**getUserListOfValues**](BeezUPApi.md#getUserListOfValues) | **GET** /v2/user/lov/{listName} | Get the list of values related to this list name
[**harvestAll**](BeezUPApi.md#harvestAll) | **POST** /v2/user/marketplaces/orders/harvest | Send harvest request to all your marketplaces
[**harvestOrder**](BeezUPApi.md#harvestOrder) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest | Send harvest request for a single Order
[**importationActivateAutoImport**](BeezUPApi.md#importationActivateAutoImport) | **POST** /v2/user/catalogs/{storeId}/autoImport | Activate the auto importation of the last successful manual catalog importation.
[**importationCancel**](BeezUPApi.md#importationCancel) | **DELETE** /v2/user/catalogs/{storeId}/importations/{executionId} | Cancel importation
[**importationCommit**](BeezUPApi.md#importationCommit) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/commit | Commit Importation
[**importationCommitColumns**](BeezUPApi.md#importationCommitColumns) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/commitColumns | Commit columns
[**importationConfigureCatalogColumn**](BeezUPApi.md#importationConfigureCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId} | Configure catalog column
[**importationConfigureRemainingCatalogColumns**](BeezUPApi.md#importationConfigureRemainingCatalogColumns) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/configureRemainingCatalogColumns | Configure remaining catalog columns
[**importationDeleteCustomColumn**](BeezUPApi.md#importationDeleteCustomColumn) | **DELETE** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Delete Custom Column
[**importationGetCustomColumnExpression**](BeezUPApi.md#importationGetCustomColumnExpression) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/expression | Get the encrypted custom column expression in this importation
[**importationGetCustomColumns**](BeezUPApi.md#importationGetCustomColumns) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns | Get custom columns currently place in this importation
[**importationGetDetectedCatalogColumns**](BeezUPApi.md#importationGetDetectedCatalogColumns) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns | Get detected catalog columns during this importation.
[**importationGetImportationMonitoring**](BeezUPApi.md#importationGetImportationMonitoring) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId} | Get the importation status
[**importationGetManualUpdateLastInputConfig**](BeezUPApi.md#importationGetManualUpdateLastInputConfig) | **GET** /v2/user/catalogs/{storeId}/inputConfiguration | Get the last input configuration
[**importationGetProductSample**](BeezUPApi.md#importationGetProductSample) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex} | Get the product sample related to this importation with all columns (catalog and custom)
[**importationGetProductSampleCustomColumnValue**](BeezUPApi.md#importationGetProductSampleCustomColumnValue) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex}/customColumns/{columnId} | Get product sample custom column value related to this importation.
[**importationGetReportings**](BeezUPApi.md#importationGetReportings) | **GET** /v2/user/catalogs/{storeId}/importations | Get the latest catalog importation reporting
[**importationIgnoreColumn**](BeezUPApi.md#importationIgnoreColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/ignore | Ignore Column
[**importationMapCatalogColumn**](BeezUPApi.md#importationMapCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/map | Map catalog column to a BeezUP column
[**importationMapCustomColumn**](BeezUPApi.md#importationMapCustomColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/map | Map custom column to a BeezUP column
[**importationReattendColumn**](BeezUPApi.md#importationReattendColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/reattend | Reattend Column
[**importationSaveCustomColumn**](BeezUPApi.md#importationSaveCustomColumn) | **PUT** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Create or replace a custom column
[**importationStartManualUpdate**](BeezUPApi.md#importationStartManualUpdate) | **POST** /v2/user/catalogs/{storeId}/importations | Start Manual Import
[**importationTechnicalProgression**](BeezUPApi.md#importationTechnicalProgression) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/technicalProgression | Get technical progression
[**importationUnmapCatalogColumn**](BeezUPApi.md#importationUnmapCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/unmap | Unmap catalog column
[**importationUnmapCustomColumn**](BeezUPApi.md#importationUnmapCustomColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/unmap | Unmap custom column
[**logout**](BeezUPApi.md#logout) | **POST** /v2/user/customer/security/logout | Log out the current user from go2
[**mapChannelCatalogCategory**](BeezUPApi.md#mapChannelCatalogCategory) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/categoryMappings/map | Map channel catalog category
[**mapChannelCatalogColumns**](BeezUPApi.md#mapChannelCatalogColumns) | **PUT** /v2/user/channelCatalogs/{channelCatalogId}/columnMappings | Configure channel catalog column mappings
[**moveDownRule**](BeezUPApi.md#moveDownRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/movedown | Move the rule down
[**moveUpRule**](BeezUPApi.md#moveUpRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/moveup | Move the rule up
[**optimise**](BeezUPApi.md#optimise) | **POST** /v2/user/analytics/{storeId}/optimisations/{actionName} | Optimise products
[**optimiseByCategory**](BeezUPApi.md#optimiseByCategory) | **POST** /v2/user/analytics/{storeId}/optimisations/bycategory/{catalogCategoryId}/{actionName} | Optimise products&#39;s category
[**optimiseByChannel**](BeezUPApi.md#optimiseByChannel) | **POST** /v2/user/analytics/{storeId}/optimisations/bychannel/{channelId}/{actionName} | Optimise products&#39;s category
[**optimiseByProduct**](BeezUPApi.md#optimiseByProduct) | **POST** /v2/user/analytics/{storeId}/optimisations/byproduct/{productId}/{actionName} | Optimise products
[**overrideChannelCatalogProductOverrides**](BeezUPApi.md#overrideChannelCatalogProductOverrides) | **PUT** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides | Override channel catalog product values
[**reactivateCurrentContract**](BeezUPApi.md#reactivateCurrentContract) | **POST** /v2/user/customer/contracts/current/reenableAutoRenewal | Reactivate your terminated contract.
[**reenableChannelCatalogProduct**](BeezUPApi.md#reenableChannelCatalogProduct) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/reenable | Reenable channel catalog product
[**resendEmailActivation**](BeezUPApi.md#resendEmailActivation) | **POST** /v2/user/customer/account/resendEmailActivation | Resend email activation
[**runRule**](BeezUPApi.md#runRule) | **POST** /v2/user/analytics/{storeId}/rules/{ruleId}/run | Run rule
[**runRules**](BeezUPApi.md#runRules) | **POST** /v2/user/analytics/{storeId}/rules/run | Run all rules for this store
[**saveCompanyInfo**](BeezUPApi.md#saveCompanyInfo) | **PUT** /v2/user/customer/account/companyInfo | Change company information
[**saveCreditCardInfo**](BeezUPApi.md#saveCreditCardInfo) | **PUT** /v2/user/customer/account/creditCardInfo | Save user credit card info
[**savePersonalInfo**](BeezUPApi.md#savePersonalInfo) | **PUT** /v2/user/customer/account/personalInfo | Save user personal information
[**saveProfilePictureInfo**](BeezUPApi.md#saveProfilePictureInfo) | **PUT** /v2/user/customer/account/profilePictureInfo | Change user picture information
[**saveReportFilter**](BeezUPApi.md#saveReportFilter) | **PUT** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Save the report filter
[**saveStoreAlert**](BeezUPApi.md#saveStoreAlert) | **PUT** /v2/user/customer/stores/{storeId}/alerts/{alertId} | Save store alert
[**setChannelCatalogMarketplaceSettings**](BeezUPApi.md#setChannelCatalogMarketplaceSettings) | **POST** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Save new marketplace settings for a channel catalog
[**setMerchantOrderInfo**](BeezUPApi.md#setMerchantOrderInfo) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo | Set an Order&#39;s merchant information
[**setMerchantOrderInfoList**](BeezUPApi.md#setMerchantOrderInfoList) | **POST** /v2/user/marketplaces/orders/batches/setMerchantOrderInfos | Send a batch of operations to set an Order&#39;s merchant information
[**share**](BeezUPApi.md#share) | **POST** /v2/user/customer/stores/{storeId}/shares | Share a store to another user
[**terminateCurrentContract**](BeezUPApi.md#terminateCurrentContract) | **POST** /v2/user/customer/contracts/current/disableAutoRenewal | Schedule termination of your current contract at the end of the commitment.
[**unmapChannelCatalogCategory**](BeezUPApi.md#unmapChannelCatalogCategory) | **POST** /v2/user/channelCatalogs/{channelCatalogId}/categoryMappings/unmap | Unmap channel catalog category
[**updateRule**](BeezUPApi.md#updateRule) | **PATCH** /v2/user/analytics/{storeId}/rules/{ruleId} | Update Rule
[**updateStore**](BeezUPApi.md#updateStore) | **PATCH** /v2/user/customer/stores/{storeId} | Update some store&#39;s information.


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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$email_activation_id = "email_activation_id_example"; // string | The email activation id received by email.

try {
    $api_instance->activateUserAccount($email_activation_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->activateUserAccount: ', $e->getMessage(), PHP_EOL;
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

# **autoConfigureAutoImportInterval**
> autoConfigureAutoImportInterval($store_id, $request)

Configure Auto Import Interval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ConfigureAutoImportIntervalRequest(); // \Swagger\Client\Model\ConfigureAutoImportIntervalRequest | 

try {
    $api_instance->autoConfigureAutoImportInterval($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->autoConfigureAutoImportInterval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ConfigureAutoImportIntervalRequest**](../Model/\Swagger\Client\Model\ConfigureAutoImportIntervalRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoDeleteAutoImport**
> autoDeleteAutoImport($store_id)

Delete Auto Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->autoDeleteAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->autoDeleteAutoImport: ', $e->getMessage(), PHP_EOL;
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

# **autoGetAutoImportConfiguration**
> \Swagger\Client\Model\AutoImportConfiguration autoGetAutoImportConfiguration($store_id)

Get the auto import configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->autoGetAutoImportConfiguration($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->autoGetAutoImportConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\AutoImportConfiguration**](../Model/AutoImportConfiguration.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPauseAutoImport**
> autoPauseAutoImport($store_id)

Pause Auto Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->autoPauseAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->autoPauseAutoImport: ', $e->getMessage(), PHP_EOL;
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

# **autoResumeAutoImport**
> autoResumeAutoImport($store_id)

Resume Auto Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->autoResumeAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->autoResumeAutoImport: ', $e->getMessage(), PHP_EOL;
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

# **autoScheduleAutoImport**
> autoScheduleAutoImport($store_id, $request)

Configure Auto Import Schedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ScheduleAutoImportRequest(); // \Swagger\Client\Model\ScheduleAutoImportRequest | 

try {
    $api_instance->autoScheduleAutoImport($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->autoScheduleAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ScheduleAutoImportRequest**](../Model/\Swagger\Client\Model\ScheduleAutoImportRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoStartAutoImport**
> \Swagger\Client\Model\BeezUPCommonLink2[] autoStartAutoImport($store_id)

Start Auto Import Manually

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->autoStartAutoImport($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->autoStartAutoImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogChangeCatalogColumnUserName**
> catalogChangeCatalogColumnUserName($store_id, $column_id, $request)

Change Catalog Column User Name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The catalog column identifier
$request = new \Swagger\Client\Model\ChangeUserColumnNameRequest(); // \Swagger\Client\Model\ChangeUserColumnNameRequest | 

try {
    $api_instance->catalogChangeCatalogColumnUserName($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogChangeCatalogColumnUserName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The catalog column identifier |
 **request** | [**\Swagger\Client\Model\ChangeUserColumnNameRequest**](../Model/\Swagger\Client\Model\ChangeUserColumnNameRequest.md)|  |

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeCustomColumnExpressionRequest(); // \Swagger\Client\Model\ChangeCustomColumnExpressionRequest | 

try {
    $api_instance->catalogChangeCustomColumnExpression($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogChangeCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeCustomColumnExpressionRequest**](../Model/\Swagger\Client\Model\ChangeCustomColumnExpressionRequest.md)|  |

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeUserColumnNameRequest(); // \Swagger\Client\Model\ChangeUserColumnNameRequest | 

try {
    $api_instance->catalogChangeCustomColumnUserName($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogChangeCustomColumnUserName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeUserColumnNameRequest**](../Model/\Swagger\Client\Model\ChangeUserColumnNameRequest.md)|  |

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ComputeExpressionRequest(); // \Swagger\Client\Model\ComputeExpressionRequest | 

try {
    $result = $api_instance->catalogComputeExpression($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogComputeExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ComputeExpressionRequest**](../Model/\Swagger\Client\Model\ComputeExpressionRequest.md)|  |

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->catalogDeleteCustomColumn($store_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogDeleteCustomColumn: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->catalogGetBeezUPColumns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetBeezUPColumns: ', $e->getMessage(), PHP_EOL;
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

# **catalogGetCatalogColumns**
> \Swagger\Client\Model\CatalogColumns catalogGetCatalogColumns($store_id)

Get catalog column list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->catalogGetCatalogColumns($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\CatalogColumns**](../Model/CatalogColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetCategories**
> \Swagger\Client\Model\Categories catalogGetCategories($store_id, $accept_encoding)

Get category list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.

try {
    $result = $api_instance->catalogGetCategories($store_id, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |

### Return type

[**\Swagger\Client\Model\Categories**](../Model/Categories.md)

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->catalogGetCustomColumnExpression($store_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\CustomColumns catalogGetCustomColumns($store_id)

Get custom column list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->catalogGetCustomColumns($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetCustomColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\CustomColumns**](../Model/CustomColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetProduct**
> \Swagger\Client\Model\Product catalogGetProduct($store_id, $product_id)

Get product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$product_id = "product_id_example"; // string | The product identifier you want to get

try {
    $result = $api_instance->catalogGetProduct($store_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetProduct: ', $e->getMessage(), PHP_EOL;
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

# **catalogGetProducts**
> \Swagger\Client\Model\Products catalogGetProducts($store_id, $request)

Get product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\GetProductsRequest(); // \Swagger\Client\Model\GetProductsRequest | 

try {
    $result = $api_instance->catalogGetProducts($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\GetProductsRequest**](../Model/\Swagger\Client\Model\GetProductsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Products**](../Model/Products.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGetRandomProducts**
> \Swagger\Client\Model\Products catalogGetRandomProducts($store_id, $count)

Get random product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The count of random product you want to get

try {
    $result = $api_instance->catalogGetRandomProducts($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogGetRandomProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The count of random product you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\Products**](../Model/Products.md)

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\CreateCustomColumnRequest(); // \Swagger\Client\Model\CreateCustomColumnRequest | 

try {
    $api_instance->catalogSaveCustomColumn($store_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->catalogSaveCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\CreateCustomColumnRequest**](../Model/\Swagger\Client\Model\CreateCustomColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeOrder**
> changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $if_match, $test_mode)

Change your marketplace Order Information (accept, ship, etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \Swagger\Client\Model\ChangeOrderRequest(); // \Swagger\Client\Model\ChangeOrderRequest | 
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested Order, to ensure that you are making a change on the lastest version of the order.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $api_instance->changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->changeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |
 **change_order_type** | **string**| The Order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\Swagger\Client\Model\ChangeOrderRequest**](../Model/\Swagger\Client\Model\ChangeOrderRequest.md)|  |
 **if_match** | **string**| ETag value to identify the last known version of requested Order, to ensure that you are making a change on the lastest version of the order.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeOrderList**
> \Swagger\Client\Model\BatchOrderOperationResponse changeOrderList($change_order_type, $user_name, $request, $test_mode)

Send a batch of operations to change your marketplace Order information (accept, ship, etc.)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$change_order_type = "change_order_type_example"; // string | The Order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \Swagger\Client\Model\ChangeOrderListRequest(); // \Swagger\Client\Model\ChangeOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $api_instance->changeOrderList($change_order_type, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->changeOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_order_type** | **string**| The Order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\Swagger\Client\Model\ChangeOrderListRequest**](../Model/\Swagger\Client\Model\ChangeOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\ChangePasswordRequest(); // \Swagger\Client\Model\ChangePasswordRequest | 

try {
    $api_instance->changePassword($request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->changePassword: ', $e->getMessage(), PHP_EOL;
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

# **clearMerchantOrderInfo**
> clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id)

Clear an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $api_instance->clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->clearMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfoList**
> \Swagger\Client\Model\BatchOrderOperationResponse clearMerchantOrderInfoList($request)

Send a batch of operations to clear an Order's merchant information

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\ClearMerchantOrderInfoListRequest(); // \Swagger\Client\Model\ClearMerchantOrderInfoListRequest | 

try {
    $result = $api_instance->clearMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->clearMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ClearMerchantOrderInfoListRequest**](../Model/\Swagger\Client\Model\ClearMerchantOrderInfoListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureAutomaticTransitions**
> configureAutomaticTransitions($request)

Configure new or existing automatic Order status transition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\SaveAutomaticTransitionRequest(); // \Swagger\Client\Model\SaveAutomaticTransitionRequest | 

try {
    $api_instance->configureAutomaticTransitions($request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->configureAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SaveAutomaticTransitionRequest**](../Model/\Swagger\Client\Model\SaveAutomaticTransitionRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureChannelCatalogCostSettings**
> configureChannelCatalogCostSettings($channel_catalog_id, $request)

Disable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\CostSettings(); // \Swagger\Client\Model\CostSettings | 

try {
    $api_instance->configureChannelCatalogCostSettings($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->configureChannelCatalogCostSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\CostSettings**](../Model/\Swagger\Client\Model\CostSettings.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureChannelCatalogExclusionFilters**
> configureChannelCatalogExclusionFilters($channel_catalog_id, $request)

Configure channel catalog exclusion filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\ExclusionFilters(); // \Swagger\Client\Model\ExclusionFilters | 

try {
    $api_instance->configureChannelCatalogExclusionFilters($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->configureChannelCatalogExclusionFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\ExclusionFilters**](../Model/\Swagger\Client\Model\ExclusionFilters.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureChannelCatalogGeneralSettings**
> configureChannelCatalogGeneralSettings($channel_catalog_id, $request)

Disable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\GeneralSettings(); // \Swagger\Client\Model\GeneralSettings | 

try {
    $api_instance->configureChannelCatalogGeneralSettings($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->configureChannelCatalogGeneralSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\GeneralSettings**](../Model/\Swagger\Client\Model\GeneralSettings.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChannelCatalog**
> \Swagger\Client\Model\BeezUPCommonLink2[] createChannelCatalog($request)

Create a new channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\CreateChannelCatalogRequest(); // \Swagger\Client\Model\CreateChannelCatalogRequest | 

try {
    $result = $api_instance->createChannelCatalog($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->createChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateChannelCatalogRequest**](../Model/\Swagger\Client\Model\CreateChannelCatalogRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\CreateContract(); // \Swagger\Client\Model\CreateContract | 

try {
    $result = $api_instance->createContract($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->createContract: ', $e->getMessage(), PHP_EOL;
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

# **createRule**
> createRule($store_id, $request)

Rule creation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\CreateRuleRequest(); // \Swagger\Client\Model\CreateRuleRequest | 

try {
    $api_instance->createRule($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->createRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\CreateRuleRequest**](../Model/\Swagger\Client\Model\CreateRuleRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\CreateStoreRequest(); // \Swagger\Client\Model\CreateStoreRequest | 

try {
    $result = $api_instance->createStore($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->createStore: ', $e->getMessage(), PHP_EOL;
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

# **deleteChannelCatalog**
> deleteChannelCatalog()

Delete the channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $api_instance->deleteChannelCatalog();
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->deleteChannelCatalog: ', $e->getMessage(), PHP_EOL;
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

# **deleteChannelCatalogProductValueOverride**
> deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id)

Delete a specific channel catalog product value override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier
$channel_column_id = "8a76f06a-fefc-4c0d-bcfe-b210f1482977"; // string | The channel column identifier

try {
    $api_instance->deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->deleteChannelCatalogProductValueOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **channel_column_id** | **string**| The channel column identifier |

### Return type

void (empty response body)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $api_instance->deleteNextContract();
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->deleteNextContract: ', $e->getMessage(), PHP_EOL;
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

# **deleteReportFilter**
> deleteReportFilter($store_id, $report_filter_id)

Delete the report filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier

try {
    $api_instance->deleteReportFilter($store_id, $report_filter_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->deleteReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRule**
> deleteRule($store_id, $rule_id)

Delete Rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->deleteRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$user_id = "user_id_example"; // string | The friend user id

try {
    $api_instance->deleteShare($store_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->deleteShare: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->deleteStore($store_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->deleteStore: ', $e->getMessage(), PHP_EOL;
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

# **disableChannelCatalog**
> disableChannelCatalog($channel_catalog_id)

Disable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $api_instance->disableChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->disableChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableChannelCatalogProduct**
> disableChannelCatalogProduct($channel_catalog_id, $product_id)

Disable channel catalog product

By default a all your catalog products are exposed to the channel. You can disable a product by using this operation. /!\\ In case of massive optimisation we recommand you to use the analytics api

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier

try {
    $api_instance->disableChannelCatalogProduct($channel_catalog_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->disableChannelCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableRule**
> disableRule($store_id, $rule_id)

Disable rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->disableRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->disableRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableChannelCatalog**
> enableChannelCatalog($channel_catalog_id)

Enable a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $api_instance->enableChannelCatalog($channel_catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->enableChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableRule**
> enableRule($store_id, $rule_id)

Enable rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->enableRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->enableRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportOrders**
> exportOrders($format, $request)

Request a new Order report exportation to be generated

A new file will be generated containing a summary of all the Orders matching the requested filter settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$format = "csv"; // string | The type of the file to export
$request = new \Swagger\Client\Model\ExportOrderListRequest(); // \Swagger\Client\Model\ExportOrderListRequest | 

try {
    $api_instance->exportOrders($format, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->exportOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| The type of the file to export | [default to csv]
 **request** | [**\Swagger\Client\Model\ExportOrderListRequest**](../Model/\Swagger\Client\Model\ExportOrderListRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByCategory**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByCategory($store_id, $format, $request)

Export the report by category

Export the report by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByCategoryRequest(); // \Swagger\Client\Model\ReportByCategoryRequest | 

try {
    $result = $api_instance->exportStoreReportByCategory($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->exportStoreReportByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByCategoryRequest**](../Model/\Swagger\Client\Model\ReportByCategoryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByChannel**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByChannel($store_id, $format, $request)

Export the report by channel

Export the report by channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByChannelRequest(); // \Swagger\Client\Model\ReportByChannelRequest | 

try {
    $result = $api_instance->exportStoreReportByChannel($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->exportStoreReportByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByChannelRequest**](../Model/\Swagger\Client\Model\ReportByChannelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByProduct**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByProduct($store_id, $format, $request)

Export the report by product

Export the report by product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByProductRequest(); // \Swagger\Client\Model\ReportByProductRequest | 

try {
    $result = $api_instance->exportStoreReportByProduct($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->exportStoreReportByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByProductRequest**](../Model/\Swagger\Client\Model\ReportByProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutomaticTransitions**
> \Swagger\Client\Model\AutomaticTransitionInfos getAutomaticTransitions()

Get list of configured automatic Order status transitions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getAutomaticTransitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AutomaticTransitionInfos**](../Model/AutomaticTransitionInfos.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getBillingPeriods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getBillingPeriods: ', $e->getMessage(), PHP_EOL;
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

# **getChannelCatalog**
> \Swagger\Client\Model\ChannelCatalog getChannelCatalog($channel_catalog_id)

Get the channel catalog information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $result = $api_instance->getChannelCatalog($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalog**](../Model/ChannelCatalog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogCategories**
> \Swagger\Client\Model\ChannelCatalogCategoryMappings getChannelCatalogCategories($channel_catalog_id)

Get channel catalog categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier

try {
    $result = $api_instance->getChannelCatalogCategories($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalogCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalogCategoryMappings**](../Model/ChannelCatalogCategoryMappings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogExclusionFilterOperators**
> \Swagger\Client\Model\ExclusionFilterOperator[] getChannelCatalogExclusionFilterOperators()

Get channel catalog exclusion filter operators

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getChannelCatalogExclusionFilterOperators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalogExclusionFilterOperators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ExclusionFilterOperator[]**](../Model/ExclusionFilterOperator.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogMarketplaceProperties**
> \Swagger\Client\Model\ChannelCatalogMarketplaceProperties getChannelCatalogMarketplaceProperties($channel_catalog_id)

Get the marketplace properties for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | 

try {
    $result = $api_instance->getChannelCatalogMarketplaceProperties($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalogMarketplaceProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ChannelCatalogMarketplaceProperties**](../Model/ChannelCatalogMarketplaceProperties.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogMarketplaceSettings**
> \Swagger\Client\Model\ChannelCatalogMarketplaceSettings getChannelCatalogMarketplaceSettings($channel_catalog_id)

Get the marketplace settings for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query (required)

try {
    $result = $api_instance->getChannelCatalogMarketplaceSettings($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query (required) |

### Return type

[**\Swagger\Client\Model\ChannelCatalogMarketplaceSettings**](../Model/ChannelCatalogMarketplaceSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductInfo**
> \Swagger\Client\Model\ChannelCatalogProductInfo getChannelCatalogProductInfo($channel_catalog_id, $product_id)

Get channel catalog product information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier

try {
    $result = $api_instance->getChannelCatalogProductInfo($channel_catalog_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalogProductInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductInfo**](../Model/ChannelCatalogProductInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductInfoList**
> \Swagger\Client\Model\ChannelCatalogProductInfoList getChannelCatalogProductInfoList($channel_catalog_id, $request)

Get channel catalog product information list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest(); // \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest | The channel catalog product list filter

try {
    $result = $api_instance->getChannelCatalogProductInfoList($channel_catalog_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalogProductInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest**](../Model/\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest.md)| The channel catalog product list filter | [optional]

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductInfoList**](../Model/ChannelCatalogProductInfoList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogs**
> \Swagger\Client\Model\ChannelCatalogList getChannelCatalogs($store_id)

List all your current channel catalogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "04730364-9826-4ff3-92e4-51fccd02bf10"; // string | The store identifier

try {
    $result = $api_instance->getChannelCatalogs($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCatalogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store identifier | [optional]

### Return type

[**\Swagger\Client\Model\ChannelCatalogList**](../Model/ChannelCatalogList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCategories**
> \Swagger\Client\Model\ChannelRootCategory getChannelCategories($channel_id, $accept_encoding)

Get channel categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_id = "2dc136a7-0d3d-4cc9-a825-a28a42c53e28"; // string | The channel identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.

try {
    $result = $api_instance->getChannelCategories($channel_id, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |

### Return type

[**\Swagger\Client\Model\ChannelRootCategory**](../Model/ChannelRootCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelColumns**
> \Swagger\Client\Model\ChannelColumn[] getChannelColumns($channel_id, $accept_encoding, $request)

Get channel columns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_id = "2dc136a7-0d3d-4cc9-a825-a28a42c53e28"; // string | The channel identifier
$accept_encoding = array("accept_encoding_example"); // string[] | Indicates that the client accepts that the response will be compressed to reduce traffic size.
$request = array(new BeezUPCommonChannelColumnId()); // \Swagger\Client\Model\BeezUPCommonChannelColumnId[] | Allow you to filter the channel column identifier list your want to get

try {
    $result = $api_instance->getChannelColumns($channel_id, $accept_encoding, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |
 **accept_encoding** | [**string[]**](../Model/string.md)| Indicates that the client accepts that the response will be compressed to reduce traffic size. |
 **request** | [**\Swagger\Client\Model\BeezUPCommonChannelColumnId[]**](../Model/BeezUPCommonChannelColumnId.md)| Allow you to filter the channel column identifier list your want to get | [optional]

### Return type

[**\Swagger\Client\Model\ChannelColumn[]**](../Model/ChannelColumn.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelInfo**
> \Swagger\Client\Model\ChannelInfo getChannelInfo($channel_id)

Get channel information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_id = "2dc136a7-0d3d-4cc9-a825-a28a42c53e28"; // string | The channel identifier

try {
    $result = $api_instance->getChannelInfo($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getChannelInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| The channel identifier |

### Return type

[**\Swagger\Client\Model\ChannelInfo**](../Model/ChannelInfo.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getContracts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getContracts: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getCreditCardInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getCreditCardInfo: ', $e->getMessage(), PHP_EOL;
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

# **getCurrentChannels**
> \Swagger\Client\Model\ChannelHeader[] getCurrentChannels($store_id)

List all available channel for this store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "04730364-9826-4ff3-92e4-51fccd02bf10"; // string | The store identifier

try {
    $result = $api_instance->getCurrentChannels($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getCurrentChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store identifier |

### Return type

[**\Swagger\Client\Model\ChannelHeader[]**](../Model/ChannelHeader.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$user_id = "user_id_example"; // string | Your friend user id

try {
    $result = $api_instance->getFriendInfo($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getFriendInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getInvoices: ', $e->getMessage(), PHP_EOL;
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

# **getMarketplaceAccountStores**
> \Swagger\Client\Model\MarketplaceChannelCatalogList getMarketplaceAccountStores()

Get  you marketplace channel catalog list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getMarketplaceAccountStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getMarketplaceAccountStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MarketplaceChannelCatalogList**](../Model/MarketplaceChannelCatalogList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketplaceAccountsSynchronization**
> \Swagger\Client\Model\AccountSynchronizations getMarketplaceAccountsSynchronization()

Get current synchronization status between your marketplaces and BeezUP accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getMarketplaceAccountsSynchronization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getMarketplaceAccountsSynchronization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AccountSynchronizations**](../Model/AccountSynchronizations.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\OfferRequest(); // \Swagger\Client\Model\OfferRequest | 

try {
    $result = $api_instance->getOffer($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getOffer: ', $e->getMessage(), PHP_EOL;
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

# **getOrder**
> \Swagger\Client\Model\Order getOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match)

Get full Order and Order Item(s) properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested Order\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $api_instance->getOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested Order\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderExportations**
> \Swagger\Client\Model\OrderExportations getOrderExportations($page_number, $page_size)

Get a paginated list of Order report exportations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$page_number = 1; // int | The page number you want to get
$page_size = 25; // int | The count of Order report exportations you want to get

try {
    $result = $api_instance->getOrderExportations($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getOrderExportations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| The page number you want to get |
 **page_size** | **int**| The count of Order report exportations you want to get |

### Return type

[**\Swagger\Client\Model\OrderExportations**](../Model/OrderExportations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderHistory**
> \Swagger\Client\Model\OrderHistory getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id)

Get an Order's harvest and change history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $result = $api_instance->getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |

### Return type

[**\Swagger\Client\Model\OrderHistory**](../Model/OrderHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderListFull**
> \Swagger\Client\Model\OrderListFull getOrderListFull($accept_encoding, $request)

Get a paginated list of all Orders with all Order and Order Item(s) properties

The purpose of this operation is to reduce the amount of request to the API.\\ \\ Previous implmentation of this feature only returned a partial (light) version of the Orders. The purpose of this API is to reduce the number of incoming requests by returning the complete (full) Order and Order Item(s) properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$accept_encoding = array("accept_encoding_example"); // string[] | Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size
$request = new \Swagger\Client\Model\OrderListRequest(); // \Swagger\Client\Model\OrderListRequest | 

try {
    $result = $api_instance->getOrderListFull($accept_encoding, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getOrderListFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_encoding** | [**string[]**](../Model/string.md)| Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size |
 **request** | [**\Swagger\Client\Model\OrderListRequest**](../Model/\Swagger\Client\Model\OrderListRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderListFull**](../Model/OrderListFull.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderListLight**
> \Swagger\Client\Model\OrderListLight getOrderListLight($request)

Get a paginated list of all Orders without details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\OrderListRequest(); // \Swagger\Client\Model\OrderListRequest | 

try {
    $result = $api_instance->getOrderListLight($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getOrderListLight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\OrderListRequest**](../Model/\Swagger\Client\Model\OrderListRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderListLight**](../Model/OrderListLight.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublications**
> \Swagger\Client\Model\AccountPublications getPublications($marketplace_technical_code, $account_id, $channel_catalog_id, $count, $publication_types)

Fetch the publication history for an account, sorted by descending start date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$marketplace_technical_code = "marketplace_technical_code_example"; // string | Marketplace Technical Code to query (required)
$account_id = 56; // int | Account Id to query (required)
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id by which to filter (optional)
$count = 10; // int | Amount of entries to fetch (optional, default set to 10)
$publication_types = array("publication_types_example"); // string[] | Publication types by which to filter (optional)

try {
    $result = $api_instance->getPublications($marketplace_technical_code, $account_id, $channel_catalog_id, $count, $publication_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getPublications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| Marketplace Technical Code to query (required) |
 **account_id** | **int**| Account Id to query (required) |
 **channel_catalog_id** | **string**| Channel Catalog Id by which to filter (optional) | [optional]
 **count** | **int**| Amount of entries to fetch (optional, default set to 10) | [optional] [default to 10]
 **publication_types** | [**string[]**](../Model/string.md)| Publication types by which to filter (optional) | [optional]

### Return type

[**\Swagger\Client\Model\AccountPublications**](../Model/AccountPublications.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportFilter**
> \Swagger\Client\Model\ReportFilter getReportFilter($store_id, $report_filter_id)

Get the report filter description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier

try {
    $result = $api_instance->getReportFilter($store_id, $report_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |

### Return type

[**\Swagger\Client\Model\ReportFilter**](../Model/ReportFilter.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportFilters**
> \Swagger\Client\Model\ReportFilters getReportFilters($store_id)

Get report filter list for the given store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getReportFilters($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getReportFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\ReportFilters**](../Model/ReportFilters.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$functionality_code_list = array(new string[]()); // string[] | The functionality code list you want to check

try {
    $result = $api_instance->getRights($store_id, $functionality_code_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getRights: ', $e->getMessage(), PHP_EOL;
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

# **getRule**
> \Swagger\Client\Model\Rule getRule($store_id, $rule_id)

Gets the rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $result = $api_instance->getRule($store_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

[**\Swagger\Client\Model\Rule**](../Model/Rule.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRules**
> \Swagger\Client\Model\Rules getRules($store_id)

Gets the list of rules for a given store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getRules($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\Rules**](../Model/Rules.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRulesExecutions**
> \Swagger\Client\Model\RuleExecutionReportings getRulesExecutions($store_id, $page_number, $page_size)

Get the rules execution history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$page_number = 1; // int | The page to retrieve
$page_size = 10; // int | The count of rule history to retrieve

try {
    $result = $api_instance->getRulesExecutions($store_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getRulesExecutions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **page_number** | **int**| The page to retrieve | [default to 1]
 **page_size** | **int**| The count of rule history to retrieve | [default to 10]

### Return type

[**\Swagger\Client\Model\RuleExecutionReportings**](../Model/RuleExecutionReportings.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getShares($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getShares: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getStandardOffers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStandardOffers: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getStore($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStore: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getStoreAlerts($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreAlerts: ', $e->getMessage(), PHP_EOL;
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

# **getStoreReportByCategory**
> \Swagger\Client\Model\ReportByCategoryResponse getStoreReportByCategory($store_id, $request)

Get the report by category

Get the report by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByCategoryRequest(); // \Swagger\Client\Model\ReportByCategoryRequest | 

try {
    $result = $api_instance->getStoreReportByCategory($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreReportByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByCategoryRequest**](../Model/\Swagger\Client\Model\ReportByCategoryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByCategoryResponse**](../Model/ReportByCategoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByChannel**
> \Swagger\Client\Model\ReportByChannelResponse getStoreReportByChannel($store_id, $request)

Get the report by channel

Get the report by channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByChannelRequest(); // \Swagger\Client\Model\ReportByChannelRequest | 

try {
    $result = $api_instance->getStoreReportByChannel($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreReportByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByChannelRequest**](../Model/\Swagger\Client\Model\ReportByChannelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByChannelResponse**](../Model/ReportByChannelResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByDay**
> \Swagger\Client\Model\ReportByDayResponse getStoreReportByDay($store_id, $request)

Get the report by day

Get the report by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByDayRequest(); // \Swagger\Client\Model\ReportByDayRequest | 

try {
    $result = $api_instance->getStoreReportByDay($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreReportByDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByDayRequest**](../Model/\Swagger\Client\Model\ReportByDayRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByDayResponse**](../Model/ReportByDayResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByDayExport**
> \Swagger\Client\Model\BeezUPCommonLink3 getStoreReportByDayExport($store_id, $format, $request)

Get the report by day

Get the report by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByDayRequest(); // \Swagger\Client\Model\ReportByDayRequest | 

try {
    $result = $api_instance->getStoreReportByDayExport($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreReportByDayExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByDayRequest**](../Model/\Swagger\Client\Model\ReportByDayRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink3**](../Model/BeezUPCommonLink3.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByProduct**
> \Swagger\Client\Model\ReportByProductResponse getStoreReportByProduct($store_id, $request)

Get the report by product

Get the report by product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByProductRequest(); // \Swagger\Client\Model\ReportByProductRequest | 

try {
    $result = $api_instance->getStoreReportByProduct($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreReportByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByProductRequest**](../Model/\Swagger\Client\Model\ReportByProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByProductResponse**](../Model/ReportByProductResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackedClicks**
> \Swagger\Client\Model\TrackedClicks getStoreTrackedClicks($store_id, $count)

Get the latest clicks tracked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The click's count you want to get

try {
    $result = $api_instance->getStoreTrackedClicks($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreTrackedClicks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The click&#39;s count you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\TrackedClicks**](../Model/TrackedClicks.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackedExternalOrders**
> \Swagger\Client\Model\TrackedExternalOrders getStoreTrackedExternalOrders($store_id, $count)

Get the latest external orders tracked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The external order's count you want to get

try {
    $result = $api_instance->getStoreTrackedExternalOrders($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreTrackedExternalOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The external order&#39;s count you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\TrackedExternalOrders**](../Model/TrackedExternalOrders.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackedOrders**
> \Swagger\Client\Model\TrackedOrders getStoreTrackedOrders($store_id, $count)

Get the latest orders tracked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$count = 100; // int | The order's count you want to get

try {
    $result = $api_instance->getStoreTrackedOrders($store_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreTrackedOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **count** | **int**| The order&#39;s count you want to get | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\TrackedOrders**](../Model/TrackedOrders.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreTrackingStatus**
> \Swagger\Client\Model\StoreTrackingStatus getStoreTrackingStatus($store_id)

Get store tracking synchronization status

Your clicks and orders are eventually consistent. \\ This operation indicates you at which date the projections are for this store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getStoreTrackingStatus($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStoreTrackingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\StoreTrackingStatus**](../Model/StoreTrackingStatus.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getStores: ', $e->getMessage(), PHP_EOL;
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

# **getTrackingStatus**
> \Swagger\Client\Model\TrackingStatus getTrackingStatus()

Display the synchronization status of the clicks and orders

Your clicks and orders are eventually consistent. \\ This operation indicates you at which date the projections are.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getTrackingStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getTrackingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TrackingStatus**](../Model/TrackingStatus.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getUserAccountInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getUserAccountInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$list_group_name = "list_group_name_example"; // string | The list group name your want to get

try {
    $result = $api_instance->getUserListGroup($list_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getUserListGroup: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getUserListGroupNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getUserListGroupNames: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $result = $api_instance->getUserListNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getUserListNames: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$list_name = "list_name_example"; // string | The list of value name your want to get
$accept_language = array("accept_language_example"); // string[] | Indicates that the client accepts the following languages.

try {
    $result = $api_instance->getUserListOfValues($list_name, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->getUserListOfValues: ', $e->getMessage(), PHP_EOL;
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

# **harvestAll**
> harvestAll()

Send harvest request to all your marketplaces

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $api_instance->harvestAll();
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->harvestAll: ', $e->getMessage(), PHP_EOL;
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

# **harvestOrder**
> harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id)

Send harvest request for a single Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier

try {
    $api_instance->harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->harvestOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationActivateAutoImport**
> importationActivateAutoImport($store_id)

Activate the auto importation of the last successful manual catalog importation.

Once you have made your fist manual catalog importation with success, you can call this operation to import it automatically. No parameter required, we know which one it is.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->importationActivateAutoImport($store_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationActivateAutoImport: ', $e->getMessage(), PHP_EOL;
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

# **importationCancel**
> importationCancel($store_id, $execution_id)

Cancel importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationCancel($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationCommit**
> importationCommit($store_id, $execution_id)

Commit Importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationCommit($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationCommitColumns**
> importationCommitColumns($store_id, $execution_id)

Commit columns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationCommitColumns($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationCommitColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationConfigureCatalogColumn**
> importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request)

Configure catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest(); // \Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest | 

try {
    $api_instance->importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationConfigureCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest**](../Model/\Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationConfigureRemainingCatalogColumns**
> importationConfigureRemainingCatalogColumns($store_id, $execution_id)

Configure remaining catalog columns

This operation should be used after you have mapped the required BeezUP Columns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $api_instance->importationConfigureRemainingCatalogColumns($store_id, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationConfigureRemainingCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationDeleteCustomColumn**
> importationDeleteCustomColumn($store_id, $execution_id, $column_id)

Delete Custom Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationDeleteCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationDeleteCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumnExpression**
> string importationGetCustomColumnExpression($store_id, $execution_id, $column_id)

Get the encrypted custom column expression in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->importationGetCustomColumnExpression($store_id, $execution_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumns**
> \Swagger\Client\Model\CustomColumns importationGetCustomColumns($store_id, $execution_id)

Get custom columns currently place in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetCustomColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetCustomColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\CustomColumns**](../Model/CustomColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetDetectedCatalogColumns**
> \Swagger\Client\Model\DetectedCatalogColumns importationGetDetectedCatalogColumns($store_id, $execution_id)

Get detected catalog columns during this importation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetDetectedCatalogColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetDetectedCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\DetectedCatalogColumns**](../Model/DetectedCatalogColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetImportationMonitoring**
> \Swagger\Client\Model\ImportationMonitoring importationGetImportationMonitoring($store_id, $execution_id)

Get the importation status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetImportationMonitoring($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetImportationMonitoring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\ImportationMonitoring**](../Model/ImportationMonitoring.md)

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
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->importationGetManualUpdateLastInputConfig($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetManualUpdateLastInputConfig: ', $e->getMessage(), PHP_EOL;
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

# **importationGetProductSample**
> \Swagger\Client\Model\ProductSample importationGetProductSample($store_id, $execution_id, $product_sample_index)

Get the product sample related to this importation with all columns (catalog and custom)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.

try {
    $result = $api_instance->importationGetProductSample($store_id, $execution_id, $product_sample_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetProductSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |

### Return type

[**\Swagger\Client\Model\ProductSample**](../Model/ProductSample.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetProductSampleCustomColumnValue**
> string importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id)

Get product sample custom column value related to this importation.

/!\\ Use this operation only when you just changed the custom column expression and you want to get a precise the property value. Otherwise use the operation Importation_GetProductSample which will give you all property values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetProductSampleCustomColumnValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetReportings**
> \Swagger\Client\Model\ImportationReporting[] importationGetReportings($store_id)

Get the latest catalog importation reporting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->importationGetReportings($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationGetReportings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\ImportationReporting[]**](../Model/ImportationReporting.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationIgnoreColumn**
> importationIgnoreColumn($store_id, $execution_id, $column_id)

Ignore Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationIgnoreColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationIgnoreColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCatalogColumn**
> importationMapCatalogColumn($store_id, $execution_id, $column_id, $request)

Map catalog column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier
$request = new \Swagger\Client\Model\MapBeezUPColumnRequest(); // \Swagger\Client\Model\MapBeezUPColumnRequest | 

try {
    $api_instance->importationMapCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationMapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |
 **request** | [**\Swagger\Client\Model\MapBeezUPColumnRequest**](../Model/\Swagger\Client\Model\MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCustomColumn**
> importationMapCustomColumn($store_id, $execution_id, $column_id, $request)

Map custom column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\MapBeezUPColumnRequest(); // \Swagger\Client\Model\MapBeezUPColumnRequest | 

try {
    $api_instance->importationMapCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationMapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\MapBeezUPColumnRequest**](../Model/\Swagger\Client\Model\MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationReattendColumn**
> importationReattendColumn($store_id, $execution_id, $column_id)

Reattend Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationReattendColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationReattendColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationSaveCustomColumn**
> importationSaveCustomColumn($store_id, $execution_id, $column_id, $request)

Create or replace a custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeCustomColumnRequest(); // \Swagger\Client\Model\ChangeCustomColumnRequest | 

try {
    $api_instance->importationSaveCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationSaveCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeCustomColumnRequest**](../Model/\Swagger\Client\Model\ChangeCustomColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationStartManualUpdate**
> \Swagger\Client\Model\BeezUPCommonLink2[] importationStartManualUpdate($store_id, $request)

Start Manual Import

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\StartManualImportRequest(); // \Swagger\Client\Model\StartManualImportRequest | 

try {
    $result = $api_instance->importationStartManualUpdate($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationStartManualUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\StartManualImportRequest**](../Model/\Swagger\Client\Model\StartManualImportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationTechnicalProgression**
> \Swagger\Client\Model\ImportationTechnicalProgression importationTechnicalProgression($store_id, $execution_id)

Get technical progression

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationTechnicalProgression($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationTechnicalProgression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\ImportationTechnicalProgression**](../Model/ImportationTechnicalProgression.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCatalogColumn**
> importationUnmapCatalogColumn($store_id, $execution_id, $column_id)

Unmap catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier

try {
    $api_instance->importationUnmapCatalogColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationUnmapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCustomColumn**
> importationUnmapCustomColumn($store_id, $execution_id, $column_id)

Unmap custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationUnmapCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->importationUnmapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $api_instance->logout();
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->logout: ', $e->getMessage(), PHP_EOL;
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

# **mapChannelCatalogCategory**
> mapChannelCatalogCategory($channel_catalog_id, $request)

Map channel catalog category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\MapCategoryRequest(); // \Swagger\Client\Model\MapCategoryRequest | 

try {
    $api_instance->mapChannelCatalogCategory($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->mapChannelCatalogCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\MapCategoryRequest**](../Model/\Swagger\Client\Model\MapCategoryRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mapChannelCatalogColumns**
> mapChannelCatalogColumns($channel_catalog_id, $request)

Configure channel catalog column mappings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\ColumnMappingList(); // \Swagger\Client\Model\ColumnMappingList | 

try {
    $api_instance->mapChannelCatalogColumns($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->mapChannelCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\ColumnMappingList**](../Model/\Swagger\Client\Model\ColumnMappingList.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveDownRule**
> moveDownRule($store_id, $rule_id)

Move the rule down

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->moveDownRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->moveDownRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveUpRule**
> moveUpRule($store_id, $rule_id)

Move the rule up

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->moveUpRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->moveUpRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimise**
> optimise($store_id, $action_name, $request)

Optimise products

/!\\ WARNING /!\\ \\ Apply the operation on every product related to this request. \\ This operation is used at the bottom of the analytics page result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$action_name = "action_name_example"; // string | 
$request = new \Swagger\Client\Model\OptimiseRequest(); // \Swagger\Client\Model\OptimiseRequest | 

try {
    $api_instance->optimise($store_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->optimise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **action_name** | **string**|  |
 **request** | [**\Swagger\Client\Model\OptimiseRequest**](../Model/\Swagger\Client\Model\OptimiseRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByCategory**
> optimiseByCategory($store_id, $catalog_category_id, $action_name, $request)

Optimise products's category

/!\\ WARNING /!\\ \\ This operation will reenable or disable products's category for every channel indicated in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$catalog_category_id = "catalog_category_id_example"; // string | The category identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 
$request = array(new string[]()); // string[] | The channel identifier list concerned by this optimisation

try {
    $api_instance->optimiseByCategory($store_id, $catalog_category_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->optimiseByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **catalog_category_id** | **string**| The category identifier concerned by this optimisation |
 **action_name** | **string**|  |
 **request** | **string[]**| The channel identifier list concerned by this optimisation | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByChannel**
> optimiseByChannel($store_id, $channel_id, $action_name)

Optimise products's category

/!\\ WARNING /!\\ \\ Apply the operation on every product on this channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$channel_id = "channel_id_example"; // string | The channel identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 

try {
    $api_instance->optimiseByChannel($store_id, $channel_id, $action_name);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->optimiseByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **channel_id** | **string**| The channel identifier concerned by this optimisation |
 **action_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByProduct**
> optimiseByProduct($store_id, $product_id, $action_name, $request)

Optimise products

/!\\ WARNING /!\\ \\ This operation will reenable or disable this product for every channel indicated in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$product_id = "product_id_example"; // string | The product identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 
$request = array(new string[]()); // string[] | The channel identifier list concerned by this optimisation

try {
    $api_instance->optimiseByProduct($store_id, $product_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->optimiseByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **product_id** | **string**| The product identifier concerned by this optimisation |
 **action_name** | **string**|  |
 **request** | **string[]**| The channel identifier list concerned by this optimisation | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **overrideChannelCatalogProductOverrides**
> overrideChannelCatalogProductOverrides($channel_catalog_id, $product_id, $request)

Override channel catalog product values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier
$request = new \Swagger\Client\Model\ProductOverrides(); // \Swagger\Client\Model\ProductOverrides | 

try {
    $api_instance->overrideChannelCatalogProductOverrides($channel_catalog_id, $product_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->overrideChannelCatalogProductOverrides: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **request** | [**\Swagger\Client\Model\ProductOverrides**](../Model/\Swagger\Client\Model\ProductOverrides.md)|  |

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $api_instance->reactivateCurrentContract();
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->reactivateCurrentContract: ', $e->getMessage(), PHP_EOL;
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

# **reenableChannelCatalogProduct**
> reenableChannelCatalogProduct($channel_catalog_id, $product_id)

Reenable channel catalog product

By default a all your catalog products are exposed to the channel. You can reenable a product by using this operation. /!\\ In case of massive optimisation we recommand you to use the analytics api

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier

try {
    $api_instance->reenableChannelCatalogProduct($channel_catalog_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->reenableChannelCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

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

$api_instance = new Swagger\Client\Api\BeezUPApi();

try {
    $api_instance->resendEmailActivation();
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->resendEmailActivation: ', $e->getMessage(), PHP_EOL;
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

# **runRule**
> runRule($store_id, $rule_id)

Run rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier

try {
    $api_instance->runRule($store_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->runRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runRules**
> runRules($store_id)

Run all rules for this store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $api_instance->runRules($store_id);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->runRules: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\CompanyInfo(); // \Swagger\Client\Model\CompanyInfo | 

try {
    $api_instance->saveCompanyInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->saveCompanyInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\CreditCardInfo(); // \Swagger\Client\Model\CreditCardInfo | Credit card info

try {
    $api_instance->saveCreditCardInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->saveCreditCardInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\PersonalInfo(); // \Swagger\Client\Model\PersonalInfo | 

try {
    $api_instance->savePersonalInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->savePersonalInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\ProfilePictureInfo(); // \Swagger\Client\Model\ProfilePictureInfo | 

try {
    $api_instance->saveProfilePictureInfo($request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->saveProfilePictureInfo: ', $e->getMessage(), PHP_EOL;
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

# **saveReportFilter**
> saveReportFilter($store_id, $report_filter_id, $report_filter)

Save the report filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier
$report_filter = new \Swagger\Client\Model\SaveReportFilterRequest(); // \Swagger\Client\Model\SaveReportFilterRequest | 

try {
    $api_instance->saveReportFilter($store_id, $report_filter_id, $report_filter);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->saveReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |
 **report_filter** | [**\Swagger\Client\Model\SaveReportFilterRequest**](../Model/\Swagger\Client\Model\SaveReportFilterRequest.md)|  |

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$alert_id = 56; // int | 
$request = array(new SaveStoreAlertRequest()); // \Swagger\Client\Model\SaveStoreAlertRequest[] | 

try {
    $api_instance->saveStoreAlert($store_id, $alert_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->saveStoreAlert: ', $e->getMessage(), PHP_EOL;
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

# **setChannelCatalogMarketplaceSettings**
> setChannelCatalogMarketplaceSettings($channel_catalog_id, $model)

Save new marketplace settings for a channel catalog

Allow you to configure your marketplace settings.  Partial update accepted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query
$model = new \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest(); // \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest | Settings to save

try {
    $api_instance->setChannelCatalogMarketplaceSettings($channel_catalog_id, $model);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->setChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query |
 **model** | [**\Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest**](../Model/\Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest.md)| Settings to save |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfo**
> setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request)

Set an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The BeezUP Order identifier
$request = new \Swagger\Client\Model\SetMerchantOrderInfoRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoRequest | 

try {
    $api_instance->setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->setMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The BeezUP Order identifier |
 **request** | [**\Swagger\Client\Model\SetMerchantOrderInfoRequest**](../Model/\Swagger\Client\Model\SetMerchantOrderInfoRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfoList**
> \Swagger\Client\Model\BatchOrderOperationResponse setMerchantOrderInfoList($request)

Send a batch of operations to set an Order's merchant information

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\SetMerchantOrderInfoListRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoListRequest | 

try {
    $result = $api_instance->setMerchantOrderInfoList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->setMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SetMerchantOrderInfoListRequest**](../Model/\Swagger\Client\Model\SetMerchantOrderInfoListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$email = new \Swagger\Client\Model\FriendEmail(); // \Swagger\Client\Model\FriendEmail | Your friend's email

try {
    $api_instance->share($store_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->share: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$request = new \Swagger\Client\Model\TerminateContract(); // \Swagger\Client\Model\TerminateContract | Indicate the termination reason

try {
    $api_instance->terminateCurrentContract($request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->terminateCurrentContract: ', $e->getMessage(), PHP_EOL;
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

# **unmapChannelCatalogCategory**
> unmapChannelCatalogCategory($channel_catalog_id, $request)

Unmap channel catalog category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\UnmapCategoryRequest(); // \Swagger\Client\Model\UnmapCategoryRequest | 

try {
    $api_instance->unmapChannelCatalogCategory($channel_catalog_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->unmapChannelCatalogCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\UnmapCategoryRequest**](../Model/\Swagger\Client\Model\UnmapCategoryRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRule**
> updateRule($store_id, $rule_id, $request)

Update Rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$rule_id = "rule_id_example"; // string | Your rule identifier
$request = new \Swagger\Client\Model\UpdateRuleRequest(); // \Swagger\Client\Model\UpdateRuleRequest | 

try {
    $api_instance->updateRule($store_id, $rule_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **rule_id** | **string**| Your rule identifier |
 **request** | [**\Swagger\Client\Model\UpdateRuleRequest**](../Model/\Swagger\Client\Model\UpdateRuleRequest.md)|  |

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

$api_instance = new Swagger\Client\Api\BeezUPApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\UpdateStoreRequest(); // \Swagger\Client\Model\UpdateStoreRequest | 

try {
    $api_instance->updateStore($store_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BeezUPApi->updateStore: ', $e->getMessage(), PHP_EOL;
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


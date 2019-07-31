# Enbisys\Avm\DefaultApi

All URIs are relative to *https://avm.enbisys.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFastValuation**](DefaultApi.md#getFastValuation) | **POST** /properties/getFastValuation | 
[**getValuation**](DefaultApi.md#getValuation) | **POST** /properties/getValuation | 


## getFastValuation

> int getFastValuation($property_features)


Get only property price valuation without confidence estimation


### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_features** | [**\Enbisys\Avm\Model\PropertyFeatures**](../Model/PropertyFeatures.md)| Property features that describe property |

### Return type

**int**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getValuation

> \Enbisys\Avm\Model\Valuation getValuation($property_features)


Get property price valuation with confidence estimation


### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_features** | [**\Enbisys\Avm\Model\PropertyFeatures**](../Model/PropertyFeatures.md)| Property features to valuate |

### Return type

[**\Enbisys\Avm\Model\Valuation**](../Model/Valuation.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


# SierraApi\V4agenciesApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAListOfAgencies**](V4agenciesApi.md#getAListOfAgencies) | **GET** /v4/agencies/ | Get a list of agencies


# **getAListOfAgencies**
> \SierraApi\Model\AgencyResultSet getAListOfAgencies($language)

Get a list of agencies



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4agenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = "language_example"; // string | an ISO 639-1 language code (default is en)

try {
    $result = $apiInstance->getAListOfAgencies($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4agenciesApi->getAListOfAgencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| an ISO 639-1 language code (default is en) | [optional]

### Return type

[**\SierraApi\Model\AgencyResultSet**](../Model/AgencyResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

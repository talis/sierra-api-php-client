# III\Sierra\V5\V5ordersApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filterTheRecordsByAQueryInJSONFormat**](V5ordersApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v5/orders/query | Filter the records by a query in JSON format
[**getAListOfOrders**](V5ordersApi.md#getAListOfOrders) | **GET** /v5/orders/ | Get a list of orders
[**getAnOrderByRecordID**](V5ordersApi.md#getAnOrderByRecordID) | **GET** /v5/orders/{id} | Get an order by record ID
[**getThePropertiesOfAGivenFund**](V5ordersApi.md#getThePropertiesOfAGivenFund) | **GET** /v5/orders/funds/{acctUnit}/{fundCodeNum} | Get the properties of a given Fund


# **filterTheRecordsByAQueryInJSONFormat**
> \III\Sierra\V5\Models\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5ordersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$limit = 56; // int | the maximum number of results
$json = new \III\Sierra\V5\Models\null(); //  | a query in JSON format (see the Sierra API reference documentation for more information)

try {
    $result = $apiInstance->filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5ordersApi->filterTheRecordsByAQueryInJSONFormat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned |
 **limit** | **int**| the maximum number of results |
 **json** | [****](../Model/.md)| a query in JSON format (see the Sierra API reference documentation for more information) |

### Return type

[**\III\Sierra\V5\Models\QueryResultSet**](../Model/QueryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfOrders**
> \III\Sierra\V5\Models\OrderResultSet getAListOfOrders($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $suppressed)

Get a list of orders



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5ordersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of order records to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$createdDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of order records to retrieve (can be a range)
$updatedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of order records to retrieve (can be a range)
$deletedDate = new \DateTime("2013-10-20"); // \DateTime | the deletion date of deleted order records to retrieve (can be a range)
$deleted = true; // bool | whether to retrieve only deleted (true) or non-deleted (false) order records
$suppressed = true; // bool | the suppressed flag value of order records to retrieve

try {
    $result = $apiInstance->getAListOfOrders($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $suppressed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5ordersApi->getAListOfOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of order records to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **createdDate** | **\DateTime**| the creation date of order records to retrieve (can be a range) | [optional]
 **updatedDate** | **\DateTime**| the modification date of order records to retrieve (can be a range) | [optional]
 **deletedDate** | **\DateTime**| the deletion date of deleted order records to retrieve (can be a range) | [optional]
 **deleted** | **bool**| whether to retrieve only deleted (true) or non-deleted (false) order records | [optional]
 **suppressed** | **bool**| the suppressed flag value of order records to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\OrderResultSet**](../Model/OrderResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnOrderByRecordID**
> \III\Sierra\V5\Models\Order getAnOrderByRecordID($id, $fields)

Get an order by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5ordersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the order record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAnOrderByRecordID($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5ordersApi->getAnOrderByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the order record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThePropertiesOfAGivenFund**
> \III\Sierra\V5\Models\Fund getThePropertiesOfAGivenFund($acctUnit, $fundCodeNum)

Get the properties of a given Fund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5ordersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acctUnit = 56; // int | the associated accounting unit
$fundCodeNum = 56; // int | the fund code number

try {
    $result = $apiInstance->getThePropertiesOfAGivenFund($acctUnit, $fundCodeNum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5ordersApi->getThePropertiesOfAGivenFund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acctUnit** | **int**| the associated accounting unit |
 **fundCodeNum** | **int**| the fund code number |

### Return type

[**\III\Sierra\V5\Models\Fund**](../Model/Fund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

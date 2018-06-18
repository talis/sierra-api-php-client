# III\Sierra\V5bibsApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filterTheRecordsByAQueryInJSONFormat**](V5bibsApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v5/bibs/query | Filter the records by a query in JSON format
[**findBibInformationUsingAWSSearchByAuthorTitleOrKeyword**](V5bibsApi.md#findBibInformationUsingAWSSearchByAuthorTitleOrKeyword) | **GET** /v5/bibs/search | Find bib information using AWS search by author, title, or keyword
[**generateABinaryMARCDataFileOfBibs**](V5bibsApi.md#generateABinaryMARCDataFileOfBibs) | **GET** /v5/bibs/marc | Generate a binary MARC data file of bibs
[**getABibByRecordID**](V5bibsApi.md#getABibByRecordID) | **GET** /v5/bibs/{id} | Get a bib by record ID
[**getAListOfBibs**](V5bibsApi.md#getAListOfBibs) | **GET** /v5/bibs/ | Get a list of bibs
[**getAListOfMetadata**](V5bibsApi.md#getAListOfMetadata) | **GET** /v5/bibs/metadata | Get a list of metadata
[**getTheGeneratedBinaryMARCDataFile**](V5bibsApi.md#getTheGeneratedBinaryMARCDataFile) | **GET** /v5/bibs/marc/files/{id} | Get the generated binary MARC data file
[**getTheMARCDataForASingleBibRecord**](V5bibsApi.md#getTheMARCDataForASingleBibRecord) | **GET** /v5/bibs/{id}/marc | Get the MARC data for a single bib record


# **filterTheRecordsByAQueryInJSONFormat**
> \III\Sierra\Models\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$limit = 56; // int | the maximum number of results
$json = new \III\Sierra\Models\null(); //  | a query in JSON format (see the Sierra API reference documentation for more information)

try {
    $result = $apiInstance->filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->filterTheRecordsByAQueryInJSONFormat: ', $e->getMessage(), PHP_EOL;
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

[**\III\Sierra\Models\QueryResultSet**](../Model/QueryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findBibInformationUsingAWSSearchByAuthorTitleOrKeyword**
> \III\Sierra\Models\BibSearchResultSet findBibInformationUsingAWSSearchByAuthorTitleOrKeyword($text, $limit, $offset, $fields, $index)

Find bib information using AWS search by author, title, or keyword



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$text = "text_example"; // string | the text to search for
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$index = "index_example"; // string | keyword index to be searched

try {
    $result = $apiInstance->findBibInformationUsingAWSSearchByAuthorTitleOrKeyword($text, $limit, $offset, $fields, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->findBibInformationUsingAWSSearchByAuthorTitleOrKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| the text to search for |
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **index** | **string**| keyword index to be searched | [optional]

### Return type

[**\III\Sierra\Models\BibSearchResultSet**](../Model/BibSearchResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateABinaryMARCDataFileOfBibs**
> \III\Sierra\Models\MarcSummary generateABinaryMARCDataFileOfBibs($limit, $id, $mapping)

Generate a binary MARC data file of bibs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$id = array("id_example"); // string[] | a comma-delimited list of IDs of bibs to retrieve (can be a range)
$mapping = "mapping_example"; // string | the suffix of the Innovative-to-MARC mapping file to apply (a blank entry uses the default mapping file)

try {
    $result = $apiInstance->generateABinaryMARCDataFileOfBibs($limit, $id, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->generateABinaryMARCDataFileOfBibs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of bibs to retrieve (can be a range) | [optional]
 **mapping** | **string**| the suffix of the Innovative-to-MARC mapping file to apply (a blank entry uses the default mapping file) | [optional]

### Return type

[**\III\Sierra\Models\MarcSummary**](../Model/MarcSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getABibByRecordID**
> \III\Sierra\Models\Bib getABibByRecordID($id, $fields)

Get a bib by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the bib record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getABibByRecordID($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->getABibByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the bib record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\Models\Bib**](../Model/Bib.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfBibs**
> \III\Sierra\Models\BibResultSet getAListOfBibs($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $suppressed, $locations)

Get a list of bibs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of bibs to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$createdDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of bibs to retrieve (can be a range)
$updatedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of bibs to retrieve (can be a range)
$deletedDate = new \DateTime("2013-10-20"); // \DateTime | the deletion date of deleted bibs to retrieve (can be a range)
$deleted = true; // bool | whether to retrieve only deleted (true) or non-deleted (false) bibs
$suppressed = true; // bool | the suppressed flag value of bibs to retrieve
$locations = "locations_example"; // string | a comma-delimited list of location codes (can include a single wildcard '*' to represent one or more final characters, for example, mult* or mul*)

try {
    $result = $apiInstance->getAListOfBibs($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $suppressed, $locations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->getAListOfBibs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of bibs to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **createdDate** | **\DateTime**| the creation date of bibs to retrieve (can be a range) | [optional]
 **updatedDate** | **\DateTime**| the modification date of bibs to retrieve (can be a range) | [optional]
 **deletedDate** | **\DateTime**| the deletion date of deleted bibs to retrieve (can be a range) | [optional]
 **deleted** | **bool**| whether to retrieve only deleted (true) or non-deleted (false) bibs | [optional]
 **suppressed** | **bool**| the suppressed flag value of bibs to retrieve | [optional]
 **locations** | **string**| a comma-delimited list of location codes (can include a single wildcard &#39;*&#39; to represent one or more final characters, for example, mult* or mul*) | [optional]

### Return type

[**\III\Sierra\Models\BibResultSet**](../Model/BibResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfMetadata**
> \III\Sierra\Models\Metadata[] getAListOfMetadata($fields, $language)

Get a list of metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | list of comma separated metadata fields
$language = "language_example"; // string | an ISO 639-1 language code (default is en)

try {
    $result = $apiInstance->getAListOfMetadata($fields, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->getAListOfMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| list of comma separated metadata fields | [optional]
 **language** | **string**| an ISO 639-1 language code (default is en) | [optional]

### Return type

[**\III\Sierra\Models\Metadata[]**](../Model/Metadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheGeneratedBinaryMARCDataFile**
> getTheGeneratedBinaryMARCDataFile($id)

Get the generated binary MARC data file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the ID of the MARC data file to retrieve

try {
    $apiInstance->getTheGeneratedBinaryMARCDataFile($id);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->getTheGeneratedBinaryMARCDataFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the ID of the MARC data file to retrieve |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml, application/marc-json, application/marc-xml, application/marc-in-json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheMARCDataForASingleBibRecord**
> \III\Sierra\Models\ErrorCode getTheMARCDataForASingleBibRecord($id)

Get the MARC data for a single bib record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5bibsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the bib record ID

try {
    $result = $apiInstance->getTheMARCDataForASingleBibRecord($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5bibsApi->getTheMARCDataForASingleBibRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the bib record ID |

### Return type

[**\III\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/marc-json, application/marc-xml, application/marc-in-json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

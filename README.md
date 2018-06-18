# sierra-api-php-client
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 5
- Package version: 0.0.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/talis/sierra-api-php-client.git"
    }
  ],
  "require": {
    "talis/sierra-api-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/sierra-api-php-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5acquisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acquisitionOrderPost = new \III\Sierra\Models\AcquisitionOrderPost(); // \III\Sierra\Models\AcquisitionOrderPost | the order information and the MARC records in: application/marc-json, application/marc-in-json or application/marc-xml

try {
    $result = $apiInstance->createANewAcquisition($acquisitionOrderPost);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5acquisitionsApi->createANewAcquisition: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*V5acquisitionsApi* | [**createANewAcquisition**](docs/Api/V5acquisitionsApi.md#createanewacquisition) | **POST** /v5/acquisitions/orders | Create a new acquisition
*V5acquisitionsApi* | [**createANewAcquisition_0**](docs/Api/V5acquisitionsApi.md#createanewacquisition_0) | **POST** /v5/acquisitions/orders/classic | Create a new acquisition
*V5acquisitionsApi* | [**validateTheOrderData**](docs/Api/V5acquisitionsApi.md#validatetheorderdata) | **POST** /v5/acquisitions/orders/validate | Validate the order data
*V5agenciesApi* | [**getAListOfAgencies**](docs/Api/V5agenciesApi.md#getalistofagencies) | **GET** /v5/agencies/ | Get a list of agencies
*V5authoritiesApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V5authoritiesApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v5/authorities/query | Filter the records by a query in JSON format
*V5authoritiesApi* | [**getAListOfAuthorityRecords**](docs/Api/V5authoritiesApi.md#getalistofauthorityrecords) | **GET** /v5/authorities/ | Get a list of authority records
*V5authoritiesApi* | [**getAnAuthorityRecordByRecordID**](docs/Api/V5authoritiesApi.md#getanauthorityrecordbyrecordid) | **GET** /v5/authorities/{id} | Get an authority record by record ID
*V5authoritiesApi* | [**getTheMARCDataForASingleAuthorityRecord**](docs/Api/V5authoritiesApi.md#getthemarcdataforasingleauthorityrecord) | **GET** /v5/authorities/{id}/marc | Get the MARC data for a single authority record
*V5bibsApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V5bibsApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v5/bibs/query | Filter the records by a query in JSON format
*V5bibsApi* | [**findBibInformationUsingAWSSearchByAuthorTitleOrKeyword**](docs/Api/V5bibsApi.md#findbibinformationusingawssearchbyauthortitleorkeyword) | **GET** /v5/bibs/search | Find bib information using AWS search by author, title, or keyword
*V5bibsApi* | [**generateABinaryMARCDataFileOfBibs**](docs/Api/V5bibsApi.md#generateabinarymarcdatafileofbibs) | **GET** /v5/bibs/marc | Generate a binary MARC data file of bibs
*V5bibsApi* | [**getABibByRecordID**](docs/Api/V5bibsApi.md#getabibbyrecordid) | **GET** /v5/bibs/{id} | Get a bib by record ID
*V5bibsApi* | [**getAListOfBibs**](docs/Api/V5bibsApi.md#getalistofbibs) | **GET** /v5/bibs/ | Get a list of bibs
*V5bibsApi* | [**getAListOfMetadata**](docs/Api/V5bibsApi.md#getalistofmetadata) | **GET** /v5/bibs/metadata | Get a list of metadata
*V5bibsApi* | [**getTheGeneratedBinaryMARCDataFile**](docs/Api/V5bibsApi.md#getthegeneratedbinarymarcdatafile) | **GET** /v5/bibs/marc/files/{id} | Get the generated binary MARC data file
*V5bibsApi* | [**getTheMARCDataForASingleBibRecord**](docs/Api/V5bibsApi.md#getthemarcdataforasinglebibrecord) | **GET** /v5/bibs/{id}/marc | Get the MARC data for a single bib record
*V5branchesApi* | [**getABranchByBranchID**](docs/Api/V5branchesApi.md#getabranchbybranchid) | **GET** /v5/branches/{id} | Get a branch by branch ID
*V5branchesApi* | [**getAListOfBranches**](docs/Api/V5branchesApi.md#getalistofbranches) | **GET** /v5/branches/ | Get a list of branches
*V5branchesApi* | [**getListOfPickupLocations**](docs/Api/V5branchesApi.md#getlistofpickuplocations) | **GET** /v5/branches/pickupLocations | get list of pickup locations
*V5finesApi* | [**getAListOfFines**](docs/Api/V5finesApi.md#getalistoffines) | **GET** /v5/fines/ | Get a list of fines
*V5fundsApi* | [**getAListOfFunds**](docs/Api/V5fundsApi.md#getalistoffunds) | **GET** /v5/funds/ | Get a list of funds
*V5infoApi* | [**getTokenInformation**](docs/Api/V5infoApi.md#gettokeninformation) | **GET** /v5/info/token | Get token information
*V5invoicesApi* | [**getALineItemRecordByLineID**](docs/Api/V5invoicesApi.md#getalineitemrecordbylineid) | **GET** /v5/invoices/lineItems/{id} | Get a line item record by line ID
*V5invoicesApi* | [**getAListOfInvoices**](docs/Api/V5invoicesApi.md#getalistofinvoices) | **GET** /v5/invoices/ | Get a list of invoices
*V5invoicesApi* | [**getAListOfMetadata**](docs/Api/V5invoicesApi.md#getalistofmetadata) | **GET** /v5/invoices/metadata | Get a list of metadata
*V5invoicesApi* | [**getAnInvoiceByRecordID**](docs/Api/V5invoicesApi.md#getaninvoicebyrecordid) | **GET** /v5/invoices/{id} | Get an invoice by record ID
*V5invoicesApi* | [**getTheLineItemDataForASingleInvoiceRecord**](docs/Api/V5invoicesApi.md#getthelineitemdataforasingleinvoicerecord) | **GET** /v5/invoices/{id}/lineItems | Get the line item data for a single invoice record
*V5itemsApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V5itemsApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v5/items/query | Filter the records by a query in JSON format
*V5itemsApi* | [**getAListOfItems**](docs/Api/V5itemsApi.md#getalistofitems) | **GET** /v5/items/ | Get a list of items
*V5itemsApi* | [**getAnItemByRecordID**](docs/Api/V5itemsApi.md#getanitembyrecordid) | **GET** /v5/items/{id} | Get an item by record ID
*V5ordersApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V5ordersApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v5/orders/query | Filter the records by a query in JSON format
*V5ordersApi* | [**getAListOfOrders**](docs/Api/V5ordersApi.md#getalistoforders) | **GET** /v5/orders/ | Get a list of orders
*V5ordersApi* | [**getAnOrderByRecordID**](docs/Api/V5ordersApi.md#getanorderbyrecordid) | **GET** /v5/orders/{id} | Get an order by record ID
*V5ordersApi* | [**getThePropertiesOfAGivenFund**](docs/Api/V5ordersApi.md#getthepropertiesofagivenfund) | **GET** /v5/orders/funds/{acctUnit}/{fundCodeNum} | Get the properties of a given Fund
*V5patronsApi* | [**cancelAllHoldsForTheSpecifiedPatron**](docs/Api/V5patronsApi.md#cancelallholdsforthespecifiedpatron) | **DELETE** /v5/patrons/{id}/holds | Cancel all holds for the specified patron
*V5patronsApi* | [**createAPatronRecord**](docs/Api/V5patronsApi.md#createapatronrecord) | **POST** /v5/patrons/ | Create a patron record
*V5patronsApi* | [**deleteAHoldByHoldID**](docs/Api/V5patronsApi.md#deleteaholdbyholdid) | **DELETE** /v5/patrons/holds/{holdId} | Delete a hold by hold ID
*V5patronsApi* | [**deleteAPatronRecord**](docs/Api/V5patronsApi.md#deleteapatronrecord) | **DELETE** /v5/patrons/{id} | Delete a patron record
*V5patronsApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V5patronsApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v5/patrons/query | Filter the records by a query in JSON format
*V5patronsApi* | [**findAPatronByVarFieldFieldTagAndVarFieldContent**](docs/Api/V5patronsApi.md#findapatronbyvarfieldfieldtagandvarfieldcontent) | **GET** /v5/patrons/find | Find a patron by varField fieldTag and varField content
*V5patronsApi* | [**getACheckoutByCheckoutID**](docs/Api/V5patronsApi.md#getacheckoutbycheckoutid) | **GET** /v5/patrons/checkouts/{checkoutId} | Get a checkout by checkout ID
*V5patronsApi* | [**getAFineRecordByFineID**](docs/Api/V5patronsApi.md#getafinerecordbyfineid) | **GET** /v5/patrons/fines/{fineId} | Get a fine record by fine ID
*V5patronsApi* | [**getAHoldRecordByHoldID**](docs/Api/V5patronsApi.md#getaholdrecordbyholdid) | **GET** /v5/patrons/holds/{holdId} | Get a hold record by hold ID
*V5patronsApi* | [**getAListOfMetadata**](docs/Api/V5patronsApi.md#getalistofmetadata) | **GET** /v5/patrons/metadata | Get a list of metadata
*V5patronsApi* | [**getAListOfPatrons**](docs/Api/V5patronsApi.md#getalistofpatrons) | **GET** /v5/patrons/ | Get a list of patrons
*V5patronsApi* | [**getAPatronByRecordID**](docs/Api/V5patronsApi.md#getapatronbyrecordid) | **GET** /v5/patrons/{id} | Get a patron by record ID
*V5patronsApi* | [**getCheckoutDataForASinglePatronRecord**](docs/Api/V5patronsApi.md#getcheckoutdataforasinglepatronrecord) | **GET** /v5/patrons/{id}/checkouts | Get checkout data for a single patron record
*V5patronsApi* | [**getCheckoutreadHistoryForASinglePatronRecord**](docs/Api/V5patronsApi.md#getcheckoutreadhistoryforasinglepatronrecord) | **GET** /v5/patrons/{id}/checkouts/history | Get checkout/read history for a single patron record
*V5patronsApi* | [**getTheFinesDataForASinglePatronRecord**](docs/Api/V5patronsApi.md#getthefinesdataforasinglepatronrecord) | **GET** /v5/patrons/{id}/fines | Get the fines data for a single patron record
*V5patronsApi* | [**getTheHoldsDataForASinglePatronRecord**](docs/Api/V5patronsApi.md#gettheholdsdataforasinglepatronrecord) | **GET** /v5/patrons/{id}/holds | Get the holds data for a single patron record
*V5patronsApi* | [**modifyAHold**](docs/Api/V5patronsApi.md#modifyahold) | **PUT** /v5/patrons/holds/{holdId} | Modify a hold
*V5patronsApi* | [**placeANewHoldRequest**](docs/Api/V5patronsApi.md#placeanewholdrequest) | **POST** /v5/patrons/{id}/holds/requests | Place a new hold request
*V5patronsApi* | [**requestToRenewACheckout**](docs/Api/V5patronsApi.md#requesttorenewacheckout) | **POST** /v5/patrons/checkouts/{checkoutId}/renewal | Request to renew a checkout
*V5patronsApi* | [**updateThePatronRecord**](docs/Api/V5patronsApi.md#updatethepatronrecord) | **PUT** /v5/patrons/{id} | Update the Patron record
*V5patronsApi* | [**validatePatronByBarcodeAndPIN**](docs/Api/V5patronsApi.md#validatepatronbybarcodeandpin) | **POST** /v5/patrons/validate | Validate patron by barcode and PIN
*V5usersApi* | [**validateASierraUserByUsernameAndPassword**](docs/Api/V5usersApi.md#validateasierrauserbyusernameandpassword) | **POST** /v5/users/validate | Validate a sierra user by username and password


## Documentation For Models

 - [AcquisitionOrder](docs/Model/AcquisitionOrder.md)
 - [AcquisitionOrderAllocation](docs/Model/AcquisitionOrderAllocation.md)
 - [AcquisitionOrderPost](docs/Model/AcquisitionOrderPost.md)
 - [Address](docs/Model/Address.md)
 - [AdminSettings](docs/Model/AdminSettings.md)
 - [Agency](docs/Model/Agency.md)
 - [AgencyResultSet](docs/Model/AgencyResultSet.md)
 - [Authority](docs/Model/Authority.md)
 - [AuthorityResultSet](docs/Model/AuthorityResultSet.md)
 - [Bib](docs/Model/Bib.md)
 - [BibLevel](docs/Model/BibLevel.md)
 - [BibResultSet](docs/Model/BibResultSet.md)
 - [BibSearchResultEntry](docs/Model/BibSearchResultEntry.md)
 - [BibSearchResultSet](docs/Model/BibSearchResultSet.md)
 - [Block](docs/Model/Block.md)
 - [Branch](docs/Model/Branch.md)
 - [BranchResultSet](docs/Model/BranchResultSet.md)
 - [ChargeType](docs/Model/ChargeType.md)
 - [ChargedFund](docs/Model/ChargedFund.md)
 - [Checkout](docs/Model/Checkout.md)
 - [CheckoutHistory](docs/Model/CheckoutHistory.md)
 - [CheckoutHistoryResultSet](docs/Model/CheckoutHistoryResultSet.md)
 - [CheckoutResultSet](docs/Model/CheckoutResultSet.md)
 - [Codes](docs/Model/Codes.md)
 - [Country](docs/Model/Country.md)
 - [DbSettings](docs/Model/DbSettings.md)
 - [Deleted](docs/Model/Deleted.md)
 - [DisplayableApiInfo](docs/Model/DisplayableApiInfo.md)
 - [DsSettings](docs/Model/DsSettings.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [Fine](docs/Model/Fine.md)
 - [FineResultSet](docs/Model/FineResultSet.md)
 - [FixedField](docs/Model/FixedField.md)
 - [FixedFieldVal](docs/Model/FixedFieldVal.md)
 - [ForeignCurrency](docs/Model/ForeignCurrency.md)
 - [Fund](docs/Model/Fund.md)
 - [Hold](docs/Model/Hold.md)
 - [HoldResultSet](docs/Model/HoldResultSet.md)
 - [HoldStatus](docs/Model/HoldStatus.md)
 - [Info](docs/Model/Info.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceLine](docs/Model/InvoiceLine.md)
 - [InvoiceLineResultSet](docs/Model/InvoiceLineResultSet.md)
 - [InvoiceResultSet](docs/Model/InvoiceResultSet.md)
 - [InvoiceTotal](docs/Model/InvoiceTotal.md)
 - [Item](docs/Model/Item.md)
 - [ItemResultSet](docs/Model/ItemResultSet.md)
 - [ItemStatus](docs/Model/ItemStatus.md)
 - [Language](docs/Model/Language.md)
 - [Location](docs/Model/Location.md)
 - [Marc2INNSettings](docs/Model/Marc2INNSettings.md)
 - [MarcSummary](docs/Model/MarcSummary.md)
 - [MaterialType](docs/Model/MaterialType.md)
 - [Message](docs/Model/Message.md)
 - [Metadata](docs/Model/Metadata.md)
 - [MetadataValue](docs/Model/MetadataValue.md)
 - [MildataSettings](docs/Model/MildataSettings.md)
 - [MilprotoSettings](docs/Model/MilprotoSettings.md)
 - [Order](docs/Model/Order.md)
 - [OrderBibLinks](docs/Model/OrderBibLinks.md)
 - [OrderInfo](docs/Model/OrderInfo.md)
 - [OrderResultSet](docs/Model/OrderResultSet.md)
 - [Patron](docs/Model/Patron.md)
 - [PatronHoldPost](docs/Model/PatronHoldPost.md)
 - [PatronHoldPut](docs/Model/PatronHoldPut.md)
 - [PatronPatch](docs/Model/PatronPatch.md)
 - [PatronResult](docs/Model/PatronResult.md)
 - [PatronResultSet](docs/Model/PatronResultSet.md)
 - [PatronValidation](docs/Model/PatronValidation.md)
 - [Phone](docs/Model/Phone.md)
 - [PinVerificationSettings](docs/Model/PinVerificationSettings.md)
 - [QueryEntry](docs/Model/QueryEntry.md)
 - [QueryResultSet](docs/Model/QueryResultSet.md)
 - [SubField](docs/Model/SubField.md)
 - [TokenInfo](docs/Model/TokenInfo.md)
 - [TokenInfoRole](docs/Model/TokenInfoRole.md)
 - [UseTax](docs/Model/UseTax.md)
 - [User](docs/Model/User.md)
 - [VarField](docs/Model/VarField.md)
 - [Vendor](docs/Model/Vendor.md)
 - [WebpacPXClientSettings](docs/Model/WebpacPXClientSettings.md)
 - [XClientSettings](docs/Model/XClientSettings.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author





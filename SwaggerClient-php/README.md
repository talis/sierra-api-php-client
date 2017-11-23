# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 4
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
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
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

$apiInstance = new SierraApi\Api\V4acquisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | the Sierra username to associate with created orders
$location = "location_example"; // string | the shelving location or branch for which the order is placed
$fund = "fund_example"; // string | the fund code against which the material is encumbered and paid
$vendor = "vendor_example"; // string | the library-defined code for the vendor who handles the order
$marc = new \SierraApi\Model\null(); //  | the MARC records in: application/marc-json, application/marc-in-json or application/marc-xml
$copies = 56; // int | the number of copies ordered
$price = 1.2; // double | the estimated price per copy
$acquisition_type = "acquisition_type_example"; // string | the library-defined acquisition type code or the method of paying for the material
$claim = "claim_example"; // string | the claiming activity code
$code1 = "code1_example"; // string | the library-defined order code 1
$code2 = "code2_example"; // string | the library-defined order code 2
$code3 = "code3_example"; // string | the library-defined order code 3
$code4 = "code4_example"; // string | the library-defined order code 4
$format = "format_example"; // string | a code representing the physical form of the material (any hash mark symbols '#' must be URL encoded
$order_note = "order_note_example"; // string | a code representing an order note to print on the purchase order form
$order_type = "order_type_example"; // string | a code representing the type of order
$raction = "raction_example"; // string | a code representing the receiving action
$rloc = "rloc_example"; // string | a code representing the receiving location
$bloc = "bloc_example"; // string | a code representing the billing location
$status = "status_example"; // string | a system-generated code representing that financial encumbering or disencumbering status of a record
$tloc = "tloc_example"; // string | a code representing a temporary shelving location
$odate = "odate_example"; // string | the date the material was ordered, in the format mm-dd-yy
$language = "language_example"; // string | the language of the material, based on the MARC 21 Code List for Languages (also used by UNIMARC format)
$country = "country_example"; // string | the country of publication, based on the MARC 21 Code List of Countries, or ISO 3166/MA standard for UNIMARC systems
$note = "note_example"; // string | a code representing the note that prints on the purchase order form (repeatable parameter)
$staff_note = "staff_note_example"; // string | a free-text internal (staff) note (repeatable parameter)
$vendor_note = "vendor_note_example"; // string | a free-text note for vendor order information (repeatable parameter)
$vendor_id_number = "vendor_id_number_example"; // string | the vendor's identification number for this title (repeatable parameter)
$volume = "volume_example"; // string | the number of volumes for this title
$selector = "selector_example"; // string | a free text note identifying the selector of the item (repeatable parameter)
$vendor_account = "vendor_account_example"; // string | the vendor account number (repeatable parameter)
$currency_code = "currency_code_example"; // string | the foreign currency code
$identity = "identity_example"; // string | a free text note, used to distinguish between order records (repeatable parameter)
$ship_to = "ship_to_example"; // string | the library address to which the vendor should ship materials (repeatable parameter)
$requestor = "requestor_example"; // string | the requestor (repeatable parameter)
$old_order_number = "old_order_number_example"; // string | the old order number (repeatable parameter)
$paid_note = "paid_note_example"; // string | the paid note (repeatable parameter)
$vendor_address = "vendor_address_example"; // string | the vendor address (repeatable parameter)
$custom_var_field1 = "custom_var_field1_example"; // string | custom var field 1 (repeatable parameter)
$custom_var_field2 = "custom_var_field2_example"; // string | custom var field 2 (repeatable parameter)
$custom_var_field3 = "custom_var_field3_example"; // string | custom var field 3 (repeatable parameter)
$custom_var_field4 = "custom_var_field4_example"; // string | custom var field 4 (repeatable parameter)

try {
    $result = $apiInstance->createANewAcquisition($login, $location, $fund, $vendor, $marc, $copies, $price, $acquisition_type, $claim, $code1, $code2, $code3, $code4, $format, $order_note, $order_type, $raction, $rloc, $bloc, $status, $tloc, $odate, $language, $country, $note, $staff_note, $vendor_note, $vendor_id_number, $volume, $selector, $vendor_account, $currency_code, $identity, $ship_to, $requestor, $old_order_number, $paid_note, $vendor_address, $custom_var_field1, $custom_var_field2, $custom_var_field3, $custom_var_field4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4acquisitionsApi->createANewAcquisition: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*V4acquisitionsApi* | [**createANewAcquisition**](docs/Api/V4acquisitionsApi.md#createanewacquisition) | **POST** /v4/acquisitions/orders/classic | Create a new acquisition
*V4acquisitionsApi* | [**createANewAcquisition_0**](docs/Api/V4acquisitionsApi.md#createanewacquisition_0) | **POST** /v4/acquisitions/orders | Create a new acquisition
*V4acquisitionsApi* | [**validateTheOrderData**](docs/Api/V4acquisitionsApi.md#validatetheorderdata) | **POST** /v4/acquisitions/orders/validate | Validate the order data
*V4agenciesApi* | [**getAListOfAgencies**](docs/Api/V4agenciesApi.md#getalistofagencies) | **GET** /v4/agencies/ | Get a list of agencies
*V4authoritiesApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V4authoritiesApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v4/authorities/query | Filter the records by a query in JSON format
*V4authoritiesApi* | [**getAListOfAuthorityRecords**](docs/Api/V4authoritiesApi.md#getalistofauthorityrecords) | **GET** /v4/authorities/ | Get a list of authority records
*V4authoritiesApi* | [**getAnAuthorityRecordByRecordID**](docs/Api/V4authoritiesApi.md#getanauthorityrecordbyrecordid) | **GET** /v4/authorities/{id} | Get an authority record by record ID
*V4authoritiesApi* | [**getTheMARCDataForASingleAuthorityRecord**](docs/Api/V4authoritiesApi.md#getthemarcdataforasingleauthorityrecord) | **GET** /v4/authorities/{id}/marc | Get the MARC data for a single authority record
*V4bibsmarcfilesApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V4bibsmarcfilesApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v4/bibs/query | Filter the records by a query in JSON format
*V4bibsmarcfilesApi* | [**findBibInformationUsingAWSSearchByAuthorAndorTitle**](docs/Api/V4bibsmarcfilesApi.md#findbibinformationusingawssearchbyauthorandortitle) | **GET** /v4/bibs/search | Find bib information using AWS search by author and/or title
*V4bibsmarcfilesApi* | [**generateABinaryMARCDataFileOfBibs**](docs/Api/V4bibsmarcfilesApi.md#generateabinarymarcdatafileofbibs) | **GET** /v4/bibs/marc | Generate a binary MARC data file of bibs
*V4bibsmarcfilesApi* | [**getABibByRecordID**](docs/Api/V4bibsmarcfilesApi.md#getabibbyrecordid) | **GET** /v4/bibs/{id} | Get a bib by record ID
*V4bibsmarcfilesApi* | [**getAListOfBibs**](docs/Api/V4bibsmarcfilesApi.md#getalistofbibs) | **GET** /v4/bibs/ | Get a list of bibs
*V4bibsmarcfilesApi* | [**getTheGeneratedBinaryMARCDataFile**](docs/Api/V4bibsmarcfilesApi.md#getthegeneratedbinarymarcdatafile) | **GET** /v4/bibs/marc/files/{id} | Get the generated binary MARC data file
*V4bibsmarcfilesApi* | [**getTheMARCDataForASingleBibRecord**](docs/Api/V4bibsmarcfilesApi.md#getthemarcdataforasinglebibrecord) | **GET** /v4/bibs/{id}/marc | Get the MARC data for a single bib record
*V4branchesApi* | [**getABranchByBranchID**](docs/Api/V4branchesApi.md#getabranchbybranchid) | **GET** /v4/branches/{id} | Get a branch by branch ID
*V4branchesApi* | [**getAListOfBranches**](docs/Api/V4branchesApi.md#getalistofbranches) | **GET** /v4/branches/ | Get a list of branches
*V4branchesApi* | [**getListOfPickupLocations**](docs/Api/V4branchesApi.md#getlistofpickuplocations) | **GET** /v4/branches/pickupLocations | get list of pickup locations
*V4finesApi* | [**getAListOfFines**](docs/Api/V4finesApi.md#getalistoffines) | **GET** /v4/fines/ | Get a list of fines
*V4infoApi* | [**getTokenInformation**](docs/Api/V4infoApi.md#gettokeninformation) | **GET** /v4/info/token | Get token information
*V4invoicesApi* | [**getALineItemRecordByLineID**](docs/Api/V4invoicesApi.md#getalineitemrecordbylineid) | **GET** /v4/invoices/lineItems/{id} | Get a line item record by line ID
*V4invoicesApi* | [**getAListOfInvoices**](docs/Api/V4invoicesApi.md#getalistofinvoices) | **GET** /v4/invoices/ | Get a list of invoices
*V4invoicesApi* | [**getTheLineItemDataForASingleInvoiceRecord**](docs/Api/V4invoicesApi.md#getthelineitemdataforasingleinvoicerecord) | **GET** /v4/invoices/{id}/lineItems | Get the line item data for a single invoice record
*V4itemsApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V4itemsApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v4/items/query | Filter the records by a query in JSON format
*V4itemsApi* | [**getAListOfItems**](docs/Api/V4itemsApi.md#getalistofitems) | **GET** /v4/items/ | Get a list of items
*V4itemsApi* | [**getAnItemByRecordID**](docs/Api/V4itemsApi.md#getanitembyrecordid) | **GET** /v4/items/{id} | Get an item by record ID
*V4ordersApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V4ordersApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v4/orders/query | Filter the records by a query in JSON format
*V4ordersApi* | [**getAListOfOrders**](docs/Api/V4ordersApi.md#getalistoforders) | **GET** /v4/orders/ | Get a list of orders
*V4ordersApi* | [**getAnOrderByRecordID**](docs/Api/V4ordersApi.md#getanorderbyrecordid) | **GET** /v4/orders/{id} | Get an order by record ID
*V4ordersApi* | [**getThePropertiesOfAGivenFund**](docs/Api/V4ordersApi.md#getthepropertiesofagivenfund) | **GET** /v4/orders/funds/{acctUnit}/{fundCodeNum} | Get the properties of a given Fund
*V4patronsApi* | [**cancelAllHoldsForTheSpecifiedPatron**](docs/Api/V4patronsApi.md#cancelallholdsforthespecifiedpatron) | **DELETE** /v4/patrons/{id}/holds | Cancel all holds for the specified patron
*V4patronsApi* | [**createAPatronRecord**](docs/Api/V4patronsApi.md#createapatronrecord) | **POST** /v4/patrons/ | Create a patron record
*V4patronsApi* | [**deleteAHoldByHoldID**](docs/Api/V4patronsApi.md#deleteaholdbyholdid) | **DELETE** /v4/patrons/holds/{holdId} | Delete a hold by hold ID
*V4patronsApi* | [**deleteAPatronRecord**](docs/Api/V4patronsApi.md#deleteapatronrecord) | **DELETE** /v4/patrons/{id} | Delete a patron record
*V4patronsApi* | [**filterTheRecordsByAQueryInJSONFormat**](docs/Api/V4patronsApi.md#filtertherecordsbyaqueryinjsonformat) | **POST** /v4/patrons/query | Filter the records by a query in JSON format
*V4patronsApi* | [**findAPatronByVarFieldFieldTagAndVarFieldContent**](docs/Api/V4patronsApi.md#findapatronbyvarfieldfieldtagandvarfieldcontent) | **GET** /v4/patrons/find | Find a patron by varField fieldTag and varField content
*V4patronsApi* | [**getACheckoutByCheckoutID**](docs/Api/V4patronsApi.md#getacheckoutbycheckoutid) | **GET** /v4/patrons/checkouts/{checkoutId} | Get a checkout by checkout ID
*V4patronsApi* | [**getAFineRecordByFineID**](docs/Api/V4patronsApi.md#getafinerecordbyfineid) | **GET** /v4/patrons/fines/{fineId} | Get a fine record by fine ID
*V4patronsApi* | [**getAHoldRecordByHoldID**](docs/Api/V4patronsApi.md#getaholdrecordbyholdid) | **GET** /v4/patrons/holds/{holdId} | Get a hold record by hold ID
*V4patronsApi* | [**getAListOfPatrons**](docs/Api/V4patronsApi.md#getalistofpatrons) | **GET** /v4/patrons/ | Get a list of patrons
*V4patronsApi* | [**getAPatronByRecordID**](docs/Api/V4patronsApi.md#getapatronbyrecordid) | **GET** /v4/patrons/{id} | Get a patron by record ID
*V4patronsApi* | [**getCheckoutDataForASinglePatronRecord**](docs/Api/V4patronsApi.md#getcheckoutdataforasinglepatronrecord) | **GET** /v4/patrons/{id}/checkouts | Get checkout data for a single patron record
*V4patronsApi* | [**getCheckoutreadHistoryForASinglePatronRecord**](docs/Api/V4patronsApi.md#getcheckoutreadhistoryforasinglepatronrecord) | **GET** /v4/patrons/{id}/checkouts/history | Get checkout/read history for a single patron record
*V4patronsApi* | [**getMetadataList**](docs/Api/V4patronsApi.md#getmetadatalist) | **GET** /v4/patrons/metadata | get metadata list
*V4patronsApi* | [**getTheFinesDataForASinglePatronRecord**](docs/Api/V4patronsApi.md#getthefinesdataforasinglepatronrecord) | **GET** /v4/patrons/{id}/fines | Get the fines data for a single patron record
*V4patronsApi* | [**getTheHoldsDataForASinglePatronRecord**](docs/Api/V4patronsApi.md#gettheholdsdataforasinglepatronrecord) | **GET** /v4/patrons/{id}/holds | Get the holds data for a single patron record
*V4patronsApi* | [**modifyAHold**](docs/Api/V4patronsApi.md#modifyahold) | **PUT** /v4/patrons/holds/{holdId} | Modify a hold
*V4patronsApi* | [**placeANewHoldRequest**](docs/Api/V4patronsApi.md#placeanewholdrequest) | **POST** /v4/patrons/{id}/holds/requests | Place a new hold request
*V4patronsApi* | [**requestToRenewACheckout**](docs/Api/V4patronsApi.md#requesttorenewacheckout) | **POST** /v4/patrons/checkouts/{checkoutId}/renewal | Request to renew a checkout
*V4patronsApi* | [**updateThePatronRecord**](docs/Api/V4patronsApi.md#updatethepatronrecord) | **PUT** /v4/patrons/{id} | Update the Patron record
*V4patronsApi* | [**validatePatronByBarcodeAndPIN**](docs/Api/V4patronsApi.md#validatepatronbybarcodeandpin) | **POST** /v4/patrons/validate | Validate patron by barcode and PIN
*V4usersApi* | [**validateASierraUserByUsernameAndPassword**](docs/Api/V4usersApi.md#validateasierrauserbyusernameandpassword) | **POST** /v4/users/validate | Validate a sierra user by username and password


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




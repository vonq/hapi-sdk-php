# Contracts

```php
$contractsController = $client->getContractsController();
```

## Class Name

`ContractsController`

## Methods

* [Create Contract](../../doc/controllers/contracts.md#create-contract)
* [Delete Contract](../../doc/controllers/contracts.md#delete-contract)
* [List Autocomplete Values](../../doc/controllers/contracts.md#list-autocomplete-values)
* [List Contracts](../../doc/controllers/contracts.md#list-contracts)
* [Retrieve Contract](../../doc/controllers/contracts.md#retrieve-contract)
* [Retrieve Multiple Contracts](../../doc/controllers/contracts.md#retrieve-multiple-contracts)


# Create Contract

This endpoint creates a new customer contract. It requires a reference to a channel, a credential payload, and the facets set for the contracted product.

HAPI doesn't support contract editing, because job boards require the same credentials to be able to delete already posted jobs via that contract at a later moment. Otherwise, deleting jobs would not be possible. To edit contract credentials, the credentials need to be deleted first, and then recreated. When deleted, all corresponding jobs can't be deleted anymore

```php
function createContract(string $xCustomerId, ContractCreateRequestModel $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`ContractCreateRequestModel`](../../doc/models/contract-create-request-model.md) | Body, Required | - |

## Response Type

[`EncryptedContractModel`](../../doc/models/encrypted-contract-model.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';
$body_channelId = 236;
$body_credentials = ['' => HAPI\ApiHelper::deserialize(null), '' => HAPI\ApiHelper::deserialize(null)];
$body = new Models\ContractCreateRequestModel(
    $body_channelId,
    $body_credentials
);
$body->setAlias('alias8');
$body->setFacets(['' => HAPI\ApiHelper::deserialize(null), '' => HAPI\ApiHelper::deserialize(null)]);
$body->setExpiryDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'));
$body->setCredits(212);
$body_purchasePrice_amount = 142;
$body_purchasePrice_currency = Models\CurrencyEnum::ITL;
$body->setPurchasePrice(new Models\PurchasePriceModel(
    $body_purchasePrice_amount,
    $body_purchasePrice_currency
));

$apiResponse = $contractsController->createContract($xCustomerId, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractCreateRequestValidationErrorException`](../../doc/models/contract-create-request-validation-error-exception.md) |


# Delete Contract

This endpoint deletes a contract.

HAPI doesn't support contract editing, because job boards require the same credentials to be able to delete already posted jobs via that contract at a later moment. Otherwise, deleting jobs would not be possible. To edit contract credentials, the credentials need to be deleted first, and then recreated. When deleted, all corresponding jobs can't be deleted anymore

***Warning***:  
Contracts with Campaign(s) whose Channel status (retrievable through the "[Check a campaign status](https://vonq.stoplight.io/docs/hapi/cd5f4f9018c18-check-campaign-status)" endpoint, as defined by the`orderedProductsStatus.status`) is set to `online` can be deleted, but this will result the inability to [Take the campaign offline](https://vonq.stoplight.io/docs/hapi/d70d556dbb9ba-take-a-campaign-offline).

```php
function deleteContract(string $contractId, string $xCustomerId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contractId` | `string` | Template, Required | The ID of the contract you want to delete |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

`void`

## Example Usage

```php
$contractId = 'contract_id8';
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $contractsController->deleteContract($contractId, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# List Autocomplete Values

This endpoint exposes autocomplete items given a `channel_id` or `contract_id` and a posting requirement name.

When `channel_id` is used, the credentials are required. When using `contract_id`, since the credentials were already send as part of contract creation, there is no need to pass the credentials.

```php
function listAutocompleteValues(
    int $channelIdOrContractId,
    string $postingRequirementName,
    string $xCustomerId,
    FacetAutocompleteModel $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `channelIdOrContractId` | `int` | Template, Required | The channel ID or contract ID |
| `postingRequirementName` | `string` | Template, Required | The name of the posting requirement |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`FacetAutocompleteModel`](../../doc/models/facet-autocomplete-model.md) | Body, Required | - |

## Response Type

[`AutocompleteValuesResponseModel[]`](../../doc/models/autocomplete-values-response-model.md)

## Example Usage

```php
$channelIdOrContractId = 210;
$postingRequirementName = 'posting-requirement-name2';
$xCustomerId = 'X-Customer-Id2';
$body = new Models\FacetAutocompleteModel;
$body->setTerm('Example term text');
$body->setCredentials(HAPI\ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'));

$apiResponse = $contractsController->listAutocompleteValues($channelIdOrContractId, $postingRequirementName, $xCustomerId, $body);
```

## Example Response *(as JSON)*

```json
[
  {
    "key": "A key",
    "label": "A label"
  },
  {
    "key": "A key",
    "label": "A label"
  },
  {
    "key": "A key",
    "label": "A label"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | `ApiException` |


# List Contracts

This endpoint exposes a list of contract available to a particular customer.

```php
function listContracts(string $xCustomerId, ?int $limit = 50, ?int $offset = 0): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `limit` | `?int` | Query, Optional | Number of results to return per page.<br>**Default**: `50`<br>**Constraints**: `>= 0`, `<= 100` |
| `offset` | `?int` | Query, Optional | The initial index from which to return the results.<br>**Default**: `0`<br>**Constraints**: `>= 0` |

## Response Type

[`PaginatedContractListModel`](../../doc/models/paginated-contract-list-model.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';
$limit = 10;
$offset = 0;

$apiResponse = $contractsController->listContracts($xCustomerId, $limit, $offset);
```


# Retrieve Contract

This endpoint retrieves the detail for a customer contract. It contains a reference to a channel, an (encrypted) credential payload, and the facets set for the My Contracts product.

```php
function retrieveContract(string $contractId, string $xCustomerId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contractId` | `string` | Template, Required | ID of the contract you want to retrieve |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`EncryptedContractModel`](../../doc/models/encrypted-contract-model.md)

## Example Usage

```php
$contractId = 'contract_id8';
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $contractsController->retrieveContract($contractId, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Retrieve Multiple Contracts

This endpoint exposes a list of multiple contracts, if available to a specific customer

```php
function retrieveMultipleContracts(
    array $contractsIds,
    string $xCustomerId,
    ?int $limit = 50,
    ?int $offset = 0
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contractsIds` | `string[]` | Template, Required | Comma separated list of contract IDs<br>**Constraints**: *Maximum Items*: `50` |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts) |
| `limit` | `?int` | Query, Optional | Number of results to return per page<br>**Default**: `50`<br>**Constraints**: `>= 0`, `<= 100` |
| `offset` | `?int` | Query, Optional | The initial index from which to return the results<br>**Default**: `0`<br>**Constraints**: `>= 0` |

## Response Type

[`PaginatedDetailedContractListModel`](../../doc/models/paginated-detailed-contract-list-model.md)

## Example Usage

```php
$contractsIds = ['contracts_ids7', 'contracts_ids8'];
$xCustomerId = 'X-Customer-Id2';
$limit = 10;
$offset = 0;

$apiResponse = $contractsController->retrieveMultipleContracts($contractsIds, $xCustomerId, $limit, $offset);
```


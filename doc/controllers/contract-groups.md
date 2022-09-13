# Contract Groups

```php
$contractGroupsController = $client->getContractGroupsController();
```

## Class Name

`ContractGroupsController`

## Methods

* [Create Contracts Group](../../doc/controllers/contract-groups.md#create-contracts-group)
* [Delete Contract Group](../../doc/controllers/contract-groups.md#delete-contract-group)
* [Get Contract Group](../../doc/controllers/contract-groups.md#get-contract-group)
* [List Contracts Groups](../../doc/controllers/contract-groups.md#list-contracts-groups)
* [Partial Update Contract Group](../../doc/controllers/contract-groups.md#partial-update-contract-group)
* [Update Contract Group](../../doc/controllers/contract-groups.md#update-contract-group)


# Create Contracts Group

This endpoint allows to create a new contract group

```php
function createContractsGroup(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?ContractGroupRequestModel`](../../doc/models/contract-group-request-model.md) | Body, Optional | - |

## Response Type

[`ContractGroupModel`](../../doc/models/contract-group-model.md)

## Example Usage

```php
$collect = [];

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$body_name = 'name6';
$body = new Models\ContractGroupRequestModel(
    $body_name
);
$collect['body'] = $body;

$apiResponse = $contractGroupsController->createContractsGroup($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |


# Delete Contract Group

Deletes a contract Contract Group by idx.
Groups with idx=0 or associated to contracts can't be deleted.

```php
function deleteContractGroup(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupIdx` | `string` | Template, Required | The countract group ID |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

`void`

## Example Usage

```php
$collect = [];

$groupIdx = 'group_idx8';
$collect['groupIdx'] = $groupIdx;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$apiResponse = $contractGroupsController->deleteContractGroup($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Get Contract Group

Returns the details of the Contract Group by index/idx

```php
function getContractGroup(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupIdx` | `string` | Template, Required | The countract group ID |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`ContractGroupModel`](../../doc/models/contract-group-model.md)

## Example Usage

```php
$collect = [];

$groupIdx = 'group_idx8';
$collect['groupIdx'] = $groupIdx;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$apiResponse = $contractGroupsController->getContractGroup($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# List Contracts Groups

This endpoint exposes the list of contract groups

```php
function listContractsGroups(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `ordering` | `?string` | Query, Optional | Which field to use when ordering the results. |
| `search` | `?string` | Query, Optional | A search term. |

## Response Type

[`ContractGroupModel[]`](../../doc/models/contract-group-model.md)

## Example Usage

```php
$collect = [];

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$ordering = 'ordering0';
$collect['ordering'] = $ordering;

$search = 'search2';
$collect['search'] = $search;

$apiResponse = $contractGroupsController->listContractsGroups($collect);
```


# Partial Update Contract Group

Allows updating the contract group name

```php
function partialUpdateContractGroup(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupIdx` | `string` | Template, Required | The countract group ID |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?ContractGroupRequestModel`](../../doc/models/contract-group-request-model.md) | Body, Optional | - |

## Response Type

[`ContractGroupModel`](../../doc/models/contract-group-model.md)

## Example Usage

```php
$collect = [];

$groupIdx = 'group_idx8';
$collect['groupIdx'] = $groupIdx;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$body_name = 'name6';
$body = new Models\ContractGroupRequestModel(
    $body_name
);
$collect['body'] = $body;

$apiResponse = $contractGroupsController->partialUpdateContractGroup($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Update Contract Group

Allows updating the contract group name

```php
function updateContractGroup(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupIdx` | `string` | Template, Required | The countract group ID |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?ContractGroupRequestModel`](../../doc/models/contract-group-request-model.md) | Body, Optional | - |

## Response Type

[`ContractGroupModel`](../../doc/models/contract-group-model.md)

## Example Usage

```php
$collect = [];

$groupIdx = 'group_idx8';
$collect['groupIdx'] = $groupIdx;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$body_name = 'name6';
$body = new Models\ContractGroupRequestModel(
    $body_name
);
$collect['body'] = $body;

$apiResponse = $contractGroupsController->updateContractGroup($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


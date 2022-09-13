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
function createContractsGroup(string $xCustomerId, ?ContractGroupRequestModel $body = null): ApiResponse
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
$xCustomerId = 'X-Customer-Id2';
$body_name = 'name6';
$body = new Models\ContractGroupRequestModel(
    $body_name
);

$apiResponse = $contractGroupsController->createContractsGroup($xCustomerId, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |


# Delete Contract Group

Deletes a contract Contract Group by idx.
Groups with idx=0 or associated to contracts can't be deleted.

```php
function deleteContractGroup(string $groupIdx, string $xCustomerId): ApiResponse
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
$groupIdx = 'group_idx8';
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $contractGroupsController->deleteContractGroup($groupIdx, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Get Contract Group

Returns the details of the Contract Group by index/idx

```php
function getContractGroup(string $groupIdx, string $xCustomerId): ApiResponse
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
$groupIdx = 'group_idx8';
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $contractGroupsController->getContractGroup($groupIdx, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# List Contracts Groups

This endpoint exposes the list of contract groups

```php
function listContractsGroups(string $xCustomerId, ?string $ordering = null, ?string $search = null): ApiResponse
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
$xCustomerId = 'X-Customer-Id2';
$ordering = 'ordering0';
$search = 'search2';

$apiResponse = $contractGroupsController->listContractsGroups($xCustomerId, $ordering, $search);
```


# Partial Update Contract Group

Allows updating the contract group name

```php
function partialUpdateContractGroup(
    string $groupIdx,
    string $xCustomerId,
    ?ContractGroupRequestModel $body = null
): ApiResponse
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
$groupIdx = 'group_idx8';
$xCustomerId = 'X-Customer-Id2';
$body_name = 'name6';
$body = new Models\ContractGroupRequestModel(
    $body_name
);

$apiResponse = $contractGroupsController->partialUpdateContractGroup($groupIdx, $xCustomerId, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Update Contract Group

Allows updating the contract group name

```php
function updateContractGroup(
    string $groupIdx,
    string $xCustomerId,
    ?ContractGroupRequestModel $body = null
): ApiResponse
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
$groupIdx = 'group_idx8';
$xCustomerId = 'X-Customer-Id2';
$body_name = 'name6';
$body = new Models\ContractGroupRequestModel(
    $body_name
);

$apiResponse = $contractGroupsController->updateContractGroup($groupIdx, $xCustomerId, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


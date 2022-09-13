# Contract Groups

```php
$contractGroupsController = $client->getContractGroupsController();
```

## Class Name

`ContractGroupsController`

## Methods

* [List Contracts Groups](../../doc/controllers/contract-groups.md#list-contracts-groups)
* [Create Contracts Group](../../doc/controllers/contract-groups.md#create-contracts-group)
* [Get Contract Group](../../doc/controllers/contract-groups.md#get-contract-group)
* [Delete Contract Group](../../doc/controllers/contract-groups.md#delete-contract-group)
* [Update Contract Group](../../doc/controllers/contract-groups.md#update-contract-group)
* [Partial Update Contract Group](../../doc/controllers/contract-groups.md#partial-update-contract-group)


# List Contracts Groups

This endpoint exposes the list of contract groups

```php
function listContractsGroups(string $xCustomerId, ?string $ordering = null, ?string $search = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `ordering` | `?string` | Query, Optional | Which field to use when ordering the results. |
| `search` | `?string` | Query, Optional | A search term. |

## Response Type

[`ContractGroup[]`](../../doc/models/contract-group.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';

$result = $contractGroupsController->listContractsGroups($xCustomerId);
```


# Create Contracts Group

This endpoint allows to create a new contract group

```php
function createContractsGroup(string $xCustomerId, ?ContractGroupRequest $body = null): ContractGroup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?ContractGroupRequest`](../../doc/models/contract-group-request.md) | Body, Optional | - |

## Response Type

[`ContractGroup`](../../doc/models/contract-group.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';

$result = $contractGroupsController->createContractsGroup($xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |


# Get Contract Group

Returns the details of the Contract Group by index/idx

```php
function getContractGroup(string $groupIdx, string $xCustomerId): ContractGroup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupIdx` | `string` | Template, Required | The countract group ID |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`ContractGroup`](../../doc/models/contract-group.md)

## Example Usage

```php
$groupIdx = 'group_idx8';
$xCustomerId = 'X-Customer-Id2';

$result = $contractGroupsController->getContractGroup($groupIdx, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Delete Contract Group

Deletes a contract Contract Group by idx.
Groups with idx=0 or associated to contracts can't be deleted.

```php
function deleteContractGroup(string $groupIdx, string $xCustomerId): void
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

$contractGroupsController->deleteContractGroup($groupIdx, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Update Contract Group

Allows updating the contract group name

```php
function updateContractGroup(
    string $groupIdx,
    string $xCustomerId,
    ?ContractGroupRequest $body = null
): ContractGroup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupIdx` | `string` | Template, Required | The countract group ID |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?ContractGroupRequest`](../../doc/models/contract-group-request.md) | Body, Optional | - |

## Response Type

[`ContractGroup`](../../doc/models/contract-group.md)

## Example Usage

```php
$groupIdx = 'group_idx8';
$xCustomerId = 'X-Customer-Id2';

$result = $contractGroupsController->updateContractGroup($groupIdx, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Partial Update Contract Group

Allows updating the contract group name

```php
function partialUpdateContractGroup(
    string $groupIdx,
    string $xCustomerId,
    ?ContractGroupRequest $body = null
): ContractGroup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupIdx` | `string` | Template, Required | The countract group ID |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?ContractGroupRequest`](../../doc/models/contract-group-request.md) | Body, Optional | - |

## Response Type

[`ContractGroup`](../../doc/models/contract-group.md)

## Example Usage

```php
$groupIdx = 'group_idx8';
$xCustomerId = 'X-Customer-Id2';

$result = $contractGroupsController->partialUpdateContractGroup($groupIdx, $xCustomerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ContractGroupValidationErrorException`](../../doc/models/contract-group-validation-error-exception.md) |
| 404 | Not Found | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


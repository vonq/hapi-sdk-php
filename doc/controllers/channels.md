# Channels

```php
$channelsController = $client->getChannelsController();
```

## Class Name

`ChannelsController`

## Methods

* [List Channels](../../doc/controllers/channels.md#list-channels)
* [Retrieve Channel](../../doc/controllers/channels.md#retrieve-channel)


# List Channels

This endpoint exposes a list of channels with support for contracts. For all of the required details for creating a contract or a campaign for each channel, please call the "Retrieve details for channel with support for contracts".

```php
function listChannels(
    string $xCustomerId,
    ?string $search = null,
    ?int $limit = 25,
    ?int $offset = 0,
    ?string $acceptLanguage = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `search` | `?string` | Query, Optional | A search term |
| `limit` | `?int` | Query, Optional | Number of results to return per page<br>**Default**: `25`<br>**Constraints**: `>= 0`, `<= 100` |
| `offset` | `?int` | Query, Optional | The initial index from which to return the results<br>**Default**: `0`<br>**Constraints**: `>= 0` |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |

## Response Type

[`PaginatedListChannelListModel`](../../doc/models/paginated-list-channel-list-model.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';
$search = 'search2';
$limit = 10;
$offset = 0;
$acceptLanguage = Models\AcceptLanguageEnum::NL;

$apiResponse = $channelsController->listChannels($xCustomerId, $search, $limit, $offset, $acceptLanguage);
```

## Example Response *(as JSON)*

```json
{
  "count": 123,
  "next": "string",
  "previous": "string",
  "results": [
    {
      "id": 66,
      "mc_enabled": true,
      "name": "string",
      "type": "string",
      "url": "http://example.com"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


# Retrieve Channel

This endpoint exposes the details of a channel with support for contracts,as well as all the required details for creating a contract or a campaign for each channel.

```php
function retrieveChannel(int $channelId, string $xCustomerId, ?string $acceptLanguage = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `channelId` | `int` | Template, Required | ID of the channel |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |

## Response Type

[`LimitedChannelModel`](../../doc/models/limited-channel-model.md)

## Example Usage

```php
$channelId = 154;
$xCustomerId = 'X-Customer-Id2';
$acceptLanguage = Models\AcceptLanguageEnum::NL;

$apiResponse = $channelsController->retrieveChannel($channelId, $xCustomerId, $acceptLanguage);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |
| 404 | Not Found | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


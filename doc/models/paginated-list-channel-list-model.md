
# Paginated List Channel List Model

Paginated list of channels, with basic information for each channel

## Structure

`PaginatedListChannelListModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | Total number of channels | getCount(): ?int | setCount(?int count): void |
| `next` | `?string` | Optional | Path to the next page of results, if any | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Optional | Path to the previous page of results, if any | getPrevious(): ?string | setPrevious(?string previous): void |
| `results` | [`?(ListChannelModel[])`](../../doc/models/list-channel-model.md) | Optional | - | getResults(): ?array | setResults(?array results): void |

## Example (as JSON)

```json
{
  "count": null,
  "next": null,
  "previous": null,
  "results": null
}
```


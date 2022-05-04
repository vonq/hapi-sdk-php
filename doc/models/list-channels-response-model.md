
# List Channels Response Model

## Structure

`ListChannelsResponseModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `int` | Required | - | getCount(): int | setCount(int count): void |
| `next` | `?string` | Required | - | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Required | - | getPrevious(): ?string | setPrevious(?string previous): void |
| `results` | [`ChannelLiteModel[]`](../../doc/models/channel-lite-model.md) | Required | - | getResults(): array | setResults(array results): void |

## Example (as JSON)

```json
{
  "count": 60,
  "next": "next2",
  "previous": "previous8",
  "results": [
    {
      "mc_enabled": true,
      "id": 29,
      "name": "name3",
      "url": "url7",
      "type": "type7"
    }
  ]
}
```


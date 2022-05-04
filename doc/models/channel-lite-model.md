
# Channel Lite Model

## Structure

`ChannelLiteModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mcEnabled` | `bool` | Required | - | getMcEnabled(): bool | setMcEnabled(bool mcEnabled): void |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getName(): string | setName(string name): void |
| `url` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getUrl(): string | setUrl(string url): void |
| `type` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "mc_enabled": false,
  "id": 112,
  "name": "name0",
  "url": "url4",
  "type": "type0"
}
```


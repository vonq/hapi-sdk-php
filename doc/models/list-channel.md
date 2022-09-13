
# List Channel

## Structure

`ListChannel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `mcEnabled` | `?bool` | Optional | - | getMcEnabled(): ?bool | setMcEnabled(?bool mcEnabled): void |
| `name` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getName(): string | setName(string name): void |
| `type` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getType(): string | setType(string type): void |
| `url` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getUrl(): string | setUrl(string url): void |
| `logoUrl` | [`?(ProductLogo[])`](../../doc/models/product-logo.md) | Optional | - | getLogoUrl(): ?array | setLogoUrl(?array logoUrl): void |
| `logoSquareUrl` | [`?(ProductLogoWithSize[])`](../../doc/models/product-logo-with-size.md) | Optional | - | getLogoSquareUrl(): ?array | setLogoSquareUrl(?array logoSquareUrl): void |
| `logoRectangleUrl` | [`?(ProductLogoWithSize[])`](../../doc/models/product-logo-with-size.md) | Optional | - | getLogoRectangleUrl(): ?array | setLogoRectangleUrl(?array logoRectangleUrl): void |

## Example (as JSON)

```json
{
  "id": 66,
  "name": null,
  "type": null,
  "url": null
}
```


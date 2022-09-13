
# List Channel Model

## Structure

`ListChannelModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `mcEnabled` | `?bool` | Optional | - | getMcEnabled(): ?bool | setMcEnabled(?bool mcEnabled): void |
| `name` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getName(): string | setName(string name): void |
| `type` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getType(): string | setType(string type): void |
| `url` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getUrl(): string | setUrl(string url): void |
| `logoUrl` | [`?(ProductLogoModel[])`](../../doc/models/product-logo-model.md) | Optional | - | getLogoUrl(): ?array | setLogoUrl(?array logoUrl): void |
| `logoSquareUrl` | [`?(ProductLogoWithSizeModel[])`](../../doc/models/product-logo-with-size-model.md) | Optional | - | getLogoSquareUrl(): ?array | setLogoSquareUrl(?array logoSquareUrl): void |
| `logoRectangleUrl` | [`?(ProductLogoWithSizeModel[])`](../../doc/models/product-logo-with-size-model.md) | Optional | - | getLogoRectangleUrl(): ?array | setLogoRectangleUrl(?array logoRectangleUrl): void |

## Example (as JSON)

```json
{
  "id": 112,
  "mc_enabled": false,
  "logo_url": [
    {
      "url": "url9"
    },
    {
      "url": "url0"
    },
    {
      "url": "url1"
    }
  ],
  "logo_square_url": [
    {
      "url": "url5",
      "size": "size1"
    },
    {
      "url": "url6",
      "size": "size2"
    },
    {
      "url": "url7",
      "size": "size3"
    }
  ],
  "logo_rectangle_url": [
    {
      "url": "url5",
      "size": "size9"
    },
    {
      "url": "url6",
      "size": "size8"
    },
    {
      "url": "url7",
      "size": "size7"
    }
  ]
}
```


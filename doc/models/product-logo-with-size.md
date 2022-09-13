
# Product Logo With Size

Logo Object used by the channels or products. Most Products and Channels will have a logo associated. These can be displayed by the partner as square or rectangular.

## Structure

`ProductLogoWithSize`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getUrl(): string | setUrl(string url): void |
| `size` | `string` | Required | Size format: WIDTHxHEIGHT<br>**Constraints**: *Minimum Length*: `3` | getSize(): string | setSize(string size): void |

## Example (as JSON)

```json
{
  "url": "url4",
  "size": "size0"
}
```


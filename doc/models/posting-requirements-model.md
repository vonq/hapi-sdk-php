
# Posting Requirements Model

## Structure

`PostingRequirementsModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `someText` | `?string` | Optional | - | getSomeText(): ?string | setSomeText(?string someText): void |
| `multipleSelectField` | `?(string[])` | Optional | - | getMultipleSelectField(): ?array | setMultipleSelectField(?array multipleSelectField): void |
| `someIntValue` | `?float` | Optional | - | getSomeIntValue(): ?float | setSomeIntValue(?float someIntValue): void |

## Example (as JSON)

```json
{
  "someText": "example",
  "multipleSelectField": null,
  "someIntValue": 22
}
```


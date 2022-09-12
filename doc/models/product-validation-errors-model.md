
# Product Validation Errors Model

## Structure

`ProductValidationErrorsModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `credentials` | `array` | Required | - | getCredentials(): array | setCredentials(array credentials): void |
| `postingRequirements` | `array` | Required | - | getPostingRequirements(): array | setPostingRequirements(array postingRequirements): void |

## Example (as JSON)

```json
{
  "credentials": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "posting_requirements": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    },
    "key1": {
      "key1": "val1",
      "key2": "val2"
    }
  }
}
```


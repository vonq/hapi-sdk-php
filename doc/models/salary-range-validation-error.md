
# Salary Range Validation Error

## Structure

`SalaryRangeValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `to` | `?(string[])` | Optional | - | getTo(): ?array | setTo(?array to): void |
| `from` | `?(string[])` | Optional | - | getFrom(): ?array | setFrom(?array from): void |
| `currency` | `?(string[])` | Optional | - | getCurrency(): ?array | setCurrency(?array currency): void |

## Example (as JSON)

```json
{
  "to": [
    "This value should not be blank."
  ]
}
```


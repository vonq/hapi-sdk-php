
# Weekly Working Hours Validation Error

## Structure

`WeeklyWorkingHoursValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `to` | `string[]` | Required | - | getTo(): array | setTo(array to): void |
| `from` | `?(string[])` | Optional | - | getFrom(): ?array | setFrom(?array from): void |

## Example (as JSON)

```json
{
  "to": [
    "This value should not be blank."
  ]
}
```


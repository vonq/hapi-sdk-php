
# Salary Indication Validation Error

## Structure

`SalaryIndicationValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | `?(string[])` | Optional | - | getPeriod(): ?array | setPeriod(?array period): void |
| `range` | [`?SalaryRangeValidationError`](../../doc/models/salary-range-validation-error.md) | Optional | - | getRange(): ?SalaryRangeValidationError | setRange(?SalaryRangeValidationError range): void |

## Example (as JSON)

```json
{
  "period": [
    "A SalaryIndication needs a period"
  ],
  "range": {
    "to": [
      "This value should not be blank."
    ]
  }
}
```


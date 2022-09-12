
# Salary Indication Validation Error Model

## Structure

`SalaryIndicationValidationErrorModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | `?(string[])` | Optional | - | getPeriod(): ?array | setPeriod(?array period): void |
| `range` | [`?SalaryRangeValidationErrorModel`](../../doc/models/salary-range-validation-error-model.md) | Optional | - | getRange(): ?SalaryRangeValidationErrorModel | setRange(?SalaryRangeValidationErrorModel range): void |

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


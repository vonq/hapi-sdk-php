
# Salary Indication Model

## Structure

`SalaryIndicationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | `string[]` | Required | - | getPeriod(): array | setPeriod(array period): void |
| `range` | [`Range4Model`](../../doc/models/range-4-model.md) | Required | - | getRange(): Range4Model | setRange(Range4Model range): void |

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


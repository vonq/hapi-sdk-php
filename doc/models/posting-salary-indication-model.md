
# Posting Salary Indication Model

## Structure

`PostingSalaryIndicationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | [`string (PeriodEnum)`](../../doc/models/period-enum.md) | Required | - | getPeriod(): string | setPeriod(string period): void |
| `range` | [`Range3Model`](../../doc/models/range-3-model.md) | Required | - | getRange(): Range3Model | setRange(Range3Model range): void |

## Example (as JSON)

```json
{
  "period": "yearly",
  "range": {
    "to": 60000
  }
}
```


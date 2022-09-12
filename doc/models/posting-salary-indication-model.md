
# Posting Salary Indication Model

Most job boards require a salary indication to be provided. This is a required field to be able to offer a standardized check out experience for all 5000+ channels we offer, and to enable fast campaign delivery.

## Structure

`PostingSalaryIndicationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | [`string (PeriodEnum)`](../../doc/models/period-enum.md) | Required | - | getPeriod(): string | setPeriod(string period): void |
| `range` | [`SalaryRangeModel`](../../doc/models/salary-range-model.md) | Required | - | getRange(): SalaryRangeModel | setRange(SalaryRangeModel range): void |

## Example (as JSON)

```json
{
  "period": "yearly",
  "range": {
    "to": 60000
  }
}
```


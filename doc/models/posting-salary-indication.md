
# Posting Salary Indication

Most job boards require a salary indication to be provided. This is a required field to be able to offer a standardized check out experience for all 5000+ channels we offer, and to enable fast campaign delivery.

## Structure

`PostingSalaryIndication`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | [`string (PeriodEnum)`](../../doc/models/period-enum.md) | Required | - | getPeriod(): string | setPeriod(string period): void |
| `range` | [`SalaryRange`](../../doc/models/salary-range.md) | Required | - | getRange(): SalaryRange | setRange(SalaryRange range): void |

## Example (as JSON)

```json
{
  "period": "yearly",
  "range": {
    "to": 60000
  }
}
```


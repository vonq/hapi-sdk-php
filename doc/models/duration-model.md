
# Duration Model

## Structure

`DurationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `range` | [`?string (DurationRangeEnum)`](../../doc/models/duration-range-enum.md) | Optional | The range of the duration | getRange(): ?string | setRange(?string range): void |
| `period` | `?int` | Optional | The duration a vacancy is actively listed on a channel | getPeriod(): ?int | setPeriod(?int period): void |

## Example (as JSON)

```json
{
  "range": "days",
  "period": 30
}
```



# Duration in Days Model

## Structure

`DurationInDaysModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `range` | [`?string (RangeDurationInDaysEnum)`](../../doc/models/range-duration-in-days-enum.md) | Optional | - | getRange(): ?string | setRange(?string range): void |
| `period` | `?int` | Optional | The duration a vacancy is actively listed on a channel | getPeriod(): ?int | setPeriod(?int period): void |

## Example (as JSON)

```json
{
  "range": null,
  "period": 30
}
```


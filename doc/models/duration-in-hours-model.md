
# Duration in Hours Model

## Structure

`DurationInHoursModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `range` | [`?string (RangeDurationInHoursEnum)`](../../doc/models/range-duration-in-hours-enum.md) | Optional | The range of the time to process | getRange(): ?string | setRange(?string range): void |
| `period` | `?int` | Optional | The period of the time to process | getPeriod(): ?int | setPeriod(?int period): void |

## Example (as JSON)

```json
{
  "range": null,
  "period": 24
}
```


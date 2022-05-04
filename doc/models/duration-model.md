
# Duration Model

## Structure

`DurationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `range` | [`?string (RangeEnum)`](../../doc/models/range-enum.md) | Optional | The range of the duration | getRange(): ?string | setRange(?string range): void |
| `period` | `?float` | Optional | The duration a vacancy is actively listed on a channel | getPeriod(): ?float | setPeriod(?float period): void |

## Example (as JSON)

```json
{
  "range": null,
  "period": null
}
```


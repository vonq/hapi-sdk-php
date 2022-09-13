
# Posting Weekly Working Hours Model

## Structure

`PostingWeeklyWorkingHoursModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `from` | `?int` | Optional | Minimum amount of Working Hours<br>**Constraints**: `>= 0` | getFrom(): ?int | setFrom(?int from): void |
| `to` | `int` | Required | Maximum amount of Working Hours<br>**Constraints**: `>= 1`, `<= 168` | getTo(): int | setTo(int to): void |

## Example (as JSON)

```json
{
  "from": 32,
  "to": 40
}
```


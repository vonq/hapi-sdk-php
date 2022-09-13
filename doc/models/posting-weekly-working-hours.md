
# Posting Weekly Working Hours

## Structure

`PostingWeeklyWorkingHours`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `from` | `?int` | Optional | Minimum amount of Working Hours<br>**Constraints**: `>= 0` | getFrom(): ?int | setFrom(?int from): void |
| `to` | `int` | Required | Maximum amount of Working Hours<br>**Constraints**: `>= 1`, `<= 168` | getTo(): int | setTo(int to): void |

## Example (as JSON)

```json
{
  "to": 40
}
```


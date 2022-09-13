
# Salary Range Model

## Structure

`SalaryRangeModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `from` | `?int` | Optional | Minimum salary indication of the indicated period, if given, cannot be greater<br><br>than 'to', but equal to 'to' is allowed. This integer value should be specified in units (not cents).<br>**Constraints**: `>= 0` | getFrom(): ?int | setFrom(?int from): void |
| `to` | `int` | Required | Maximum salary indication of the indicated period. This integer value should be specified in units (not cents). | getTo(): int | setTo(int to): void |
| `currency` | `?string` | Optional | The currency in which the range amount is expressed. Must be a valid ISO-4217 value. | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "from": 56000,
  "to": 60000,
  "currency": "EUR"
}
```


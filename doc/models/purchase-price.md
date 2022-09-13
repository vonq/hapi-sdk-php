
# Purchase Price

## Structure

`PurchasePrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | **Constraints**: `>= 1` | getAmount(): int | setAmount(int amount): void |
| `currency` | [`string (CurrencyEnum)`](../../doc/models/currency-enum-1.md) | Required | - | getCurrency(): string | setCurrency(string currency): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "currency": "MZM"
}
```


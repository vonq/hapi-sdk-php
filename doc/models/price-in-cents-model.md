
# Price in Cents Model

## Structure

`PriceInCentsModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | The price in cents. | getAmount(): int | setAmount(int amount): void |
| `currency` | [`string (CurrencyEnum)`](../../doc/models/currency-enum.md) | Required | ISO 4217 code for the Currency. | getCurrency(): string | setCurrency(string currency): void |

## Example (as JSON)

```json
{
  "amount": 12599,
  "currency": "EUR"
}
```


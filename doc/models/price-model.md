
# Price Model

## Structure

`PriceModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?float` | Optional | Price amount in specified currency and 2 decimal places | getAmount(): ?float | setAmount(?float amount): void |
| `currency` | [`?string (CurrencyEnum)`](../../doc/models/currency-enum.md) | Optional | ISO 4217 code for the Currency. | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "amount": null,
  "currency": null
}
```


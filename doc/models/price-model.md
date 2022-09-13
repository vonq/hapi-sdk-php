
# Price Model

## Structure

`PriceModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?float` | Optional | Price amount in specified currency and 2 decimal places | getAmount(): ?float | setAmount(?float amount): void |
| `currency` | [`?string (AcceptedCurrencyEnum)`](../../doc/models/accepted-currency-enum.md) | Optional | An ISO 4217 code for a currency to use for order invoicing. | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "amount": 399.98,
  "currency": null
}
```


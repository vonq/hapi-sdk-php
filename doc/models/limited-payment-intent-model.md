
# Limited Payment Intent Model

## Structure

`LimitedPaymentIntentModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentIntentClientSecret` | `string` | Required | A secret string needed to instantiate Stripe Elements. | getPaymentIntentClientSecret(): string | setPaymentIntentClientSecret(string paymentIntentClientSecret): void |
| `amount` | `int` | Required | Amount to be charged, in USD cents. | getAmount(): int | setAmount(int amount): void |

## Example (as JSON)

```json
{
  "payment_intent_client_secret": "payment_intent_client_secret8",
  "amount": 46
}
```


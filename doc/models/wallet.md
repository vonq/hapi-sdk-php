
# Wallet

A wallet can be used by ATS customers to pay for campaigns. It can be funded with the `top up` functionality.

## Structure

`Wallet`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `balance` | [`Balance`](../../doc/models/balance.md) | Required | - | getBalance(): Balance | setBalance(Balance balance): void |
| `createdDate` | `\DateTime` | Required | - | getCreatedDate(): \DateTime | setCreatedDate(\DateTime createdDate): void |
| `hasBillingDetails` | `bool` | Required | **Default**: `false` | getHasBillingDetails(): bool | setHasBillingDetails(bool hasBillingDetails): void |

## Example (as JSON)

```json
{
  "id": "6c2d2255-9139-57dc-bffe-8ab570403803",
  "balance": {
    "USD": 10000
  },
  "created_date": "03/09/2022 10:00:00",
  "has_billing_details": false
}
```


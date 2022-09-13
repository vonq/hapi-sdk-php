
# Payment Intent Model

## Structure

`PaymentIntentModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletId` | `string` | Required | - | getWalletId(): string | setWalletId(string walletId): void |
| `partnerId` | `string` | Required | - | getPartnerId(): string | setPartnerId(string partnerId): void |
| `amount` | `int` | Required | The amount to be charged, in USD cents.<br>**Constraints**: `>= 100`, `<= 999999` | getAmount(): int | setAmount(int amount): void |
| `queryParamsAmount` | `?int` | Optional | The amount initially passed to the top-up iframe, in USD cents. | getQueryParamsAmount(): ?int | setQueryParamsAmount(?int queryParamsAmount): void |
| `successCallbackUrl` | `?string` | Optional | - | getSuccessCallbackUrl(): ?string | setSuccessCallbackUrl(?string successCallbackUrl): void |
| `agreeTerms` | `?bool` | Optional | **Default**: `false` | getAgreeTerms(): ?bool | setAgreeTerms(?bool agreeTerms): void |

## Example (as JSON)

```json
{
  "walletId": null,
  "partnerId": null,
  "amount": null,
  "queryParamsAmount": null,
  "successCallbackUrl": null,
  "agreeTerms": false
}
```


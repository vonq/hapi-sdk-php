
# Post Contract Model

## Structure

`PostContractModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `channelId` | `float` | Required | - | getChannelId(): float | setChannelId(float channelId): void |
| `credentials` | `array` | Required | An object with credentials data | getCredentials(): array | setCredentials(array credentials): void |
| `facets` | `?array` | Optional | An object with product parameters | getFacets(): ?array | setFacets(?array facets): void |
| `followedInstructions` | `?bool` | Optional | When creating contracts for Channels that require the end-user to follow instructions (based on the `manual_setup_required` key in the response body for the [Retrieve details for channel with support for contracts](https://vonq.stoplight.io/docs/hapi/b3A6NTUxMjYwODI-retrieve-details-for-channel-with-support-for-contracts) endpoint), set this value to `true` to confirm the user has done so. For quality purposes, setting this field to `true` for Channels that don't require following instructions will result in a 400 Bad Request. | getFollowedInstructions(): ?bool | setFollowedInstructions(?bool followedInstructions): void |
| `expiryDate` | `?\DateTime` | Optional | - | getExpiryDate(): ?\DateTime | setExpiryDate(?\DateTime expiryDate): void |
| `credits` | `?float` | Optional | - | getCredits(): ?float | setCredits(?float credits): void |
| `purchasePrice` | [`?ContractPurchasePriceModel`](../../doc/models/contract-purchase-price-model.md) | Optional | - | getPurchasePrice(): ?ContractPurchasePriceModel | setPurchasePrice(?ContractPurchasePriceModel purchasePrice): void |

## Example (as JSON)

```json
{
  "channel_id": 0,
  "credentials": null
}
```


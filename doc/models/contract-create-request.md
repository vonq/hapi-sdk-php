
# Contract Create Request

## Structure

`ContractCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `alias` | `?string` | Optional | Optional alias used to differentiate multiple contracts on the same channel. If left empty during contract creation, it will be given a default value. | getAlias(): ?string | setAlias(?string alias): void |
| `channelId` | `int` | Required | - | getChannelId(): int | setChannelId(int channelId): void |
| `credentials` | `array` | Required | An object with credentials data | getCredentials(): array | setCredentials(array credentials): void |
| `facets` | `?array` | Optional | An object with product parameters | getFacets(): ?array | setFacets(?array facets): void |
| `expiryDate` | `?\DateTime` | Optional | - | getExpiryDate(): ?\DateTime | setExpiryDate(?\DateTime expiryDate): void |
| `credits` | `?int` | Optional | - | getCredits(): ?int | setCredits(?int credits): void |
| `purchasePrice` | [`?PurchasePrice`](../../doc/models/purchase-price.md) | Optional | - | getPurchasePrice(): ?PurchasePrice | setPurchasePrice(?PurchasePrice purchasePrice): void |
| `followedInstructions` | `?bool` | Optional | When creating contracts for Channels that require the end-user to follow instructions (based on the `manual_setup_required` key in the response body for the [Retrieve details for channel with support for contracts](https://vonq.stoplight.io/docs/hapi/b3A6NTUxMjYwODI-retrieve-details-for-channel-with-support-for-contracts) endpoint), set this value to `true` to confirm the user has done so. For quality purposes, setting this field to `true` for Channels that don't require following instructions will result in a 400 Bad Request. | getFollowedInstructions(): ?bool | setFollowedInstructions(?bool followedInstructions): void |
| `groupId` | `?string` | Optional | - | getGroupId(): ?string | setGroupId(?string groupId): void |

## Example (as JSON)

```json
{
  "alias": null,
  "channel_id": 28,
  "credentials": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "facets": null,
  "expiry_date": null,
  "credits": null,
  "purchase_price": null,
  "followed_instructions": null,
  "group_id": null
}
```


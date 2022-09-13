
# Contract Create Request Validation Error Exception

## Structure

`ContractCreateRequestValidationErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `alias` | `?(string[])` | Optional | - | getAlias(): ?array | setAlias(?array alias): void |
| `channelId` | `?(string[])` | Optional | - | getChannelId(): ?array | setChannelId(?array channelId): void |
| `credentials` | `?array` | Optional | - | getCredentials(): ?array | setCredentials(?array credentials): void |
| `facets` | `?array` | Optional | - | getFacets(): ?array | setFacets(?array facets): void |
| `expiryDate` | `?(string[])` | Optional | - | getExpiryDate(): ?array | setExpiryDate(?array expiryDate): void |
| `credits` | `?(string[])` | Optional | - | getCredits(): ?array | setCredits(?array credits): void |
| `purchasePrice` | [`?PurchasePriceValidationErrorModel`](../../doc/models/purchase-price-validation-error-model.md) | Optional | - | getPurchasePrice(): ?PurchasePriceValidationErrorModel | setPurchasePrice(?PurchasePriceValidationErrorModel purchasePrice): void |
| `followedInstructions` | `?(string[])` | Optional | - | getFollowedInstructions(): ?array | setFollowedInstructions(?array followedInstructions): void |
| `groupId` | `?(string[])` | Optional | - | getGroupId(): ?array | setGroupId(?array groupId): void |

## Example (as JSON)

```json
{
  "alias": [
    "alias8"
  ],
  "channel_id": [
    "channel_id2"
  ],
  "credentials": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "facets": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "expiry_date": [
    "expiry_date0",
    "expiry_date1",
    "expiry_date2"
  ]
}
```


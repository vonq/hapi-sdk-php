
# Campaign Status

## Structure

`CampaignStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignId` | `string` | Required | - | getCampaignId(): string | setCampaignId(string campaignId): void |
| `status` | [`string (StatusEnum)`](../../doc/models/status-enum.md) | Required | Status of the campaign. One of the following | getStatus(): string | setStatus(string status): void |
| `orderedProductsStatuses` | [`?(OrderedProductsStatusItem[])`](../../doc/models/ordered-products-status-item.md) | Optional | - | getOrderedProductsStatuses(): ?array | setOrderedProductsStatuses(?array orderedProductsStatuses): void |

## Example (as JSON)

```json
{
  "campaignId": "dd1c5be0-b0e1-41c8-ba92-e876da16c38b",
  "status": "online"
}
```


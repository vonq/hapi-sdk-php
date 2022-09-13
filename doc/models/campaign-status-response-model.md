
# Campaign Status Response Model

## Structure

`CampaignStatusResponseModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?CampaignStatusModel`](../../doc/models/campaign-status-model.md) | Optional | - | getData(): ?CampaignStatusModel | setData(?CampaignStatusModel data): void |

## Example (as JSON)

```json
{
  "data": {
    "campaignId": "dd1c5be0-b0e1-41c8-ba92-e876da16c38b",
    "status": "online",
    "orderedProductsStatuses": [
      {
        "productId": "8eefb7a1-c5f3-5739-9fe6-cea17e2ee742",
        "status": "online"
      }
    ]
  }
}
```


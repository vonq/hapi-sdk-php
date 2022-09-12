
# Take Campaign Offline Bad Request Error Response Exception

## Structure

`TakeCampaignOfflineBadRequestErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignId` | `?(string[])` | Optional | Validation error on the `campaignId` field. | getCampaignId(): ?array | setCampaignId(?array campaignId): void |
| `status` | `?(string[])` | Optional | Validation error on the `status` field. | getStatus(): ?array | setStatus(?array status): void |
| `campaignIdInUrl` | `?(string[])` | Optional | Error for the path parameter `campaignId` | getCampaignIdInUrl(): ?array | setCampaignIdInUrl(?array campaignIdInUrl): void |

## Example (as JSON)

```json
{
  "campaignId": [
    "The campaignId in the request body should match the campaignId in the request URL."
  ],
  "status": [
    "This value should not be blank.",
    "This value should be equal to \"offline\""
  ]
}
```


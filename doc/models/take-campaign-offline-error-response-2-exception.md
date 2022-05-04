
# Take Campaign Offline Error Response 2 Exception

## Structure

`TakeCampaignOfflineErrorResponse2Exception`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignId` | `string[]` | Required | - | getCampaignId(): array | setCampaignId(array campaignId): void |
| `status` | `string[]` | Required | - | getStatus(): array | setStatus(array status): void |

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


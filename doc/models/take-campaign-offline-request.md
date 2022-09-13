
# Take Campaign Offline Request

## Structure

`TakeCampaignOfflineRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignId` | `string` | Required | Id of the Campaign you want to take offline | getCampaignId(): string | setCampaignId(string campaignId): void |
| `status` | `string` | Required, Constant | The new status you want the campaign to have.<br>**Default**: `'offline'` | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "campaignId": "ffb37e76-d4fe-5ad6-8441-b02c1b15aa4c",
  "status": "offline"
}
```


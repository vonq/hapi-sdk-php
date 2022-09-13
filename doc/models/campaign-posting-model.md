
# Campaign Posting Model

## Structure

`CampaignPostingModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The name of the Product that was bought | getName(): ?string | setName(?string name): void |
| `clicks` | `?int` | Optional | Number of clicks of the mentioned posting | getClicks(): ?int | setClicks(?int clicks): void |
| `productId` | `?string` | Optional | The ID of the product that was bought | getProductId(): ?string | setProductId(?string productId): void |

## Example (as JSON)

```json
{
  "name": "Linkedin.com 30 days",
  "clicks": 14,
  "productId": "245e4f13-436e-5c18-bf51-964c7eab288c"
}
```


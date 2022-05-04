
# Ordered Products Status Item Model

## Structure

`OrderedProductsStatusItemModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?string` | Optional | - | getProductId(): ?string | setProductId(?string productId): void |
| `status` | [`?string (ChannelStatusEnum)`](../../doc/models/channel-status-enum.md) | Optional | Status of the product. One of the following | getStatus(): ?string | setStatus(?string status): void |
| `statusDescription` | `?string` | Optional | Additional information about product status | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |

## Example (as JSON)

```json
{
  "productId": null,
  "status": null,
  "statusDescription": null
}
```


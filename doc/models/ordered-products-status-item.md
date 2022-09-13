
# Ordered Products Status Item

## Structure

`OrderedProductsStatusItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `string` | Required | - | getProductId(): string | setProductId(string productId): void |
| `status` | [`string (OrderedProductStatusEnum)`](../../doc/models/ordered-product-status-enum.md) | Required | Status of the product. One of the following | getStatus(): string | setStatus(string status): void |
| `statusDescription` | `?string` | Required | Additional information about product status | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |

## Example (as JSON)

```json
{
  "productId": "8eefb7a1-c5f3-5739-9fe6-cea17e2ee742",
  "status": "online",
  "statusDescription": null
}
```


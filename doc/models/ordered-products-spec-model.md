
# Ordered Products Spec Model

## Structure

`OrderedProductsSpecModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `string[]` | Required | - | getProductId(): array | setProductId(array productId): void |
| `utm` | `string[]` | Required | - | getUtm(): array | setUtm(array utm): void |

## Example (as JSON)

```json
{
  "productId": [
    "This value should not be blank."
  ],
  "utm": [
    "This value should not be blank."
  ]
}
```


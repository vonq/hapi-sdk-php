
# Ordered Products Spec Validation Error Model

## Structure

`OrderedProductsSpecValidationErrorModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?(string[])` | Optional | - | getProductId(): ?array | setProductId(?array productId): void |
| `utm` | `?(string[])` | Optional | - | getUtm(): ?array | setUtm(?array utm): void |
| `contractId` | `?(string[])` | Optional | - | getContractId(): ?array | setContractId(?array contractId): void |
| `postingRequirements` | `?(string[])` | Optional | - | getPostingRequirements(): ?array | setPostingRequirements(?array postingRequirements): void |

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


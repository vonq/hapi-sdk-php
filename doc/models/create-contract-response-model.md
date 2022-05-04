
# Create Contract Response Model

## Structure

`CreateContractResponseModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerId` | `string` | Required | - | getCustomerId(): string | setCustomerId(string customerId): void |
| `contractId` | `string` | Required | - | getContractId(): string | setContractId(string contractId): void |
| `channelId` | `int` | Required | - | getChannelId(): int | setChannelId(int channelId): void |
| `credentials` | `string` | Required | - | getCredentials(): string | setCredentials(string credentials): void |
| `className` | `string` | Required | - | getClassName(): string | setClassName(string className): void |
| `facets` | `array` | Required | - | getFacets(): array | setFacets(array facets): void |
| `product` | [`ProductLiteModel`](../../doc/models/product-lite-model.md) | Required | - | getProduct(): ProductLiteModel | setProduct(ProductLiteModel product): void |
| `postingRequirements` | `string` | Required | - | getPostingRequirements(): string | setPostingRequirements(string postingRequirements): void |
| `expiryDate` | `?\DateTime` | Optional | - | getExpiryDate(): ?\DateTime | setExpiryDate(?\DateTime expiryDate): void |
| `credits` | `?int` | Optional | - | getCredits(): ?int | setCredits(?int credits): void |
| `purchasePrice` | [`?PurchasePriceModel`](../../doc/models/purchase-price-model.md) | Optional | - | getPurchasePrice(): ?PurchasePriceModel | setPurchasePrice(?PurchasePriceModel purchasePrice): void |

## Example (as JSON)

```json
{
  "customer_id": "76e124d4-ae69-4753-bede-259d505258b7",
  "contract_id": "3a283b8f-1670-404b-b804-92f67e66b71c",
  "channel_id": 13,
  "credentials": "",
  "class_name": "",
  "facets": {},
  "product": {
    "product_id": "2e8c3c17-179b-4db1-9e2b-d48369b5e409",
    "title": "product title"
  },
  "posting_requirements": ""
}
```


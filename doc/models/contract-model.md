
# Contract Model

## Structure

`ContractModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contractId` | `string` | Required | The identifier of the Contract. To be used when creating a Campaign | getContractId(): string | setContractId(string contractId): void |
| `customerId` | `string` | Required | The customer_id this contract belongs to. Based on the original `X-Customer-Id` header used when the contract was created. | getCustomerId(): string | setCustomerId(string customerId): void |
| `channelId` | `float` | Required | The Channel (job board) the contract is to be used for | getChannelId(): float | setChannelId(float channelId): void |
| `credentials` | `array` | Required | AES Encrypted credentials | getCredentials(): array | setCredentials(array credentials): void |
| `className` | `string` | Required | Channel slug | getClassName(): string | setClassName(string className): void |
| `facets` | `array` | Required | An object with contract parameters | getFacets(): array | setFacets(array facets): void |
| `product` | [`ContractProductModel`](../../doc/models/contract-product-model.md) | Required | The Product to be used in combination with the Contract when ordering a Campaign. | getProduct(): ContractProductModel | setProduct(ContractProductModel product): void |
| `postingRequirements` | [`FacetModel[]`](../../doc/models/facet-model.md) | Required | A list of the Contract Channel's Facets | getPostingRequirements(): array | setPostingRequirements(array postingRequirements): void |
| `expiryDate` | `?\DateTime` | Required | - | getExpiryDate(): ?\DateTime | setExpiryDate(?\DateTime expiryDate): void |
| `credits` | `?float` | Required | - | getCredits(): ?float | setCredits(?float credits): void |
| `purchasePrice` | [`?ContractPurchasePriceModel`](../../doc/models/contract-purchase-price-model.md) | Optional | - | getPurchasePrice(): ?ContractPurchasePriceModel | setPurchasePrice(?ContractPurchasePriceModel purchasePrice): void |

## Example (as JSON)

```json
{
  "contract_id": "06a8f6f0-5e0e-4614-869e-ab95a8530633",
  "customer_id": "c0cbefa5-6f04-4dbc-8208-5963bc433166",
  "channel_id": 0,
  "credentials": null,
  "class_name": null,
  "facets": null,
  "product": null,
  "posting_requirements": {
    "name": null,
    "label": null,
    "sort": null,
    "required": null,
    "type": "AUTOCOMPLETE",
    "options": null,
    "autocomplete": null
  },
  "expiry_date": "02/15/2022 12:03:45",
  "credits": 0
}
```


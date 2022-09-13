
# List Contract

## Structure

`ListContract`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contractId` | `string` | Required | The identifier of the Contract. To be used when creating a Campaign | getContractId(): string | setContractId(string contractId): void |
| `customerId` | `string` | Required | The customer_id this contract belongs to. Based on the original `X-Customer-Id` header used when the contract was created. | getCustomerId(): string | setCustomerId(string customerId): void |
| `channelId` | `int` | Required | The Channel (job board) the contract is to be used for | getChannelId(): int | setChannelId(int channelId): void |
| `alias` | `?string` | Optional | Optional alias used to differentiate multiple contracts on the same channel. If left empty during contract creation, it will be given a default value. | getAlias(): ?string | setAlias(?string alias): void |
| `className` | `string` | Required | Channel slug | getClassName(): string | setClassName(string className): void |
| `facets` | `array` | Required | An object with contract parameters | getFacets(): array | setFacets(array facets): void |
| `product` | [`ContractProduct`](../../doc/models/contract-product.md) | Required | The Product to be used in combination with the Contract when ordering a Campaign. | getProduct(): ContractProduct | setProduct(ContractProduct product): void |
| `expiryDate` | `?\DateTime` | Required | - | getExpiryDate(): ?\DateTime | setExpiryDate(?\DateTime expiryDate): void |
| `credits` | `?int` | Required | - | getCredits(): ?int | setCredits(?int credits): void |
| `purchasePrice` | [`?ContractPurchasePrice`](../../doc/models/contract-purchase-price.md) | Optional | - | getPurchasePrice(): ?ContractPurchasePrice | setPurchasePrice(?ContractPurchasePrice purchasePrice): void |
| `igbCustomerId` | `string` | Required | - | getIgbCustomerId(): string | setIgbCustomerId(string igbCustomerId): void |
| `group` | [`?ContractGroup`](../../doc/models/contract-group.md) | Optional | Model containing the contract group details | getGroup(): ?ContractGroup | setGroup(?ContractGroup group): void |
| `channel` | [`?ListChannel`](../../doc/models/list-channel.md) | Optional | - | getChannel(): ?ListChannel | setChannel(?ListChannel channel): void |

## Example (as JSON)

```json
{
  "contract_id": "06a8f6f0-5e0e-4614-869e-ab95a8530633",
  "customer_id": "c0cbefa5-6f04-4dbc-8208-5963bc433166",
  "channel_id": 0,
  "class_name": null,
  "facets": null,
  "product": null,
  "expiry_date": "02/15/2022 12:03:45",
  "credits": 0,
  "igb_customer_id": null
}
```


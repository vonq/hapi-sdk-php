
# List Contract Model

## Structure

`ListContractModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contractId` | `string` | Required | The identifier of the Contract. To be used when creating a Campaign | getContractId(): string | setContractId(string contractId): void |
| `customerId` | `string` | Required | The customer_id this contract belongs to. Based on the original `X-Customer-Id` header used when the contract was created. | getCustomerId(): string | setCustomerId(string customerId): void |
| `channelId` | `int` | Required | The Channel (job board) the contract is to be used for | getChannelId(): int | setChannelId(int channelId): void |
| `alias` | `?string` | Optional | Optional alias used to differentiate multiple contracts on the same channel. If left empty during contract creation, it will be given a default value. | getAlias(): ?string | setAlias(?string alias): void |
| `className` | `string` | Required | Channel slug | getClassName(): string | setClassName(string className): void |
| `facets` | `array` | Required | An object with contract parameters | getFacets(): array | setFacets(array facets): void |
| `product` | [`ContractProductModel`](../../doc/models/contract-product-model.md) | Required | The Product to be used in combination with the Contract when ordering a Campaign. | getProduct(): ContractProductModel | setProduct(ContractProductModel product): void |
| `expiryDate` | `?\DateTime` | Required | - | getExpiryDate(): ?\DateTime | setExpiryDate(?\DateTime expiryDate): void |
| `credits` | `?int` | Required | - | getCredits(): ?int | setCredits(?int credits): void |
| `purchasePrice` | [`?ContractPurchasePriceModel`](../../doc/models/contract-purchase-price-model.md) | Optional | - | getPurchasePrice(): ?ContractPurchasePriceModel | setPurchasePrice(?ContractPurchasePriceModel purchasePrice): void |
| `igbCustomerId` | `string` | Required | - | getIgbCustomerId(): string | setIgbCustomerId(string igbCustomerId): void |
| `group` | [`?ContractGroupModel`](../../doc/models/contract-group-model.md) | Optional | Model containing the contract group details | getGroup(): ?ContractGroupModel | setGroup(?ContractGroupModel group): void |
| `channel` | [`?ListChannelModel`](../../doc/models/list-channel-model.md) | Optional | - | getChannel(): ?ListChannelModel | setChannel(?ListChannelModel channel): void |

## Example (as JSON)

```json
{
  "contract_id": "contract_id8",
  "customer_id": "customer_id8",
  "channel_id": 28,
  "alias": "alias2",
  "class_name": "class_name8",
  "facets": {
    "key1": "val1",
    "key2": "val2"
  },
  "product": {
    "product_id": "product_id6",
    "title": "title6"
  },
  "expiry_date": "2016-03-13T12:52:32.123Z",
  "credits": 220,
  "purchase_price": {
    "amount": 147.42,
    "currency": "currency0"
  },
  "igb_customer_id": "igb_customer_id6",
  "group": {
    "name": "name8"
  },
  "channel": {
    "id": 232,
    "mc_enabled": false,
    "logo_url": [
      {
        "url": "url5"
      },
      {
        "url": "url4"
      },
      {
        "url": "url3"
      }
    ],
    "logo_square_url": [
      {
        "url": "url9",
        "size": "size5"
      }
    ],
    "logo_rectangle_url": [
      {
        "url": "url3",
        "size": "size1"
      },
      {
        "url": "url2",
        "size": "size2"
      },
      {
        "url": "url1",
        "size": "size3"
      }
    ]
  }
}
```


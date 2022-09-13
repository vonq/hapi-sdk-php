
# Encrypted Contract Model

## Structure

`EncryptedContractModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contractId` | `string` | Required | The identifier of the Contract. To be used when creating a Campaign | getContractId(): string | setContractId(string contractId): void |
| `customerId` | `string` | Required | The customer_id this contract belongs to. Based on the original `X-Customer-Id` header used when the contract was created. | getCustomerId(): string | setCustomerId(string customerId): void |
| `channelId` | `int` | Required | The Channel (job board) the contract is to be used for | getChannelId(): int | setChannelId(int channelId): void |
| `alias` | `?string` | Optional | Optional alias used to differentiate multiple contracts on the same channel. If left empty during contract creation, it will be given a default value. | getAlias(): ?string | setAlias(?string alias): void |
| `credentials` | `array` | Required | AES Encrypted credentials | getCredentials(): array | setCredentials(array credentials): void |
| `className` | `string` | Required | Channel slug | getClassName(): string | setClassName(string className): void |
| `facets` | `array` | Required | An object with contract parameters | getFacets(): array | setFacets(array facets): void |
| `product` | [`ContractProductModel`](../../doc/models/contract-product-model.md) | Required | The Product to be used in combination with the Contract when ordering a Campaign. | getProduct(): ContractProductModel | setProduct(ContractProductModel product): void |
| `postingRequirements` | [`FacetModel[]`](../../doc/models/facet-model.md) | Required | A list of the Contract Channel's Facets | getPostingRequirements(): array | setPostingRequirements(array postingRequirements): void |
| `expiryDate` | `?\DateTime` | Required | - | getExpiryDate(): ?\DateTime | setExpiryDate(?\DateTime expiryDate): void |
| `credits` | `?int` | Required | - | getCredits(): ?int | setCredits(?int credits): void |
| `purchasePrice` | [`?ContractPurchasePriceModel`](../../doc/models/contract-purchase-price-model.md) | Optional | - | getPurchasePrice(): ?ContractPurchasePriceModel | setPurchasePrice(?ContractPurchasePriceModel purchasePrice): void |
| `igbCustomerId` | `?string` | Optional | - | getIgbCustomerId(): ?string | setIgbCustomerId(?string igbCustomerId): void |
| `channel` | [`?ListChannelModel`](../../doc/models/list-channel-model.md) | Optional | - | getChannel(): ?ListChannelModel | setChannel(?ListChannelModel channel): void |
| `group` | [`?ContractGroupModel`](../../doc/models/contract-group-model.md) | Optional | Model containing the contract group details | getGroup(): ?ContractGroupModel | setGroup(?ContractGroupModel group): void |

## Example (as JSON)

```json
{
  "contract_id": "contract_id8",
  "customer_id": "customer_id8",
  "channel_id": 28,
  "alias": "alias2",
  "credentials": {
    "key1": "val1",
    "key2": "val2"
  },
  "class_name": "class_name8",
  "facets": {
    "key1": "val1",
    "key2": "val2"
  },
  "product": {
    "product_id": "product_id6",
    "title": "title6"
  },
  "posting_requirements": [
    {
      "name": "name8",
      "label": "label8",
      "sort": "sort0",
      "required": false,
      "type": "STATISCH",
      "options": [
        {
          "default": "default5",
          "key": "key5",
          "label": "label5",
          "labels": {
            "key0": {
              "key1": "val1",
              "key2": "val2"
            },
            "key1": {
              "key1": "val1",
              "key2": "val2"
            },
            "key2": {
              "key1": "val1",
              "key2": "val2"
            }
          },
          "sort": "sort7",
          "parent": "parent5",
          "requires": [
            {
              "key1": "val1",
              "key2": "val2"
            },
            {
              "key1": "val1",
              "key2": "val2"
            }
          ]
        },
        {
          "default": "default6",
          "key": "key6",
          "label": "label6",
          "labels": {
            "key0": {
              "key1": "val1",
              "key2": "val2"
            }
          },
          "sort": "sort8",
          "parent": "parent6",
          "requires": [
            {
              "key1": "val1",
              "key2": "val2"
            },
            {
              "key1": "val1",
              "key2": "val2"
            },
            {
              "key1": "val1",
              "key2": "val2"
            }
          ]
        },
        {
          "default": "default7",
          "key": "key7",
          "label": "label7",
          "labels": {
            "key0": {
              "key1": "val1",
              "key2": "val2"
            },
            "key1": {
              "key1": "val1",
              "key2": "val2"
            }
          },
          "sort": "sort9",
          "parent": "parent7",
          "requires": [
            {
              "key1": "val1",
              "key2": "val2"
            }
          ]
        }
      ],
      "rules": [
        {
          "rule": "maxlengthcombined",
          "data": "data6"
        }
      ],
      "autocomplete": {},
      "display_rules": {
        "show": [
          {
            "facet": "facet5",
            "value": "String4",
            "op": "notempty"
          },
          {
            "facet": "facet6",
            "value": "String5",
            "op": "equal"
          },
          {
            "facet": "facet7",
            "value": "String6",
            "op": "in"
          }
        ]
      }
    },
    {
      "name": "name9",
      "label": "label9",
      "sort": "sort1",
      "required": true,
      "type": "MULTIPLE",
      "options": [
        {
          "default": "default6",
          "key": "key6",
          "label": "label6",
          "labels": {
            "key0": {
              "key1": "val1",
              "key2": "val2"
            }
          },
          "sort": "sort8",
          "parent": "parent6",
          "requires": [
            {
              "key1": "val1",
              "key2": "val2"
            },
            {
              "key1": "val1",
              "key2": "val2"
            },
            {
              "key1": "val1",
              "key2": "val2"
            }
          ]
        }
      ],
      "rules": [
        {
          "rule": "maxlevels",
          "data": "data7"
        },
        {
          "rule": "nl-pc",
          "data": "data8"
        }
      ],
      "autocomplete": {},
      "display_rules": {
        "show": [
          {
            "facet": "facet6",
            "value": "String5",
            "op": "equal"
          }
        ]
      }
    }
  ],
  "expiry_date": "2016-03-13T12:52:32.123Z",
  "credits": 220,
  "purchase_price": {
    "amount": 147.42,
    "currency": "currency0"
  },
  "igb_customer_id": "igb_customer_id6",
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
  },
  "group": {
    "name": "name8"
  }
}
```


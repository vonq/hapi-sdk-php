
# Product Validation Request Model

## Structure

`ProductValidationRequestModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getProductId(): string | setProductId(string productId): void |
| `contractId` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getContractId(): string | setContractId(string contractId): void |
| `vacancy` | [`?(InputRequestModel[])`](../../doc/models/input-request-model.md) | Optional | - | getVacancy(): ?array | setVacancy(?array vacancy): void |
| `postingRequirements` | [`InputRequestModel[]`](../../doc/models/input-request-model.md) | Required | - | getPostingRequirements(): array | setPostingRequirements(array postingRequirements): void |

## Example (as JSON)

```json
{
  "product_id": "product_id4",
  "contract_id": "contract_id8",
  "vacancy": [
    {
      "name": "name3",
      "value": {
        "key0": {
          "key1": "val1",
          "key2": "val2"
        },
        "key1": {
          "key1": "val1",
          "key2": "val2"
        }
      }
    },
    {
      "name": "name4",
      "value": {
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
      }
    }
  ],
  "posting_requirements": [
    {
      "name": "name8",
      "value": {
        "key0": {
          "key1": "val1",
          "key2": "val2"
        },
        "key1": {
          "key1": "val1",
          "key2": "val2"
        }
      }
    },
    {
      "name": "name9",
      "value": {
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
      }
    }
  ]
}
```


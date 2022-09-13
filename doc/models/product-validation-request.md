
# Product Validation Request

## Structure

`ProductValidationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getProductId(): string | setProductId(string productId): void |
| `contractId` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getContractId(): string | setContractId(string contractId): void |
| `vacancy` | [`?(InputRequest[])`](../../doc/models/input-request.md) | Optional | - | getVacancy(): ?array | setVacancy(?array vacancy): void |
| `postingRequirements` | [`InputRequest[]`](../../doc/models/input-request.md) | Required | - | getPostingRequirements(): array | setPostingRequirements(array postingRequirements): void |

## Example (as JSON)

```json
{
  "product_id": "product_id4",
  "contract_id": "contract_id8",
  "vacancy": null,
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


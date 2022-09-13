
# Ordered Products Post Element Model

## Structure

`OrderedProductsPostElementModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?string` | Optional | Product Identification | getProductId(): ?string | setProductId(?string productId): void |
| `utm` | `?string` | Optional | Query string for UTM parameters<br><br>**Pattern:** `^([%.\-_!*a-zA-Z0-9]{1,}=[%.\-_!*+,;$\(\)a-zA-Z0-9]{1,}[&]{0,}){1,}$`<br>**Constraints**: *Pattern*: `^([%.\-_!*a-zA-Z0-9]{1,}=[%.\-_!*+,;$\(\)a-zA-Z0-9]{1,}[&]{0,}){1,}$` | getUtm(): ?string | setUtm(?string utm): void |
| `contractId` | `?string` | Optional | Contract Identifier needed for My Contracts product | getContractId(): ?string | setContractId(?string contractId): void |
| `postingRequirements` | [`?PostingRequirementsModel`](../../doc/models/posting-requirements-model.md) | Optional | - | getPostingRequirements(): ?PostingRequirementsModel | setPostingRequirements(?PostingRequirementsModel postingRequirements): void |

## Example (as JSON)

```json
{
  "productId": "2cbad29e-a510-52fc-bbdf-e873320e89f5",
  "utm": "utm_medium=social&utm_source=facebook&utm_campaign=example",
  "contractId": "06a8f6f0-5e0e-4614-869e-ab95a8530633",
  "postingRequirements": {
    "someText": "example",
    "someIntValue": 22
  }
}
```


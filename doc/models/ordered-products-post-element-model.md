
# Ordered Products Post Element Model

## Structure

`OrderedProductsPostElementModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?string` | Optional | Product Identification | getProductId(): ?string | setProductId(?string productId): void |
| `utm` | `?string` | Optional | Query string for UTM parameters<br><br>**Pattern:** `/^([%.-_!*a-zA-Z0-9]{1,}=[%.-_!*+,;$()a-zA-Z0-9]{1,}[&]{0,}){1,}$/` | getUtm(): ?string | setUtm(?string utm): void |
| `contractId` | `?string` | Optional | Contract Identifier needed for My Contracts product | getContractId(): ?string | setContractId(?string contractId): void |
| `postingRequirements` | [`?PostingRequirementsModel`](../../doc/models/posting-requirements-model.md) | Optional | - | getPostingRequirements(): ?PostingRequirementsModel | setPostingRequirements(?PostingRequirementsModel postingRequirements): void |

## Example (as JSON)

```json
{
  "productId": null,
  "utm": null,
  "contractId": null,
  "postingRequirements": null
}
```


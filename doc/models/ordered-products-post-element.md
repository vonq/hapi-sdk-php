
# Ordered Products Post Element

## Structure

`OrderedProductsPostElement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?string` | Optional | Product Identification | getProductId(): ?string | setProductId(?string productId): void |
| `utm` | `?string` | Optional | Query string for UTM parameters<br><br>**Pattern:** `^([%.\-_!*a-zA-Z0-9]{1,}=[%.\-_!*+,;$\(\)a-zA-Z0-9]{1,}[&]{0,}){1,}$`<br>**Constraints**: *Pattern*: `^([%.\-_!*a-zA-Z0-9]{1,}=[%.\-_!*+,;$\(\)a-zA-Z0-9]{1,}[&]{0,}){1,}$` | getUtm(): ?string | setUtm(?string utm): void |
| `contractId` | `?string` | Optional | Contract Identifier needed for My Contracts product | getContractId(): ?string | setContractId(?string contractId): void |
| `postingRequirements` | [`?PostingRequirements`](../../doc/models/posting-requirements.md) | Optional | - | getPostingRequirements(): ?PostingRequirements | setPostingRequirements(?PostingRequirements postingRequirements): void |

## Example (as JSON)

```json
{
  "productId": null,
  "utm": null,
  "contractId": null,
  "postingRequirements": null
}
```


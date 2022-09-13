
# Order Campaign Error Response Exception

## Structure

`OrderCampaignErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `companyId` | `?(string[])` | Optional | - | getCompanyId(): ?array | setCompanyId(?array companyId): void |
| `postingDetails` | [`?PostingDetailsValidationError`](../../doc/models/posting-details-validation-error.md) | Optional | - | getPostingDetails(): ?PostingDetailsValidationError | setPostingDetails(?PostingDetailsValidationError postingDetails): void |
| `targetGroup` | [`?TargetGroupValidationError`](../../doc/models/target-group-validation-error.md) | Optional | - | getTargetGroup(): ?TargetGroupValidationError | setTargetGroup(?TargetGroupValidationError targetGroup): void |
| `recruiterInfo` | [`?RecruiterInfoValidationError`](../../doc/models/recruiter-info-validation-error.md) | Optional | - | getRecruiterInfo(): ?RecruiterInfoValidationError | setRecruiterInfo(?RecruiterInfoValidationError recruiterInfo): void |
| `orderedProducts` | `?(string[])` | Optional | - | getOrderedProducts(): ?array | setOrderedProducts(?array orderedProducts): void |
| `orderedProductsSpecs` | [`?(OrderedProductsSpecValidationError[])`](../../doc/models/ordered-products-spec-validation-error.md) | Optional | - | getOrderedProductsSpecs(): ?array | setOrderedProductsSpecs(?array orderedProductsSpecs): void |
| `orderReference` | `?(string[])` | Optional | - | getOrderReference(): ?array | setOrderReference(?array orderReference): void |
| `campaignName` | `?(string[])` | Optional | - | getCampaignName(): ?array | setCampaignName(?array campaignName): void |
| `walletId` | `?(string[])` | Optional | - | getWalletId(): ?array | setWalletId(?array walletId): void |
| `currency` | `?(string[])` | Optional | - | getCurrency(): ?array | setCurrency(?array currency): void |

## Example (as JSON)

```json
{
  "companyId": null,
  "postingDetails": null,
  "targetGroup": null,
  "recruiterInfo": null,
  "orderedProducts": null,
  "orderedProductsSpecs": null,
  "orderReference": null,
  "campaignName": null,
  "walletId": null,
  "currency": null
}
```


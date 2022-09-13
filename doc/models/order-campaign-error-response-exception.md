
# Order Campaign Error Response Exception

## Structure

`OrderCampaignErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `companyId` | `?(string[])` | Optional | - | getCompanyId(): ?array | setCompanyId(?array companyId): void |
| `postingDetails` | [`?PostingDetailsValidationErrorModel`](../../doc/models/posting-details-validation-error-model.md) | Optional | - | getPostingDetails(): ?PostingDetailsValidationErrorModel | setPostingDetails(?PostingDetailsValidationErrorModel postingDetails): void |
| `targetGroup` | [`?TargetGroupValidationErrorModel`](../../doc/models/target-group-validation-error-model.md) | Optional | - | getTargetGroup(): ?TargetGroupValidationErrorModel | setTargetGroup(?TargetGroupValidationErrorModel targetGroup): void |
| `recruiterInfo` | [`?RecruiterInfoValidationErrorModel`](../../doc/models/recruiter-info-validation-error-model.md) | Optional | - | getRecruiterInfo(): ?RecruiterInfoValidationErrorModel | setRecruiterInfo(?RecruiterInfoValidationErrorModel recruiterInfo): void |
| `orderedProducts` | `?(string[])` | Optional | - | getOrderedProducts(): ?array | setOrderedProducts(?array orderedProducts): void |
| `orderedProductsSpecs` | [`?(OrderedProductsSpecValidationErrorModel[])`](../../doc/models/ordered-products-spec-validation-error-model.md) | Optional | - | getOrderedProductsSpecs(): ?array | setOrderedProductsSpecs(?array orderedProductsSpecs): void |
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



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
  "postingDetails": {
    "title": [
      "A Title of the Posting is required"
    ],
    "description": [
      "A Description of the Posting is required"
    ],
    "yearsOfExperience": [
      "This value should not be blank."
    ],
    "employmentType": [
      "A Posting needs a type of employment"
    ],
    "organization": {
      "name": [
        "This value should not be blank."
      ],
      "companyLogo": [
        "This value should not be blank."
      ]
    },
    "workingLocation": {
      "addressLine1": [
        "This value should not be blank."
      ],
      "postcode": [
        "This value should not be blank."
      ],
      "city": [
        "This value should not be blank."
      ],
      "country": [
        "This value should not be blank."
      ]
    },
    "weeklyWorkingHours": {
      "to": [
        "This value should not be blank."
      ]
    },
    "salaryIndication": {
      "period": [
        "A SalaryIndication needs a period"
      ],
      "range": {
        "to": [
          "This value should not be blank."
        ]
      }
    },
    "jobPageUrl": [
      "This value should not be blank."
    ],
    "applicationUrl": [
      "This value should not be blank."
    ]
  },
  "targetGroup": null,
  "recruiterInfo": {
    "name": [
      "This value should not be blank."
    ]
  },
  "orderedProducts": null,
  "orderedProductsSpecs": [
    {
      "productId": [
        "This value should not be blank."
      ],
      "utm": [
        "This value should not be blank."
      ]
    }
  ],
  "orderReference": null,
  "campaignName": null,
  "walletId": null,
  "currency": null
}
```


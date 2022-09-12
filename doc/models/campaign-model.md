
# Campaign Model

## Structure

`CampaignModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignId` | `string` | Required | - | getCampaignId(): string | setCampaignId(string campaignId): void |
| `companyId` | `?string` | Required | A vendor-related unique identification for the Company that's making the order. Doesn't affect the<br>order process at all, but provides a method for later filtering by this identification. It's also<br>used when creating a unified report of Campaign orders made in a period of time. | getCompanyId(): ?string | setCompanyId(?string companyId): void |
| `orderReference` | `?string` | Optional | A vendor-related Reference number for the order. This could be a PO number or an Invoice number.<br>Doesn't affect the order process at all, but provides a way for the ATS to identify the specific<br>order for their internal billing process<br>Maximum length of this field is 80 symbols<br>**Constraints**: *Maximum Length*: `80` | getOrderReference(): ?string | setOrderReference(?string orderReference): void |
| `recruiterInfo` | [`RecruiterInfoModel`](../../doc/models/recruiter-info-model.md) | Required | Recruiter is the user creating the campaign and you may want to use this to provide filtering by recruiter for groups sharing an account. | getRecruiterInfo(): RecruiterInfoModel | setRecruiterInfo(RecruiterInfoModel recruiterInfo): void |
| `campaignName` | `?string` | Optional | Campaign name as it's going to be listed. Doesn't have to resemble the Posting Title.<br>For example, the Campaign name could be **Software Development Manager** while the Posting<br>title could be **Want to lead a Team of Software Developers? Join us** | getCampaignName(): ?string | setCampaignName(?string campaignName): void |
| `postingDetails` | [`PostingDetailsModel`](../../doc/models/posting-details-model.md) | Required | - | getPostingDetails(): PostingDetailsModel | setPostingDetails(PostingDetailsModel postingDetails): void |
| `targetGroup` | [`TargetGroupModel`](../../doc/models/target-group-model.md) | Required | - | getTargetGroup(): TargetGroupModel | setTargetGroup(TargetGroupModel targetGroup): void |
| `orderedProducts` | `string[]` | Required | A list of the Products selected by the user. | getOrderedProducts(): array | setOrderedProducts(array orderedProducts): void |
| `orderedProductsSpecs` | [`OrderedProductsGetElementModel[]`](../../doc/models/ordered-products-get-element-model.md) | Required | This part contains information of the ordered products. | getOrderedProductsSpecs(): array | setOrderedProductsSpecs(array orderedProductsSpecs): void |
| `postings` | [`CampaignPostingModel[]`](../../doc/models/campaign-posting-model.md) | Required | includes information about number of clicks per product | getPostings(): array | setPostings(array postings): void |
| `createdOn` | `\DateTime` | Required | - | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `currency` | [`?string (Currency2Enum)`](../../doc/models/currency-2-enum.md) | Optional | ISO 3-Letter Currency Code | getCurrency(): ?string | setCurrency(?string currency): void |
| `status` | [`string (Status1Enum)`](../../doc/models/status-1-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `totalPrice` | [`PriceInCentsModel`](../../doc/models/price-in-cents-model.md) | Required | - | getTotalPrice(): PriceInCentsModel | setTotalPrice(PriceInCentsModel totalPrice): void |
| `walletId` | `?string` | Required | The Wallet used to purchase this campaign | getWalletId(): ?string | setWalletId(?string walletId): void |
| `customerId` | `?string` | Required | The X-CUSTOMER-ID Header used when ordering this campaign | getCustomerId(): ?string | setCustomerId(?string customerId): void |

## Example (as JSON)

```json
{
  "campaignId": null,
  "companyId": "dd1c5be0-b0e1-41c8-ba92-e876da16c38b",
  "recruiterInfo": {
    "id": "af78ce39-94a8-45dc-8c68-35f4d684fa5f",
    "name": "John Doe",
    "emailAddress": "john.doe@vonq.com"
  },
  "postingDetails": {
    "title": "Come work for us, we're looking for amazing Software Developers",
    "description": "Are you a LEADER and a BUILDER?  Global is looking for individuals who are dynamic, sales-oriented, and who want to control their destiny.  With a full training programme and consistent support, Global will provide you with the tools to excel in this very lucrative business.",
    "organization": {
      "name": "Vonq",
      "companyLogo": "http://static.ats.com/public/vonq-company-logo.png"
    },
    "workingLocation": {
      "addressLine1": "Westblaak 175",
      "postcode": "3012 KJ",
      "city": "Rotterdam",
      "country": "The Netherlands"
    },
    "contactInfo": {
      "name": "Janet Doe"
    },
    "yearsOfExperience": 5,
    "employmentType": "permanent",
    "weeklyWorkingHours": {
      "to": 40
    },
    "salaryIndication": {
      "period": "yearly",
      "range": {
        "to": 60000
      }
    },
    "jobPageUrl": "http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda",
    "applicationUrl": "http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda/apply"
  },
  "targetGroup": {
    "educationLevel": {
      "description": "Element name",
      "vonqId": "23"
    },
    "seniority": {
      "description": "Element name",
      "vonqId": "23"
    },
    "industry": {
      "description": "Element name",
      "vonqId": "23"
    },
    "jobCategory": {
      "description": "Element name",
      "vonqId": "23"
    }
  },
  "orderedProducts": null,
  "orderedProductsSpecs": {
    "productId": "2cbad29e-a510-52fc-bbdf-e873320e89f5",
    "status": "online",
    "statusDescription": null,
    "deliveredOn": "11/30/2020 11:00:15",
    "duration": "20 days",
    "durationPeriod": null,
    "utm": "utm_medium=social&utm_source=facebook&utm_campaign=example",
    "jobBoardLink": "http://job.ad.com/software-developer",
    "contractId": "06a8f6f0-5e0e-4614-869e-ab95a8530633",
    "postingRequirements": null
  },
  "postings": null,
  "createdOn": null,
  "status": null,
  "totalPrice": {
    "amount": 12599,
    "currency": "EUR"
  },
  "walletId": null,
  "customerId": null
}
```


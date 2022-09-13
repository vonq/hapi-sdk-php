
# Paginated Campaign List Model

A paginated list of campaigns.

## Structure

`PaginatedCampaignListModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `total` | `int` | Required | Total number of results. | getTotal(): int | setTotal(int total): void |
| `limit` | `int` | Required | Limit the number of results retrieved.<br>**Default**: `50` | getLimit(): int | setLimit(int limit): void |
| `offset` | `int` | Required | Return results starting from this `offset`<br>**Default**: `0` | getOffset(): int | setOffset(int offset): void |
| `meta` | [`MetaModel`](../../doc/models/meta-model.md) | Required | - | getMeta(): MetaModel | setMeta(MetaModel meta): void |
| `data` | [`CampaignModel[]`](../../doc/models/campaign-model.md) | Required | - | getData(): array | setData(array data): void |

## Example (as JSON)

```json
{
  "total": 25,
  "limit": 10,
  "offset": 5,
  "meta": null,
  "data": [
    {
      "companyId": "dd1c5be0-b0e1-41c8-ba92-e876da16c38b",
      "orderReference": "PO_567_2019",
      "recruiterInfo": {
        "id": "af78ce39-94a8-45dc-8c68-35f4d684fa5f",
        "name": "John Doe",
        "emailAddress": "john.doe@vonq.com"
      },
      "campaignName": "Software Development Manager",
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
          "country": "The Netherlands",
          "allowsRemoteWork": 0
        },
        "contactInfo": {
          "name": "Janet Doe",
          "phoneNumber": "+31 6 5555 5555",
          "emailAddress": "janet.doe@vonq.com"
        },
        "yearsOfExperience": 5,
        "employmentType": "permanent",
        "weeklyWorkingHours": {
          "from": 32,
          "to": 40
        },
        "salaryIndication": {
          "period": "yearly",
          "range": {
            "from": 56000,
            "to": 60000,
            "currency": "EUR"
          }
        },
        "jobPageUrl": "http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda",
        "applicationUrl": "http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda/apply"
      },
      "targetGroup": {
        "educationLevel": [
          {
            "description": "Element name",
            "vonqId": "23"
          }
        ],
        "seniority": [
          {
            "description": "Element name",
            "vonqId": "23"
          }
        ],
        "industry": [
          {
            "description": "Element name",
            "vonqId": "23"
          }
        ],
        "jobCategory": [
          {
            "description": "Element name",
            "vonqId": "23"
          }
        ]
      },
      "orderedProductsSpecs": [
        {
          "productId": "2cbad29e-a510-52fc-bbdf-e873320e89f5",
          "status": "online",
          "deliveredOn": "11/30/2020 11:00:15",
          "duration": "20 days",
          "durationPeriod": {
            "range": "days",
            "period": 30
          },
          "utm": "utm_medium=social&utm_source=facebook&utm_campaign=example",
          "jobBoardLink": "http://job.ad.com/software-developer",
          "contractId": "06a8f6f0-5e0e-4614-869e-ab95a8530633",
          "postingRequirements": {
            "someText": "example",
            "someIntValue": 22
          }
        }
      ],
      "postings": [
        {
          "name": "Linkedin.com 30 days",
          "clicks": 14,
          "productId": "245e4f13-436e-5c18-bf51-964c7eab288c"
        }
      ],
      "currency": "EUR",
      "totalPrice": {
        "amount": 12599,
        "currency": "EUR"
      }
    }
  ]
}
```


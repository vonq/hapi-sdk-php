# Campaigns

```php
$campaignsController = $client->getCampaignsController();
```

## Class Name

`CampaignsController`

## Methods

* [Check Campaign Status](../../doc/controllers/campaigns.md#check-campaign-status)
* [List Campaigns](../../doc/controllers/campaigns.md#list-campaigns)
* [Order Campaign](../../doc/controllers/campaigns.md#order-campaign)
* [Retrieve Campaign](../../doc/controllers/campaigns.md#retrieve-campaign)
* [Take Campaign Offline](../../doc/controllers/campaigns.md#take-campaign-offline)


# Check Campaign Status

This is a specialized endpoint for Campaign statuses only. Although the Campaign Details endpoint also returns the
status of a campaign, if you only need to get the specific status of a Campaign, this endpoint is
optimized for that.

```php
function checkCampaignStatus(string $campaignId): CheckCampaignStatusresponseModel
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `campaignId` | `string` | Template, Required | Id of the Campaign you want the status of |

## Response Type

[`CheckCampaignStatusresponseModel`](../../doc/models/check-campaign-statusresponse-model.md)

## Example Usage

```php
$campaignId = '000026a2-0000-0000-0000-000000000000';

$result = $campaignsController->checkCampaignStatus($campaignId);
```

## Example Response *(as JSON)*

```json
{
  "data": {
    "campaignId": "ffb37e76-d4fe-5ad6-8441-b02c1b15aa4c",
    "status": "online",
    "orderedProductsStatuses": [
      {
        "productId": "8eefb7a1-c5f3-5739-9fe6-cea17e2ee742",
        "status": "online",
        "statusDescription": "null"
      }
    ]
  }
}
```


# List Campaigns

Displays all the existing Campaigns already ordered for this Partner is as simple as executing a `GET`
request against the endpoint `/campaigns`

```php
function listCampaigns(string $companyId, ?float $limit = null, ?float $offset = null): ResultSet1Model
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `companyId` | `string` | Query, Required | CompanyId to filter the results on |
| `limit` | `?float` | Query, Optional | Amount of products returned |
| `offset` | `?float` | Query, Optional | Starting point |

## Response Type

[`ResultSet1Model`](../../doc/models/result-set-1-model.md)

## Example Usage

```php
$companyId = 'companyId0';

$result = $campaignsController->listCampaigns($companyId);
```

## Example Response *(as JSON)*

```json
{
  "total": 1337,
  "limit": 50,
  "offset": 0,
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
            "description": "Vendor-specific value",
            "vonqId": "23"
          }
        ],
        "seniority": [
          {
            "description": "Vendor-specific value",
            "vonqId": "23"
          }
        ],
        "industry": [
          {
            "description": "Vendor-specific value",
            "vonqId": "23"
          }
        ],
        "jobCategory": [
          {
            "description": "Vendor-specific value",
            "vonqId": "23"
          }
        ]
      },
      "orderedProducts": [
        "89",
        "889",
        "2cbad29e-a510-52fc-bbdf-e873320e89f5"
      ],
      "orderedProductsSpecs": [
        {
          "productId": "2cbad29e-a510-52fc-bbdf-e873320e89f5",
          "status": "online",
          "statusDescription": "",
          "deliveredOn": "2020-11-30T11:00:15+0000",
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
            "multipleSelectField": [
              "123",
              "234"
            ],
            "someIntValue": 22
          }
        }
      ],
      "postings": [
        {
          "name": "Linkedin.com 30 days",
          "clicks": 14
        }
      ]
    }
  ]
}
```


# Order Campaign

Once your Customer has decided on a list of Channels they would like to buy, you can send the list along with
publishing information as a `POST` request in order to create a `Campaign`. In return, you'll receive
the id of the newly created `Campaign` along with the URL where you can access that Campaign information.
For "My Contracts" type of Products, there is no expiration. The vacancy can be taken offline either by the job board or manually, by calling the "[Take a campaign offline](https://vonq.stoplight.io/docs/hapi/b3A6MzM0NDA3MzQ-take-a-campaign-offline)" endpoint.

#### Target group

You should use the following endpoints for the target group information:

- [**`Industry`**](b3A6MzM0NDA3Mzg-industry-names)

- [**`Job Function`**](b3A6MzM0NDA3MzU-job-functions)

- [**`Education Level`**](b3A6MzM0NDA3Mzk-retrieve-education-level-taxonomy)

- [**`Seniority`**](b3A6MzM0NDA3NDA-retrieve-seniority-taxonomy)

```php
function orderCampaign(
    CampaignOrderModel $body,
    ?string $companyId = null,
    ?string $limit = null,
    ?string $offset = null,
    ?string $xCustomerId = null
): OrderCampaignSuccessResponseModel
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CampaignOrderModel`](../../doc/models/campaign-order-model.md) | Body, Required | - |
| `companyId` | `?string` | Query, Optional | - |
| `limit` | `?string` | Query, Optional | - |
| `offset` | `?string` | Query, Optional | - |
| `xCustomerId` | `?string` | Header, Optional | The ID of the end-user creating the order. Only required if you are using HAPI Job Post and creating orders with contracts. |

## Response Type

[`OrderCampaignSuccessResponseModel`](../../doc/models/order-campaign-success-response-model.md)

## Example Usage

```php
$body_companyId = 'dd1c5be0-b0e1-41c8-ba92-e876da16c38b';
$body_recruiterInfo_name = 'John Doe';
$body_recruiterInfo = new Models\RecruiterInfoModel(
    $body_recruiterInfo_name
);
$body_postingDetails_title = 'Come work for us, we\'re looking for amazing Software Developers';
$body_postingDetails_description = 'Are you a LEADER and a BUILDER?  Global is looking for individuals who are dynamic, sales-oriented, and who want to control their destiny.  With a full training programme and consistent support, Global will provide you with the tools to excel in this very lucrative business.';
$body_postingDetails_organization_name = 'Vonq';
$body_postingDetails_organization_companyLogo = 'http://static.ats.com/public/vonq-company-logo.png';
$body_postingDetails_organization = new Models\PostingOrganizationModel(
    $body_postingDetails_organization_name,
    $body_postingDetails_organization_companyLogo
);
$body_postingDetails_workingLocation_addressLine1 = 'Westblaak 175';
$body_postingDetails_workingLocation_postcode = '3012 KJ';
$body_postingDetails_workingLocation_city = 'Rotterdam';
$body_postingDetails_workingLocation_country = 'The Netherlands';
$body_postingDetails_workingLocation = new Models\PostingWorkingLocationModel(
    $body_postingDetails_workingLocation_addressLine1,
    $body_postingDetails_workingLocation_postcode,
    $body_postingDetails_workingLocation_city,
    $body_postingDetails_workingLocation_country
);
$body_postingDetails_yearsOfExperience = 220.92;
$body_postingDetails_employmentType = Models\EmploymentTypeEnum::PERMANENT;
$body_postingDetails_weeklyWorkingHours_to = 69.94;
$body_postingDetails_weeklyWorkingHours = new Models\PostingWeeklyWorkingHoursModel(
    $body_postingDetails_weeklyWorkingHours_to
);
$body_postingDetails_salaryIndication_period = Models\PeriodEnum::YEARLY;
$body_postingDetails_salaryIndication_range_to = 22.8;
$body_postingDetails_salaryIndication_range = new Models\Range3Model(
    $body_postingDetails_salaryIndication_range_to
);
$body_postingDetails_salaryIndication = new Models\PostingSalaryIndicationModel(
    $body_postingDetails_salaryIndication_period,
    $body_postingDetails_salaryIndication_range
);
$body_postingDetails_jobPageUrl = 'http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda';
$body_postingDetails_applicationUrl = 'http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda/apply';
$body_postingDetails = new Models\PostingDetailsModel(
    $body_postingDetails_title,
    $body_postingDetails_description,
    $body_postingDetails_organization,
    $body_postingDetails_workingLocation,
    $body_postingDetails_yearsOfExperience,
    $body_postingDetails_employmentType,
    $body_postingDetails_weeklyWorkingHours,
    $body_postingDetails_salaryIndication,
    $body_postingDetails_jobPageUrl,
    $body_postingDetails_applicationUrl
);
$body_targetGroup_educationLevel = [];

$body_targetGroup_educationLevel_0_description = 'Element name';
$body_targetGroup_educationLevel_0_vonqId = '23';
$body_targetGroup_educationLevel[0] = new Models\TargetGroupElementModel(
    $body_targetGroup_educationLevel_0_description,
    $body_targetGroup_educationLevel_0_vonqId
);

$body_targetGroup_educationLevel_1_description = 'Element name';
$body_targetGroup_educationLevel_1_vonqId = '23';
$body_targetGroup_educationLevel[1] = new Models\TargetGroupElementModel(
    $body_targetGroup_educationLevel_1_description,
    $body_targetGroup_educationLevel_1_vonqId
);

$body_targetGroup_seniority = [];

$body_targetGroup_seniority_0_description = 'Element name';
$body_targetGroup_seniority_0_vonqId = '23';
$body_targetGroup_seniority[0] = new Models\TargetGroupElementModel(
    $body_targetGroup_seniority_0_description,
    $body_targetGroup_seniority_0_vonqId
);

$body_targetGroup_seniority_1_description = 'Element name';
$body_targetGroup_seniority_1_vonqId = '23';
$body_targetGroup_seniority[1] = new Models\TargetGroupElementModel(
    $body_targetGroup_seniority_1_description,
    $body_targetGroup_seniority_1_vonqId
);

$body_targetGroup_seniority_2_description = 'Element name';
$body_targetGroup_seniority_2_vonqId = '23';
$body_targetGroup_seniority[2] = new Models\TargetGroupElementModel(
    $body_targetGroup_seniority_2_description,
    $body_targetGroup_seniority_2_vonqId
);

$body_targetGroup_industry = [];

$body_targetGroup_industry_0_description = 'Element name';
$body_targetGroup_industry_0_vonqId = '23';
$body_targetGroup_industry[0] = new Models\TargetGroupElementModel(
    $body_targetGroup_industry_0_description,
    $body_targetGroup_industry_0_vonqId
);

$body_targetGroup_industry_1_description = 'Element name';
$body_targetGroup_industry_1_vonqId = '23';
$body_targetGroup_industry[1] = new Models\TargetGroupElementModel(
    $body_targetGroup_industry_1_description,
    $body_targetGroup_industry_1_vonqId
);

$body_targetGroup_industry_2_description = 'Element name';
$body_targetGroup_industry_2_vonqId = '23';
$body_targetGroup_industry[2] = new Models\TargetGroupElementModel(
    $body_targetGroup_industry_2_description,
    $body_targetGroup_industry_2_vonqId
);

$body_targetGroup_jobCategory = [];

$body_targetGroup_jobCategory_0_description = 'Element name';
$body_targetGroup_jobCategory_0_vonqId = '23';
$body_targetGroup_jobCategory[0] = new Models\TargetGroupElementModel(
    $body_targetGroup_jobCategory_0_description,
    $body_targetGroup_jobCategory_0_vonqId
);

$body_targetGroup_jobCategory_1_description = 'Element name';
$body_targetGroup_jobCategory_1_vonqId = '23';
$body_targetGroup_jobCategory[1] = new Models\TargetGroupElementModel(
    $body_targetGroup_jobCategory_1_description,
    $body_targetGroup_jobCategory_1_vonqId
);

$body_targetGroup = new Models\TargetGroupModel(
    $body_targetGroup_educationLevel,
    $body_targetGroup_seniority,
    $body_targetGroup_industry,
    $body_targetGroup_jobCategory
);
$body_orderedProducts = ['orderedProducts2'];
$body = new Models\CampaignOrderModel(
    $body_companyId,
    $body_recruiterInfo,
    $body_postingDetails,
    $body_targetGroup,
    $body_orderedProducts
);

$result = $campaignsController->orderCampaign($body);
```

## Example Response *(as JSON)*

```json
{
  "campaignId": "ffb37e76-d4fe-5ad6-8441-b02c1b15aa4c"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`OrderCampaignErrorResponseException`](../../doc/models/order-campaign-error-response-exception.md) |


# Retrieve Campaign

Retrieve the details of a specific Campaign. Only Campaigns created by the calling Partner can be
retrieved.

```php
function retrieveCampaign(string $campaignId): ListCampaignResponseModel
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `campaignId` | `string` | Template, Required | Id of the Campaign that you want to retrieve |

## Response Type

[`ListCampaignResponseModel`](../../doc/models/list-campaign-response-model.md)

## Example Usage

```php
$campaignId = '000026a2-0000-0000-0000-000000000000';

$result = $campaignsController->retrieveCampaign($campaignId);
```

## Example Response *(as JSON)*

```json
{
  "data": {
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
          "description": "Vendor-specific value",
          "vonqId": "23"
        }
      ],
      "seniority": [
        {
          "description": "Vendor-specific value",
          "vonqId": "23"
        }
      ],
      "industry": [
        {
          "description": "Vendor-specific value",
          "vonqId": "23"
        }
      ],
      "jobCategory": [
        {
          "description": "Vendor-specific value",
          "vonqId": "23"
        }
      ]
    },
    "orderedProducts": [
      "89",
      "889",
      "2cbad29e-a510-52fc-bbdf-e873320e89f5"
    ],
    "orderedProductsSpecs": [
      {
        "productId": "2cbad29e-a510-52fc-bbdf-e873320e89f5",
        "status": "online",
        "statusDescription": "",
        "deliveredOn": "2020-11-30T11:00:15+0000",
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
          "multipleSelectField": [
            "123",
            "234"
          ],
          "someIntValue": 22
        }
      }
    ],
    "postings": [
      {
        "name": "Linkedin.com 30 days",
        "clicks": 14
      }
    ]
  }
}
```


# Take Campaign Offline

Specific endpoint to take a campaign offline. Keep in mind that processing this might
take some time and it only has an effect if the campaign's status is "online".

```php
function takeCampaignOffline(
    string $campaignId,
    TakeCampaignOfflineRequestModel $body
): TakeCampaignOfflineResponseModel
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `campaignId` | `string` | Template, Required | Id of the Campaign you want to take offline |
| `body` | [`TakeCampaignOfflineRequestModel`](../../doc/models/take-campaign-offline-request-model.md) | Body, Required | - |

## Response Type

[`TakeCampaignOfflineResponseModel`](../../doc/models/take-campaign-offline-response-model.md)

## Example Usage

```php
$campaignId = '000026a2-0000-0000-0000-000000000000';
$body_campaignId = 'ffb37e76-d4fe-5ad6-8441-b02c1b15aa4c';
$body_status = 'offline';
$body = new Models\TakeCampaignOfflineRequestModel(
    $body_campaignId,
    $body_status
);

$result = $campaignsController->takeCampaignOffline($campaignId, $body);
```

## Example Response *(as JSON)*

```json
{
  "campaignId": "ffb37e76-d4fe-5ad6-8441-b02c1b15aa4c"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`TakeCampaignOfflineErrorResponse2Exception`](../../doc/models/take-campaign-offline-error-response-2-exception.md) |
| 404 | - | [`TakeCampaignOfflineErrorResponseException`](../../doc/models/take-campaign-offline-error-response-exception.md) |


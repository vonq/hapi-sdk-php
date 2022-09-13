# Campaigns

```php
$campaignsTrue = $client->getCampaignsTrue();
```

## Class Name

`CampaignsTrue`

## Methods

* [Check Campaign Status](../../doc/controllers/campaigns.md#check-campaign-status)
* [List Campaigns](../../doc/controllers/campaigns.md#list-campaigns)
* [Order Campaign](../../doc/controllers/campaigns.md#order-campaign)
* [Post-Campaigns-Validate-Campaign](../../doc/controllers/campaigns.md#post-campaigns-validate-campaign)
* [Post-Campaigns-Validate-Channel-Posting](../../doc/controllers/campaigns.md#post-campaigns-validate-channel-posting)
* [Post-Campaigns-Validate-Vacancy-Info](../../doc/controllers/campaigns.md#post-campaigns-validate-vacancy-info)
* [Retrieve Campaign](../../doc/controllers/campaigns.md#retrieve-campaign)
* [Take Campaign Offline](../../doc/controllers/campaigns.md#take-campaign-offline)


# Check Campaign Status

This is a specialized endpoint for Campaign statuses only. Although the Campaign Details endpoint also returns the
status of a campaign, if you only need to get the specific status of a Campaign, this endpoint is
optimized for that.

```php
function checkCampaignStatus(string $campaignId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `campaignId` | `string` | Template, Required | ID of the campaign you want to retrieve or take action on |

## Response Type

[`CampaignStatusResponseModel`](../../doc/models/campaign-status-response-model.md)

## Example Usage

```php
$campaignId = '000026a2-0000-0000-0000-000000000000';
$apiResponse = $campaignsTrue->checkCampaignStatus($campaignId);
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

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |
| 404 | Not Found | `ApiException` |


# List Campaigns

Displays all the existing Campaigns already ordered for this Partner is as simple as executing a `GET`
request against the endpoint `/campaigns`

```php
function listCampaigns(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `companyId` | `?string` | Query, Optional | CompanyId to filter the results on |
| `limit` | `?int` | Query, Optional | Number of results to return per page. |
| `offset` | `?int` | Query, Optional | The initial index from which to return the results. |

## Response Type

[`PaginatedCampaignListModel`](../../doc/models/paginated-campaign-list-model.md)

## Example Usage

```php
$collect = [];

$companyId = 'companyId0';
$collect['companyId'] = $companyId;

$limit = 172;
$collect['limit'] = $limit;

$offset = 12;
$collect['offset'] = $offset;

$apiResponse = $campaignsTrue->listCampaigns($collect);
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
function orderCampaign(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`CampaignCreateRequestModel`](../../doc/models/campaign-create-request-model.md) | Body, Required | - |

## Response Type

[`LimitedCampaignModel`](../../doc/models/limited-campaign-model.md)

## Example Usage

```php
$collect = [];

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$body_companyId = 'dd1c5be0-b0e1-41c8-ba92-e876da16c38b';
$body_recruiterInfo_id = 'af78ce39-94a8-45dc-8c68-35f4d684fa5f';
$body_recruiterInfo_name = 'John Doe';
$body_recruiterInfo_emailAddress = 'john.doe@vonq.com';
$body_recruiterInfo = new Models\RecruiterInfoModel(
    $body_recruiterInfo_id,
    $body_recruiterInfo_name,
    $body_recruiterInfo_emailAddress
);
$body_postingDetails_title = 'Come work for us, we\'re looking for amazing Software Developers';
$body_postingDetails_description = 'Are you a LEADER and a BUILDER?  Global is looking for individuals who are dynamic, sales-oriented, and who want to control their destiny.  With a full training programme and consistent support, Global will provide you with the tools to excel in this very lucrative business.';
$body_postingDetails_organization_name = 'Vonq';
$body_postingDetails_organization_companyLogo = 'http://static.ats.com/public/vonq-company-logo.png';
$body_postingDetails_organization = new Models\PostingDetailsOrganizationModel(
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
$body_postingDetails_workingLocation->setAddressLine2('string');
$body_postingDetails_workingLocation->setAllowsRemoteWork(0);
$body_postingDetails_contactInfo_name = 'Janet Doe';
$body_postingDetails_contactInfo = new Models\PostingContactInfoModel(
    $body_postingDetails_contactInfo_name
);
$body_postingDetails_contactInfo->setPhoneNumber('+31 6 5555 5555');
$body_postingDetails_contactInfo->setEmailAddress('janet.doe@vonq.com');
$body_postingDetails_yearsOfExperience = 5;
$body_postingDetails_employmentType = Models\EmploymentTypeEnum::PERMANENT;
$body_postingDetails_weeklyWorkingHours_to = 40;
$body_postingDetails_weeklyWorkingHours = new Models\PostingWeeklyWorkingHoursModel(
    $body_postingDetails_weeklyWorkingHours_to
);
$body_postingDetails_weeklyWorkingHours->setFrom(32);
$body_postingDetails_salaryIndication_period = Models\PeriodEnum::YEARLY;
$body_postingDetails_salaryIndication_range_to = 60000;
$body_postingDetails_salaryIndication_range = new Models\SalaryRangeModel(
    $body_postingDetails_salaryIndication_range_to
);
$body_postingDetails_salaryIndication_range->setFrom(56000);
$body_postingDetails_salaryIndication_range->setCurrency('EUR');
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
    $body_postingDetails_contactInfo,
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

$body_targetGroup_seniority = [];

$body_targetGroup_seniority_0_description = 'Element name';
$body_targetGroup_seniority_0_vonqId = '23';
$body_targetGroup_seniority[0] = new Models\TargetGroupElementModel(
    $body_targetGroup_seniority_0_description,
    $body_targetGroup_seniority_0_vonqId
);

$body_targetGroup_industry = [];

$body_targetGroup_industry_0_description = 'Element name';
$body_targetGroup_industry_0_vonqId = '23';
$body_targetGroup_industry[0] = new Models\TargetGroupElementModel(
    $body_targetGroup_industry_0_description,
    $body_targetGroup_industry_0_vonqId
);

$body_targetGroup_jobCategory = [];

$body_targetGroup_jobCategory_0_description = 'Element name';
$body_targetGroup_jobCategory_0_vonqId = '23';
$body_targetGroup_jobCategory[0] = new Models\TargetGroupElementModel(
    $body_targetGroup_jobCategory_0_description,
    $body_targetGroup_jobCategory_0_vonqId
);

$body_targetGroup = new Models\TargetGroupModel(
    $body_targetGroup_educationLevel,
    $body_targetGroup_seniority,
    $body_targetGroup_industry,
    $body_targetGroup_jobCategory
);
$body_orderedProducts = ['string'];
$body = new Models\CampaignCreateRequestModel(
    $body_companyId,
    $body_recruiterInfo,
    $body_postingDetails,
    $body_targetGroup,
    $body_orderedProducts
);
$body->setOrderReference('PO_567_2019');
$body->setCurrency(Models\AcceptedCurrencyEnum::EUR);
$body->setCampaignName('Software Development Manager');
$body_orderedProductsSpecs = [];

$body_orderedProductsSpecs[0] = new Models\OrderedProductsPostElementModel;
$body_orderedProductsSpecs[0]->setProductId('2cbad29e-a510-52fc-bbdf-e873320e89f5');
$body_orderedProductsSpecs[0]->setUtm('utm_medium=social&utm_source=facebook&utm_campaign=example');
$body_orderedProductsSpecs[0]->setContractId('06a8f6f0-5e0e-4614-869e-ab95a8530633');
$body_orderedProductsSpecs[0]->setPostingRequirements(new Models\PostingRequirementsModel);
$body_orderedProductsSpecs[0]->getPostingRequirements()->setSomeText('example');
$body_orderedProductsSpecs[0]->getPostingRequirements()->setMultipleSelectField(['string']);
$body_orderedProductsSpecs[0]->getPostingRequirements()->setSomeIntValue(54.2);
$body->setOrderedProductsSpecs($body_orderedProductsSpecs);

$body->setWalletId('00001ba8-0000-0000-0000-000000000000');
$collect['body'] = $body;

$apiResponse = $campaignsTrue->orderCampaign($collect);
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
| 403 | Forbidden | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |
| 422 | Unprocessable Entity | [`OrderCampaignErrorResponseException`](../../doc/models/order-campaign-error-response-exception.md) |


# Post-Campaigns-Validate-Campaign

This endpoint allows to validate the full campaign payload prior to sending it to the ordering endpoint.

This combines the other two validation endpoints Validate vacancy info and Validate posting requirements.

Depending on the results, in case of no errors, a 200 status code will be returned; otherwise a 422 Unprocessable Entity response with a similarly shaped error object.

Check our implementation guide for more explanations.

```php
function postCampaignsValidateCampaign(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?CampaignValidationRequestModel`](../../doc/models/campaign-validation-request-model.md) | Body, Optional | - |

## Response Type

[`CampaignValidationModel`](../../doc/models/campaign-validation-model.md)

## Example Usage

```php
$collect = [];

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$body_campaign = ['companyId' => HAPI\ApiHelper::deserialize('"dd1c5be0-b0e1-41c8-ba92-e876da16c38b"'), 'orderReference' => HAPI\ApiHelper::deserialize('"PO_567_2019"'), '' => HAPI\ApiHelper::deserialize(null), 'orderedProducts' => HAPI\ApiHelper::deserialize('["contractProductId1","contractProductId2"]'), 'orderedProductsSpecs' => HAPI\ApiHelper::deserialize('[{"productId":"{{contractProductId1}}","contractId":"{{contractId1}}","postingRequirements":{"titre":"Startup-minded Python/Django/GraphQL DeveloperF/H","IGB_country":"99207"}}]')];
$body = new Models\CampaignValidationRequestModel(
    $body_campaign
);
$collect['body'] = $body;

$apiResponse = $campaignsTrue->postCampaignsValidateCampaign($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Validation error<br><br>Sample response:<br><br>```json<br>{<br>  "errors": {<br>    "orderedProductsSpecs": [<br>      {<br>        "credentials": {},<br>        "posting_requirements": {<br>          "titre": "The field \"Titre\" must have a value"<br>        }<br>      }<br>    ],<br>    "currency": ["This field is required."],<br>    "postingDetails": {<br>      "title": ["This field is required."],<br>      ...<br>    }<br>  },<br>  "has_errors": true<br>}<br>``` | [`CampaignValidationErrorException`](../../doc/models/campaign-validation-error-exception.md) |


# Post-Campaigns-Validate-Channel-Posting

This endpoint allows for validating the product requirements for a contract and product combination that would be generally sent as part of the campaign payload to the campaign ordering endpoint.

Depending on the results, in case of no errors, a 200 status code will be returned; otherwise a 422 Unprocessable Entity response with a similarly shaped error object.

Check our implementation guide for more explanations.

```php
function postCampaignsValidateChannelPosting(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?ProductValidationRequestModel`](../../doc/models/product-validation-request-model.md) | Body, Optional | - |

## Response Type

[`ProductValidationModel`](../../doc/models/product-validation-model.md)

## Example Usage

```php
$collect = [];

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$body_productId = 'contractProductId';
$body_contractId = 'contractId';
$body_postingRequirements = [];

$body_postingRequirements_0_name = 'IGB_locationtype';
$body_postingRequirements_0_value = [];
$body_postingRequirements[0] = new Models\InputRequestModel(
    $body_postingRequirements_0_name,
    $body_postingRequirements_0_value
);

$body_postingRequirements_1_name = 'IGB_country';
$body_postingRequirements_1_value = [];
$body_postingRequirements[1] = new Models\InputRequestModel(
    $body_postingRequirements_1_name,
    $body_postingRequirements_1_value
);

$body_postingRequirements_2_name = 'geolocalisable';
$body_postingRequirements_2_value = [];
$body_postingRequirements[2] = new Models\InputRequestModel(
    $body_postingRequirements_2_name,
    $body_postingRequirements_2_value
);

$body_postingRequirements_3_name = 'confidentielle';
$body_postingRequirements_3_value = [];
$body_postingRequirements[3] = new Models\InputRequestModel(
    $body_postingRequirements_3_name,
    $body_postingRequirements_3_value
);

$body_postingRequirements_4_name = 'datePrisePoste';
$body_postingRequirements_4_value = [];
$body_postingRequirements[4] = new Models\InputRequestModel(
    $body_postingRequirements_4_name,
    $body_postingRequirements_4_value
);

$body_postingRequirements_5_name = 'clientIndirect';
$body_postingRequirements_5_value = [];
$body_postingRequirements[5] = new Models\InputRequestModel(
    $body_postingRequirements_5_name,
    $body_postingRequirements_5_value
);

$body_postingRequirements_6_name = 'raisonSociale';
$body_postingRequirements_6_value = [];
$body_postingRequirements[6] = new Models\InputRequestModel(
    $body_postingRequirements_6_name,
    $body_postingRequirements_6_value
);

$body_postingRequirements_7_name = 'siret';
$body_postingRequirements_7_value = [];
$body_postingRequirements[7] = new Models\InputRequestModel(
    $body_postingRequirements_7_name,
    $body_postingRequirements_7_value
);

$body_postingRequirements_8_name = 'clientIndirectCodeNaf';
$body_postingRequirements_8_value = [];
$body_postingRequirements[8] = new Models\InputRequestModel(
    $body_postingRequirements_8_name,
    $body_postingRequirements_8_value
);

$body = new Models\ProductValidationRequestModel(
    $body_productId,
    $body_contractId,
    $body_postingRequirements
);
$body_vacancy = [];

$body_vacancy_0_name = 'contactInfo.emailAddress';
$body_vacancy_0_value = [];
$body_vacancy[0] = new Models\InputRequestModel(
    $body_vacancy_0_name,
    $body_vacancy_0_value
);
$body->setVacancy($body_vacancy);

$collect['body'] = $body;

$apiResponse = $campaignsTrue->postCampaignsValidateChannelPosting($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Validation error<br><br>Sample response:<br><br>```json<br>{<br>  "errors": {<br>    "credentials": {<br>       "api_username" : "This field is required"<br>    },<br>    "posting_requirements": {<br>      "typeContrat": "The field \"Type contrat\" must have a value",<br>      "dureeTravail": "The field \"Hours\" must have a value"<br>    }<br>  },<br>  "has_errors": true<br>}<br>``` | [`ProductValidationErrorException`](../../doc/models/product-validation-error-exception.md) |


# Post-Campaigns-Validate-Vacancy-Info

This endpoint offers the possibility to validate the campaign common fields before sending them to the campaign ordering endpoint.

Depending on the results, in case of no errors, a 200 status code will be returned; otherwise a 422 Unprocessable Entity response with a similarly shaped error object.

Check our implementation guide for more explanations.

```php
function postCampaignsValidateVacancyInfo(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?VacancyValidationRequestModel`](../../doc/models/vacancy-validation-request-model.md) | Body, Optional | - |

## Response Type

[`VacancyValidationModel`](../../doc/models/vacancy-validation-model.md)

## Example Usage

```php
$collect = [];

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$body_vacancy = ['companyId' => HAPI\ApiHelper::deserialize('"dd1c5be0-b0e1-41c8-ba92-e876da16c38b"'), '' => HAPI\ApiHelper::deserialize(null), 'campaignName' => HAPI\ApiHelper::deserialize('"NationalVacaturebank MC 1001"'), '' => HAPI\ApiHelper::deserialize(null), '' => HAPI\ApiHelper::deserialize(null)];
$body = new Models\VacancyValidationRequestModel(
    $body_vacancy
);
$collect['body'] = $body;

$apiResponse = $campaignsTrue->postCampaignsValidateVacancyInfo($collect);
```

## Example Response *(as JSON)*

```json
{
  "errors": {},
  "has_errors": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Validation error<br><br>Sample response:<br><br>```json<br>{<br>  "errors": {<br>    "postingDetails": {<br>      "title": [<br>        "This field is required."<br>      ],<br>      "organization": {<br>        "companyLogo": [<br>          "The remote file does not apear to exist"<br>        ]<br>      }<br>    },<br>    "targetGroup": {<br>      "seniority": [<br>        {<br>          "vonqId": [<br>            "VonqId 999 not found"<br>          ]<br>        }<br>      ]<br>    }<br>  },<br>  "has_errors": true<br>}<br>``` | `ApiException` |


# Retrieve Campaign

Retrieve the details of a specific Campaign. Only Campaigns created by the calling Partner can be
retrieved.

```php
function retrieveCampaign(string $campaignId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `campaignId` | `string` | Template, Required | ID of the campaign you want to retrieve or take action on |

## Response Type

[`CampaignDataModel`](../../doc/models/campaign-data-model.md)

## Example Usage

```php
$campaignId = '000026a2-0000-0000-0000-000000000000';
$apiResponse = $campaignsTrue->retrieveCampaign($campaignId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |
| 404 | Not Found | `ApiException` |


# Take Campaign Offline

Specific endpoint to take a campaign offline. Keep in mind that processing this might
take some time and it only has an effect if the campaign's status is "online".

```php
function takeCampaignOffline(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `campaignId` | `string` | Template, Required | ID of the campaign you want to retrieve or take action on |
| `body` | [`TakeCampaignOfflineRequestModel`](../../doc/models/take-campaign-offline-request-model.md) | Body, Required | - |

## Response Type

[`TakeCampaignOfflineResponseModel`](../../doc/models/take-campaign-offline-response-model.md)

## Example Usage

```php
$collect = [];

$campaignId = '000026a2-0000-0000-0000-000000000000';
$collect['campaignId'] = $campaignId;

$body_campaignId = 'ffb37e76-d4fe-5ad6-8441-b02c1b15aa4c';
$body = new Models\TakeCampaignOfflineRequestModel(
    $body_campaignId
);
$collect['body'] = $body;

$apiResponse = $campaignsTrue->takeCampaignOffline($collect);
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
| 400 | - | [`TakeCampaignOfflineBadRequestErrorResponseException`](../../doc/models/take-campaign-offline-bad-request-error-response-exception.md) |
| 404 | - | [`TakeCampaignOfflineNotFoundErrorResponseException`](../../doc/models/take-campaign-offline-not-found-error-response-exception.md) |


# Taxonomy

```php
$taxonomyController = $client->getTaxonomyController();
```

## Class Name

`TaxonomyController`

## Methods

* [List Industries](../../doc/controllers/taxonomy.md#list-industries)
* [Retrieve Education Levels](../../doc/controllers/taxonomy.md#retrieve-education-levels)
* [Retrieve Job Functions Tree](../../doc/controllers/taxonomy.md#retrieve-job-functions-tree)
* [Retrieve Seniorities](../../doc/controllers/taxonomy.md#retrieve-seniorities)
* [Search Job Titles](../../doc/controllers/taxonomy.md#search-job-titles)
* [Search Locations](../../doc/controllers/taxonomy.md#search-locations)


# List Industries

This endpoint returns a list of supported industry names that can be used to search for products. Results are ordered alphabetically.
Use the `id` key of any Industry in the response to search for a product.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function listIndustries(?float $limit = null, ?float $offset = null, ?string $acceptLanguage = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?float` | Query, Optional | Number of results to return per page. |
| `offset` | `?float` | Query, Optional | The initial index from which to return the results. |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | - |

## Response Type

[`IndustryModel[]`](../../doc/models/industry-model.md)

## Example Usage

```php
$acceptLanguage = Models\AcceptLanguageEnum::EN;

$result = $taxonomyController->listIndustries(null, null, $acceptLanguage);
```


# Retrieve Education Levels

Retrieve all Education Level possible values.

```php
function retrieveEducationLevels(): array
```

## Response Type

[`EducationLevelModel[]`](../../doc/models/education-level-model.md)

## Example Usage

```php
$result = $taxonomyController->retrieveEducationLevels();
```

## Example Response *(as JSON)*

```json
[
  {
    "id": 1,
    "name": [
      {
        "languageCode": "nl_NL",
        "value": "Master / Postdoctoraal"
      }
    ]
  }
]
```


# Retrieve Job Functions Tree

This endpoint returns a tree-like structure of supported Job Functions that can be used to search for Products.
Use the `id` key of any Job Function in the response to search for a Product.
Each Job Function is associated with [**`Job Titles`**](b3A6MzM0NDA3MzY-job-titles) in a one-to-many fashion.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function retrieveJobFunctionsTree(?string $acceptLanguage = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | - |

## Response Type

[`JobFunctionModel[]`](../../doc/models/job-function-model.md)

## Example Usage

```php
$acceptLanguage = Models\AcceptLanguageEnum::EN;

$result = $taxonomyController->retrieveJobFunctionsTree($acceptLanguage);
```

## Example Response *(as JSON)*

```json
[
  {
    "id": 8,
    "name": "Education",
    "children": [
      {
        "id": 5,
        "name": "Teaching",
        "children": []
      }
    ]
  }
]
```


# Retrieve Seniorities

Retrieve all Seniority possible values.

```php
function retrieveSeniorities(): array
```

## Response Type

[`SeniorityModel[]`](../../doc/models/seniority-model.md)

## Example Usage

```php
$result = $taxonomyController->retrieveSeniorities();
```

## Example Response *(as JSON)*

```json
[
  {
    "id": 3,
    "name": [
      {
        "languageCode": "en_GB",
        "value": "Manager"
      }
    ]
  }
]
```


# Search Job Titles

This endpoint takes any text as input and returns a list of supported Job Titles matching the query, ordered by popularity.
Use the `id` key of each object in the response to search for a Product.
Currently, we support 4,000 job titles for each of the following languages: English, Dutch and German.
Each Job Title is associated with a [**`Job Function`**](b3A6MzM0NDA3MzU-job-functions) in a many-to-one fashion.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function searchJobTitles(
    string $text,
    ?float $limit = null,
    ?float $offset = null,
    ?string $acceptLanguage = null
): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `text` | `string` | Query, Required | Search text for a job title name |
| `limit` | `?float` | Query, Optional | Number of results to return per page. |
| `offset` | `?float` | Query, Optional | The initial index from which to return the results. |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | - |

## Response Type

[`JobTitleModel[]`](../../doc/models/job-title-model.md)

## Example Usage

```php
$text = 'text0';
$acceptLanguage = Models\AcceptLanguageEnum::EN;

$result = $taxonomyController->searchJobTitles($text, null, null, $acceptLanguage);
```


# Search Locations

This endpoint takes any text as input and returns a list of Locations matching the query, ordered by popularity.
Each response will include the entire world as a Location, even no Locations match the text query.
Use the `id` key of each object in the response to search for a Product.
Supports text input in English, Dutch and German.

```php
function searchLocations(string $text): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `text` | `string` | Query, Required | Search text for a location name in either English, Dutch, German, French and Italian. Partial recognition of 20 other languages. |

## Response Type

[`LocationModel[]`](../../doc/models/location-model.md)

## Example Usage

```php
$text = 'text0';

$result = $taxonomyController->searchLocations($text);
```


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
function listIndustries(
    ?int $limit = 50,
    ?int $offset = 0,
    ?string $acceptLanguage = null,
    ?string $xCustomerId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | Number of results to return per page.<br>**Default**: `50`<br>**Constraints**: `>= 0`, `<= 100` |
| `offset` | `?int` | Query, Optional | The initial index from which to return the results.<br>**Default**: `0`<br>**Constraints**: `>= 0` |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`IndustryModel[]`](../../doc/models/industry-model.md)

## Example Usage

```php
$limit = 10;
$offset = 0;
$acceptLanguage = Models\AcceptLanguageEnum::NL;
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $taxonomyController->listIndustries($limit, $offset, $acceptLanguage, $xCustomerId);
```

## Example Response *(as JSON)*

```json
[
  {
    "id": 48,
    "name": "Academic"
  },
  {
    "id": 20,
    "name": "Accounting"
  },
  {
    "id": 10,
    "name": "Advertising"
  },
  {
    "id": 32,
    "name": "Aerospace"
  },
  {
    "id": 17,
    "name": "Agriculture"
  },
  {
    "id": 5,
    "name": "Arts & Culture"
  },
  {
    "id": 22,
    "name": "Automotive"
  },
  {
    "id": 33,
    "name": "Aviation"
  },
  {
    "id": 19,
    "name": "Banking"
  },
  {
    "id": 16,
    "name": "Building and Construction"
  },
  {
    "id": 6,
    "name": "Charity and Not for Profit"
  },
  {
    "id": 2,
    "name": "Communications"
  },
  {
    "id": 52,
    "name": "E-commerce"
  },
  {
    "id": 24,
    "name": "Education"
  },
  {
    "id": 4,
    "name": "Energy"
  },
  {
    "id": 30,
    "name": "Engineering"
  },
  {
    "id": 15,
    "name": "Entertainment"
  },
  {
    "id": 49,
    "name": "Facility Management"
  },
  {
    "id": 9,
    "name": "Fashion"
  },
  {
    "id": 43,
    "name": "Fast Moving Consumer Goods"
  },
  {
    "id": 21,
    "name": "Finance"
  },
  {
    "id": 42,
    "name": "Food"
  },
  {
    "id": 29,
    "name": "Generic"
  },
  {
    "id": 8,
    "name": "Government and Public Sector"
  },
  {
    "id": 37,
    "name": "Health and Safety"
  },
  {
    "id": 12,
    "name": "Healthcare"
  },
  {
    "id": 40,
    "name": "Hospitality"
  },
  {
    "id": 1,
    "name": "Information Technology"
  },
  {
    "id": 18,
    "name": "Insurance"
  },
  {
    "id": 38,
    "name": "Language"
  },
  {
    "id": 14,
    "name": "Legal"
  },
  {
    "id": 7,
    "name": "Leisure and Sport"
  },
  {
    "id": 44,
    "name": "Logistics & Supply Chain"
  },
  {
    "id": 3,
    "name": "Manufacturing"
  },
  {
    "id": 39,
    "name": "Maritime"
  },
  {
    "id": 26,
    "name": "Media"
  },
  {
    "id": 47,
    "name": "Multilingual"
  },
  {
    "id": 31,
    "name": "Pharmaceuticals"
  },
  {
    "id": 28,
    "name": "Property and Housing"
  },
  {
    "id": 11,
    "name": "Real Estate"
  },
  {
    "id": 13,
    "name": "Recruitment"
  },
  {
    "id": 35,
    "name": "Retail"
  },
  {
    "id": 23,
    "name": "Science & Research"
  },
  {
    "id": 41,
    "name": "Sustainability"
  },
  {
    "id": 36,
    "name": "Telecommunications"
  },
  {
    "id": 27,
    "name": "Transport and Rail"
  },
  {
    "id": 34,
    "name": "Travel and Tourism"
  }
]
```


# Retrieve Education Levels

Retrieve all Education Level possible values.

```php
function retrieveEducationLevels(): ApiResponse
```

## Response Type

[`EducationLevelModel[]`](../../doc/models/education-level-model.md)

## Example Usage

```php
$apiResponse = $taxonomyController->retrieveEducationLevels();
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
function retrieveJobFunctionsTree(?string $acceptLanguage = null, ?string $xCustomerId = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`JobFunctionTreeModel[]`](../../doc/models/job-function-tree-model.md)

## Example Usage

```php
$acceptLanguage = Models\AcceptLanguageEnum::NL;
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $taxonomyController->retrieveJobFunctionsTree($acceptLanguage, $xCustomerId);
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
function retrieveSeniorities(): ApiResponse
```

## Response Type

[`SeniorityModel[]`](../../doc/models/seniority-model.md)

## Example Usage

```php
$apiResponse = $taxonomyController->retrieveSeniorities();
```

## Example Response *(as JSON)*

```json
[
  {
    "id": 1,
    "name": [
      {
        "languageCode": "de_DE",
        "value": "Geschäftsführer / C-Level"
      },
      {
        "languageCode": "en_GB",
        "value": "Executive/Director"
      },
      {
        "languageCode": "nl_NL",
        "value": "Executive/Director"
      }
    ]
  },
  {
    "id": 2,
    "name": [
      {
        "languageCode": "de_DE",
        "value": "Manager"
      },
      {
        "languageCode": "en_GB",
        "value": "Manager"
      },
      {
        "languageCode": "nl_NL",
        "value": "Manager"
      }
    ]
  },
  {
    "id": 3,
    "name": [
      {
        "languageCode": "de_DE",
        "value": "Professional"
      },
      {
        "languageCode": "en_GB",
        "value": "Mid-Senior level"
      },
      {
        "languageCode": "nl_NL",
        "value": "Professional"
      }
    ]
  },
  {
    "id": 4,
    "name": [
      {
        "languageCode": "de_DE",
        "value": "Berufseinsteiger"
      },
      {
        "languageCode": "en_GB",
        "value": "Entry level/Graduate"
      },
      {
        "languageCode": "nl_NL",
        "value": "Entry level/Graduate"
      }
    ]
  },
  {
    "id": 5,
    "name": [
      {
        "languageCode": "de_DE",
        "value": "Student/Trainee"
      },
      {
        "languageCode": "en_GB",
        "value": "Student/Trainee"
      },
      {
        "languageCode": "nl_NL",
        "value": "Student/Trainee"
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
    ?int $limit = 50,
    ?int $offset = 0,
    ?string $acceptLanguage = null,
    ?string $xCustomerId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `text` | `string` | Query, Required | Search text for a job title name |
| `limit` | `?int` | Query, Optional | Number of results to return per page.<br>**Default**: `50`<br>**Constraints**: `>= 0`, `<= 100` |
| `offset` | `?int` | Query, Optional | The initial index from which to return the results.<br>**Default**: `0`<br>**Constraints**: `>= 0` |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`PaginatedJobTitleListModel`](../../doc/models/paginated-job-title-list-model.md)

## Example Usage

```php
$text = 'text0';
$limit = 10;
$offset = 0;
$acceptLanguage = Models\AcceptLanguageEnum::NL;
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $taxonomyController->searchJobTitles($text, $limit, $offset, $acceptLanguage, $xCustomerId);
```


# Search Locations

This endpoint takes any text as input and returns a list of Locations matching the query, ordered by popularity.
Each response will include the entire world as a Location, even no Locations match the text query.
Use the `id` key of each object in the response to search for a Product.
Supports text input in English, Dutch and German.

```php
function searchLocations(string $text, ?string $acceptLanguage = null, ?string $xCustomerId = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `text` | `string` | Query, Required | Search text for a location name in either English, Dutch, German, French and Italian. Partial recognition of 20 other languages. |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`LocationModel[]`](../../doc/models/location-model.md)

## Example Usage

```php
$text = 'text0';
$acceptLanguage = Models\AcceptLanguageEnum::NL;
$xCustomerId = 'X-Customer-Id2';

$apiResponse = $taxonomyController->searchLocations($text, $acceptLanguage, $xCustomerId);
```

## Example Response *(as JSON)*

```json
[
  {
    "id": 2395,
    "fully_qualified_place_name": "United States",
    "canonical_name": "United States",
    "place_type": [
      "country"
    ],
    "within": {
      "id": 2616,
      "fully_qualified_place_name": "North America",
      "canonical_name": "North America",
      "place_type": [
        "continent"
      ],
      "within": {
        "id": 2425,
        "fully_qualified_place_name": "Welt",
        "canonical_name": "International",
        "place_type": [
          "world"
        ],
        "bounding_box": []
      },
      "bounding_box": []
    },
    "bounding_box": []
  },
  {
    "id": 2546,
    "fully_qualified_place_name": "US Virgin Islands",
    "canonical_name": "US Virgin Islands",
    "place_type": [
      "country",
      "region"
    ],
    "within": {
      "id": 2616,
      "fully_qualified_place_name": "North America",
      "canonical_name": "North America",
      "place_type": [
        "continent"
      ],
      "within": {
        "id": 2425,
        "fully_qualified_place_name": "Welt",
        "canonical_name": "International",
        "place_type": [
          "world"
        ],
        "bounding_box": []
      },
      "bounding_box": []
    },
    "bounding_box": []
  },
  {
    "id": 2501,
    "fully_qualified_place_name": "US Minor Outlying Islands",
    "canonical_name": "US Minor Outlying Islands",
    "place_type": [
      "country",
      "region"
    ],
    "bounding_box": []
  },
  {
    "id": 26698,
    "fully_qualified_place_name": "Statesboro, Georgia, United States",
    "canonical_name": "Statesboro",
    "place_type": [
      "place"
    ],
    "within": {
      "id": 2395,
      "fully_qualified_place_name": "United States",
      "canonical_name": "United States",
      "place_type": [
        "country"
      ],
      "within": {
        "id": 2616,
        "fully_qualified_place_name": "North America",
        "canonical_name": "North America",
        "place_type": [
          "continent"
        ],
        "within": {
          "id": 2425,
          "fully_qualified_place_name": "Welt",
          "canonical_name": "International",
          "place_type": [
            "world"
          ],
          "bounding_box": []
        },
        "bounding_box": []
      },
      "bounding_box": []
    },
    "area": 2195,
    "bounding_box": [
      -81.976425,
      32.187913,
      -81.52575,
      32.653433
    ]
  },
  {
    "id": 30620,
    "fully_qualified_place_name": "State College, Pennsylvania, United States",
    "canonical_name": "State College",
    "place_type": [
      "place"
    ],
    "within": {
      "id": 2395,
      "fully_qualified_place_name": "United States",
      "canonical_name": "United States",
      "place_type": [
        "country"
      ],
      "within": {
        "id": 2616,
        "fully_qualified_place_name": "North America",
        "canonical_name": "North America",
        "place_type": [
          "continent"
        ],
        "within": {
          "id": 2425,
          "fully_qualified_place_name": "Welt",
          "canonical_name": "International",
          "place_type": [
            "world"
          ],
          "bounding_box": []
        },
        "bounding_box": []
      },
      "bounding_box": []
    },
    "area": 254,
    "bounding_box": [
      -77.972841,
      40.729539,
      -77.786646,
      40.874866
    ]
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


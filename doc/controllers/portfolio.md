# Portfolio

```php
$portfolioController = $client->getPortfolioController();
```

## Class Name

`PortfolioController`

## Methods

* [Calculate Order Delivery Time](../../doc/controllers/portfolio.md#calculate-order-delivery-time)
* [Retrieve Multiple Products](../../doc/controllers/portfolio.md#retrieve-multiple-products)
* [Retrieve Single Product](../../doc/controllers/portfolio.md#retrieve-single-product)
* [Search Products](../../doc/controllers/portfolio.md#search-products)


# Calculate Order Delivery Time

This endpoint calculates total number of days to process and setup a campaign containing a list of Products, given a comma-separated list of their ids.

```php
function calculateOrderDeliveryTime(array $productsIds): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `productsIds` | `string[]` | Template, Required | - |

## Response Type

[`ProductsDeliveryTimeModel[]`](../../doc/models/products-delivery-time-model.md)

## Example Usage

```php
$productsIds = ['products_ids7', 'products_ids8'];

$result = $portfolioController->calculateOrderDeliveryTime($productsIds);
```

## Example Response *(as JSON)*

```json
[
  {
    "days_to_process": 1,
    "days_to_setup": 1,
    "total_days": 2
  }
]
```


# Retrieve Multiple Products

Sometimes you already have access to the Identification codes of more than one Product and you want to retrieve the most up-to-date information about them.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function retrieveMultipleProducts(array $productsIds, ?string $acceptLanguage = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `productsIds` | `string[]` | Template, Required | - |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | - |

## Response Type

[`ProductModel[]`](../../doc/models/product-model.md)

## Example Usage

```php
$productsIds = ['products_ids7', 'products_ids8'];
$acceptLanguage = Models\AcceptLanguageEnum::EN;

$result = $portfolioController->retrieveMultipleProducts($productsIds, $acceptLanguage);
```


# Retrieve Single Product

Sometimes you already have access to the Identification code of any particular Product and you want to retrieve the most up-to-date information about it.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function retrieveSingleProduct(string $productId, ?string $acceptLanguage = null): ProductModel
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `productId` | `string` | Template, Required | - |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | - |

## Response Type

[`ProductModel`](../../doc/models/product-model.md)

## Example Usage

```php
$productId = 'product_id4';
$acceptLanguage = Models\AcceptLanguageEnum::EN;

$result = $portfolioController->retrieveSingleProduct($productId, $acceptLanguage);
```


# Search Products

For a detailed tutorial on how to get started with portfolio search v2, check out our [Quickstart Tutorial](https://pkb.stoplight.io/docs/search/docs/Tutorial.md).
For an implementation demo of the product search experience, check out our [Developer Portal](http://vonq.io/pkb).
This endpoint exposes a list of Products with the options to search by Location, Job Title, Job Function and Industry.
Products are ranked by their relevancy to the search terms.
Optionally, products can filtered by Location.
Values for each parameter can be fetched by calling the other endpoints in this section.
Calling this endpoint will guarantee that the Products you see are configured for you as our Partner.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function searchProducts(
    ?int $limit = null,
    ?int $offset = null,
    ?array $includeLocationId = null,
    ?string $exactLocationId = null,
    ?string $jobFunctionId = null,
    ?string $jobTitleId = null,
    ?array $industryId = null,
    ?string $durationFrom = null,
    ?string $durationTo = null,
    ?string $name = null,
    ?string $currency = null,
    ?string $sortBy = Models\SortByEnum::RELEVANT,
    ?bool $recommended = null,
    ?bool $mcEnabled = null,
    ?string $acceptLanguage = null,
    ?bool $excludeRecommended = false
): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | Number of results to return per page. |
| `offset` | `?int` | Query, Optional | The initial index from which to return the results. |
| `includeLocationId` | `?(string[])` | Query, Optional | Id for a Location to search products against. If no exact matches exist, search will be expanded to the Location's region and country. Optionally, a (comma-separated) array of values can be passed. Passing multiple values increases the number of search results. |
| `exactLocationId` | `?string` | Query, Optional | Match only products specifically assigned to a Location. |
| `jobFunctionId` | `?string` | Query, Optional | Job Function id. Not to be used in conjunction with a Job Title id. |
| `jobTitleId` | `?string` | Query, Optional | Job title id |
| `industryId` | `?(string[])` | Query, Optional | Industry Id |
| `durationFrom` | `?string` | Query, Optional | Match only products with a duration more or equal than a certain number of days |
| `durationTo` | `?string` | Query, Optional | Match only products with a duration up to a certain number of days |
| `name` | `?string` | Query, Optional | Search text for a product name |
| `currency` | `?string` | Query, Optional | ISO-4217 code for a currency |
| `sortBy` | [`?string (SortByEnum)`](../../doc/models/sort-by-enum.md) | Query, Optional | Which products to show first. Defaults to 'relevant'<br>**Default**: `SortByEnum::RELEVANT` |
| `recommended` | `?bool` | Query, Optional | Whether to display a list of recommended products for the search parameters. If true, returns a limited list of products for the types: Job board, social media, publication and community. |
| `mcEnabled` | `?bool` | Query, Optional | Can be used to filter for products that are linked to a channel enabled for My Contracts orders |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | - |
| `excludeRecommended` | `?bool` | Query, Optional | Exclude recommended products from search results. Cannot be used in combination with 'recommended'.<br>**Default**: `false` |

## Response Type

[`ProductModel[]`](../../doc/models/product-model.md)

## Example Usage

```php
$sortBy = Models\SortByEnum::RELEVANT;
$acceptLanguage = Models\AcceptLanguageEnum::EN;
$excludeRecommended = false;

$result = $portfolioController->searchProducts(null, null, null, null, null, null, null, null, null, null, null, $sortBy, null, null, $acceptLanguage, $excludeRecommended);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | `ApiException` |


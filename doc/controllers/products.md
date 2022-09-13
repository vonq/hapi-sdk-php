# Products

```php
$productsTrue = $client->getProductsTrue();
```

## Class Name

`ProductsTrue`

## Methods

* [Calculate Order Delivery Time](../../doc/controllers/products.md#calculate-order-delivery-time)
* [Retrieve Multiple Products](../../doc/controllers/products.md#retrieve-multiple-products)
* [Retrieve Single Product](../../doc/controllers/products.md#retrieve-single-product)
* [Search Products](../../doc/controllers/products.md#search-products)


# Calculate Order Delivery Time

This endpoint calculates total number of days to process and setup a campaign containing a list of Products, given a comma-separated list of their ids.

Read more about days to process and days to setup [here](https://hapisupport.vonq.com/hc/en-us/articles/6042174569883-Time-to-process-and-time-to-set-up-first-order-per-channel).

Learn why some products take up to 10 days to setup: - https://hapisupport.vonq.com/hc/en-us/articles/6042257631643-What-is-a-sub-account-What-impact-does-this-have-on-the-order-

Note that delivery time is only applicable for Job Marketing products and it won't appear when using HAPI Job Post and connecting your contracts.

```php
function calculateOrderDeliveryTime(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `productsIds` | `string[]` | Template, Required | Comma separated list of product IDs<br>**Constraints**: *Maximum Items*: `50` |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`TotalDeliveryTimeModel`](../../doc/models/total-delivery-time-model.md)

## Example Usage

```php
$collect = [];

$productsIds = ['products_ids7', 'products_ids8'];
$collect['productsIds'] = $productsIds;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$apiResponse = $productsTrue->calculateOrderDeliveryTime($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |
| 404 | Not Found | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


# Retrieve Multiple Products

Sometimes you already have access to the Identification codes of more than one Product and you want to retrieve the most up-to-date information about them.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function retrieveMultipleProducts(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `productsIds` | `string[]` | Template, Required | Comma separated list of product IDs<br>**Constraints**: *Maximum Items*: `50` |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers. |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`PaginatedProductListModel`](../../doc/models/paginated-product-list-model.md)

## Example Usage

```php
$collect = [];

$productsIds = ['products_ids7', 'products_ids8'];
$collect['productsIds'] = $productsIds;

$acceptLanguage = Models\AcceptLanguageEnum::NL;
$collect['acceptLanguage'] = $acceptLanguage;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$apiResponse = $productsTrue->retrieveMultipleProducts($collect);
```


# Retrieve Single Product

Sometimes you already have access to the Identification code of any particular Product and you want to retrieve the most up-to-date information about it.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.

```php
function retrieveSingleProduct(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `productId` | `string` | Template, Required | The ID of the product you want to retrieve |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`ProductModel`](../../doc/models/product-model.md)

## Example Usage

```php
$collect = [];

$productId = 'product_id4';
$collect['productId'] = $productId;

$acceptLanguage = Models\AcceptLanguageEnum::NL;
$collect['acceptLanguage'] = $acceptLanguage;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$apiResponse = $productsTrue->retrieveSingleProduct($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


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
function searchProducts(array $options): ApiResponse
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
| `excludeRecommended` | `?bool` | Query, Optional | Exclude recommended products from search results. Cannot be used in combination with 'recommended'.<br>**Default**: `false` |
| `acceptLanguage` | [`?string (AcceptLanguageEnum)`](../../doc/models/accept-language-enum.md) | Header, Optional | The language the client prefers |
| `xCustomerId` | `?string` | Header, Optional | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`PaginatedProductListModel`](../../doc/models/paginated-product-list-model.md)

## Example Usage

```php
$collect = [];

$limit = 172;
$collect['limit'] = $limit;

$offset = 12;
$collect['offset'] = $offset;

$includeLocationId = ['includeLocationId3', 'includeLocationId4'];
$collect['includeLocationId'] = $includeLocationId;

$exactLocationId = 'exactLocationId6';
$collect['exactLocationId'] = $exactLocationId;

$jobFunctionId = 'jobFunctionId8';
$collect['jobFunctionId'] = $jobFunctionId;

$jobTitleId = 'jobTitleId4';
$collect['jobTitleId'] = $jobTitleId;

$industryId = ['industryId3'];
$collect['industryId'] = $industryId;

$durationFrom = 'durationFrom8';
$collect['durationFrom'] = $durationFrom;

$durationTo = 'durationTo6';
$collect['durationTo'] = $durationTo;

$name = 'name0';
$collect['name'] = $name;

$currency = 'currency0';
$collect['currency'] = $currency;

$sortBy = Models\SortByEnum::RELEVANT;
$collect['sortBy'] = $sortBy;

$recommended = false;
$collect['recommended'] = $recommended;

$mcEnabled = false;
$collect['mcEnabled'] = $mcEnabled;

$excludeRecommended = false;
$collect['excludeRecommended'] = $excludeRecommended;

$acceptLanguage = Models\AcceptLanguageEnum::NL;
$collect['acceptLanguage'] = $acceptLanguage;

$xCustomerId = 'X-Customer-Id2';
$collect['xCustomerId'] = $xCustomerId;

$apiResponse = $productsTrue->searchProducts($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


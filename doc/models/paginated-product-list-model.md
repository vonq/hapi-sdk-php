
# Paginated Product List Model

## Structure

`PaginatedProductListModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `int` | Required | Total number of products. | getCount(): int | setCount(int count): void |
| `facets` | `array[]` | Required | - | getFacets(): array | setFacets(array facets): void |
| `next` | `?string` | Required | Path to the next page of results, if any. | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Required | Path to the previous page of results, if any. | getPrevious(): ?string | setPrevious(?string previous): void |
| `results` | [`ProductModel[]`](../../doc/models/product-model.md) | Required | - | getResults(): array | setResults(array results): void |

## Example (as JSON)

```json
{
  "count": null,
  "facets": null,
  "next": null,
  "previous": null,
  "results": {
    "title": null,
    "locations": null,
    "job_functions": null,
    "industries": null,
    "description": "this is a product description",
    "homepage": null,
    "logo_square_url": null,
    "logo_rectangle_url": null,
    "duration": null,
    "time_to_process": null,
    "time_to_setup": null,
    "product_id": null,
    "vonq_price": null,
    "ratecard_price": null,
    "type": "job board",
    "cross_postings": null,
    "channel": {
      "id": 66,
      "name": null,
      "type": null,
      "url": null
    },
    "audience_group": null,
    "mc_enabled": false,
    "mc_only": false,
    "allow_orders": null
  }
}
```


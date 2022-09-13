
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
  "results": [
    {
      "description": "this is a product description",
      "duration": {
        "period": 30
      },
      "time_to_process": {
        "period": 24
      },
      "time_to_setup": {
        "period": 24
      },
      "vonq_price": [
        {
          "amount": 399.98
        }
      ],
      "ratecard_price": [
        {
          "amount": 399.98
        }
      ],
      "type": "job board",
      "mc_enabled": false,
      "mc_only": false
    }
  ]
}
```


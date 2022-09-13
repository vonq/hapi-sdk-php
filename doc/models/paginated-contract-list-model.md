
# Paginated Contract List Model

## Structure

`PaginatedContractListModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | Total number of contracts | getCount(): ?int | setCount(?int count): void |
| `next` | `?string` | Optional | Path to the next page of results, if any | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Optional | Path to the previous page of results, if any | getPrevious(): ?string | setPrevious(?string previous): void |
| `results` | [`?(ListContractModel[])`](../../doc/models/list-contract-model.md) | Optional | - | getResults(): ?array | setResults(?array results): void |

## Example (as JSON)

```json
{
  "count": 60,
  "next": "next2",
  "previous": "previous8",
  "results": [
    {
      "contract_id": "contract_id1",
      "customer_id": "customer_id1",
      "channel_id": 111,
      "alias": "alias5",
      "class_name": "class_name5",
      "facets": {
        "key1": "val1",
        "key2": "val2"
      },
      "product": {
        "product_id": "product_id3",
        "title": "title3"
      },
      "expiry_date": "2016-03-13T12:52:32.123Z",
      "credits": 47,
      "purchase_price": {
        "amount": 81.69,
        "currency": "currency7"
      },
      "igb_customer_id": "igb_customer_id3",
      "group": {
        "name": "name1"
      },
      "channel": {
        "id": 59,
        "mc_enabled": true,
        "logo_url": [
          {
            "url": "url0"
          },
          {
            "url": "url9"
          }
        ],
        "logo_square_url": [
          {
            "url": "url6",
            "size": "size2"
          }
        ],
        "logo_rectangle_url": [
          {
            "url": "url4",
            "size": "size0"
          },
          {
            "url": "url3",
            "size": "size1"
          }
        ]
      }
    }
  ]
}
```


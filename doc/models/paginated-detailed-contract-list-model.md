
# Paginated Detailed Contract List Model

## Structure

`PaginatedDetailedContractListModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | Total number of contracts | getCount(): ?int | setCount(?int count): void |
| `next` | `?string` | Optional | Path to the next page of results, if any | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Optional | Path to the previous page of results, if any | getPrevious(): ?string | setPrevious(?string previous): void |
| `results` | [`?(EncryptedContractModel[])`](../../doc/models/encrypted-contract-model.md) | Optional | - | getResults(): ?array | setResults(?array results): void |

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
      "credentials": {
        "key1": "val1",
        "key2": "val2"
      },
      "class_name": "class_name5",
      "facets": {
        "key1": "val1",
        "key2": "val2"
      },
      "product": {
        "product_id": "product_id3",
        "title": "title3"
      },
      "posting_requirements": [
        {
          "name": "name1",
          "label": "label1",
          "sort": "sort3",
          "required": true,
          "type": "DATE",
          "options": [
            {
              "default": "default8",
              "key": "key8",
              "label": "label8",
              "labels": {
                "key0": {
                  "key1": "val1",
                  "key2": "val2"
                },
                "key1": {
                  "key1": "val1",
                  "key2": "val2"
                },
                "key2": {
                  "key1": "val1",
                  "key2": "val2"
                }
              },
              "sort": "sort0",
              "parent": "parent8",
              "requires": [
                {
                  "key1": "val1",
                  "key2": "val2"
                },
                {
                  "key1": "val1",
                  "key2": "val2"
                }
              ]
            },
            {
              "default": "default9",
              "key": "key9",
              "label": "label9",
              "labels": {
                "key0": {
                  "key1": "val1",
                  "key2": "val2"
                }
              },
              "sort": "sort1",
              "parent": "parent9",
              "requires": [
                {
                  "key1": "val1",
                  "key2": "val2"
                },
                {
                  "key1": "val1",
                  "key2": "val2"
                },
                {
                  "key1": "val1",
                  "key2": "val2"
                }
              ]
            },
            {
              "default": "default0",
              "key": "key0",
              "label": "label0",
              "labels": {
                "key0": {
                  "key1": "val1",
                  "key2": "val2"
                },
                "key1": {
                  "key1": "val1",
                  "key2": "val2"
                }
              },
              "sort": "sort2",
              "parent": "parent0",
              "requires": [
                {
                  "key1": "val1",
                  "key2": "val2"
                }
              ]
            }
          ],
          "rules": [
            {
              "rule": "max",
              "data": "data9"
            }
          ],
          "autocomplete": {},
          "display_rules": {
            "show": [
              {
                "facet": "facet8",
                "value": "String7",
                "op": "notempty"
              },
              {
                "facet": "facet9",
                "value": "String8",
                "op": "equal"
              },
              {
                "facet": "facet0",
                "value": "String9",
                "op": "in"
              }
            ]
          }
        },
        {
          "name": "name2",
          "label": "label2",
          "sort": "sort4",
          "required": false,
          "type": "SELECT",
          "options": [
            {
              "default": "default9",
              "key": "key9",
              "label": "label9",
              "labels": {
                "key0": {
                  "key1": "val1",
                  "key2": "val2"
                }
              },
              "sort": "sort1",
              "parent": "parent9",
              "requires": [
                {
                  "key1": "val1",
                  "key2": "val2"
                },
                {
                  "key1": "val1",
                  "key2": "val2"
                },
                {
                  "key1": "val1",
                  "key2": "val2"
                }
              ]
            }
          ],
          "rules": [
            {
              "rule": "minitems",
              "data": "data0"
            },
            {
              "rule": "maxitems",
              "data": "data1"
            }
          ],
          "autocomplete": {},
          "display_rules": {
            "show": [
              {
                "facet": "facet9",
                "value": "String8",
                "op": "equal"
              }
            ]
          }
        }
      ],
      "expiry_date": "2016-03-13T12:52:32.123Z",
      "credits": 47,
      "purchase_price": {
        "amount": 81.69,
        "currency": "currency7"
      },
      "igb_customer_id": "igb_customer_id3",
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
      },
      "group": {
        "name": "name1"
      }
    }
  ]
}
```


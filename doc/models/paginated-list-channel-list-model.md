
# Paginated List Channel List Model

Paginated list of channels, with basic information for each channel

## Structure

`PaginatedListChannelListModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | Total number of channels | getCount(): ?int | setCount(?int count): void |
| `next` | `?string` | Optional | Path to the next page of results, if any | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Optional | Path to the previous page of results, if any | getPrevious(): ?string | setPrevious(?string previous): void |
| `results` | [`?(ListChannelModel[])`](../../doc/models/list-channel-model.md) | Optional | - | getResults(): ?array | setResults(?array results): void |

## Example (as JSON)

```json
{
  "count": 60,
  "next": "next2",
  "previous": "previous8",
  "results": [
    {
      "id": 29,
      "mc_enabled": true,
      "logo_url": [
        {
          "url": "url6"
        },
        {
          "url": "url7"
        },
        {
          "url": "url8"
        }
      ],
      "logo_square_url": [
        {
          "url": "url8",
          "size": "size4"
        },
        {
          "url": "url9",
          "size": "size5"
        },
        {
          "url": "url0",
          "size": "size6"
        }
      ],
      "logo_rectangle_url": [
        {
          "url": "url2",
          "size": "size2"
        },
        {
          "url": "url3",
          "size": "size1"
        },
        {
          "url": "url4",
          "size": "size0"
        }
      ]
    }
  ]
}
```


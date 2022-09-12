
# Meta Model

## Structure

`MetaModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `first` | `string` | Required | /campaigns?limit=20&offset=0 | getFirst(): string | setFirst(string first): void |
| `last` | `string` | Required | /campaigns?limit=20&offset=40 | getLast(): string | setLast(string last): void |
| `next` | `string` | Required | /campaigns?limit=20&offset=40 | getNext(): string | setNext(string next): void |
| `previous` | `string` | Required | /campaigns?limit=20&offset=20 | getPrevious(): string | setPrevious(string previous): void |

## Example (as JSON)

```json
{
  "first": "first6",
  "last": "last0",
  "next": "next2",
  "previous": "previous8"
}
```


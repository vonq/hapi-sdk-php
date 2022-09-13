
# Paginated Job Title List Model

## Structure

`PaginatedJobTitleListModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | Total number of results<br>**Constraints**: `<= 10` | getCount(): ?int | setCount(?int count): void |
| `next` | `?string` | Optional | - | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Optional | - | getPrevious(): ?string | setPrevious(?string previous): void |
| `results` | [`?(JobTitleModel[])`](../../doc/models/job-title-model.md) | Optional | - | getResults(): ?array | setResults(?array results): void |

## Example (as JSON)

```json
{
  "count": 60,
  "next": "next2",
  "previous": "previous8",
  "results": [
    {
      "id": 29,
      "name": "name3",
      "job_function": {}
    }
  ]
}
```


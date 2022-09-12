
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
  "count": null,
  "next": null,
  "previous": null,
  "results": null
}
```


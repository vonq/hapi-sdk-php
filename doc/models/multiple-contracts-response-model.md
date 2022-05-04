
# Multiple Contracts Response Model

## Structure

`MultipleContractsResponseModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?float` | Optional | count of elements in results | getCount(): ?float | setCount(?float count): void |
| `previous` | `?string` | Optional | link to get previous results | getPrevious(): ?string | setPrevious(?string previous): void |
| `next` | `?string` | Optional | link to get next results | getNext(): ?string | setNext(?string next): void |
| `results` | [`?(ContractModel[])`](../../doc/models/contract-model.md) | Optional | - | getResults(): ?array | setResults(?array results): void |

## Example (as JSON)

```json
{
  "count": null,
  "previous": null,
  "next": null,
  "results": null
}
```


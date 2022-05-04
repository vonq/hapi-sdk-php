
# Result Set 1 Model

## Structure

`ResultSet1Model`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `total` | `?float` | Optional | Number of total results | getTotal(): ?float | setTotal(?float total): void |
| `limit` | `?float` | Optional | Results page size | getLimit(): ?float | setLimit(?float limit): void |
| `offset` | `?float` | Optional | Initial starting index for the results | getOffset(): ?float | setOffset(?float offset): void |
| `data` | [`?(CampaignModel[])`](../../doc/models/campaign-model.md) | Optional | A Page of Campaign Objects | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "total": null,
  "limit": null,
  "offset": null,
  "data": null
}
```


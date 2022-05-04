
# Job Function Tree Model

## Structure

`JobFunctionTreeModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `float` | Required | - | getId(): float | setId(float id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `children` | [`JobFunctionTreeModel[]`](../../doc/models/job-function-tree-model.md) | Required | - | getChildren(): array | setChildren(array children): void |

## Example (as JSON)

```json
{
  "id": 60.0,
  "name": "name0",
  "children": [
    {
      "id": 128.74,
      "name": "name4",
      "children": {
        "id": 128.74,
        "name": "name4",
        "children": null
      }
    },
    {
      "id": 128.75,
      "name": "name5",
      "children": {
        "id": 128.73,
        "name": "name3",
        "children": null
      }
    }
  ]
}
```


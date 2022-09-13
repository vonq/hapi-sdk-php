
# Job Function Tree

## Structure

`JobFunctionTree`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `children` | [`JobFunctionTree[]`](../../doc/models/job-function-tree.md) | Required | - | getChildren(): array | setChildren(array children): void |

## Example (as JSON)

```json
{
  "id": 112,
  "name": "name0",
  "children": [
    {
      "id": 74,
      "name": "name4",
      "children": {
        "id": 74,
        "name": "name4",
        "children": null
      }
    },
    {
      "id": 75,
      "name": "name5",
      "children": {
        "id": 73,
        "name": "name3",
        "children": null
      }
    }
  ]
}
```


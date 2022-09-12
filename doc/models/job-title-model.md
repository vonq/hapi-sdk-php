
# Job Title Model

## Structure

`JobTitleModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `jobFunction` | [`LimitedJobFunctionModel`](../../doc/models/limited-job-function-model.md) | Required | JobFunction object that doesn't<br>follow nested relationships | getJobFunction(): LimitedJobFunctionModel | setJobFunction(LimitedJobFunctionModel jobFunction): void |

## Example (as JSON)

```json
{
  "id": 112,
  "name": "name0",
  "job_function": {}
}
```


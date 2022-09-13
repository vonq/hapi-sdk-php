
# Custom Facet

## Structure

`CustomFacet`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requiredParameters` | [`string[] (RequiredParametersEnum)`](../../doc/models/required-parameters-enum.md) | Required | List of keys to pass to  the body of the request calling the [List autocomplete values for posting requirements](https://vonq.stoplight.io/docs/hapi/b3A6MzM2MDEzODk-list-autocomplete-values-for-posting-requirement) endpoint. | getRequiredParameters(): array | setRequiredParameters(array requiredParameters): void |
| `parametersSource` | [`ParametersSource`](../../doc/models/parameters-source.md) | Required | Optional source for the parameters made of parameter name as key and source for the parameter value as object | getParametersSource(): ParametersSource | setParametersSource(ParametersSource parametersSource): void |

## Example (as JSON)

```json
{}
```


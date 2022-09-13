
# Taxonomy Name Model

## Structure

`TaxonomyNameModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `languageCode` | [`?string (LanguageCodeEnum)`](../../doc/models/language-code-enum.md) | Optional | ICU Locale code for the Language of the taxonomy item | getLanguageCode(): ?string | setLanguageCode(?string languageCode): void |
| `value` | `?string` | Optional | The name of the taxonomy item in one defined Language | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "languageCode": "nl_NL",
  "value": "Master / Postdoctoraal"
}
```


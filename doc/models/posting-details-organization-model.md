
# Posting Details Organization Model

## Structure

`PostingDetailsOrganizationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Name of the Company | getName(): string | setName(string name): void |
| `companyLogo` | `string` | Required | The company Logo that wants to be used on the posting. It has to be publicly available so it's picked up<br>and used for the different publishing platforms | getCompanyLogo(): string | setCompanyLogo(string companyLogo): void |

## Example (as JSON)

```json
{
  "name": "Vonq",
  "companyLogo": "http://static.ats.com/public/vonq-company-logo.png"
}
```


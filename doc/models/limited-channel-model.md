
# Limited Channel Model

## Structure

`LimitedChannelModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | The name of a channel | getName(): string | setName(string name): void |
| `url` | `string` | Required | The url of a channel | getUrl(): string | setUrl(string url): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `mcEnabled` | `bool` | Required | Does a channel support My Contracts | getMcEnabled(): bool | setMcEnabled(bool mcEnabled): void |
| `manualSetupRequired` | `bool` | Required | Some Channels require manual setup done by the end-user. In most such cases, `setup_instructions` should contain HTML | getManualSetupRequired(): bool | setManualSetupRequired(bool manualSetupRequired): void |
| `setupInstructions` | `string` | Required | Additional setup instructions required to post on the Channel | getSetupInstructions(): string | setSetupInstructions(string setupInstructions): void |
| `feedUrl` | `?string` | Required | Some channels like apec.fr require the user to send the job board an XML url. Since the feed_url is user-based,  unless a `X-Customer-Id` header is passed,the value will be null. If not null, this value should be displayed to the user, along with the `setup_instructions` | getFeedUrl(): ?string | setFeedUrl(?string feedUrl): void |
| `contractCredentials` | [`ContractCredentialModel[]`](../../doc/models/contract-credential-model.md) | Required | - | getContractCredentials(): array | setContractCredentials(array contractCredentials): void |
| `contractFacets` | [`FacetModel[]`](../../doc/models/facet-model.md) | Required | - | getContractFacets(): array | setContractFacets(array contractFacets): void |
| `postingRequirements` | [`FacetModel[]`](../../doc/models/facet-model.md) | Required | Dynamic posting requirements for MC products, used to provide additional data with vacancies | getPostingRequirements(): array | setPostingRequirements(array postingRequirements): void |
| `logoUrl` | [`?(ProductLogoModel[])`](../../doc/models/product-logo-model.md) | Optional | - | getLogoUrl(): ?array | setLogoUrl(?array logoUrl): void |
| `logoSquareUrl` | [`?(ProductLogoWithSizeModel[])`](../../doc/models/product-logo-with-size-model.md) | Optional | - | getLogoSquareUrl(): ?array | setLogoSquareUrl(?array logoSquareUrl): void |
| `logoRectangleUrl` | [`?(ProductLogoWithSizeModel[])`](../../doc/models/product-logo-with-size-model.md) | Optional | - | getLogoRectangleUrl(): ?array | setLogoRectangleUrl(?array logoRectangleUrl): void |

## Example (as JSON)

```json
{
  "id": null,
  "name": "Linkedin",
  "url": "https://linkedin.com/",
  "type": null,
  "mc_enabled": false,
  "manual_setup_required": null,
  "setup_instructions": null,
  "feed_url": null,
  "contract_credentials": null,
  "contract_facets": {
    "name": null,
    "label": null,
    "sort": null,
    "required": null,
    "type": "AUTOCOMPLETE",
    "options": null
  },
  "posting_requirements": {
    "name": null,
    "label": null,
    "sort": null,
    "required": null,
    "type": "AUTOCOMPLETE",
    "options": null
  }
}
```


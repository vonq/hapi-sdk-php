
# Channel Model

## Structure

`ChannelModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The name of a channel | getName(): string | setName(string name): void |
| `url` | `string` | Required | The url of a channel | getUrl(): string | setUrl(string url): void |
| `type` | [`string (ChannelTypeEnum)`](../../doc/models/channel-type-enum.md) | Required | The type of a channel | getType(): string | setType(string type): void |
| `mcEnabled` | `bool` | Required | Does a channel support My Contracts | getMcEnabled(): bool | setMcEnabled(bool mcEnabled): void |
| `contractCredentials` | [`ContractCredentialModel[]`](../../doc/models/contract-credential-model.md) | Required | - | getContractCredentials(): array | setContractCredentials(array contractCredentials): void |
| `contractFacets` | `array[]` | Required | - | getContractFacets(): array | setContractFacets(array contractFacets): void |
| `postingRequirements` | [`FacetModel[]`](../../doc/models/facet-model.md) | Required | Dynamic posting requirements for MC products, used to provide additional data with vacancies | getPostingRequirements(): array | setPostingRequirements(array postingRequirements): void |
| `manualSetupRequired` | `bool` | Required | Some Channels require manual setup done by the end-user. In most such cases, `setup_instructions` should contain HTML | getManualSetupRequired(): bool | setManualSetupRequired(bool manualSetupRequired): void |
| `setupInstructions` | `?string` | Required | Additional setup instructions required to post on the Channel | getSetupInstructions(): ?string | setSetupInstructions(?string setupInstructions): void |
| `feedUrl` | `?string` | Required | Some channels like apec.fr require the user to send the job board an XML url. If not null, this value should be displayed to the user, along with the `setup_instructions` | getFeedUrl(): ?string | setFeedUrl(?string feedUrl): void |

## Example (as JSON)

```json
{
  "name": "Linkedin",
  "url": "www.linkedin.com",
  "type": "job board",
  "mc_enabled": false,
  "contract_credentials": null,
  "contract_facets": null,
  "posting_requirements": {
    "name": null,
    "label": null,
    "sort": null,
    "required": null,
    "type": "AUTOCOMPLETE",
    "options": null,
    "autocomplete": null
  },
  "manual_setup_required": null,
  "setup_instructions": null,
  "feed_url": null
}
```


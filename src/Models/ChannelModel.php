<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ChannelModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $mcEnabled;

    /**
     * @var ContractCredentialModel[]
     */
    private $contractCredentials;

    /**
     * @var array[]
     */
    private $contractFacets;

    /**
     * @var FacetModel[]
     */
    private $postingRequirements;

    /**
     * @var bool
     */
    private $manualSetupRequired;

    /**
     * @var string|null
     */
    private $setupInstructions;

    /**
     * @var string|null
     */
    private $feedUrl;

    /**
     * @param string $name
     * @param string $url
     * @param string $type
     * @param bool $mcEnabled
     * @param ContractCredentialModel[] $contractCredentials
     * @param array[] $contractFacets
     * @param FacetModel[] $postingRequirements
     * @param bool $manualSetupRequired
     */
    public function __construct(
        string $name,
        string $url,
        string $type,
        bool $mcEnabled,
        array $contractCredentials,
        array $contractFacets,
        array $postingRequirements,
        bool $manualSetupRequired
    ) {
        $this->name = $name;
        $this->url = $url;
        $this->type = $type;
        $this->mcEnabled = $mcEnabled;
        $this->contractCredentials = $contractCredentials;
        $this->contractFacets = $contractFacets;
        $this->postingRequirements = $postingRequirements;
        $this->manualSetupRequired = $manualSetupRequired;
    }

    /**
     * Returns Name.
     * The name of a channel
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of a channel
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Url.
     * The url of a channel
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The url of a channel
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Type.
     * The type of a channel
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of a channel
     *
     * @required
     * @maps type
     * @factory \HAPILib\Models\ChannelTypeEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Mc Enabled.
     * Does a channel support My Contracts
     */
    public function getMcEnabled(): bool
    {
        return $this->mcEnabled;
    }

    /**
     * Sets Mc Enabled.
     * Does a channel support My Contracts
     *
     * @required
     * @maps mc_enabled
     */
    public function setMcEnabled(bool $mcEnabled): void
    {
        $this->mcEnabled = $mcEnabled;
    }

    /**
     * Returns Contract Credentials.
     *
     * @return ContractCredentialModel[]
     */
    public function getContractCredentials(): array
    {
        return $this->contractCredentials;
    }

    /**
     * Sets Contract Credentials.
     *
     * @required
     * @maps contract_credentials
     *
     * @param ContractCredentialModel[] $contractCredentials
     */
    public function setContractCredentials(array $contractCredentials): void
    {
        $this->contractCredentials = $contractCredentials;
    }

    /**
     * Returns Contract Facets.
     *
     * @return array[]
     */
    public function getContractFacets(): array
    {
        return $this->contractFacets;
    }

    /**
     * Sets Contract Facets.
     *
     * @required
     * @maps contract_facets
     *
     * @param array[] $contractFacets
     */
    public function setContractFacets(array $contractFacets): void
    {
        $this->contractFacets = $contractFacets;
    }

    /**
     * Returns Posting Requirements.
     * Dynamic posting requirements for MC products, used to provide additional data with vacancies
     *
     * @return FacetModel[]
     */
    public function getPostingRequirements(): array
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     * Dynamic posting requirements for MC products, used to provide additional data with vacancies
     *
     * @required
     * @maps posting_requirements
     *
     * @param FacetModel[] $postingRequirements
     */
    public function setPostingRequirements(array $postingRequirements): void
    {
        $this->postingRequirements = $postingRequirements;
    }

    /**
     * Returns Manual Setup Required.
     * Some Channels require manual setup done by the end-user. In most such cases, `setup_instructions`
     * should contain HTML
     */
    public function getManualSetupRequired(): bool
    {
        return $this->manualSetupRequired;
    }

    /**
     * Sets Manual Setup Required.
     * Some Channels require manual setup done by the end-user. In most such cases, `setup_instructions`
     * should contain HTML
     *
     * @required
     * @maps manual_setup_required
     */
    public function setManualSetupRequired(bool $manualSetupRequired): void
    {
        $this->manualSetupRequired = $manualSetupRequired;
    }

    /**
     * Returns Setup Instructions.
     * Additional setup instructions required to post on the Channel
     */
    public function getSetupInstructions(): ?string
    {
        return $this->setupInstructions;
    }

    /**
     * Sets Setup Instructions.
     * Additional setup instructions required to post on the Channel
     *
     * @maps setup_instructions
     */
    public function setSetupInstructions(?string $setupInstructions): void
    {
        $this->setupInstructions = $setupInstructions;
    }

    /**
     * Returns Feed Url.
     * Some channels like apec.fr require the user to send the job board an XML url. If not null, this
     * value should be displayed to the user, along with the `setup_instructions`
     */
    public function getFeedUrl(): ?string
    {
        return $this->feedUrl;
    }

    /**
     * Sets Feed Url.
     * Some channels like apec.fr require the user to send the job board an XML url. If not null, this
     * value should be displayed to the user, along with the `setup_instructions`
     *
     * @maps feed_url
     */
    public function setFeedUrl(?string $feedUrl): void
    {
        $this->feedUrl = $feedUrl;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['name']                  = $this->name;
        $json['url']                   = $this->url;
        $json['type']                  = ChannelTypeEnum::checkValue($this->type);
        $json['mc_enabled']            = $this->mcEnabled;
        $json['contract_credentials']  = $this->contractCredentials;
        $json['contract_facets']       = $this->contractFacets;
        $json['posting_requirements']  = $this->postingRequirements;
        $json['manual_setup_required'] = $this->manualSetupRequired;
        $json['setup_instructions']    = $this->setupInstructions;
        $json['feed_url']              = $this->feedUrl;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class LimitedChannelModel implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

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
     * @var bool
     */
    private $manualSetupRequired;

    /**
     * @var string
     */
    private $setupInstructions;

    /**
     * @var string|null
     */
    private $feedUrl;

    /**
     * @var ContractCredentialModel[]
     */
    private $contractCredentials;

    /**
     * @var FacetModel[]
     */
    private $contractFacets;

    /**
     * @var FacetModel[]
     */
    private $postingRequirements;

    /**
     * @var ProductLogoModel[]|null
     */
    private $logoUrl;

    /**
     * @var ProductLogoWithSizeModel[]|null
     */
    private $logoSquareUrl;

    /**
     * @var ProductLogoWithSizeModel[]|null
     */
    private $logoRectangleUrl;

    /**
     * @param int $id
     * @param string $name
     * @param string $url
     * @param string $type
     * @param bool $mcEnabled
     * @param bool $manualSetupRequired
     * @param string $setupInstructions
     * @param ContractCredentialModel[] $contractCredentials
     * @param FacetModel[] $contractFacets
     * @param FacetModel[] $postingRequirements
     */
    public function __construct(
        int $id,
        string $name,
        string $url,
        string $type,
        bool $mcEnabled,
        bool $manualSetupRequired,
        string $setupInstructions,
        array $contractCredentials,
        array $contractFacets,
        array $postingRequirements
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->type = $type;
        $this->mcEnabled = $mcEnabled;
        $this->manualSetupRequired = $manualSetupRequired;
        $this->setupInstructions = $setupInstructions;
        $this->contractCredentials = $contractCredentials;
        $this->contractFacets = $contractFacets;
        $this->postingRequirements = $postingRequirements;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
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
    public function getSetupInstructions(): string
    {
        return $this->setupInstructions;
    }

    /**
     * Sets Setup Instructions.
     * Additional setup instructions required to post on the Channel
     *
     * @required
     * @maps setup_instructions
     */
    public function setSetupInstructions(string $setupInstructions): void
    {
        $this->setupInstructions = $setupInstructions;
    }

    /**
     * Returns Feed Url.
     * Some channels like apec.fr require the user to send the job board an XML url. Since the feed_url is
     * user-based,  unless a `X-Customer-Id` header is passed,the value will be null. If not null, this
     * value should be displayed to the user, along with the `setup_instructions`
     */
    public function getFeedUrl(): ?string
    {
        return $this->feedUrl;
    }

    /**
     * Sets Feed Url.
     * Some channels like apec.fr require the user to send the job board an XML url. Since the feed_url is
     * user-based,  unless a `X-Customer-Id` header is passed,the value will be null. If not null, this
     * value should be displayed to the user, along with the `setup_instructions`
     *
     * @maps feed_url
     */
    public function setFeedUrl(?string $feedUrl): void
    {
        $this->feedUrl = $feedUrl;
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
     * @return FacetModel[]
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
     * @param FacetModel[] $contractFacets
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
     * Returns Logo Url.
     *
     * @return ProductLogoModel[]|null
     */
    public function getLogoUrl(): ?array
    {
        return $this->logoUrl;
    }

    /**
     * Sets Logo Url.
     *
     * @maps logo_url
     *
     * @param ProductLogoModel[]|null $logoUrl
     */
    public function setLogoUrl(?array $logoUrl): void
    {
        $this->logoUrl = $logoUrl;
    }

    /**
     * Returns Logo Square Url.
     *
     * @return ProductLogoWithSizeModel[]|null
     */
    public function getLogoSquareUrl(): ?array
    {
        return $this->logoSquareUrl;
    }

    /**
     * Sets Logo Square Url.
     *
     * @maps logo_square_url
     *
     * @param ProductLogoWithSizeModel[]|null $logoSquareUrl
     */
    public function setLogoSquareUrl(?array $logoSquareUrl): void
    {
        $this->logoSquareUrl = $logoSquareUrl;
    }

    /**
     * Returns Logo Rectangle Url.
     *
     * @return ProductLogoWithSizeModel[]|null
     */
    public function getLogoRectangleUrl(): ?array
    {
        return $this->logoRectangleUrl;
    }

    /**
     * Sets Logo Rectangle Url.
     *
     * @maps logo_rectangle_url
     *
     * @param ProductLogoWithSizeModel[]|null $logoRectangleUrl
     */
    public function setLogoRectangleUrl(?array $logoRectangleUrl): void
    {
        $this->logoRectangleUrl = $logoRectangleUrl;
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
        $json['id']                     = $this->id;
        $json['name']                   = $this->name;
        $json['url']                    = $this->url;
        $json['type']                   = $this->type;
        $json['mc_enabled']             = $this->mcEnabled;
        $json['manual_setup_required']  = $this->manualSetupRequired;
        $json['setup_instructions']     = $this->setupInstructions;
        $json['feed_url']               = $this->feedUrl;
        $json['contract_credentials']   = $this->contractCredentials;
        $json['contract_facets']        = $this->contractFacets;
        $json['posting_requirements']   = $this->postingRequirements;
        if (isset($this->logoUrl)) {
            $json['logo_url']           = $this->logoUrl;
        }
        if (isset($this->logoSquareUrl)) {
            $json['logo_square_url']    = $this->logoSquareUrl;
        }
        if (isset($this->logoRectangleUrl)) {
            $json['logo_rectangle_url'] = $this->logoRectangleUrl;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

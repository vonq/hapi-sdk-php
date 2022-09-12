<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class FacetModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $sort;

    /**
     * @var bool
     */
    private $required;

    /**
     * @var string
     */
    private $type;

    /**
     * @var OptionsFacetModel[]
     */
    private $options;

    /**
     * @var RuleModel[]|null
     */
    private $rules;

    /**
     * @var CustomFacetModel|null
     */
    private $autocomplete;

    /**
     * @var FacetDisplayRulesModel|null
     */
    private $displayRules;

    /**
     * @param string $name
     * @param string $label
     * @param string $sort
     * @param bool $required
     * @param string $type
     * @param OptionsFacetModel[] $options
     */
    public function __construct(
        string $name,
        string $label,
        string $sort,
        bool $required,
        string $type,
        array $options
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->sort = $sort;
        $this->required = $required;
        $this->type = $type;
        $this->options = $options;
    }

    /**
     * Returns Name.
     * The name of the Facet. To be used as a key when ordering a Campaign, under the `orderedProductsSpecs.
     * postingRequirements` key.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the Facet. To be used as a key when ordering a Campaign, under the `orderedProductsSpecs.
     * postingRequirements` key.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Label.
     * The user facing label
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     * The user facing label
     *
     * @required
     * @maps label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns Sort.
     * The order in the list of vacancy fields to be displayed to the user when posting. Facets with lower
     * `sort` values should be displayed first.
     */
    public function getSort(): string
    {
        return $this->sort;
    }

    /**
     * Sets Sort.
     * The order in the list of vacancy fields to be displayed to the user when posting. Facets with lower
     * `sort` values should be displayed first.
     *
     * @required
     * @maps sort
     */
    public function setSort(string $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * Returns Required.
     * Whether the Facet is required when ordering a Campaign. 0 and 1 are equivalent to `true` or `false`
     */
    public function getRequired(): bool
    {
        return $this->required;
    }

    /**
     * Sets Required.
     * Whether the Facet is required when ordering a Campaign. 0 and 1 are equivalent to `true` or `false`
     *
     * @required
     * @maps required
     */
    public function setRequired(bool $required): void
    {
        $this->required = $required;
    }

    /**
     * Returns Type.
     * The type of UI and data structure to be used to input and store values for this Facet.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of UI and data structure to be used to input and store values for this Facet.
     *
     * @required
     * @maps type
     * @factory \HAPILib\Models\FacetTypeEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Options.
     * list of choices for this Facet's value.
     *
     * @return OptionsFacetModel[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * list of choices for this Facet's value.
     *
     * @required
     * @maps options
     *
     * @param OptionsFacetModel[] $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    /**
     * Returns Rules.
     * special validation rules that apply for this Facet's value
     *
     * @return RuleModel[]|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * Sets Rules.
     * special validation rules that apply for this Facet's value
     *
     * @maps rules
     *
     * @param RuleModel[]|null $rules
     */
    public function setRules(?array $rules): void
    {
        $this->rules = $rules;
    }

    /**
     * Returns Autocomplete.
     */
    public function getAutocomplete(): ?CustomFacetModel
    {
        return $this->autocomplete;
    }

    /**
     * Sets Autocomplete.
     *
     * @maps autocomplete
     */
    public function setAutocomplete(?CustomFacetModel $autocomplete): void
    {
        $this->autocomplete = $autocomplete;
    }

    /**
     * Returns Display Rules.
     * List of rules used to decide if this facet should be displayed or not.
     *
     * The facet is displayed when the display rules object is null or if there is a match with at least
     * one of the show rules.
     * Else the facet is not displayed and should not be shown to the user nor facet data be sent to the
     * endpoint.
     */
    public function getDisplayRules(): ?FacetDisplayRulesModel
    {
        return $this->displayRules;
    }

    /**
     * Sets Display Rules.
     * List of rules used to decide if this facet should be displayed or not.
     *
     * The facet is displayed when the display rules object is null or if there is a match with at least
     * one of the show rules.
     * Else the facet is not displayed and should not be shown to the user nor facet data be sent to the
     * endpoint.
     *
     * @maps display_rules
     */
    public function setDisplayRules(?FacetDisplayRulesModel $displayRules): void
    {
        $this->displayRules = $displayRules;
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
        $json['name']              = $this->name;
        $json['label']             = $this->label;
        $json['sort']              = $this->sort;
        $json['required']          = $this->required;
        $json['type']              = FacetTypeEnum::checkValue($this->type);
        $json['options']           = $this->options;
        if (isset($this->rules)) {
            $json['rules']         = $this->rules;
        }
        if (isset($this->autocomplete)) {
            $json['autocomplete']  = $this->autocomplete;
        }
        if (isset($this->displayRules)) {
            $json['display_rules'] = $this->displayRules;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

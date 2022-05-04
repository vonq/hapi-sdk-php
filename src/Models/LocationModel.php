<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

/**
 * Location(id, canonical_name, desq_name_en, desq_country_code, country_code, mapbox_id, mapbox_text,
 * mapbox_placename, mapbox_context, mapbox_place_type, mapbox_shortcode, mapbox_within)
 */
class LocationModel implements \JsonSerializable
{
    /**
     * @var float
     */
    private $id;

    /**
     * @var string
     */
    private $fullyQualifiedPlaceName;

    /**
     * @var string
     */
    private $canonicalName;

    /**
     * @var float[]
     */
    private $boundingBox;

    /**
     * @var float
     */
    private $area;

    /**
     * @var string
     */
    private $placeType;

    /**
     * @var LocationModel
     */
    private $within;

    /**
     * @param float $id
     * @param string $fullyQualifiedPlaceName
     * @param string $canonicalName
     * @param float[] $boundingBox
     * @param float $area
     * @param string $placeType
     * @param LocationModel $within
     */
    public function __construct(
        float $id,
        string $fullyQualifiedPlaceName,
        string $canonicalName,
        array $boundingBox,
        float $area,
        string $placeType,
        LocationModel $within
    ) {
        $this->id = $id;
        $this->fullyQualifiedPlaceName = $fullyQualifiedPlaceName;
        $this->canonicalName = $canonicalName;
        $this->boundingBox = $boundingBox;
        $this->area = $area;
        $this->placeType = $placeType;
        $this->within = $within;
    }

    /**
     * Returns Id.
     */
    public function getId(): float
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(float $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Fully Qualified Place Name.
     */
    public function getFullyQualifiedPlaceName(): string
    {
        return $this->fullyQualifiedPlaceName;
    }

    /**
     * Sets Fully Qualified Place Name.
     *
     * @required
     * @maps fully_qualified_place_name
     */
    public function setFullyQualifiedPlaceName(string $fullyQualifiedPlaceName): void
    {
        $this->fullyQualifiedPlaceName = $fullyQualifiedPlaceName;
    }

    /**
     * Returns Canonical Name.
     */
    public function getCanonicalName(): string
    {
        return $this->canonicalName;
    }

    /**
     * Sets Canonical Name.
     *
     * @required
     * @maps canonical_name
     */
    public function setCanonicalName(string $canonicalName): void
    {
        $this->canonicalName = $canonicalName;
    }

    /**
     * Returns Bounding Box.
     *
     * @return float[]
     */
    public function getBoundingBox(): array
    {
        return $this->boundingBox;
    }

    /**
     * Sets Bounding Box.
     *
     * @required
     * @maps bounding_box
     *
     * @param float[] $boundingBox
     */
    public function setBoundingBox(array $boundingBox): void
    {
        $this->boundingBox = $boundingBox;
    }

    /**
     * Returns Area.
     */
    public function getArea(): float
    {
        return $this->area;
    }

    /**
     * Sets Area.
     *
     * @required
     * @maps area
     */
    public function setArea(float $area): void
    {
        $this->area = $area;
    }

    /**
     * Returns Place Type.
     */
    public function getPlaceType(): string
    {
        return $this->placeType;
    }

    /**
     * Sets Place Type.
     *
     * @required
     * @maps place_type
     * @factory \HAPILib\Models\PlaceTypeEnum::checkValue
     */
    public function setPlaceType(string $placeType): void
    {
        $this->placeType = $placeType;
    }

    /**
     * Returns Within.
     */
    public function getWithin(): LocationModel
    {
        return $this->within;
    }

    /**
     * Sets Within.
     *
     * @required
     * @maps within
     */
    public function setWithin(LocationModel $within): void
    {
        $this->within = $within;
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
        $json['id']                         = $this->id;
        $json['fully_qualified_place_name'] = $this->fullyQualifiedPlaceName;
        $json['canonical_name']             = $this->canonicalName;
        $json['bounding_box']               = $this->boundingBox;
        $json['area']                       = $this->area;
        $json['place_type']                 = PlaceTypeEnum::checkValue($this->placeType);
        $json['within']                     = $this->within;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

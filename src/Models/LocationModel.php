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
 * only `null` when part of a top-level Location's `within` key
 */
class LocationModel implements \JsonSerializable
{
    /**
     * @var int
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
     * @var int|null
     */
    private $area;

    /**
     * @var string[]
     */
    private $placeType;

    /**
     * @var array
     */
    private $within = [];

    /**
     * @param int $id
     * @param string $fullyQualifiedPlaceName
     * @param string $canonicalName
     * @param float[] $boundingBox
     * @param string[] $placeType
     */
    public function __construct(
        int $id,
        string $fullyQualifiedPlaceName,
        string $canonicalName,
        array $boundingBox,
        array $placeType
    ) {
        $this->id = $id;
        $this->fullyQualifiedPlaceName = $fullyQualifiedPlaceName;
        $this->canonicalName = $canonicalName;
        $this->boundingBox = $boundingBox;
        $this->placeType = $placeType;
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
     * The bounding box of the location on a world map
     *
     * @return float[]
     */
    public function getBoundingBox(): array
    {
        return $this->boundingBox;
    }

    /**
     * Sets Bounding Box.
     * The bounding box of the location on a world map
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
     * Location area, in square kilometers
     */
    public function getArea(): ?int
    {
        return $this->area;
    }

    /**
     * Sets Area.
     * Location area, in square kilometers
     *
     * @maps area
     */
    public function setArea(?int $area): void
    {
        $this->area = $area;
    }

    /**
     * Returns Place Type.
     *
     * @return string[]
     */
    public function getPlaceType(): array
    {
        return $this->placeType;
    }

    /**
     * Sets Place Type.
     *
     * @required
     * @maps place_type
     * @factory \HAPILib\Models\PlaceTypeEnum::checkValue
     *
     * @param string[] $placeType
     */
    public function setPlaceType(array $placeType): void
    {
        $this->placeType = $placeType;
    }

    /**
     * Returns Within.
     * only `null` when part of a top-level Location's `within` key
     */
    public function getWithin(): ?LocationModel
    {
        if (count($this->within) == 0) {
            return null;
        }
        return $this->within['value'];
    }

    /**
     * Sets Within.
     * only `null` when part of a top-level Location's `within` key
     *
     * @maps within
     */
    public function setWithin(?LocationModel $within): void
    {
        $this->within['value'] = $within;
    }

    /**
     * Unsets Within.
     * only `null` when part of a top-level Location's `within` key
     */
    public function unsetWithin(): void
    {
        $this->within = [];
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
        if (isset($this->area)) {
            $json['area']                   = $this->area;
        }
        $json['place_type']                 = PlaceTypeEnum::checkValue($this->placeType);
        if (!empty($this->within)) {
            $json['within']                 = $this->within['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

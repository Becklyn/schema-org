<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class GeoShape extends StructuredValue
{
    //region Fields
    /** @var PostalAddress|string|null */
    private $address;
    /** @var Country|string|null */
    private $addressCountry;
    private ?string $box = null;
    private ?string $circle = null;
    /** @var int|string|null */
    private $elevation;
    private ?string $line = null;
    private ?string $polygon = null;
    private ?string $postalCode = null;
    //endregion


    //region Accessors
    /**
     * @return PostalAddress|string|null
     */
    public function getAddress ()
    {
        return $this->address;
    }


    /**
     * @return Country|string|null
     */
    public function getAddressCountry ()
    {
        return $this->addressCountry;
    }


    public function getBox () : ?string
    {
        return $this->box;
    }


    public function getCircle () : ?string
    {
        return $this->circle;
    }


    /**
     * @return int|string|null
     */
    public function getElevation ()
    {
        return $this->elevation;
    }


    public function getLine () : ?string
    {
        return $this->line;
    }


    public function getPolygon () : ?string
    {
        return $this->polygon;
    }


    public function getPostalCode () : ?string
    {
        return $this->postalCode;
    }
    //endregion


    //region Withers
    /**
     * @param PostalAddress|string|null $address
     *
     * @return static
     */
    public function withAddress ($address)
    {
        TypeChecker::ensureIsValidValue($address, TypeChecker::OPTIONAL, PostalAddress::class, "string");

        $clone = clone $this;
        $clone->address = $address;

        return $clone;
    }


    /**
     * @param Country|string|null $addressCountry
     *
     * @return static
     */
    public function withAddressCountry ($addressCountry)
    {
        TypeChecker::ensureIsValidValue($addressCountry, TypeChecker::OPTIONAL, Country::class, "string");

        $clone = clone $this;
        $clone->addressCountry = $addressCountry;

        return $clone;
    }


    public function withBox (?string $box)
    {
        $clone = clone $this;
        $clone->box = $box;

        return $clone;
    }


    public function withCircle (?string $circle)
    {
        $clone = clone $this;
        $clone->circle = $circle;

        return $clone;
    }


    /**
     * @param int|string|null $elevation
     *
     * @return static
     */
    public function withElevation ($elevation)
    {
        TypeChecker::ensureIsValidValue($elevation, TypeChecker::OPTIONAL, "int", "string");

        $clone = clone $this;
        $clone->elevation = $elevation;

        return $clone;
    }


    public function withLine (?string $line)
    {
        $clone = clone $this;
        $clone->line = $line;

        return $clone;
    }


    public function withPolygon (?string $polygon)
    {
        $clone = clone $this;
        $clone->polygon = $polygon;

        return $clone;
    }


    /**
     * @return static
     */
    public function withPostalCode (?string $postalCode)
    {
        $clone = clone $this;
        $clone->postalCode = $postalCode;

        return $clone;
    }
    //endregion
}

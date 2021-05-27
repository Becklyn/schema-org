<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class GeoCoordinates extends StructuredValue
{
    //region Fields
    /** @var PostalAddress|string|null */
    private $address;
    /** @var Country|string|null */
    private $addressCountry;
    /** @var int|string|null */
    private $elevation;
    /** @var int|string|null */
    private $latitude;
    /** @var int|string|null */
    private $longitude;
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


    /**
     * @return int|string|null
     */
    public function getElevation ()
    {
        return $this->elevation;
    }


    /**
     * @return int|string|null
     */
    public function getLatitude ()
    {
        return $this->latitude;
    }


    /**
     * @return int|string|null
     */
    public function getLongitude ()
    {
        return $this->longitude;
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


    /**
     * @param int|string|null $latitude
     *
     * @return static
     */
    public function withLatitude ($latitude)
    {
        TypeChecker::ensureIsValidValue($latitude, TypeChecker::OPTIONAL, "int", "string");

        $clone = clone $this;
        $clone->latitude = $latitude;

        return $clone;
    }


    /**
     * @param int|string|null $longitude
     *
     * @return static
     */
    public function withLongitude ($longitude)
    {
        TypeChecker::ensureIsValidValue($longitude, TypeChecker::OPTIONAL, "int", "string");

        $clone = clone $this;
        $clone->longitude = $longitude;

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

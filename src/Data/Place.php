<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class Place extends Thing
{
    //region Fields
    private ?PostalAddress $address = null;
    /**
     * @var string|float|null
     */
    private $latitude;
    private ?string $logo = null;
    /**
     * @var string|float|null
     */
    private $longitude;
    private ?int $maximumAttendeeCapacity = null;
    private ?OpeningHoursSpecification $openingHoursSpecification = null;
    private ?bool $publicAccess = null;
    private ?string $slogan = null;
    private ?bool $smokingAllowed = null;
    private ?OpeningHoursSpecification $specialOpeningHoursSpecification = null;
    private ?string $telephone = null;
    //endregion


    //region Accessors
    public function getAddress () : ?PostalAddress
    {
        return $this->address;
    }


    public function getLatitude ()
    {
        return $this->latitude;
    }


    public function getLogo () : ?string
    {
        return $this->logo;
    }


    public function getLongitude ()
    {
        return $this->longitude;
    }


    public function getMaximumAttendeeCapacity () : ?int
    {
        return $this->maximumAttendeeCapacity;
    }


    public function getOpeningHoursSpecification () : ?OpeningHoursSpecification
    {
        return $this->openingHoursSpecification;
    }


    public function getPublicAccess () : ?bool
    {
        return $this->publicAccess;
    }


    public function getSlogan () : ?string
    {
        return $this->slogan;
    }


    public function getSmokingAllowed () : ?bool
    {
        return $this->smokingAllowed;
    }


    public function getSpecialOpeningHoursSpecification () : ?OpeningHoursSpecification
    {
        return $this->specialOpeningHoursSpecification;
    }


    public function getTelephone () : ?string
    {
        return $this->telephone;
    }
    //endregion


    //region Withers
    public function withAddress (?PostalAddress $address) : self
    {
        $clone = clone $this;
        $clone->address = $address;
        return $clone;
    }


    /**
     * @param string|float|null $latitude
     */
    public function withLatitude ($latitude) : self
    {
        TypeChecker::ensureIsValidValue($latitude, TypeChecker::OPTIONAL, "string", "float");

        $clone = clone $this;
        $clone->latitude = $latitude;
        return $clone;
    }


    public function withLogo (?string $logo) : self
    {
        $clone = clone $this;
        $clone->logo = $logo;
        return $clone;
    }


    /**
     */
    public function withLongitude ($longitude) : self
    {
        TypeChecker::ensureIsValidValue($longitude, TypeChecker::OPTIONAL, "string", "float");

        $clone = clone $this;
        $clone->longitude = $longitude;
        return $clone;
    }


    public function withMaximumAttendeeCapacity (?int $maximumAttendeeCapacity) : self
    {
        $clone = clone $this;
        $clone->maximumAttendeeCapacity = $maximumAttendeeCapacity;
        return $clone;
    }


    public function withOpeningHoursSpecification (?OpeningHoursSpecification $openingHoursSpecification) : self
    {
        $clone = clone $this;
        $clone->openingHoursSpecification = $openingHoursSpecification;
        return $clone;
    }


    public function withPublicAccess (?bool $publicAccess) : self
    {
        $clone = clone $this;
        $clone->publicAccess = $publicAccess;
        return $clone;
    }


    public function withSlogan (?string $slogan) : self
    {
        $clone = clone $this;
        $clone->slogan = $slogan;
        return $clone;
    }


    public function withSmokingAllowed (?bool $smokingAllowed) : self
    {
        $clone = clone $this;
        $clone->smokingAllowed = $smokingAllowed;
        return $clone;
    }


    public function withSpecialOpeningHoursSpecification (?OpeningHoursSpecification $specialOpeningHoursSpecification) : self
    {
        $clone = clone $this;
        $clone->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;
        return $clone;
    }


    public function withTelephone (?string $telephone) : self
    {
        $clone = clone $this;
        $clone->telephone = $telephone;
        return $clone;
    }
    //endregion
}

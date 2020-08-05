<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class PostalAddress extends ContactPoint
{
    //region Fields
    private ?string $addressCountry = null;
    private ?string $addressLocality = null;
    private ?string $addressRegion = null;
    private ?string $postOfficeBoxNumber = null;
    private ?string $postalCode = null;
    private ?string $streetAddress = null;
    //endregion


    //region Accessors
    public function getAddressCountry () : ?string
    {
        return $this->addressCountry;
    }


    public function getAddressLocality () : ?string
    {
        return $this->addressLocality;
    }


    public function getAddressRegion () : ?string
    {
        return $this->addressRegion;
    }


    public function getPostOfficeBoxNumber () : ?string
    {
        return $this->postOfficeBoxNumber;
    }


    public function getPostalCode () : ?string
    {
        return $this->postalCode;
    }


    public function getStreetAddress () : ?string
    {
        return $this->streetAddress;
    }
    //endregion


    //region Withers
    public function withAddressCountry (?string $addressCountry) : self
    {
        $clone = clone $this;
        $clone->addressCountry = $addressCountry;
        return $clone;
    }


    public function withAddressLocality (?string $addressLocality) : self
    {
        $clone = clone $this;
        $clone->addressLocality = $addressLocality;
        return $clone;
    }


    public function withAddressRegion (?string $addressRegion) : self
    {
        $clone = clone $this;
        $clone->addressRegion = $addressRegion;
        return $clone;
    }


    public function withPostOfficeBoxNumber (?string $postOfficeBoxNumber) : self
    {
        $clone = clone $this;
        $clone->postOfficeBoxNumber = $postOfficeBoxNumber;
        return $clone;
    }


    public function withPostalCode (?string $postalCode) : self
    {
        $clone = clone $this;
        $clone->postalCode = $postalCode;
        return $clone;
    }


    public function withStreetAddress (?string $streetAddress) : self
    {
        $clone = clone $this;
        $clone->streetAddress = $streetAddress;
        return $clone;
    }
    //endregion
}

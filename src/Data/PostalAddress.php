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
    /**
     * @return static
     */
    public function withAddressCountry (?string $addressCountry)
    {
        $clone = clone $this;
        $clone->addressCountry = $addressCountry;
        return $clone;
    }


    /**
     * @return static
     */
    public function withAddressLocality (?string $addressLocality)
    {
        $clone = clone $this;
        $clone->addressLocality = $addressLocality;
        return $clone;
    }


    /**
     * @return static
     */
    public function withAddressRegion (?string $addressRegion)
    {
        $clone = clone $this;
        $clone->addressRegion = $addressRegion;
        return $clone;
    }


    /**
     * @return static
     */
    public function withPostOfficeBoxNumber (?string $postOfficeBoxNumber)
    {
        $clone = clone $this;
        $clone->postOfficeBoxNumber = $postOfficeBoxNumber;
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


    /**
     * @return static
     */
    public function withStreetAddress (?string $streetAddress)
    {
        $clone = clone $this;
        $clone->streetAddress = $streetAddress;
        return $clone;
    }
    //endregion
}

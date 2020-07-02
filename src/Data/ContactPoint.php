<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class ContactPoint implements SchemaOrgDataInterface
{
    //region Fields
    private ?string $areaServed = null;
    private ?string $availableLanguage = null;
    private ?string $contactType = null;
    private ?string $email = null;
    private ?string $faxNumber = null;
    private ?OpeningHoursSpecification $hoursAvailable = null;
    private ?string $productSupported = null;
    private ?string $telephone = null;
    //endregion


    //region Accessors
    public function getAreaServed () : ?string
    {
        return $this->areaServed;
    }


    public function getAvailableLanguage () : ?string
    {
        return $this->availableLanguage;
    }


    public function getContactType () : ?string
    {
        return $this->contactType;
    }


    public function getEmail () : ?string
    {
        return $this->email;
    }


    public function getFaxNumber () : ?string
    {
        return $this->faxNumber;
    }


    public function getHoursAvailable () : ?OpeningHoursSpecification
    {
        return $this->hoursAvailable;
    }


    public function getProductSupported () : ?string
    {
        return $this->productSupported;
    }


    public function getTelephone () : ?string
    {
        return $this->telephone;
    }
    //endregion


    //region Withers
    public function withAreaServed (?string $areaServed) : self
    {
        $clone = clone $this;
        $clone->areaServed = $areaServed;
        return $clone;
    }


    public function withAvailableLanguage (?string $availableLanguage) : self
    {
        $clone = clone $this;
        $clone->availableLanguage = $availableLanguage;
        return $clone;
    }


    public function withContactType (?string $contactType) : self
    {
        $clone = clone $this;
        $clone->contactType = $contactType;
        return $clone;
    }


    public function withEmail (?string $email) : self
    {
        $clone = clone $this;
        $clone->email = $email;
        return $clone;
    }


    public function withFaxNumber (?string $faxNumber) : self
    {
        $clone = clone $this;
        $clone->faxNumber = $faxNumber;
        return $clone;
    }


    public function withHoursAvailable (?OpeningHoursSpecification $hoursAvailable) : self
    {
        $clone = clone $this;
        $clone->hoursAvailable = $hoursAvailable;
        return $clone;
    }


    public function withProductSupported (?string $productSupported) : self
    {
        $clone = clone $this;
        $clone->productSupported = $productSupported;
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

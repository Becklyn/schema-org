<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class ContactPoint implements SchemaOrgDataInterface
{
    //region Fields
    private ?string $areaServed = null;
    private ?string $availableLanguage = null;
    private ?string $contactType;
    private ?string $email = null;
    private ?string $faxNumber = null;
    private ?OpeningHoursSpecification $hoursAvailable = null;
    private ?string $productSupported = null;
    private ?string $telephone = null;
    //endregion


    public function __construct (string $contactType = "Contact")
    {
        $this->contactType = $contactType;
    }


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
    /**
     * @return static
     */
    public function withAreaServed (?string $areaServed)
    {
        $clone = clone $this;
        $clone->areaServed = $areaServed;
        return $clone;
    }


    /**
     * @return static
     */
    public function withAvailableLanguage (?string $availableLanguage)
    {
        $clone = clone $this;
        $clone->availableLanguage = $availableLanguage;
        return $clone;
    }


    /**
     * @return static
     */
    public function withContactType (?string $contactType)
    {
        $clone = clone $this;
        $clone->contactType = $contactType;
        return $clone;
    }


    /**
     * @return static
     */
    public function withEmail (?string $email)
    {
        $clone = clone $this;
        $clone->email = $email;
        return $clone;
    }


    /**
     * @return static
     */
    public function withFaxNumber (?string $faxNumber)
    {
        $clone = clone $this;
        $clone->faxNumber = $faxNumber;
        return $clone;
    }


    /**
     * @return static
     */
    public function withHoursAvailable (?OpeningHoursSpecification $hoursAvailable)
    {
        $clone = clone $this;
        $clone->hoursAvailable = $hoursAvailable;
        return $clone;
    }


    /**
     * @return static
     */
    public function withProductSupported (?string $productSupported)
    {
        $clone = clone $this;
        $clone->productSupported = $productSupported;
        return $clone;
    }


    /**
     * @return static
     */
    public function withTelephone (?string $telephone)
    {
        $clone = clone $this;
        $clone->telephone = $telephone;
        return $clone;
    }
    //endregion
}

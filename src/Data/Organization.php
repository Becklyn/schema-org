<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class Organization extends Thing
{
    //region Fields
    private ?PostalAddress $address = null;
    private ?string $areaServed = null;
    private ?string $award = null;
    /**
     * @var Brand|Organization|null
     */
    private $brand;
    private ?ContactPoint $contactPoint = null;
    private ?Organization $department = null;
    private ?string $email = null;
    private ?string $faxNumber = null;
    private ?string $legalName = null;
    private ?PostalAddress $location = null;
    private ?string $logo = null;
    private ?string $slogan = null;
    private ?string $taxID = null;
    private ?string $telephone = null;
    private ?string $vatID = null;
    //endregion


    //region Accessors
    public function getAddress () : ?PostalAddress
    {
        return $this->address;
    }


    public function getAreaServed () : ?string
    {
        return $this->areaServed;
    }


    public function getAward () : ?string
    {
        return $this->award;
    }


    /**
     * @return Brand|Organization|null
     */
    public function getBrand ()
    {
        return $this->brand;
    }


    public function getContactPoint () : ?ContactPoint
    {
        return $this->contactPoint;
    }


    public function getDepartment () : ?self
    {
        return $this->department;
    }


    public function getEmail () : ?string
    {
        return $this->email;
    }


    public function getFaxNumber () : ?string
    {
        return $this->faxNumber;
    }


    public function getLegalName () : ?string
    {
        return $this->legalName;
    }


    public function getLocation () : ?PostalAddress
    {
        return $this->location;
    }


    public function getLogo () : ?string
    {
        return $this->logo;
    }


    public function getSlogan () : ?string
    {
        return $this->slogan;
    }


    public function getTaxID () : ?string
    {
        return $this->taxID;
    }


    public function getTelephone () : ?string
    {
        return $this->telephone;
    }


    public function getVatID () : ?string
    {
        return $this->vatID;
    }
    //endregion


    //region Withers
    public function withAddress (?PostalAddress $address) : self
    {
        $clone = clone $this;
        $clone->address = $address;
        return $clone;
    }


    public function withAreaServed (?string $areaServed) : self
    {
        $clone = clone $this;
        $clone->areaServed = $areaServed;
        return $clone;
    }


    public function withAward (?string $award) : self
    {
        $clone = clone $this;
        $clone->award = $award;
        return $clone;
    }


    /**
     * @param Brand|Organization|null $brand
     */
    public function withBrand ($brand) : self
    {
        TypeChecker::ensureIsValidValue($brand, TypeChecker::OPTIONAL, Brand::class, static::class);

        $clone = clone $this;
        $clone->brand = $brand;
        return $clone;
    }


    public function withContactPoint (?ContactPoint $contactPoint) : self
    {
        $clone = clone $this;
        $clone->contactPoint = $contactPoint;
        return $clone;
    }


    public function withDepartment (?self $department) : self
    {
        $clone = clone $this;
        $clone->department = $department;
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


    public function withLegalName (?string $legalName) : self
    {
        $clone = clone $this;
        $clone->legalName = $legalName;
        return $clone;
    }


    public function withLocation (?PostalAddress $location) : self
    {
        $clone = clone $this;
        $clone->location = $location;
        return $clone;
    }


    public function withLogo (?string $logo) : self
    {
        $clone = clone $this;
        $clone->logo = $logo;
        return $clone;
    }


    public function withSlogan (?string $slogan) : self
    {
        $clone = clone $this;
        $clone->slogan = $slogan;
        return $clone;
    }


    public function withTaxID (?string $taxID) : self
    {
        $clone = clone $this;
        $clone->taxID = $taxID;
        return $clone;
    }


    public function withTelephone (?string $telephone) : self
    {
        $clone = clone $this;
        $clone->telephone = $telephone;
        return $clone;
    }


    public function withVatID (?string $vatID) : self
    {
        $clone = clone $this;
        $clone->vatID = $vatID;
        return $clone;
    }
    //endregion
}

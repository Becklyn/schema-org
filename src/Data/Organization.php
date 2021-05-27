<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class Organization extends Thing
{
    //region Fields
    private ?PostalAddress $address = null;
    /** @var string|GeoShape */
    private $areaServed;
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


    /**
     * @return GeoShape|string
     */
    public function getAreaServed ()
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
    /**
     * @return static
     */
    public function withAddress (?PostalAddress $address)
    {
        $clone = clone $this;
        $clone->address = $address;
        return $clone;
    }


    /**
     * @param string|GeoShape $areaServed
     *
     * @return static
     */
    public function withAreaServed ($areaServed)
    {
        TypeChecker::ensureIsValidValue($areaServed, TypeChecker::OPTIONAL, "string", GeoShape::class);

        $clone = clone $this;
        $clone->areaServed = $areaServed;

        return $clone;
    }


    /**
     * @return static
     */
    public function withAward (?string $award)
    {
        $clone = clone $this;
        $clone->award = $award;
        return $clone;
    }


    /**
     * @param Brand|Organization|null $brand
     *
     * @return static
     */
    public function withBrand ($brand)
    {
        TypeChecker::ensureIsValidValue($brand, TypeChecker::OPTIONAL, Brand::class, static::class);

        $clone = clone $this;
        $clone->brand = $brand;
        return $clone;
    }


    /**
     * @return static
     */
    public function withContactPoint (?ContactPoint $contactPoint)
    {
        $clone = clone $this;
        $clone->contactPoint = $contactPoint;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDepartment (?self $department)
    {
        $clone = clone $this;
        $clone->department = $department;
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
    public function withLegalName (?string $legalName)
    {
        $clone = clone $this;
        $clone->legalName = $legalName;
        return $clone;
    }


    /**
     * @return static
     */
    public function withLocation (?PostalAddress $location)
    {
        $clone = clone $this;
        $clone->location = $location;
        return $clone;
    }


    /**
     * @return static
     */
    public function withLogo (?string $logo)
    {
        $clone = clone $this;
        $clone->logo = $logo;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSlogan (?string $slogan)
    {
        $clone = clone $this;
        $clone->slogan = $slogan;
        return $clone;
    }


    /**
     * @return static
     */
    public function withTaxID (?string $taxID)
    {
        $clone = clone $this;
        $clone->taxID = $taxID;
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


    /**
     * @return static
     */
    public function withVatID (?string $vatID)
    {
        $clone = clone $this;
        $clone->vatID = $vatID;
        return $clone;
    }
    //endregion
}

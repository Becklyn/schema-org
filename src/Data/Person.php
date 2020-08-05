<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Person extends Thing
{
    //region Fields
    private ?string $additionalName = null;
    private ?PostalAddress $address = null;
    private ?Organization $affiliation = null;
    private ?string $award = null;
    private ?\DateTimeImmutable $birthDate = null;
    private ?Brand $brand = null;
    private ?string $callSign = null;
    private ?\DateTimeImmutable $deathDate = null;
    private ?string $email = null;
    private ?string $familyName = null;
    private ?string $faxNumber = null;
    private ?string $gender = null;
    private ?string $givenName = null;
    private ?string $jobTitle = null;
    private ?Country $nationality = null;
    private ?Person $spouse = null;
    //endregion


    //region Accessors
    public function getAdditionalName () : ?string
    {
        return $this->additionalName;
    }


    public function getAddress () : ?PostalAddress
    {
        return $this->address;
    }


    public function getAffiliation () : ?Organization
    {
        return $this->affiliation;
    }


    public function getAward () : ?string
    {
        return $this->award;
    }


    public function getBirthDate () : ?\DateTimeImmutable
    {
        return $this->birthDate;
    }


    public function getBrand () : ?Brand
    {
        return $this->brand;
    }


    public function getCallSign () : ?string
    {
        return $this->callSign;
    }


    public function getDeathDate () : ?\DateTimeImmutable
    {
        return $this->deathDate;
    }


    public function getEmail () : ?string
    {
        return $this->email;
    }


    public function getFamilyName () : ?string
    {
        return $this->familyName;
    }


    public function getFaxNumber () : ?string
    {
        return $this->faxNumber;
    }


    public function getGender () : ?string
    {
        return $this->gender;
    }


    public function getGivenName () : ?string
    {
        return $this->givenName;
    }


    public function getJobTitle () : ?string
    {
        return $this->jobTitle;
    }


    public function getNationality () : ?Country
    {
        return $this->nationality;
    }


    public function getSpouse () : ?self
    {
        return $this->spouse;
    }
    //endregion


    //region Withers
    public function withAdditionalName (?string $additionalName) : self
    {
        $clone = clone $this;
        $clone->additionalName = $additionalName;
        return $clone;
    }


    public function withAddress (?PostalAddress $address) : self
    {
        $clone = clone $this;
        $clone->address = $address;
        return $clone;
    }


    public function withAffiliation (?Organization $affiliation) : self
    {
        $clone = clone $this;
        $clone->affiliation = $affiliation;
        return $clone;
    }


    public function withAward (?string $award) : self
    {
        $clone = clone $this;
        $clone->award = $award;
        return $clone;
    }


    public function withBirthDate (?\DateTimeImmutable $birthDate) : self
    {
        $clone = clone $this;
        $clone->birthDate = $birthDate;
        return $clone;
    }


    public function withBrand (?Brand $brand) : self
    {
        $clone = clone $this;
        $clone->brand = $brand;
        return $clone;
    }


    public function withCallSign (?string $callSign) : self
    {
        $clone = clone $this;
        $clone->callSign = $callSign;
        return $clone;
    }


    public function withDeathDate (?\DateTimeImmutable $deathDate) : self
    {
        $clone = clone $this;
        $clone->deathDate = $deathDate;
        return $clone;
    }


    public function withEmail (?string $email) : self
    {
        $clone = clone $this;
        $clone->email = $email;
        return $clone;
    }


    public function withFamilyName (?string $familyName) : self
    {
        $clone = clone $this;
        $clone->familyName = $familyName;
        return $clone;
    }


    public function withFaxNumber (?string $faxNumber) : self
    {
        $clone = clone $this;
        $clone->faxNumber = $faxNumber;
        return $clone;
    }


    public function withGender (?string $gender) : self
    {
        $clone = clone $this;
        $clone->gender = $gender;
        return $clone;
    }


    public function withGivenName (?string $givenName) : self
    {
        $clone = clone $this;
        $clone->givenName = $givenName;
        return $clone;
    }


    public function withJobTitle (?string $jobTitle) : self
    {
        $clone = clone $this;
        $clone->jobTitle = $jobTitle;
        return $clone;
    }


    public function withNationality (?Country $nationality) : self
    {
        $clone = clone $this;
        $clone->nationality = $nationality;
        return $clone;
    }


    public function withSpouse (?self $spouse) : self
    {
        $clone = clone $this;
        $clone->spouse = $spouse;
        return $clone;
    }
    //endregion
}

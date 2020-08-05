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
    /**
     * @return static
     */
    public function withAdditionalName (?string $additionalName)
    {
        $clone = clone $this;
        $clone->additionalName = $additionalName;
        return $clone;
    }


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
     * @return static
     */
    public function withAffiliation (?Organization $affiliation)
    {
        $clone = clone $this;
        $clone->affiliation = $affiliation;
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
     * @return static
     */
    public function withBirthDate (?\DateTimeImmutable $birthDate)
    {
        $clone = clone $this;
        $clone->birthDate = $birthDate;
        return $clone;
    }


    /**
     * @return static
     */
    public function withBrand (?Brand $brand)
    {
        $clone = clone $this;
        $clone->brand = $brand;
        return $clone;
    }


    /**
     * @return static
     */
    public function withCallSign (?string $callSign)
    {
        $clone = clone $this;
        $clone->callSign = $callSign;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDeathDate (?\DateTimeImmutable $deathDate)
    {
        $clone = clone $this;
        $clone->deathDate = $deathDate;
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
    public function withFamilyName (?string $familyName)
    {
        $clone = clone $this;
        $clone->familyName = $familyName;
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
    public function withGender (?string $gender)
    {
        $clone = clone $this;
        $clone->gender = $gender;
        return $clone;
    }


    /**
     * @return static
     */
    public function withGivenName (?string $givenName)
    {
        $clone = clone $this;
        $clone->givenName = $givenName;
        return $clone;
    }


    /**
     * @return static
     */
    public function withJobTitle (?string $jobTitle)
    {
        $clone = clone $this;
        $clone->jobTitle = $jobTitle;
        return $clone;
    }


    /**
     * @return static
     */
    public function withNationality (?Country $nationality)
    {
        $clone = clone $this;
        $clone->nationality = $nationality;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSpouse (?self $spouse)
    {
        $clone = clone $this;
        $clone->spouse = $spouse;
        return $clone;
    }
    //endregion
}

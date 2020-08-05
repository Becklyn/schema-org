<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Thing implements SchemaOrgDataInterface
{
    //region Fields
    private ?string $alternateName = null;
    private ?string $description = null;
    private ?string $disambiguatingDescription = null;
    private ?string $identifier = null;
    private ?string $image = null;
    private ?string $name = null;
    private ?string $sameAs = null;
    private ?string $url = null;
    //endregion


    //region Accessors
    public function getAlternateName () : ?string
    {
        return $this->alternateName;
    }


    public function getDescription () : ?string
    {
        return $this->description;
    }


    public function getDisambiguatingDescription () : ?string
    {
        return $this->disambiguatingDescription;
    }


    public function getIdentifier () : ?string
    {
        return $this->identifier;
    }


    public function getImage () : ?string
    {
        return $this->image;
    }


    public function getName () : ?string
    {
        return $this->name;
    }


    public function getSameAs () : ?string
    {
        return $this->sameAs;
    }


    public function getUrl () : ?string
    {
        return $this->url;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withAlternateName (?string $alternateName)
    {
        $clone = clone $this;
        $clone->alternateName = $alternateName;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDescription (?string $description)
    {
        $clone = clone $this;
        $clone->description = $description;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDisambiguatingDescription (?string $disambiguatingDescription)
    {
        $clone = clone $this;
        $clone->disambiguatingDescription = $disambiguatingDescription;
        return $clone;
    }


    /**
     * @return static
     */
    public function withIdentifier (?string $identifier)
    {
        $clone = clone $this;
        $clone->identifier = $identifier;
        return $clone;
    }


    /**
     * @return static
     */
    public function withImage (?string $image)
    {
        $clone = clone $this;
        $clone->image = $image;
        return $clone;
    }


    /**
     * @return static
     */
    public function withName (?string $name)
    {
        $clone = clone $this;
        $clone->name = $name;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSameAs (?string $sameAs)
    {
        $clone = clone $this;
        $clone->sameAs = $sameAs;
        return $clone;
    }


    /**
     * @return static
     */
    public function withUrl (?string $url)
    {
        $clone = clone $this;
        $clone->url = $url;
        return $clone;
    }
    //endregion
}

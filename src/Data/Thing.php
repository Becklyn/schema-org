<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Thing implements SchemaOrgDataInterface
{
    //region Fields
    private ?string $alternateName = null;
    private ?string $description = null;
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
    public function withAlternateName (?string $alternateName) : self
    {
        $clone = clone $this;
        $clone->alternateName = $alternateName;
        return $clone;
    }


    public function withDescription (?string $description) : self
    {
        $clone = clone $this;
        $clone->description = $description;
        return $clone;
    }


    public function withIdentifier (?string $identifier) : self
    {
        $clone = clone $this;
        $clone->identifier = $identifier;
        return $clone;
    }


    public function withImage (?string $image) : self
    {
        $clone = clone $this;
        $clone->image = $image;
        return $clone;
    }


    public function withName (?string $name) : self
    {
        $clone = clone $this;
        $clone->name = $name;
        return $clone;
    }


    public function withSameAs (?string $sameAs) : self
    {
        $clone = clone $this;
        $clone->sameAs = $sameAs;
        return $clone;
    }


    public function withUrl (?string $url) : self
    {
        $clone = clone $this;
        $clone->url = $url;
        return $clone;
    }
    //endregion
}

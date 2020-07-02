<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Brand extends Thing
{
    //region Fields
    private ?string $logo = null;
    private ?string $slogan = null;
    //endregion


    //region Accessors
    public function getLogo () : ?string
    {
        return $this->logo;
    }


    public function getSlogan () : ?string
    {
        return $this->slogan;
    }
    //endregion


    //region Withers
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
    //endregion
}

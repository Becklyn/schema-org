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
    //endregion
}

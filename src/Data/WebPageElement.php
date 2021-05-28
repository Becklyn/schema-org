<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class WebPageElement extends CreativeWork
{
    //region Fields
    private ?string $cssSelector = null;
    private ?string $xpath = null;
    //endregion


    //region Accessors
    public function getCssSelector () : ?string
    {
        return $this->cssSelector;
    }


    public function getXpath () : ?string
    {
        return $this->xpath;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withCssSelector (?string $cssSelector)
    {
        $clone = clone $this;
        $clone->cssSelector = $cssSelector;

        return $clone;
    }


    /**
     * @return static
     */
    public function withXpath (?string $xpath)
    {
        $clone = clone $this;
        $clone->xpath = $xpath;

        return $clone;
    }
    //endregion
}

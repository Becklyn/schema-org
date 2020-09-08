<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class WebPage extends CreativeWork
{
    //region Fields
    private ?string $breadcrumb = null;
    private ?\DateTimeImmutable $lastReviewed = null;
    private ?WebPageElement $mainContentOfPage = null;
    private ?string $relatedLink = null;
    private ?string $significantLink = null;
    private ?string $speakable = null;
    private ?string $speciality = null;
    //endregion


    //region Accessors
    public function getBreadcrumb () : ?string
    {
        return $this->breadcrumb;
    }


    public function getLastReviewed () : ?\DateTimeImmutable
    {
        return $this->lastReviewed;
    }


    public function getMainContentOfPage () : ?WebPageElement
    {
        return $this->mainContentOfPage;
    }


    public function getRelatedLink () : ?string
    {
        return $this->relatedLink;
    }


    public function getSignificantLink () : ?string
    {
        return $this->significantLink;
    }


    public function getSpeakable () : ?string
    {
        return $this->speakable;
    }


    public function getSpeciality () : ?string
    {
        return $this->speciality;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withBreadcrumb (?string $breadcrumb)
    {
        $clone = clone $this;
        $clone->breadcrumb = $breadcrumb;
        return $clone;
    }


    /**
     * @return static
     */
    public function withLastReviewed (?\DateTimeImmutable $lastReviewed)
    {
        $clone = clone $this;
        $clone->lastReviewed = $lastReviewed;
        return $clone;
    }


    /**
     * @return static
     */
    public function withMainContentOfPage (?WebPageElement $mainContentOfPage)
    {
        $clone = clone $this;
        $clone->mainContentOfPage = $mainContentOfPage;
        return $clone;
    }


    /**
     * @return static
     */
    public function withRelatedLink (?string $relatedLink)
    {
        $clone = clone $this;
        $clone->relatedLink = $relatedLink;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSignificantLink (?string $significantLink)
    {
        $clone = clone $this;
        $clone->significantLink = $significantLink;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSpeakable (?string $speakable)
    {
        $clone = clone $this;
        $clone->speakable = $speakable;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSpeciality (?string $speciality)
    {
        $clone = clone $this;
        $clone->speciality = $speciality;
        return $clone;
    }
    //endregion
}

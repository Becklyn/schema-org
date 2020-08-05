<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class OpeningHoursSpecification extends Thing
{
    //region Fields
    private ?Time $closes = null;
    private ?DayOfWeek $dayOfWeek = null;
    private ?Time $opens = null;
    private ?\DateTimeImmutable $validFrom = null;
    private ?\DateTimeImmutable $validThrough = null;
    //endregion


    //region Accessors
    public function getCloses () : ?Time
    {
        return $this->closes;
    }


    public function getDayOfWeek () : ?DayOfWeek
    {
        return $this->dayOfWeek;
    }


    public function getOpens () : ?Time
    {
        return $this->opens;
    }


    public function getValidFrom () : ?\DateTimeImmutable
    {
        return $this->validFrom;
    }


    public function getValidThrough () : ?\DateTimeImmutable
    {
        return $this->validThrough;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withCloses (?Time $closes)
    {
        $clone = clone $this;
        $clone->closes = $closes;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDayOfWeek (?DayOfWeek $dayOfWeek)
    {
        $clone = clone $this;
        $clone->dayOfWeek = $dayOfWeek;
        return $clone;
    }


    /**
     * @return static
     */
    public function withOpens (?Time $opens)
    {
        $clone = clone $this;
        $clone->opens = $opens;
        return $clone;
    }


    /**
     * @return static
     */
    public function withValidFrom (?\DateTimeImmutable $validFrom)
    {
        $clone = clone $this;
        $clone->validFrom = $validFrom;
        return $clone;
    }


    /**
     * @return static
     */
    public function withValidThrough (?\DateTimeImmutable $validThrough)
    {
        $clone = clone $this;
        $clone->validThrough = $validThrough;
        return $clone;
    }
    //endregion
}

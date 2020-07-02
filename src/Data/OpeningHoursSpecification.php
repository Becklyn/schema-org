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
    public function withCloses (?Time $closes) : self
    {
        $clone = clone $this;
        $clone->closes = $closes;
        return $clone;
    }


    public function withDayOfWeek (?DayOfWeek $dayOfWeek) : self
    {
        $clone = clone $this;
        $clone->dayOfWeek = $dayOfWeek;
        return $clone;
    }


    public function withOpens (?Time $opens) : self
    {
        $clone = clone $this;
        $clone->opens = $opens;
        return $clone;
    }


    public function withValidFrom (?\DateTimeImmutable $validFrom) : self
    {
        $clone = clone $this;
        $clone->validFrom = $validFrom;
        return $clone;
    }


    public function withValidThrough (?\DateTimeImmutable $validThrough) : self
    {
        $clone = clone $this;
        $clone->validThrough = $validThrough;
        return $clone;
    }
    //endregion
}

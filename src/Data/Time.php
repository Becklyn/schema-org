<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Time implements SchemaOrgDataInterface
{
    //region Fields
    private ?OpeningHoursSpecification $closes = null;
    private ?Schedule $endTime = null;
    private ?Schedule $startTime = null;
    private ?OpeningHoursSpecification $opens = null;
    //endregion


    //region Accessors
    public function getCloses () : ?OpeningHoursSpecification
    {
        return $this->closes;
    }


    public function getEndTime () : ?Schedule
    {
        return $this->endTime;
    }


    public function getStartTime () : ?Schedule
    {
        return $this->startTime;
    }


    public function getOpens () : ?OpeningHoursSpecification
    {
        return $this->opens;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withCloses (?OpeningHoursSpecification $closes)
    {
        $clone = clone $this;
        $clone->closes = $closes;
        return $clone;
    }


    /**
     * @return static
     */
    public function withEndTime (?Schedule $endTime)
    {
        $clone = clone $this;
        $clone->endTime = $endTime;
        return $clone;
    }


    /**
     * @return static
     */
    public function withStartTime (?Schedule $startTime)
    {
        $clone = clone $this;
        $clone->startTime = $startTime;
        return $clone;
    }


    /**
     * @return static
     */
    public function withOpens (?OpeningHoursSpecification $opens)
    {
        $clone = clone $this;
        $clone->opens = $opens;
        return $clone;
    }
    //endregion
}

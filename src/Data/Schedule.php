<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Schedule extends Thing
{
    //region Fields
    private ?string $byDay = null;
    private ?int $byMonth = null;
    private ?int $byMonthDay = null;
    private ?Duration $duration = null;
    private ?\DateTimeImmutable $endDate = null;
    private ?string $endTime = null;
    private ?\DateTimeImmutable $expectDate = null;
    private ?int $repeatCount = null;
    private ?Duration $repeatFrequency = null;
    private ?string $schedulerTimezone = null;
    private ?\DateTimeImmutable $startDate = null;
    private ?string $startTime = null;
    //endregion


    //region Accessors
    public function getByDay () : ?string
    {
        return $this->byDay;
    }


    public function getByMonth () : ?int
    {
        return $this->byMonth;
    }


    public function getByMonthDay () : ?int
    {
        return $this->byMonthDay;
    }


    public function getDuration () : ?Duration
    {
        return $this->duration;
    }


    public function getEndDate () : ?\DateTimeImmutable
    {
        return $this->endDate;
    }


    public function getEndTime () : ?string
    {
        return $this->endTime;
    }


    public function getExpectDate () : ?\DateTimeImmutable
    {
        return $this->expectDate;
    }


    public function getRepeatCount () : ?int
    {
        return $this->repeatCount;
    }


    public function getRepeatFrequency () : ?Duration
    {
        return $this->repeatFrequency;
    }


    public function getSchedulerTimezone () : ?string
    {
        return $this->schedulerTimezone;
    }


    public function getStartDate () : ?\DateTimeImmutable
    {
        return $this->startDate;
    }


    public function getStartTime () : ?string
    {
        return $this->startTime;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withByDay (?string $byDay)
    {
        $clone = clone $this;
        $clone->byDay = $byDay;
        return $clone;
    }


    /**
     * @return static
     */
    public function withByMonth (?int $byMonth)
    {
        $clone = clone $this;
        $clone->byMonth = $byMonth;
        return $clone;
    }


    /**
     * @return static
     */
    public function withByMonthDay (?int $byMonthDay)
    {
        $clone = clone $this;
        $clone->byMonthDay = $byMonthDay;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDuration (?Duration $duration)
    {
        $clone = clone $this;
        $clone->duration = $duration;
        return $clone;
    }


    /**
     * @return static
     */
    public function withEndDate (?\DateTimeImmutable $endDate)
    {
        $clone = clone $this;
        $clone->endDate = $endDate;
        return $clone;
    }


    /**
     * @return static
     */
    public function withEndTime (?string $endTime)
    {
        $clone = clone $this;
        $clone->endTime = $endTime;
        return $clone;
    }


    /**
     * @return static
     */
    public function withExpectDate (?\DateTimeImmutable $expectDate)
    {
        $clone = clone $this;
        $clone->expectDate = $expectDate;
        return $clone;
    }


    /**
     * @return static
     */
    public function withRepeatCount (?int $repeatCount)
    {
        $clone = clone $this;
        $clone->repeatCount = $repeatCount;
        return $clone;
    }


    /**
     * @return static
     */
    public function withRepeatFrequency (?Duration $repeatFrequency)
    {
        $clone = clone $this;
        $clone->repeatFrequency = $repeatFrequency;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSchedulerTimezone (?string $schedulerTimezone)
    {
        $clone = clone $this;
        $clone->schedulerTimezone = $schedulerTimezone;
        return $clone;
    }


    /**
     * @return static
     */
    public function withStartDate (?\DateTimeImmutable $startDate)
    {
        $clone = clone $this;
        $clone->startDate = $startDate;
        return $clone;
    }


    /**
     * @return static
     */
    public function withStartTime (?string $startTime)
    {
        $clone = clone $this;
        $clone->startTime = $startTime;
        return $clone;
    }
    //endregion
}

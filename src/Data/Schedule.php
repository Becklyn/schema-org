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
    public function withByDay (?string $byDay) : self
    {
        $clone = clone $this;
        $clone->byDay = $byDay;
        return $clone;
    }


    public function withByMonth (?int $byMonth) : self
    {
        $clone = clone $this;
        $clone->byMonth = $byMonth;
        return $clone;
    }


    public function withByMonthDay (?int $byMonthDay) : self
    {
        $clone = clone $this;
        $clone->byMonthDay = $byMonthDay;
        return $clone;
    }


    public function withDuration (?Duration $duration) : self
    {
        $clone = clone $this;
        $clone->duration = $duration;
        return $clone;
    }


    public function withEndDate (?\DateTimeImmutable $endDate) : self
    {
        $clone = clone $this;
        $clone->endDate = $endDate;
        return $clone;
    }


    public function withEndTime (?string $endTime) : self
    {
        $clone = clone $this;
        $clone->endTime = $endTime;
        return $clone;
    }


    public function withExpectDate (?\DateTimeImmutable $expectDate) : self
    {
        $clone = clone $this;
        $clone->expectDate = $expectDate;
        return $clone;
    }


    public function withRepeatCount (?int $repeatCount) : self
    {
        $clone = clone $this;
        $clone->repeatCount = $repeatCount;
        return $clone;
    }


    public function withRepeatFrequency (?Duration $repeatFrequency) : self
    {
        $clone = clone $this;
        $clone->repeatFrequency = $repeatFrequency;
        return $clone;
    }


    public function withSchedulerTimezone (?string $schedulerTimezone) : self
    {
        $clone = clone $this;
        $clone->schedulerTimezone = $schedulerTimezone;
        return $clone;
    }


    public function withStartDate (?\DateTimeImmutable $startDate) : self
    {
        $clone = clone $this;
        $clone->startDate = $startDate;
        return $clone;
    }


    public function withStartTime (?string $startTime) : self
    {
        $clone = clone $this;
        $clone->startTime = $startTime;
        return $clone;
    }
    //endregion
}

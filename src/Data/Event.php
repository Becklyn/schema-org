<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Event extends Thing
{
    //region Fields
    private ?SchemaOrgDataInterface $about = null;
    private ?\DateTimeImmutable $doorTime = null;
    private ?Duration $duration = null;
    private ?\DateTimeImmutable $endDate = null;
    private ?EventStatus $eventStatus = null;
    private ?string $inLanguage = null;
    private ?bool $isAccessibleForFree = null;
    private ?PostalAddress $location = null;
    private ?int $maximumAttendeeCapacity = null;
    private ?int $maximumPhysicalAttendeeCapacity = null;
    private ?int $maximumVirtualAttendeeCapacity = null;
    private ?Organization $organizer = null;
    private ?\DateTimeImmutable $previousStartDate = null;
    private ?\DateTimeImmutable $startDate = null;
    //endregion


    //region Accessors
    public function getAbout () : ?SchemaOrgDataInterface
    {
        return $this->about;
    }


    public function getDoorTime () : ?\DateTimeImmutable
    {
        return $this->doorTime;
    }


    public function getDuration () : ?Duration
    {
        return $this->duration;
    }


    public function getEndDate () : ?\DateTimeImmutable
    {
        return $this->endDate;
    }


    public function getEventStatus () : ?EventStatus
    {
        return $this->eventStatus;
    }


    public function getInLanguage () : ?string
    {
        return $this->inLanguage;
    }


    public function getIsAccessibleForFree () : ?bool
    {
        return $this->isAccessibleForFree;
    }


    public function getLocation () : ?PostalAddress
    {
        return $this->location;
    }


    public function getMaximumAttendeeCapacity () : ?int
    {
        return $this->maximumAttendeeCapacity;
    }


    public function getMaximumPhysicalAttendeeCapacity () : ?int
    {
        return $this->maximumPhysicalAttendeeCapacity;
    }


    public function getMaximumVirtualAttendeeCapacity () : ?int
    {
        return $this->maximumVirtualAttendeeCapacity;
    }


    public function getOrganizer () : ?Organization
    {
        return $this->organizer;
    }


    public function getPreviousStartDate () : ?\DateTimeImmutable
    {
        return $this->previousStartDate;
    }


    public function getStartDate () : ?\DateTimeImmutable
    {
        return $this->startDate;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withAbout (?SchemaOrgDataInterface $about)
    {
        $clone = clone $this;
        $clone->about = $about;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDoorTime (?\DateTimeImmutable $doorTime)
    {
        $clone = clone $this;
        $clone->doorTime = $doorTime;
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
    public function withEventStatus (?EventStatus $eventStatus)
    {
        $clone = clone $this;
        $clone->eventStatus = $eventStatus;
        return $clone;
    }


    /**
     * @return static
     */
    public function withInLanguage (?string $inLanguage)
    {
        $clone = clone $this;
        $clone->inLanguage = $inLanguage;
        return $clone;
    }


    /**
     * @return static
     */
    public function withIsAccessibleForFree (?bool $isAccessibleForFree)
    {
        $clone = clone $this;
        $clone->isAccessibleForFree = $isAccessibleForFree;
        return $clone;
    }


    /**
     * @return static
     */
    public function withLocation (?PostalAddress $location)
    {
        $clone = clone $this;
        $clone->location = $location;
        return $clone;
    }


    /**
     * @return static
     */
    public function withMaximumAttendeeCapacity (?int $maximumAttendeeCapacity)
    {
        $clone = clone $this;
        $clone->maximumAttendeeCapacity = $maximumAttendeeCapacity;
        return $clone;
    }


    /**
     * @return static
     */
    public function withMaximumPhysicalAttendeeCapacity (?int $maximumPhysicalAttendeeCapacity)
    {
        $clone = clone $this;
        $clone->maximumPhysicalAttendeeCapacity = $maximumPhysicalAttendeeCapacity;
        return $clone;
    }


    /**
     * @return static
     */
    public function withMaximumVirtualAttendeeCapacity (?int $maximumVirtualAttendeeCapacity)
    {
        $clone = clone $this;
        $clone->maximumVirtualAttendeeCapacity = $maximumVirtualAttendeeCapacity;
        return $clone;
    }


    /**
     * @return static
     */
    public function withOrganizer (?Organization $organizer)
    {
        $clone = clone $this;
        $clone->organizer = $organizer;
        return $clone;
    }


    /**
     * @return static
     */
    public function withPreviousStartDate (?\DateTimeImmutable $previousStartDate)
    {
        $clone = clone $this;
        $clone->previousStartDate = $previousStartDate;
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
    //endregion
}

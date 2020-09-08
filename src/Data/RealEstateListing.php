<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class RealEstateListing extends WebPage
{
    //region Fields
    private ?\DateTimeImmutable $datePosted = null;
    /**
     * @var Duration|QuantitativeValue|null
     */
    private $duration;
    //endregion


    //region Accessors
    public function getDatePosted () : ?\DateTimeImmutable
    {
        return $this->datePosted;
    }


    public function getDuration ()
    {
        return $this->duration;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withDatePosted (?\DateTimeImmutable $datePosted)
    {
        $clone = clone $this;
        $clone->datePosted = $datePosted;
        return $clone;
    }


    /**
     * @param Duration|QuantitativeValue|null $duration
     *
     * @return static
     */
    public function withDuration ($duration)
    {
        TypeChecker::ensureIsValidValue($duration, TypeChecker::OPTIONAL, Duration::class, QuantitativeValue::class);

        $clone = clone $this;
        $clone->duration = $duration;
        return $clone;
    }
    //endregion
}

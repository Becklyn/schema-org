<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class HowToSupply extends HowToItem
{
    //region Fields
    /** @var string|MonetaryAmount|null */
    private $estimatedCost;
    //endregion


    //region Accessors
    /**
     * @return MonetaryAmount|string|null
     */
    public function getEstimatedCost ()
    {
        return $this->estimatedCost;
    }
    //endregion


    //region Withers
    /**
     * @param MonetaryAmount|string|null $estimatedCost
     *
     * @return static
     */
    public function withEstimatedCost ($estimatedCost)
    {
        TypeChecker::ensureIsValidValue($estimatedCost, TypeChecker::OPTIONAL, MonetaryAmount::class, "string");

        $clone = clone $this;
        $clone->estimatedCost = $estimatedCost;

        return $clone;
    }
    //endregion
}

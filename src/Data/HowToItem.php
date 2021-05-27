<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class HowToItem extends ListItem
{
    //region Fields
    /** @var int|string|QuantitativeValue|null */
    private $requiredQuantity;
    //endregion


    //region Accessors
    /**
     * @return QuantitativeValue|int|string|null
     */
    public function getRequiredQuantity ()
    {
        return $this->requiredQuantity;
    }
    //endregion


    //region Withers
    /**
     * @param QuantitativeValue|int|string|null $requiredQuantity
     *
     * @return static
     */
    public function withRequiredQuantity ($requiredQuantity)
    {
        TypeChecker::ensureIsValidValue($requiredQuantity, TypeChecker::OPTIONAL, QuantitativeValue::class, "int", "string");

        $clone = clone $this;
        $clone->requiredQuantity = $requiredQuantity;

        return $clone;
    }
    //endregion
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class QuantitativeValue implements SchemaOrgDataInterface
{
    //region Fields
    private ?int $minValue = null;
    private ?int $maxValue = null;
    private ?string $unitCode = null;
    private ?string $unitText = null;
    /**
     * @var bool|int|float|string|null
     */
    private $value;
    //endregion


    //region Accessors
    public function getMinValue () : ?int
    {
        return $this->minValue;
    }


    public function getMaxValue () : ?int
    {
        return $this->maxValue;
    }


    public function getUnitCode () : ?string
    {
        return $this->unitCode;
    }


    public function getUnitText () : ?string
    {
        return $this->unitText;
    }


    /**
     * @return bool|float|int|string|null
     */
    public function getValue ()
    {
        return $this->value;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withMinValue (?int $minValue)
    {
        $clone = clone $this;
        $clone->minValue = $minValue;
        return $clone;
    }


    /**
     * @return static
     */
    public function withMaxValue (?int $maxValue)
    {
        $clone = clone $this;
        $clone->maxValue = $maxValue;
        return $clone;
    }


    /**
     * @return static
     */
    public function withUnitCode (?string $unitCode)
    {
        $clone = clone $this;
        $clone->unitCode = $unitCode;
        return $clone;
    }


    /**
     * @return static
     */
    public function withUnitText (?string $unitText)
    {
        $clone = clone $this;
        $clone->unitText = $unitText;
        return $clone;
    }


    /**
     * @param bool|float|int|string|null $value
     *
     * @return static
     */
    public function withValue ($value)
    {
        TypeChecker::ensureIsValidValue($value, TypeChecker::OPTIONAL, "bool", "float", "int", "string");

        $clone = clone $this;
        $clone->value = $value;
        return $clone;
    }
    //endregion
}

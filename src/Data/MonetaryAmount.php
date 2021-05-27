<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class MonetaryAmount extends StructuredValue
{
    //region Fields
    private ?string $currency = null;
    private ?int $maxValue = null;
    private ?int $minValue = null;
    private ?\DateTimeImmutable $validFrom = null;
    private ?\DateTimeImmutable $validThrough = null;
    /** @var bool|int|StructuredValue|string|null */
    private $value;
    //endregion


    //region Accessors
    public function getCurrency () : ?string
    {
        return $this->currency;
    }


    public function getMaxValue () : ?int
    {
        return $this->maxValue;
    }


    public function getMinValue () : ?int
    {
        return $this->minValue;
    }


    public function getValidFrom () : ?\DateTimeImmutable
    {
        return $this->validFrom;
    }


    public function getValidThrough () : ?\DateTimeImmutable
    {
        return $this->validThrough;
    }


    /**
     * @return StructuredValue|bool|int|string|null
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
    public function withCurrency (?string $currency)
    {
        $clone = clone $this;
        $clone->currency = $currency;

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
    public function withMinValue (?int $minValue)
    {
        $clone = clone $this;
        $clone->minValue = $minValue;

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


    /**
     * @param StructuredValue|bool|int|string|null $value
     *
     * @return MonetaryAmount
     */
    public function withValue ($value)
    {
        TypeChecker::ensureIsValidValue($value, TypeChecker::OPTIONAL, StructuredValue::class, "bool", "int", "string");

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }
    //endregion
}

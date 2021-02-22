<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class PriceSpecification extends Thing
{
    //region Fields
    private ?QuantitativeValue $eligibleQuantity = null;
    private ?PriceSpecification $eligibleTransactionVolume = null;
    private ?int $maxPrice = null;
    private ?int $minPrice = null;
    /** @var int|float|string|null */
    private $price;
    private ?string $priceCurrency = null;
    private ?\DateTimeImmutable $validFrom = null;
    private ?\DateTimeImmutable $validThrough = null;
    private ?bool $valueAddedTaxIncluded = null;
    //endregion


    //region Accessors
    public function getEligibleQuantity () : ?QuantitativeValue
    {
        return $this->eligibleQuantity;
    }


    public function getEligibleTransactionVolume () : ?self
    {
        return $this->eligibleTransactionVolume;
    }


    public function getMaxPrice () : ?int
    {
        return $this->maxPrice;
    }


    public function getMinPrice () : ?int
    {
        return $this->minPrice;
    }


    /**
     * @return int|float|string|null
     */
    public function getPrice ()
    {
        return $this->price;
    }


    public function getPriceCurrency () : ?string
    {
        return $this->priceCurrency;
    }


    public function getValidFrom () : ?\DateTimeImmutable
    {
        return $this->validFrom;
    }


    public function getValidThrough () : ?\DateTimeImmutable
    {
        return $this->validThrough;
    }


    public function getValueAddedTaxIncluded () : ?bool
    {
        return $this->valueAddedTaxIncluded;
    }
    //endregion


    //region Withers
    public function withEligibleQuantity (?QuantitativeValue $eligibleQuantity)
    {
        $clone = clone $this;
        $clone->eligibleQuantity = $eligibleQuantity;
        return $clone;
    }


    public function withEligibleTransactionVolume (?self $eligibleTransactionVolume)
    {
        $clone = clone $this;
        $clone->eligibleTransactionVolume = $eligibleTransactionVolume;
        return $clone;
    }


    public function withMaxPrice (?int $maxPrice)
    {
        $clone = clone $this;
        $clone->maxPrice = $maxPrice;
        return $clone;
    }


    public function withMinPrice (?int $minPrice)
    {
        $clone = clone $this;
        $clone->minPrice = $minPrice;
        return $clone;
    }


    /**
     * @param int|float|string|null $price
     *
     * @return static
     */
    public function withPrice ($price)
    {
        TypeChecker::ensureIsValidValue($price, TypeChecker::OPTIONAL, "int", "float", "string");

        $clone = clone $this;
        $clone->price = $price;
        return $clone;
    }


    public function withPriceCurrency (?string $priceCurrency)
    {
        $clone = clone $this;
        $clone->priceCurrency = $priceCurrency;
        return $clone;
    }


    public function withValidFrom (?\DateTimeImmutable $validFrom)
    {
        $clone = clone $this;
        $clone->validFrom = $validFrom;
        return $clone;
    }


    public function withValidThrough (?\DateTimeImmutable $validThrough)
    {
        $clone = clone $this;
        $clone->validThrough = $validThrough;
        return $clone;
    }


    public function withValueAddedTaxIncluded (?bool $valueAddedTaxIncluded)
    {
        $clone = clone $this;
        $clone->valueAddedTaxIncluded = $valueAddedTaxIncluded;
        return $clone;
    }
    //endregion
}

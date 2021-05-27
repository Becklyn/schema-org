<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class LocalBusiness extends Organization
{
    //region Fields
    private ?string $currenciesAccepted = null;
    private ?string $openingHours = null;
    private ?string $paymentAccepted = null;
    private ?string $priceRange = null;
    //endregion


    //region Accessors
    public function getCurrenciesAccepted () : ?string
    {
        return $this->currenciesAccepted;
    }


    public function getOpeningHours () : ?string
    {
        return $this->openingHours;
    }


    public function getPaymentAccepted () : ?string
    {
        return $this->paymentAccepted;
    }


    public function getPriceRange () : ?string
    {
        return $this->priceRange;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withCurrenciesAccepted (?string $currenciesAccepted)
    {
        $clone = clone $this;
        $clone->currenciesAccepted = $currenciesAccepted;

        return $clone;
    }


    /**
     * @return static
     */
    public function withOpeningHours (?string $openingHours)
    {
        $clone = clone $this;
        $clone->openingHours = $openingHours;

        return $clone;
    }


    /**
     * @return static
     */
    public function withPaymentAccepted (?string $paymentAccepted)
    {
        $clone = clone $this;
        $clone->paymentAccepted = $paymentAccepted;

        return $clone;
    }


    /**
     * @return static
     */
    public function withPriceRange (?string $priceRange)
    {
        $clone = clone $this;
        $clone->priceRange = $priceRange;

        return $clone;
    }
    //endregion
}

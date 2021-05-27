<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class LocalBusiness extends Organization
{
    //region Fields
    private ?string $currenciesAccepted = null;
    /** @var GeoCoordinates|GeoShape|null */
    private $geo;
    private ?string $openingHours = null;
    private ?string $paymentAccepted = null;
    private ?string $priceRange = null;
    //endregion


    //region Accessors
    public function getCurrenciesAccepted () : ?string
    {
        return $this->currenciesAccepted;
    }


    /**
     * @return GeoCoordinates|GeoShape|null
     */
    public function getGeo ()
    {
        return $this->geo;
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
     * @param GeoCoordinates|GeoShape $geo
     *
     * @return static
     */
    public function withGeo ($geo)
    {
        $clone = clone $this;
        $clone->geo = $geo;

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

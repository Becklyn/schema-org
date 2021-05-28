<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class Demand extends Intangible
{
    //region Fields
    /** @var string|GeoShape */
    private $areaServed;
    private ?string $availability = null;
    private ?\DateTimeImmutable $availabilityEnds = null;
    private ?\DateTimeImmutable $availabilityStarts = null;
    private ?Place $availableAtOrFrom = null;
    private ?string $businessFunction = null;
    /** @var string|GeoShape */
    private $eligibleRegion;
    private ?string $gtin = null;
    private ?string $gtin12 = null;
    private ?string $gtin13 = null;
    private ?string $gtin14 = null;
    private ?string $gtin8 = null;
    /** @var string|GeoShape */
    private $ineligibleRegion;
    private ?QuantitativeValue $inventoryLevel = null;
    private ?OfferItemCondition $itemCondition = null;
    private ?PriceSpecification $priceSpecification = null;
    /**
     * @var Organization|Person|null
     */
    private $seller;
    private ?string $serialNumber = null;
    private ?string $sku = null;
    private ?\DateTimeImmutable $validFrom = null;
    private ?\DateTimeImmutable $validThrough = null;
    //endregion


    //region Accessors
    /**
     * @return GeoShape|string
     */
    public function getAreaServed ()
    {
        return $this->areaServed;
    }


    public function getAvailability () : ?string
    {
        return $this->availability;
    }


    public function getAvailabilityEnds () : ?\DateTimeImmutable
    {
        return $this->availabilityEnds;
    }


    public function getAvailabilityStarts () : ?\DateTimeImmutable
    {
        return $this->availabilityStarts;
    }


    public function getAvailableAtOrFrom () : ?Place
    {
        return $this->availableAtOrFrom;
    }


    public function getBusinessFunction () : ?string
    {
        return $this->businessFunction;
    }


    /**
     * @return GeoShape|string
     */
    public function getEligibleRegion ()
    {
        return $this->eligibleRegion;
    }


    public function getGtin () : ?string
    {
        return $this->gtin;
    }


    public function getGtin12 () : ?string
    {
        return $this->gtin12;
    }


    public function getGtin13 () : ?string
    {
        return $this->gtin13;
    }


    public function getGtin14 () : ?string
    {
        return $this->gtin14;
    }


    public function getGtin8 () : ?string
    {
        return $this->gtin8;
    }


    /**
     * @return GeoShape|string
     */
    public function getIneligibleRegion ()
    {
        return $this->ineligibleRegion;
    }


    public function getInventoryLevel () : ?QuantitativeValue
    {
        return $this->inventoryLevel;
    }


    public function getItemCondition () : ?OfferItemCondition
    {
        return $this->itemCondition;
    }


    public function getPriceSpecification () : ?PriceSpecification
    {
        return $this->priceSpecification;
    }


    /**
     * @return Organization|Person|null
     */
    public function getSeller ()
    {
        return $this->seller;
    }


    public function getSerialNumber () : ?string
    {
        return $this->serialNumber;
    }


    public function getSku () : ?string
    {
        return $this->sku;
    }


    public function getValidFrom () : ?\DateTimeImmutable
    {
        return $this->validFrom;
    }


    public function getValidThrough () : ?\DateTimeImmutable
    {
        return $this->validThrough;
    }
    //endregion


    //region Withers
    /**
     * @param string|GeoShape $areaServed
     *
     * @return static
     */
    public function withAreaServed ($areaServed)
    {
        TypeChecker::ensureIsValidValue($areaServed, TypeChecker::OPTIONAL, "string", GeoShape::class);

        $clone = clone $this;
        $clone->areaServed = $areaServed;

        return $clone;
    }


    /**
     * @return static
     */
    public function withAvailability (?string $availability)
    {
        $clone = clone $this;
        $clone->availability = $availability;

        return $clone;
    }


    /**
     * @return static
     */
    public function withAvailabilityEnds (?\DateTimeImmutable $availabilityEnds)
    {
        $clone = clone $this;
        $clone->availabilityEnds = $availabilityEnds;

        return $clone;
    }


    /**
     * @return static
     */
    public function withAvailabilityStarts (?\DateTimeImmutable $availabilityStarts)
    {
        $clone = clone $this;
        $clone->availabilityStarts = $availabilityStarts;

        return $clone;
    }


    /**
     * @return static
     */
    public function withAvailableAtOrFrom (?Place $availableAtOrFrom)
    {
        $clone = clone $this;
        $clone->availableAtOrFrom = $availableAtOrFrom;

        return $clone;
    }


    /**
     * @return static
     */
    public function withBusinessFunction (?string $businessFunction)
    {
        $clone = clone $this;
        $clone->businessFunction = $businessFunction;

        return $clone;
    }


    /**
     * @param string|GeoShape $eligibleRegion
     *
     * @return static
     */
    public function withEligibleRegion ($eligibleRegion)
    {
        TypeChecker::ensureIsValidValue($eligibleRegion, TypeChecker::OPTIONAL, "string", GeoShape::class);

        $clone = clone $this;
        $clone->eligibleRegion = $eligibleRegion;

        return $clone;
    }


    /**
     * @return static
     */
    public function withGtin (?string $gtin)
    {
        $clone = clone $this;
        $clone->gtin = $gtin;

        return $clone;
    }


    /**
     * @return static
     */
    public function withGtin12 (?string $gtin12)
    {
        $clone = clone $this;
        $clone->gtin12 = $gtin12;

        return $clone;
    }


    /**
     * @return static
     */
    public function withGtin13 (?string $gtin13)
    {
        $clone = clone $this;
        $clone->gtin13 = $gtin13;

        return $clone;
    }


    /**
     * @return static
     */
    public function withGtin14 (?string $gtin14)
    {
        $clone = clone $this;
        $clone->gtin14 = $gtin14;

        return $clone;
    }


    /**
     * @return static
     */
    public function withGtin8 (?string $gtin8)
    {
        $clone = clone $this;
        $clone->gtin8 = $gtin8;

        return $clone;
    }


    /**
     * @param string|GeoShape|null $ineligibleRegion
     *
     * @return static
     */
    public function withIneligibleRegion ($ineligibleRegion)
    {
        TypeChecker::ensureIsValidValue($ineligibleRegion, TypeChecker::OPTIONAL, "string", GeoShape::class);

        $clone = clone $this;
        $clone->ineligibleRegion = $ineligibleRegion;

        return $clone;
    }


    /**
     * @return static
     */
    public function withInventoryLevel (?QuantitativeValue $inventoryLevel)
    {
        $clone = clone $this;
        $clone->inventoryLevel = $inventoryLevel;

        return $clone;
    }


    /**
     * @return static
     */
    public function withItemCondition (?OfferItemCondition $itemCondition)
    {
        $clone = clone $this;
        $clone->itemCondition = $itemCondition;

        return $clone;
    }


    /**
     * @return static
     */
    public function withPriceSpecification (?PriceSpecification $priceSpecification)
    {
        $clone = clone $this;
        $clone->priceSpecification = $priceSpecification;

        return $clone;
    }


    /**
     * @param Organization|Person|null $seller
     *
     * @return static
     */
    public function withSeller ($seller)
    {
        TypeChecker::ensureIsValidValue($seller, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->seller = $seller;

        return $clone;
    }


    /**
     * @return static
     */
    public function withSerialNumber (?string $serialNumber)
    {
        $clone = clone $this;
        $clone->serialNumber = $serialNumber;

        return $clone;
    }


    /**
     * @return static
     */
    public function withSku (?string $sku)
    {
        $clone = clone $this;
        $clone->sku = $sku;

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
    //endregion
}

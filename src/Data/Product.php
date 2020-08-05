<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class Product implements SchemaOrgDataInterface
{
    private ?string $audience = null;
    private ?string $award = null;
    private ?string $category = null;
    private ?string $color = null;
    /**
     * @var QuantitativeValue|Distance|null
     */
    private $height;
    private ?Product $isAccessoryOrSparePartFor = null;
    private ?Product $isConsumableFor = null;
    private ?Product $isRelatedTo = null;
    private ?Product $isSimilarTo = null;
    private ?OfferItemCondition $itemCondition = null;
    private ?string $logo = null;
    private ?Organization $manufacturer = null;
    /**
     * @var Product|string|null
     */
    private $material;
    private ?string $productID = null;
    private ?\DateTimeImmutable $productionDate = null;
    private ?\DateTimeImmutable $purchaseDate = null;
    private ?\DateTimeImmutable $releaseDate = null;
    private ?string $sku = null;
    private ?string $slogan = null;
    private ?QuantitativeValue $weight = null;
    /**
     * @var QuantitativeValue|Distance|null
     */
    private $width;


    //region Accessors
    public function getAudience () : ?string
    {
        return $this->audience;
    }


    public function getAward () : ?string
    {
        return $this->award;
    }


    public function getCategory () : ?string
    {
        return $this->category;
    }


    public function getColor () : ?string
    {
        return $this->color;
    }


    /**
     * @return Distance|QuantitativeValue|null
     */
    public function getHeight ()
    {
        return $this->height;
    }


    public function getIsAccessoryOrSparePartFor () : ?self
    {
        return $this->isAccessoryOrSparePartFor;
    }


    public function getIsConsumableFor () : ?self
    {
        return $this->isConsumableFor;
    }


    public function getIsRelatedTo () : ?self
    {
        return $this->isRelatedTo;
    }


    public function getIsSimilarTo () : ?self
    {
        return $this->isSimilarTo;
    }


    public function getItemCondition () : ?OfferItemCondition
    {
        return $this->itemCondition;
    }


    public function getLogo () : ?string
    {
        return $this->logo;
    }


    public function getManufacturer () : ?Organization
    {
        return $this->manufacturer;
    }


    /**
     * @return Product|string|null
     */
    public function getMaterial ()
    {
        return $this->material;
    }


    public function getProductID () : ?string
    {
        return $this->productID;
    }


    public function getProductionDate () : ?\DateTimeImmutable
    {
        return $this->productionDate;
    }


    public function getPurchaseDate () : ?\DateTimeImmutable
    {
        return $this->purchaseDate;
    }


    public function getReleaseDate () : ?\DateTimeImmutable
    {
        return $this->releaseDate;
    }


    public function getSku () : ?string
    {
        return $this->sku;
    }


    public function getSlogan () : ?string
    {
        return $this->slogan;
    }


    public function getWeight () : ?QuantitativeValue
    {
        return $this->weight;
    }


    /**
     * @return Distance|QuantitativeValue|null
     */
    public function getWidth ()
    {
        return $this->width;
    }
    //endregion


    //region Withers
    public function withAudience (?string $audience) : self
    {
        $clone = clone $this;
        $clone->audience = $audience;
        return $clone;
    }


    public function withAward (?string $award) : self
    {
        $clone = clone $this;
        $clone->award = $award;
        return $clone;
    }


    public function withCategory (?string $category) : self
    {
        $clone = clone $this;
        $clone->category = $category;
        return $clone;
    }


    public function withColor (?string $color) : self
    {
        $clone = clone $this;
        $clone->color = $color;
        return $clone;
    }


    /**
     * @param QuantitativeValue|Distance|null $height
     */
    public function withHeight ($height) : self
    {
        TypeChecker::ensureIsValidValue($height, TypeChecker::OPTIONAL, QuantitativeValue::class, Distance::class);

        $clone = clone $this;
        $clone->height = $height;
        return $clone;
    }


    public function withIsAccessoryOrSparePartFor (?self $isAccessoryOrSparePartFor) : self
    {
        $clone = clone $this;
        $clone->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
        return $clone;
    }


    public function withIsConsumableFor (?self $isConsumableFor) : self
    {
        $clone = clone $this;
        $clone->isConsumableFor = $isConsumableFor;
        return $clone;
    }


    public function withIsRelatedTo (?self $isRelatedTo) : self
    {
        $clone = clone $this;
        $clone->isRelatedTo = $isRelatedTo;
        return $clone;
    }


    public function withIsSimilarTo (?self $isSimilarTo) : self
    {
        $clone = clone $this;
        $clone->isSimilarTo = $isSimilarTo;
        return $clone;
    }


    public function withItemCondition (?OfferItemCondition $itemCondition) : self
    {
        $clone = clone $this;
        $clone->itemCondition = $itemCondition;
        return $clone;
    }


    public function withLogo (?string $logo) : self
    {
        $clone = clone $this;
        $clone->logo = $logo;
        return $clone;
    }


    public function withManufacturer (?Organization $manufacturer) : self
    {
        $clone = clone $this;
        $clone->manufacturer = $manufacturer;
        return $clone;
    }


    /**
     * @param Product|string|null $material
     */
    public function withMaterial ($material) : self
    {
        TypeChecker::ensureIsValidValue($material, TypeChecker::OPTIONAL, static::class, "string");

        $clone = clone $this;
        $clone->material = $material;
        return $clone;
    }


    public function withProductID (?string $productID) : self
    {
        $clone = clone $this;
        $clone->productID = $productID;
        return $clone;
    }


    public function withProductionDate (?\DateTimeImmutable $productionDate) : self
    {
        $clone = clone $this;
        $clone->productionDate = $productionDate;
        return $clone;
    }


    public function withPurchaseDate (?\DateTimeImmutable $purchaseDate) : self
    {
        $clone = clone $this;
        $clone->purchaseDate = $purchaseDate;
        return $clone;
    }


    public function withReleaseDate (?\DateTimeImmutable $releaseDate) : self
    {
        $clone = clone $this;
        $clone->releaseDate = $releaseDate;
        return $clone;
    }


    public function withSku (?string $sku) : self
    {
        $clone = clone $this;
        $clone->sku = $sku;
        return $clone;
    }


    public function withSlogan (?string $slogan) : self
    {
        $clone = clone $this;
        $clone->slogan = $slogan;
        return $clone;
    }


    public function withWeight (?QuantitativeValue $weight) : self
    {
        $clone = clone $this;
        $clone->weight = $weight;
        return $clone;
    }


    /**
     * @param QuantitativeValue|Distance|null $width
     */
    public function withWidth ($width) : self
    {
        TypeChecker::ensureIsValidValue($width, TypeChecker::OPTIONAL, QuantitativeValue::class, Distance::class);

        $clone = clone $this;
        $clone->width = $width;
        return $clone;
    }
    //endregion
}

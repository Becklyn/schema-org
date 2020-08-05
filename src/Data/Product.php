<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class Product extends Thing
{
    private ?string $audience = null;
    private ?string $award = null;
    /**
     * @var Brand|Organization|null
     */
    private $brand;
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


    /**
     * @return Brand|Organization|null
     */
    public function getBrand ()
    {
        return $this->brand;
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
    /**
     * @return static
     */
    public function withAudience (?string $audience)
    {
        $clone = clone $this;
        $clone->audience = $audience;
        return $clone;
    }


    /**
     * @return static
     */
    public function withAward (?string $award)
    {
        $clone = clone $this;
        $clone->award = $award;
        return $clone;
    }


    /**
     * @param Brand|Organization|null $brand
     *
     * @return static
     */
    public function withBrand ($brand)
    {
        TypeChecker::ensureIsValidValue($brand, TypeChecker::OPTIONAL, Brand::class, static::class);

        $clone = clone $this;
        $clone->brand = $brand;
        return $clone;
    }


    /**
     * @return static
     */
    public function withCategory (?string $category)
    {
        $clone = clone $this;
        $clone->category = $category;
        return $clone;
    }


    /**
     * @return static
     */
    public function withColor (?string $color)
    {
        $clone = clone $this;
        $clone->color = $color;
        return $clone;
    }


    /**
     * @param QuantitativeValue|Distance|null $height
     *
     * @return static
     */
    public function withHeight ($height)
    {
        TypeChecker::ensureIsValidValue($height, TypeChecker::OPTIONAL, QuantitativeValue::class, Distance::class);

        $clone = clone $this;
        $clone->height = $height;
        return $clone;
    }


    /**
     * @return static
     */
    public function withIsAccessoryOrSparePartFor (?self $isAccessoryOrSparePartFor)
    {
        $clone = clone $this;
        $clone->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
        return $clone;
    }


    /**
     * @return static
     */
    public function withIsConsumableFor (?self $isConsumableFor)
    {
        $clone = clone $this;
        $clone->isConsumableFor = $isConsumableFor;
        return $clone;
    }


    /**
     * @return static
     */
    public function withIsRelatedTo (?self $isRelatedTo)
    {
        $clone = clone $this;
        $clone->isRelatedTo = $isRelatedTo;
        return $clone;
    }


    /**
     * @return static
     */
    public function withIsSimilarTo (?self $isSimilarTo)
    {
        $clone = clone $this;
        $clone->isSimilarTo = $isSimilarTo;
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
    public function withLogo (?string $logo)
    {
        $clone = clone $this;
        $clone->logo = $logo;
        return $clone;
    }


    /**
     * @return static
     */
    public function withManufacturer (?Organization $manufacturer)
    {
        $clone = clone $this;
        $clone->manufacturer = $manufacturer;
        return $clone;
    }


    /**
     * @param Product|string|null $material
     *
     * @return static
     */
    public function withMaterial ($material)
    {
        TypeChecker::ensureIsValidValue($material, TypeChecker::OPTIONAL, static::class, "string");

        $clone = clone $this;
        $clone->material = $material;
        return $clone;
    }


    /**
     * @return static
     */
    public function withProductID (?string $productID)
    {
        $clone = clone $this;
        $clone->productID = $productID;
        return $clone;
    }


    /**
     * @return static
     */
    public function withProductionDate (?\DateTimeImmutable $productionDate)
    {
        $clone = clone $this;
        $clone->productionDate = $productionDate;
        return $clone;
    }


    /**
     * @return static
     */
    public function withPurchaseDate (?\DateTimeImmutable $purchaseDate)
    {
        $clone = clone $this;
        $clone->purchaseDate = $purchaseDate;
        return $clone;
    }


    /**
     * @return static
     */
    public function withReleaseDate (?\DateTimeImmutable $releaseDate)
    {
        $clone = clone $this;
        $clone->releaseDate = $releaseDate;
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
    public function withSlogan (?string $slogan)
    {
        $clone = clone $this;
        $clone->slogan = $slogan;
        return $clone;
    }


    /**
     * @return static
     */
    public function withWeight (?QuantitativeValue $weight)
    {
        $clone = clone $this;
        $clone->weight = $weight;
        return $clone;
    }


    /**
     * @param QuantitativeValue|Distance|null $width
     *
     * @return static
     */
    public function withWidth ($width)
    {
        TypeChecker::ensureIsValidValue($width, TypeChecker::OPTIONAL, QuantitativeValue::class, Distance::class);

        $clone = clone $this;
        $clone->width = $width;
        return $clone;
    }
    //endregion
}

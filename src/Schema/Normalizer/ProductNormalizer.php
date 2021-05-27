<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Product;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class ProductNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Product";


    /**
     * @inheritDoc
     */
    public function getSchemaType () : string
    {
        return self::SCHEMA_TYPE;
    }


    /**
     * @inheritDoc
     */
    public function getEntityClass () : string
    {
        return Product::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Product);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "audience" => $entity->getAudience(),
            "award" => $entity->getAward(),
            "brand" => $this->normalizeDataOrPrimitive($registry, $entity->getBrand(), $usage, $context, true),
            "category" => $entity->getCategory(),
            "color" => $entity->getColor(),
            "height" => $this->normalizeDataOrPrimitive($registry, $entity->getHeight(), $usage, $context, true),
            "isAccessoryOrSparePartFor" => $this->normalizeDataOrPrimitive($registry, $entity->getIsAccessoryOrSparePartFor(), $usage, $context, true),
            "isConsumableFor" => $this->normalizeDataOrPrimitive($registry, $entity->getIsConsumableFor(), $usage, $context, true),
            "isRelatedTo" => $this->normalizeDataOrPrimitive($registry, $entity->getIsRelatedTo(), $usage, $context, true),
            "isSimilarTo" => $this->normalizeDataOrPrimitive($registry, $entity->getIsSimilarTo(), $usage, $context, true),
            "itemCondition" => $this->normalizeDataOrPrimitive($registry, $entity->getItemCondition(), $usage, $context, true),
            "logo" => $entity->getLogo(),
            "manufacturer" => $this->normalizeDataOrPrimitive($registry, $entity->getManufacturer(), $usage, $context, true),
            "material" => $this->normalizeDataOrPrimitive($registry, $entity->getMaterial(), $usage, $context, true),
            "offers" => $this->normalizeDataOrPrimitive($registry, $entity->getOffers(), $usage, $context, true),
            "productID" => $entity->getProductID(),
            "productionDate" => $this->normalizeDateTime($entity->getProductionDate()),
            "purchaseDate" => $this->normalizeDateTime($entity->getPurchaseDate()),
            "releaseDate" => $this->normalizeDateTime($entity->getReleaseDate()),
            "sku" => $entity->getSku(),
            "slogan" => $entity->getSlogan(),
            "weight" => $this->normalizeDataOrPrimitive($registry, $entity->getWeight(), $usage, $context, true),
            "width" => $this->normalizeDataOrPrimitive($registry, $entity->getWidth(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

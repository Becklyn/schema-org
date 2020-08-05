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
            "brand" => $registry->normalize($entity->getBrand(), $usage, $context, true),
            "category" => $entity->getCategory(),
            "color" => $entity->getColor(),
            "height" => $registry->normalize($entity->getHeight(), $usage, $context, true),
            "isAccessoryOrSparePartFor" => $registry->normalize($entity->getIsAccessoryOrSparePartFor(), $usage, $context, true),
            "isConsumableFor" => $registry->normalize($entity->getIsConsumableFor(), $usage, $context, true),
            "isRelatedTo" => $registry->normalize($entity->getIsRelatedTo(), $usage, $context, true),
            "isSimilarTo" => $registry->normalize($entity->getIsSimilarTo(), $usage, $context, true),
            "itemCondition" => $registry->normalize($entity->getItemCondition(), $usage, $context, true),
            "logo" => $entity->getLogo(),
            "manufacturer" => $registry->normalize($entity->getManufacturer(), $usage, $context, true),
            "material" => $registry->normalize($entity->getMaterial(), $usage, $context, true),
            "productID" => $entity->getProductID(),
            "productionDate" => $this->normalizeDateTime($entity->getProductionDate()),
            "purchaseDate" => $this->normalizeDateTime($entity->getPurchaseDate()),
            "releaseDate" => $this->normalizeDateTime($entity->getReleaseDate()),
            "sku" => $entity->getSku(),
            "slogan" => $entity->getSlogan(),
            "weight" => $registry->normalize($entity->getWeight(), $usage, $context, true),
            "width" => $registry->normalize($entity->getWidth(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

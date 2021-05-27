<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\PriceSpecification;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class PriceSpecificationNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "PriceSpecification";


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
        return PriceSpecification::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof PriceSpecification);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "eligibleQuantity" => $this->normalizeDataOrPrimitive($registry, $entity->getEligibleQuantity(), $usage, $context, true),
            "eligibleTransactionVolume" => $this->normalizeDataOrPrimitive($registry, $entity->getEligibleTransactionVolume(), $usage, $context, true),
            "maxPrice" => $entity->getMaxPrice(),
            "minPrice" => $entity->getMinPrice(),
            "price" => $entity->getPrice(),
            "priceCurrency" => $entity->getPriceCurrency(),
            "validFrom" => $this->normalizeDateTime($entity->getValidFrom()),
            "validThrough" => $this->normalizeDateTime($entity->getValidThrough()),
            "valueAddedTaxIncluded" => $entity->getValueAddedTaxIncluded(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\HowToSupply;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class HowToSupplyNormalizer extends HowToItemNormalizer
{
    public const SCHEMA_TYPE = "HowToSupply";


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
        return HowToSupply::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof HowToSupply);

        $howToItemNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "estimatedCost" => $registry->normalize($entity->getEstimatedCost(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($howToItemNormalized, $normalized), $usage, $context, $isNested);
    }
}

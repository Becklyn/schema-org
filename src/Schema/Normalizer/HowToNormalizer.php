<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\HowTo;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class HowToNormalizer extends CreativeWorkNormalizer
{
    public const SCHEMA_TYPE = "HowTo";


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
        return HowTo::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof HowTo);

        $creativeWorkNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "estimatedCost" => $registry->normalize($entity->getEstimatedCost(), $usage, $context, true),
            "performTime" => $registry->normalize($entity->getPerformTime(), $usage, $context, true),
            "prepTime" => $registry->normalize($entity->getPrepTime(), $usage, $context, true),
            "step" => $registry->normalize($entity->getStep(), $usage, $context, true),
            "supply" => $registry->normalize($entity->getSupply(), $usage, $context, true),
            "tool" => $registry->normalize($entity->getTool(), $usage, $context, true),
            "totalTime" => $registry->normalize($entity->getTotalTime(), $usage, $context, true),
            "yield" => $registry->normalize($entity->getYield(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($creativeWorkNormalized, $normalized), $usage, $context, $isNested);
    }
}

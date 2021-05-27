<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Data\Time;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class TimeNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Time";


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
        return Time::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Time);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "closes" => $this->normalizeDataOrPrimitive($registry, $entity->getCloses(), $usage, $context, true),
            "endTime" => $this->normalizeDataOrPrimitive($registry, $entity->getEndTime(), $usage, $context, true),
            "startTime" => $this->normalizeDataOrPrimitive($registry, $entity->getStartTime(), $usage, $context, true),
            "opens" => $this->normalizeDataOrPrimitive($registry, $entity->getOpens(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

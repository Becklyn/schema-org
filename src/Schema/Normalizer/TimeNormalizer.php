<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Data\Time;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class TimeNormalizer extends ThingNormalizer
{
    use MetaDataNormalizerTrait;

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
            "closes" => $registry->normalize($entity->getCloses(), $usage, $context, true),
            "endTime" => $registry->normalize($entity->getEndTime(), $usage, $context, true),
            "startTime" => $registry->normalize($entity->getStartTime(), $usage, $context, true),
            "opens" => $registry->normalize($entity->getOpens(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

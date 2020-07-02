<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\OpeningHoursSpecification;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class OpeningHoursSpecificationNormalizer extends ThingNormalizer
{
    use MetaDataNormalizerTrait;

    public const SCHEMA_TYPE = "OpeningHoursSpecification";


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
        return OpeningHoursSpecification::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof OpeningHoursSpecification);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "closes" => $entity->getCloses(),
            "dayOfWeek" => $registry->normalize($entity->getDayOfWeek(), $usage, $context, true),
            "opens" => $entity->getOpens(),
            "validFrom" => $this->normalizeDateTime($entity->getValidFrom()),
            "validThrough" => $this->normalizeDateTime($entity->getValidThrough()),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), [...$thingNormalized, ...$normalized], $usage, $context, $isNested);
    }
}

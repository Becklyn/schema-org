<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\PublicationEvent;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class PublicationEventNormalizer extends EventNormalizer
{
    public const SCHEMA_TYPE = "PublicationEvent";


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
        return PublicationEvent::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof PublicationEvent);

        $eventNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "publishedBy" => $registry->normalize($entity->getPublishedBy(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($eventNormalized, $normalized), $usage, $context, $isNested);
    }
}

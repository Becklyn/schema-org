<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Event;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class EventNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Event";


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
        return Event::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Event);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "about" => $registry->normalize($entity->getAbout(), $usage, $context, true),
            "doorTime" => $this->normalizeDateTime($entity->getDoorTime()),
            "duration" => $registry->normalize($entity->getDuration(), $usage, $context, true),
            "endDate" => $this->normalizeDateTime($entity->getEndDate()),
            "eventStatus" => $registry->normalize($entity->getEventStatus(), $usage, $context, true),
            "inLanguage" => $entity->getInLanguage(),
            "isAccessibleForFree" => $entity->getIsAccessibleForFree(),
            "location" => $registry->normalize($entity->getLocation(), $usage, $context, true),
            "maximumAttendeeCapacity" => $entity->getMaximumAttendeeCapacity(),
            "maximumPhysicalAttendeeCapacity" => $entity->getMaximumPhysicalAttendeeCapacity(),
            "maximumVirtualAttendeeCapacity" => $entity->getMaximumVirtualAttendeeCapacity(),
            "organizer" => $registry->normalize($entity->getOrganizer(), $usage, $context, true),
            "previousStartDate" => $this->normalizeDateTime($entity->getPreviousStartDate()),
            "startDate" => $this->normalizeDateTime($entity->getStartDate()),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), [...$thingNormalized, ...$normalized], $usage, $context, $isNested);
    }
}

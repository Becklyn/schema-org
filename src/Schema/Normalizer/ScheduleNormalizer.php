<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Schedule;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class ScheduleNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Schedule";


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
        return Schedule::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Schedule);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "byDay" => $entity->getByDay(),
            "byMonth" => $entity->getByMonth(),
            "byMonthDay" => $entity->getByMonthDay(),
            "duration" => $this->normalizeDataOrPrimitive($registry, $entity->getDuration(), $usage, $context, true),
            "endDate" => $this->normalizeDateTime($entity->getEndDate()),
            "endTime" => $entity->getEndTime(),
            "expectDate" => $this->normalizeDateTime($entity->getExpectDate()),
            "repeatCount" => $entity->getRepeatCount(),
            "repeatFrequency" => $entity->getRepeatFrequency(),
            "schedulerTimezone" => $entity->getSchedulerTimezone(),
            "startDate" => $this->normalizeDateTime($entity->getStartDate()),
            "startTime" => $entity->getStartTime(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

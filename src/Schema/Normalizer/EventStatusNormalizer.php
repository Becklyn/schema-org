<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\EventStatus;

class EventStatusNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "EventStatus";


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
        return EventStatus::class;
    }
}

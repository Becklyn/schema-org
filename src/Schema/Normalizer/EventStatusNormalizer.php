<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\EventStatus;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class EventStatusNormalizer extends ThingNormalizer
{
    use MetaDataNormalizerTrait;

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

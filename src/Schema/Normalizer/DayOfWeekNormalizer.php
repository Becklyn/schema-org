<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\DayOfWeek;

class DayOfWeekNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "DayOfWeek";


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
        return DayOfWeek::class;
    }
}

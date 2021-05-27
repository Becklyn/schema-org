<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\StructuredValue;

class StructuredValueNormalizer extends IntangibleNormalizer
{
    public const SCHEMA_TYPE = "StructuredValue";


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
        return StructuredValue::class;
    }
}

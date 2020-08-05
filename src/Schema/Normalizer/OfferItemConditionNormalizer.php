<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\OfferItemCondition;

class OfferItemConditionNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "OfferItemCondition";


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
        return OfferItemCondition::class;
    }
}

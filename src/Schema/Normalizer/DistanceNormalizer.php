<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Distance;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class DistanceNormalizer extends ThingNormalizer
{
    use MetaDataNormalizerTrait;

    public const SCHEMA_TYPE = "Distance";


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
        return Distance::class;
    }
}

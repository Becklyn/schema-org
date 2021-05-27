<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\HowToStep;

class HowToStepNormalizer extends CreativeWorkNormalizer
{
    public const SCHEMA_TYPE = "HowToStep";


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
        return HowToStep::class;
    }
}

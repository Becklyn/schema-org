<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\HowToSection;

class HowToSectionNormalizer extends CreativeWorkNormalizer
{
    public const SCHEMA_TYPE = "HowToSection";


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
        return HowToSection::class;
    }
}

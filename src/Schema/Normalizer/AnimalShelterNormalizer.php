<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\AnimalShelter;

class AnimalShelterNormalizer extends LocalBusinessNormalizer
{
    public const SCHEMA_TYPE = "AnimalShelter";


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
        return AnimalShelter::class;
    }
}

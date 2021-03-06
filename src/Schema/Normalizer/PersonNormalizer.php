<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Person;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class PersonNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Person";


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
        return Person::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Person);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "additionalName" => $entity->getAdditionalName(),
            "address" => $this->normalizeDataOrPrimitive($registry, $entity->getAddress(), $usage, $context, true),
            "affiliation" => $this->normalizeDataOrPrimitive($registry, $entity->getAffiliation(), $usage, $context, true),
            "award" => $entity->getAward(),
            "birthDate" => $this->normalizeDateTime($entity->getBirthDate()),
            "brand" => $this->normalizeDataOrPrimitive($registry, $entity->getBrand(), $usage, $context, true),
            "callSign" => $entity->getCallSign(),
            "deathDate" => $this->normalizeDateTime($entity->getDeathDate()),
            "email" => $entity->getEmail(),
            "familyName" => $entity->getFamilyName(),
            "faxNumber" => $entity->getFaxNumber(),
            "gender" => $entity->getGender(),
            "givenName" => $entity->getGivenName(),
            "jobTitle" => $entity->getJobTitle(),
            "nationality" => $entity->getNationality(),
            "spouse" => $this->normalizeDataOrPrimitive($registry, $entity->getSpouse(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

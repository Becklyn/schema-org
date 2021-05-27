<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Organization;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class OrganizationNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Organization";


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
        return Organization::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Organization);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "address" => $this->normalizeDataOrPrimitive($registry, $entity->getAddress(), $usage, $context, true),
            "areaServed" => $entity->getAreaServed(),
            "award" => $entity->getAward(),
            "brand" => $this->normalizeDataOrPrimitive($registry, $entity->getBrand(), $usage, $context, true),
            "contactPoint" => $this->normalizeDataOrPrimitive($registry, $entity->getContactPoint(), $usage, $context, true),
            "department" => $this->normalizeDataOrPrimitive($registry, $entity->getDepartment(), $usage, $context, true),
            "email" => $entity->getEmail(),
            "faxNumber" => $entity->getFaxNumber(),
            "location" => $this->normalizeDataOrPrimitive($registry, $entity->getLocation(), $usage, $context, true),
            "logo" => $entity->getLogo(),
            "slogan" => $entity->getSlogan(),
            "taxID" => $entity->getTaxID(),
            "telephone" => $entity->getTelephone(),
            "vatID" => $entity->getVatID(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

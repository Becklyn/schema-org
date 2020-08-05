<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Organization;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class OrganizationNormalizer extends ThingNormalizer
{
    use MetaDataNormalizerTrait;

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
            "address" => $registry->normalize($entity->getAddress(), $usage, $context, true),
            "areaServed" => $entity->getAreaServed(),
            "award" => $entity->getAward(),
            "brand" => $registry->normalize($entity->getBrand(), $usage, $context, true),
            "contactPoint" => $registry->normalize($entity->getContactPoint(), $usage, $context, true),
            "department" => $registry->normalize($entity->getDepartment(), $usage, $context, true),
            "email" => $entity->getEmail(),
            "faxNumber" => $entity->getFaxNumber(),
            "location" => $registry->normalize($entity->getLocation(), $usage, $context, true),
            "logo" => $entity->getLogo(),
            "slogan" => $entity->getSlogan(),
            "taxID" => $entity->getTaxID(),
            "telephone" => $entity->getTelephone(),
            "vatID" => $entity->getVatID(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), [...$thingNormalized, ...$normalized], $usage, $context, $isNested);
    }
}

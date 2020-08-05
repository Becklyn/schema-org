<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\PostalAddress;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class PostalAddressNormalizer extends ContactPointNormalizer
{
    public const SCHEMA_TYPE = "PostalAddress";


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
        return PostalAddress::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof PostalAddress);

        $contactPointNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "addressCountry" => $entity->getAddressCountry(),
            "addressLocality" => $entity->getAddressLocality(),
            "addressRegion" => $entity->getAddressRegion(),
            "postOfficeBoxNumber" => $entity->getPostOfficeBoxNumber(),
            "postalCode" => $entity->getPostalCode(),
            "streetAddress" => $entity->getStreetAddress(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($contactPointNormalized, $normalized), $usage, $context, $isNested);
    }
}

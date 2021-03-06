<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\ContactPoint;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizer;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class ContactPointNormalizer implements MetaDataNormalizer
{
    use MetaDataNormalizerTrait;

    public const SCHEMA_TYPE = "ContactPoint";


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
        return ContactPoint::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof ContactPoint);

        if (null === $entity->getContactType())
        {
            throw new \InvalidArgumentException("Expected ContactPoint::getContactType() to be set.");
        }

        $normalized = [
            "areaServed" => $this->normalizeDataOrPrimitive($registry, $entity->getAreaServed(), $usage, $context, true),
            "availableLanguage" => $entity->getAvailableLanguage(),
            "email" => $entity->getEmail(),
            "faxNumber" => $entity->getFaxNumber(),
            "hoursAvailable" => $this->normalizeDataOrPrimitive($registry, $entity->getHoursAvailable(), $usage, $context, true),
            "productSupported" => $entity->getProductSupported(),
            "telephone" => $entity->getTelephone(),
        ];

        return $this->createMetaData($registry, $entity->getContactType(), $normalized, $usage, $context, $isNested);
    }
}

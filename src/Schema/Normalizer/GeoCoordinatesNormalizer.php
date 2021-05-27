<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\GeoCoordinates;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class GeoCoordinatesNormalizer extends StructuredValueNormalizer
{
    public const SCHEMA_TYPE = "GeoCoordinates";


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
        return GeoCoordinates::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof GeoCoordinates);

        $structuredValueNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "address" => $registry->normalize($entity->getAddress(), $usage, $context, true),
            "addressCountry" => $registry->normalize($entity->getAddressCountry(), $usage, $context, true),
            "elevation" => $entity->getElevation(),
            "latitude" => $entity->getLatitude(),
            "longitude" => $entity->getLongitude(),
            "postalCode" => $entity->getPostalCode(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($structuredValueNormalized, $normalized), $usage, $context, $isNested);
    }
}

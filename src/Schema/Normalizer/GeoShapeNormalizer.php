<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\GeoShape;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class GeoShapeNormalizer extends StructuredValueNormalizer
{
    public const SCHEMA_TYPE = "GeoShape";


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
        return GeoShape::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof GeoShape);

        $structuredValueNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "address" => $registry->normalize($entity->getAddress(), $usage, $context, true),
            "addressCountry" => $registry->normalize($entity->getAddressCountry(), $usage, $context, true),
            "box" => $entity->getBox(),
            "circle" => $entity->getCircle(),
            "elevation" => $entity->getElevation(),
            "line" => $entity->getLine(),
            "polygon" => $entity->getPolygon(),
            "postalCode" => $entity->getPostalCode(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($structuredValueNormalized, $normalized), $usage, $context, $isNested);
    }
}

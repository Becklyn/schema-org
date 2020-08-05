<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Place;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class PlaceNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Place";


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
        return Place::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Place);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "address" => $registry->normalize($entity->getAddress(), $usage, $context, true),
            "latitude" => $entity->getLatitude(),
            "logo" => $entity->getLogo(),
            "longitude" => $entity->getLongitude(),
            "maximumAttendeeCapacity" => $entity->getMaximumAttendeeCapacity(),
            "openingHoursSpecification" => $registry->normalize($entity->getOpeningHoursSpecification(), $usage, $context, true),
            "publicAccess" => $entity->getPublicAccess(),
            "slogan" => $entity->getSlogan(),
            "smokingAllowed" => $entity->getSmokingAllowed(),
            "specialOpeningHoursSpecification" => $registry->normalize($entity->getSpecialOpeningHoursSpecification(), $usage, $context, true),
            "telephone" => $entity->getTelephone(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

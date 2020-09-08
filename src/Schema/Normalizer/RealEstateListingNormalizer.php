<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\RealEstateListing;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class RealEstateListingNormalizer extends WebPageNormalizer
{
    public const SCHEMA_TYPE = "RealEstateListing";


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
        return RealEstateListing::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof RealEstateListing);

        $webPageNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "datePosted" => $entity->getDatePosted(),
            "duration" => $registry->normalize($entity->getDuration(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($webPageNormalized, $normalized), $usage, $context, $isNested);
    }
}

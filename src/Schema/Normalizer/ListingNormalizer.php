<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Listing;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizer;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class ListingNormalizer implements MetaDataNormalizer
{
    use MetaDataNormalizerTrait;

    public const SCHEMA_TYPE = "Listing";


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
        return Listing::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Listing);

        // Note: We explicitly do *not* call `$this->createMetaData()` here as we do not want the surrounding meta data information. This is supposed to be a raw but normalized array.
        return $this->normalizeDataOrPrimitive($registry, $entity->getEntries(), $usage, $context, $isNested);
    }
}

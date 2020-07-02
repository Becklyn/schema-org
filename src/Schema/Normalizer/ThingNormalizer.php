<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Data\Thing;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizer;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class ThingNormalizer implements MetaDataNormalizer
{
    use MetaDataNormalizerTrait;

    public const SCHEMA_TYPE = "Thing";


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
        return Thing::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Thing);

        $normalized = [
            "alternateName" => $entity->getAlternateName(),
            "description" => $entity->getDescription(),
            "identifier" => $entity->getIdentifier(),
            "image" => $entity->getImage(),
            "name" => $entity->getName(),
            "sameAs" => $entity->getSameAs(),
            "url" => $entity->getUrl(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), $normalized, $usage, $context, $isNested);
    }
}

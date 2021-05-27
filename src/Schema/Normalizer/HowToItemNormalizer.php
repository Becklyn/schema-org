<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\HowToItem;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class HowToItemNormalizer extends ListItemNormalizer
{
    public const SCHEMA_TYPE = "HowToItem";


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
        return HowToItem::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof HowToItem);

        $listItemNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "requiredQuantity" => $this->normalizeDataOrPrimitive($registry, $entity->getRequiredQuantity(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($listItemNormalized, $normalized), $usage, $context, $isNested);
    }
}

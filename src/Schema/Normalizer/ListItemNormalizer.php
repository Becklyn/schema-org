<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\ListItem;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class ListItemNormalizer extends IntangibleNormalizer
{
    public const SCHEMA_TYPE = "ListItem";


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
        return ListItem::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof ListItem);

        $intangibleNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "item" => $this->normalizeDataOrPrimitive($registry, $entity->getItem(), $usage, $context, true),
            "nextItem" => $this->normalizeDataOrPrimitive($registry, $entity->getNextItem(), $usage, $context, true),
            "position" => $entity->getPosition(),
            "previousItem" => $this->normalizeDataOrPrimitive($registry, $entity->getPreviousItem(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($intangibleNormalized, $normalized), $usage, $context, $isNested);
    }
}

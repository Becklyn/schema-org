<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Comment;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class CommentNormalizer extends CreativeWorkNormalizer
{
    public const SCHEMA_TYPE = "Comment";


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
        return Comment::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Comment);

        $creativeWorkNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "downvoteCount" => $entity->getDownvoteCount(),
            "parentItem" => $this->normalizeDataOrPrimitive($registry, $entity->getParentItem(), $usage, $context, true),
            "upvoteCount" => $entity->getUpvoteCount(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($creativeWorkNormalized, $normalized), $usage, $context, $isNested);
    }
}

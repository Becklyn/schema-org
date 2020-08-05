<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Article;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class ArticleNormalizer extends CreativeWorkNormalizer
{
    public const SCHEMA_TYPE = "Article";


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
        return Article::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Article);

        $creativeWorkNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "articleBody" => $entity->getArticleBody(),
            "articleSection" => $entity->getArticleSection(),
            "backstory" => $entity->getBackstory(),
            "pageEnd" => $entity->getPageEnd(),
            "pageStart" => $entity->getPageStart(),
            "pagination" => $entity->getPagination(),
            "wordCount" => $entity->getWordCount(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), [...$creativeWorkNormalized, ...$normalized], $usage, $context, $isNested);
    }
}

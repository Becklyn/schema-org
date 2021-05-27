<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\CreativeWork;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class CreativeWorkNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "CreativeWork";


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
        return CreativeWork::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof CreativeWork);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "about" => $this->normalizeDataOrPrimitive($registry, $entity->getAbout(), $usage, $context, true),
            "abstract" => $entity->getAbout(),
            "author" => $this->normalizeDataOrPrimitive($registry, $entity->getAuthor(), $usage, $context, true),
            "award" => $entity->getAward(),
            "creator" => $this->normalizeDataOrPrimitive($registry, $entity->getCreator(), $usage, $context, true),
            "dateCreated" => $this->normalizeDateTime($entity->getDateCreated()),
            "dateModified" => $this->normalizeDateTime($entity->getDateModified()),
            "datePublished" => $this->normalizeDateTime($entity->getDatePublished()),
            "discussionsUrl" => $entity->getDiscussionsUrl(),
            "editor" => $this->normalizeDataOrPrimitive($registry, $entity->getEditor(), $usage, $context, true),
            "encodingFormat" => $entity->getEncodingFormat(),
            "expires" => $this->normalizeDateTime($entity->getExpires()),
            "genre" => $entity->getGenre(),
            "inLanguage" => $entity->getInLanguage(),
            "isFamilyFriendly" => $entity->getIsFamilyFriendly(),
            "keywords" => $entity->getKeywords(),
            "license" => $entity->getLicense(),
            "mainEntity" => $this->normalizeDataOrPrimitive($registry, $entity->getMainEntity(), $usage, $context, true),
            "maintainer" => $this->normalizeDataOrPrimitive($registry, $entity->getMaintainer(), $usage, $context, true),
            "producer" => $this->normalizeDataOrPrimitive($registry, $entity->getProducer(), $usage, $context, true),
            "provider" => $this->normalizeDataOrPrimitive($registry, $entity->getProvider(), $usage, $context, true),
            "publisher" => $this->normalizeDataOrPrimitive($registry, $entity->getPublisher(), $usage, $context, true),
            "recordedAt" => $this->normalizeDataOrPrimitive($registry, $entity->getRecordedAt(), $usage, $context, true),
            "sourceOrganization" => $this->normalizeDataOrPrimitive($registry, $entity->getSourceOrganization(), $usage, $context, true),
            "text" => $entity->getText(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

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
            "about" => $registry->normalize($entity->getAbout(), $usage, $context, true),
            "abstract" => $entity->getAbout(),
            "author" => $registry->normalize($entity->getAuthor(), $usage, $context, true),
            "award" => $entity->getAward(),
            "creator" => $registry->normalize($entity->getCreator(), $usage, $context, true),
            "dateCreated" => $this->normalizeDateTime($entity->getDateCreated()),
            "dateModified" => $this->normalizeDateTime($entity->getDateModified()),
            "datePublished" => $this->normalizeDateTime($entity->getDatePublished()),
            "discussionsUrl" => $entity->getDiscussionsUrl(),
            "editor" => $registry->normalize($entity->getEditor(), $usage, $context, true),
            "encodingFormat" => $entity->getEncodingFormat(),
            "expires" => $this->normalizeDateTime($entity->getExpires()),
            "genre" => $entity->getGenre(),
            "inLanguage" => $entity->getInLanguage(),
            "isFamilyFriendly" => $entity->getIsFamilyFriendly(),
            "keywords" => $entity->getKeywords(),
            "license" => $entity->getLicense(),
            "mainEntity" => $registry->normalize($entity->getMainEntity(), $usage, $context, true),
            "maintainer" => $registry->normalize($entity->getMaintainer(), $usage, $context, true),
            "producer" => $registry->normalize($entity->getProducer(), $usage, $context, true),
            "provider" => $registry->normalize($entity->getProvider(), $usage, $context, true),
            "publisher" => $registry->normalize($entity->getPublisher(), $usage, $context, true),
            "recordedAt" => $registry->normalize($entity->getRecordedAt(), $usage, $context, true),
            "sourceOrganization" => $registry->normalize($entity->getSourceOrganization(), $usage, $context, true),
            "text" => $entity->getText(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), [...$thingNormalized, ...$normalized], $usage, $context, $isNested);
    }
}

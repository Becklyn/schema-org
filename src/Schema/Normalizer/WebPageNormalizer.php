<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Data\WebPage;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class WebPageNormalizer extends CreativeWorkNormalizer
{
    public const SCHEMA_TYPE = "WebPage";


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
        return WebPage::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof WebPage);

        $creativeWorkNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "breadcrumb" => $entity->getBreadcrumb(),
            "lastReviewed" => $this->normalizeDateTime($entity->getLastReviewed()),
            "mainContentOfPage" => $registry->normalize($entity->getMainContentOfPage(), $usage, $context, true),
            "relatedLink" => $entity->getRelatedLink(),
            "significantLink" => $entity->getSignificantLink(),
            "speakable" => $entity->getSpeakable(),
            "speciality" => $entity->getSpeciality(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($creativeWorkNormalized, $normalized), $usage, $context, $isNested);
    }
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Data\WebPageElement;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class WebPageElementNormalizer extends CreativeWorkNormalizer
{
    public const SCHEMA_TYPE = "WebPageElement";


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
        return WebPageElement::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof WebPageElement);

        $creativeWorkNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "cssSelector" => $entity->getCssSelector(),
            "xpath" => $entity->getXpath(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($creativeWorkNormalized, $normalized), $usage, $context, $isNested);
    }
}

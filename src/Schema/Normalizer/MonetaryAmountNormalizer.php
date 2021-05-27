<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\MonetaryAmount;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class MonetaryAmountNormalizer extends StructuredValueNormalizer
{
    public const SCHEMA_TYPE = "MonetaryAmount";


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
        return MonetaryAmount::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof MonetaryAmount);

        $structuredValueNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "currency" => $entity->getCurrency(),
            "maxValue" => $entity->getMaxValue(),
            "minValue" => $entity->getMinValue(),
            "validFrom" => $this->normalizeDateTime($entity->getValidFrom()),
            "validThrough" => $this->normalizeDateTime($entity->getValidThrough()),
            "value" => $entity->getValue(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($structuredValueNormalized, $normalized), $usage, $context, $isNested);
    }
}

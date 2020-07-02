<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\QuantitativeValue;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizer;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerTrait;

class QuantitativeValueNormalizer implements MetaDataNormalizer
{
    use MetaDataNormalizerTrait;

    public const SCHEMA_TYPE = "QuantitativeValue";


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
        return QuantitativeValue::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof QuantitativeValue);

        $normalized = [
            "minValue" => $entity->getMinValue(),
            "maxValue" => $entity->getMaxValue(),
            "unitCode" => $entity->getUnitCode(),
            "unitText" => $entity->getUnitText(),
            "value" => $entity->getValue(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), $normalized, $usage, $context, $isNested);
    }
}

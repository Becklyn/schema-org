<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\LocalBusiness;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class LocalBusinessNormalizer extends OrganizationNormalizer
{
    public const SCHEMA_TYPE = "LocalBusiness";


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
        return LocalBusiness::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof LocalBusiness);

        $organizationNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "currenciesAccepted" => $entity->getCurrenciesAccepted(),
            "geo" => $this->normalizeDataOrPrimitive($registry, $entity->getGeo(), $usage, $context, true),
            "openingHours" => $entity->getOpeningHours(),
            "paymentAccepted" => $entity->getPaymentAccepted(),
            "priceRange" => $entity->getPriceRange(),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($organizationNormalized, $normalized), $usage, $context, $isNested);
    }
}

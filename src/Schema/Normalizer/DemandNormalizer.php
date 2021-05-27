<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Demand;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class DemandNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Demand";


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
        return Demand::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Demand);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "areaServed" => $registry->normalize($entity->getAreaServed(), $usage, $context, true),
            "availability" => $entity->getAvailability(),
            "availabilityEnds" => $this->normalizeDateTime($entity->getAvailabilityEnds()),
            "availabilityStarts" => $this->normalizeDateTime($entity->getAvailabilityStarts()),
            "availableAtOrFrom" => $registry->normalize($entity->getAvailableAtOrFrom(), $usage, $context, true),
            "businessFunction" => $entity->getBusinessFunction(),
            "eligibleRegion" => $registry->normalize($entity->getEligibleRegion(), $usage, $context, true),
            "gtin" => $entity->getGtin(),
            "gtin12" => $entity->getGtin12(),
            "gtin14" => $entity->getGtin14(),
            "gtin8" => $entity->getGtin8(),
            "ineligibleRegion" => $registry->normalize($entity->getIneligibleRegion(), $usage, $context, true),
            "inventoryLevel" => $registry->normalize($entity->getInventoryLevel(), $usage, $context, true),
            "itemCondition" => $registry->normalize($entity->getItemCondition(), $usage, $context, true),
            "priceSpecification" => $registry->normalize($entity->getPriceSpecification(), $usage, $context, true),
            "seller" => $registry->normalize($entity->getSeller(), $usage, $context, true),
            "serialNumber" => $entity->getSerialNumber(),
            "sku" => $entity->getSku(),
            "validFrom" => $this->normalizeDateTime($entity->getValidFrom()),
            "validThrough" => $this->normalizeDateTime($entity->getValidThrough()),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Offer;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class OfferNormalizer extends ThingNormalizer
{
    public const SCHEMA_TYPE = "Offer";


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
        return Offer::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Offer);

        $thingNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "acceptedPaymentMethod" => $entity->getAcceptedPaymentMethod(),
            "addOn" => $this->normalize($registry, $entity->getAddOn(), $usage, $context, true),
            "advanceBookingRequirement" => $registry->normalize($entity->getAdvanceBookingRequirement(), $usage, $context, true),
            "areaServed" => $entity->getAreaServed(),
            "availability" => $entity->getAvailability(),
            "availabilityEnds" => $this->normalizeDateTime($entity->getAvailabilityEnds()),
            "availabilityStarts" => $this->normalizeDateTime($entity->getAvailabilityStarts()),
            "availableAtOrFrom" => $registry->normalize($entity->getAvailableAtOrFrom(), $usage, $context, true),
            "businessFunction" => $entity->getBusinessFunction(),
            "category" => $entity->getCategory(),
            "deliveryLeadTime" => $registry->normalize($entity->getDeliveryLeadTime(), $usage, $context, true),
            "eligibleQuantity" => $registry->normalize($entity->getEligibleQuantity(), $usage, $context, true),
            "eligibleRegion" => $entity->getEligibleRegion(),
            "eligibleTransactionVolume" => $registry->normalize($entity->getEligibleTransactionVolume(), $usage, $context, true),
            "gtin" => $entity->getGtin(),
            "gtin12" => $entity->getGtin12(),
            "gtin14" => $entity->getGtin14(),
            "gtin8" => $entity->getGtin8(),
            "ineligibleRegion" => $entity->getIneligibleRegion(),
            "inventoryLevel" => $registry->normalize($entity->getInventoryLevel(), $usage, $context, true),
            "itemCondition" => $registry->normalize($entity->getItemCondition(), $usage, $context, true),
            "priceSpecification" => $registry->normalize($entity->getPriceSpecification(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($thingNormalized, $normalized), $usage, $context, $isNested);
    }
}

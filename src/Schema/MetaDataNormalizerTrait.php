<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;

trait MetaDataNormalizerTrait
{
    protected function createMetaData (
        MetaDataNormalizerRegistry $registry,
        string $type,
        ?array $data,
        ?string $usage = null,
        array $context = [],
        bool $isNested = false
    ) : ?array
    {
        if (null === $data)
        {
            return null;
        }

        $normalized = [
            "@type" => $type,
        ];

        if (!$isNested)
        {
            $normalized["@context"] = "http://schema.org";
        }

        $this->normalizeData($registry, $normalized, $type, $data, $usage, $context, $isNested);

        return $normalized;
    }


    /**
     * This function correctly handles normalization of properties that may or may not contain a nested SchemaOrgDataInterface entity or primitives.
     *
     * @param SchemaOrgDataInterface|mixed|null $entityOrPrimitive
     *
     * @return array|string|null
     */
    protected function normalizeDataOrPrimitive (
        MetaDataNormalizerRegistry $registry,
        $entityOrPrimitive,
        ?string $usage = null,
        array $context = [],
        bool $isNested = false
    )
    {
        $normalized = [];
        $data = [
            "dataOrPrimitive" => $entityOrPrimitive,
        ];

        $this->normalizeData($registry, $normalized, "__schemaOrgDataInterfaceOrPrimitive__", $data, $usage, $context, $isNested);

        return $normalized["dataOrPrimitive"] ?? null;
    }


    /**
     * @internal
     */
    private function normalizeData (
        MetaDataNormalizerRegistry $registry,
        array &$normalized,
        string $type,
        array $data,
        ?string $usage = null,
        array $context = [],
        bool $isNested = false
    ) : void
    {
        foreach ($data as $property => $value)
        {
            if (null === $value)
            {
                continue;
            }

            if ($value instanceof \DateTimeInterface)
            {
                $normalized[$property] = $this->normalizeDateTime($value);
            }
            elseif (\is_object($value))
            {
                $normalized[$property] = $registry->normalize($value, $usage, $context, $isNested);
            }
            elseif (\is_array($value))
            {
                $nestedNormalized = [];
                $this->normalizeData($registry, $nestedNormalized, $type, $value, $usage, $context, $isNested);

                if (!empty($nestedNormalized))
                {
                    $normalized[$property] = $nestedNormalized;
                }
            }
            else
            {
                $normalized[$property] = $value;
            }
        }
    }


    protected function normalizeDateTime (?\DateTimeInterface $date) : ?string
    {
        return null !== $date
            ? $date->format("c")
            : null;
    }
}

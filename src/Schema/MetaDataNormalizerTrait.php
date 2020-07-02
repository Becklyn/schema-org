<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema;

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

        foreach ($data as $property => $value)
        {
            if (null === $value)
            {
                continue;
            }

            if (\is_object($value))
            {
                $normalized[$property] = $registry->normalize($value, $usage, $context);
            }
            elseif (\is_array($value))
            {
                $nestedNormalized = [];

                foreach ($value as $key => $entry)
                {
                    $nestedNormalized[$key] = $registry->normalize($entry, $usage, $context);
                }

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

        return $normalized;
    }


    protected function normalizeDateTime (?\DateTimeImmutable $date) : ?string
    {
        return null !== $date
            ? $date->format("c")
            : null;
    }
}

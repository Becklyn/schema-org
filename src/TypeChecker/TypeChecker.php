<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\TypeChecker;

use Becklyn\SchemaOrg\Data\Listing;
use Becklyn\SchemaOrg\Exception\UnexpectedTypeException;

class TypeChecker
{
    public const OPTIONAL = true;
    public const REQUIRED = false;

    public static function isValidValue ($value, bool $isOptional = self::REQUIRED, ...$allowedTypes) : bool
    {
        if (null === $value)
        {
            return $isOptional;
        }

        if (\is_array($value) || $value instanceof Listing)
        {
            $entries = \is_array($value) ? $value : $value->getEntries();

            foreach ($entries as $nestedValue)
            {
                if (!self::isValidValue($nestedValue, $isOptional, ...$allowedTypes))
                {
                    return false;
                }
            }

            return 0 !== \count($entries);
        }

        foreach ($allowedTypes as $allowedType)
        {
            if ("string" === $allowedType)
            {
                if (\is_string($value))
                {
                    return true;
                }
            }
            elseif ("float" === $allowedType)
            {
                if (\is_float($value))
                {
                    return true;
                }
            }
            elseif ("int" === $allowedType || "integer" === $allowedType)
            {
                if (\is_int($value))
                {
                    return true;
                }
            }
            elseif ("bool" === $allowedType)
            {
                if (\is_bool($value))
                {
                    return true;
                }
            }
            elseif (\is_a($value, $allowedType))
            {
                return true;
            }
        }

        return $isOptional;
    }


    public static function ensureIsValidValue ($value, bool $isOptional = self::REQUIRED, ...$allowedTypes) : void
    {
        if (!self::isValidValue($value, $isOptional, ...$allowedTypes))
        {
            throw new UnexpectedTypeException(
                $value,
                $isOptional
                    ? \sprintf("%s or null", \implode(", ", $allowedTypes))
                    : \implode(", ", $allowedTypes)
            );
        }
    }
}

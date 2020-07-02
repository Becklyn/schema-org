<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Exception;

class UnexpectedTypeException extends \RuntimeException implements SchemaOrgExceptionInterface
{
    /**
     * @param mixed $value
     */
    public function __construct ($value, string $expectedType)
    {
        parent::__construct(\sprintf(
            'Expected argument of type %s, "%s" given',
            $expectedType,
            \is_object($value) ? \get_class($value) : \gettype($value)
        ));
    }
}

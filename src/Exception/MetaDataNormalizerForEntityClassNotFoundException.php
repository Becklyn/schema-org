<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Exception;

class MetaDataNormalizerForEntityClassNotFoundException extends \RuntimeException implements SchemaOrgExceptionInterface
{
    /**
     * @inheritDoc
     */
    public function __construct (string $entityClass, array $supportedSchemaTypes, ?\Throwable $previous = null)
    {
        parent::__construct(\sprintf(
            "Could not find MetaDataNormalizer for entity of class '%s'. Found MetaDataNormalizers for entity classes '%s'.",
            $entityClass,
            \implode("', '", $supportedSchemaTypes)
        ), 500, $previous);
    }
}

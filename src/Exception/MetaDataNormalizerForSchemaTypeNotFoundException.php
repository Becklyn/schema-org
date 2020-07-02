<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Exception;

class MetaDataNormalizerForSchemaTypeNotFoundException extends \RuntimeException implements SchemaOrgExceptionInterface
{
    /**
     * @inheritDoc
     */
    public function __construct (string $schemaType, array $supportedSchemaTypes, ?\Throwable $previous = null)
    {
        parent::__construct(\sprintf(
            "Could not find MetaDataNormalizer for schema of type '%s'. Found MetaDataNormalizers for entity classes '%s'.",
            $schemaType,
            \implode("', '", $supportedSchemaTypes)
        ), 500, $previous);
    }
}

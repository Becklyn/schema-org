<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\MetaDataRenderer;

use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;
use Becklyn\SchemaOrg\SchemaBuilder\SchemaBuilderRegistry;

class MetaDataRenderer
{
    private SchemaBuilderRegistry $schemaBuilderRegistry;
    private MetaDataNormalizerRegistry $metaDataNormalizerRegistry;


    public function __construct (
        SchemaBuilderRegistry $schemaBuilderRegistry,
        MetaDataNormalizerRegistry $metaDataNormalizerRegistry
    )
    {
        $this->schemaBuilderRegistry = $schemaBuilderRegistry;
        $this->metaDataNormalizerRegistry = $metaDataNormalizerRegistry;
    }


    /**
     * @param mixed $entity
     */
    public function renderMetaDataTag ($entity, ?string $usage = null, array $context = []) : ?string
    {
        if (null === $entity)
        {
            return null;
        }

        $schema = $this->schemaBuilderRegistry->buildSchema($entity, $usage, $context);

        if (null === $schema)
        {
            return null;
        }

        $data = $this->metaDataNormalizerRegistry->normalize($schema, $usage, $context);

        return null !== $data
            ? \sprintf('<script type="application/ld+json">%s</script>', \htmlspecialchars(\json_encode($data, \JSON_THROW_ON_ERROR), \ENT_NOQUOTES))
            : null;
    }
}

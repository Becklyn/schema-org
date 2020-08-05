<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\SchemaBuilder;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;

class SchemaBuilderRegistry
{
    /**
     * @var SchemaBuilderInterface[]
     */
    private array $schemaBuilders = [];


    /**
     * @param SchemaBuilderInterface[]|iterable $schemaBuilders
     */
    public function __construct (iterable $schemaBuilders)
    {
        foreach ($schemaBuilders as $schemaBuilder)
        {
            $this->schemaBuilders[] = $schemaBuilder;
        }
    }


    /**
     * @param mixed $entity
     */
    public function buildSchema ($entity, ?string $usage = null, array $context = []) : ?SchemaOrgDataInterface
    {
        if (null === $entity)
        {
            return null;
        }

        foreach ($this->schemaBuilders as $schemaBuilder)
        {
            if ($schemaBuilder->supports($entity, $usage, $context))
            {
                return $schemaBuilder->buildSchema($entity, $usage, $context);
            }
        }

        return null;
    }
}

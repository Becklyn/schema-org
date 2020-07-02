<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\SchemaBuilder;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;

interface SchemaBuilderInterface
{
    /**
     * Determines whether this SchemaBuilder can generate a Schema.org data structure for the given entity.
     */
    public function supports ($entity, ?string $usage = null, array $context = []) : bool;


    /**
     * Builds a Schema.org data structure for the given entity.
     *
     * If no schema should be generated, return `null`.
     *
     * @param mixed $entity
     */
    public function buildSchema ($entity, ?string $usage = null, array $context = []) : ?SchemaOrgDataInterface;
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema;

use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Exception\MetaDataNormalizerForEntityClassNotFoundException;
use Becklyn\SchemaOrg\Exception\MetaDataNormalizerForSchemaTypeNotFoundException;

class MetaDataNormalizerRegistry
{
    /**
     * @var array.<string, MetaDataNormalizer>
     */
    private array $normalizersEntityClassMap = [];
    /**
     * @var array.<string, MetaDataNormalizer>
     */
    private array $normalizersSchemaTypeMap = [];


    /**
     * @param MetaDataNormalizer[]|iterable $normalizers
     */
    public function __construct (iterable $normalizers)
    {
        foreach ($normalizers as $normalizer)
        {
            $this->register($normalizer);
        }
    }


    public function register (MetaDataNormalizer $normalizer) : void
    {
        $this->normalizersEntityClassMap[$normalizer->getEntityClass()] = $normalizer;
        $this->normalizersEntityClassMap[$normalizer->getSchemaType()] = $normalizer;
    }


    public function normalize (?SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        if (null === $entity)
        {
            return null;
        }

        $entityClass = \get_class($entity);
        $normalizer = $this->getForEntityClass($entityClass);

        return $normalizer->normalize($this, $entity, $usage, $context, $isNested);
    }


    public function getForEntityClass (string $entityClass) : MetaDataNormalizer
    {
        $normalizer = $this->normalizersEntityClassMap[$entityClass] ?? null;

        if (null === $normalizer)
        {
            throw new MetaDataNormalizerForEntityClassNotFoundException($entityClass, \array_keys($this->normalizersEntityClassMap));
        }

        return $normalizer;
    }


    public function getForSchemaType (string $schemaType) : MetaDataNormalizer
    {
        $normalizer = $this->normalizersSchemaTypeMap[$schemaType] ?? null;

        if (null === $normalizer)
        {
            throw new MetaDataNormalizerForSchemaTypeNotFoundException($schemaType, \array_keys($this->normalizersSchemaTypeMap));
        }

        return $normalizer;
    }
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class BecklynSchemaOrgConfiguration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder () : TreeBuilder
    {
        return new TreeBuilder("becklyn_schema_org");
    }
}

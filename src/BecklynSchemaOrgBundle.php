<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg;

use Becklyn\RadBundles\Bundle\BundleExtension;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizer;
use Becklyn\SchemaOrg\SchemaBuilder\SchemaBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BecklynSchemaOrgBundle extends Bundle
{
    /**
     * @inheritDoc
     */
    public function getContainerExtension () : ?ExtensionInterface
    {
        return new BundleExtension($this);
    }


    /**
     * @inheritDoc
     */
    public function build (ContainerBuilder $container) : void
    {
        $container
            ->registerForAutoconfiguration(MetaDataNormalizer::class)
            ->addTag("schema_org.metadata_normalizer");

        $container
            ->registerForAutoconfiguration(SchemaBuilderInterface::class)
            ->addTag("schema_org.schema_builder");
    }
}

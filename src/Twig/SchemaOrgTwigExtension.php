<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Twig;

use Becklyn\SchemaOrg\MetaDataRenderer\MetaDataRenderer;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class SchemaOrgTwigExtension extends AbstractExtension
{
    private MetaDataRenderer $metaDataRenderer;


    public function __construct (MetaDataRenderer $metaDataRenderer)
    {
        $this->metaDataRenderer = $metaDataRenderer;
    }


    /**
     * @inheritDoc
     */
    public function getFunctions () : array
    {
        $safeHtml = ["is_safe" => ["html"]];

        return [
            new TwigFunction("schema_org_meta_data", [$this->metaDataRenderer, "renderMetaDataTag"], $safeHtml),
        ];
    }
}

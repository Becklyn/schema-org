<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\AboutPage;

class AboutPageNormalizer extends WebPageNormalizer
{
    public const SCHEMA_TYPE = "AboutPage";


    /**
     * @inheritDoc
     */
    public function getSchemaType () : string
    {
        return self::SCHEMA_TYPE;
    }


    /**
     * @inheritDoc
     */
    public function getEntityClass () : string
    {
        return AboutPage::class;
    }
}

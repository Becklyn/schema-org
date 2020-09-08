<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\CollectionPage;

class CollectionPageNormalizer extends WebPageNormalizer
{
    public const SCHEMA_TYPE = "CollectionPage";


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
        return CollectionPage::class;
    }
}

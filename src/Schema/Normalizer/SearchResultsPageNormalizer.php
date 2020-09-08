<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\SearchResultsPage;

class SearchResultsPageNormalizer extends WebPageNormalizer
{
    public const SCHEMA_TYPE = "SearchResultsPage";


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
        return SearchResultsPage::class;
    }
}

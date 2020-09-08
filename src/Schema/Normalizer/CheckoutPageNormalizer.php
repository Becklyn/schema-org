<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\CheckoutPage;

class CheckoutPageNormalizer extends WebPageNormalizer
{
    public const SCHEMA_TYPE = "CheckoutPage";


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
        return CheckoutPage::class;
    }
}

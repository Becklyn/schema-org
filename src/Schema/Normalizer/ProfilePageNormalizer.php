<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\ProfilePage;

class ProfilePageNormalizer extends WebPageNormalizer
{
    public const SCHEMA_TYPE = "ProfilePage";


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
        return ProfilePage::class;
    }
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

/**
 * Note: This is *not* an actual Schema.org data type. It is used in cases where a property can contain an untyped, raw array
 */
class Listing implements SchemaOrgDataInterface
{
    //region Fields
    private array $entries = [];
    //endregion


    //region Accessors
    public function getEntries () : array
    {
        return $this->entries;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withEntries (array $entries)
    {
        $clone = clone $this;
        $clone->entries = $entries;

        return $clone;
    }
    //endregion
}

<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class PublicationEvent extends Event
{
    /**
     * @var Organization|Person|null
     */
    private $publishedBy;


    //region Accessors
    /**
     * @return Organization|Person|null
     */
    public function getPublishedBy ()
    {
        return $this->publishedBy;
    }
    //endregion


    //region Withers
    /**
     * @param Organization|Person|null $publishedBy
     *
     * @return static
     */
    public function withPublishedBy ($publishedBy)
    {
        TypeChecker::ensureIsValidValue($publishedBy, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->publishedBy = $publishedBy;
        return $clone;
    }
    //endregion
}

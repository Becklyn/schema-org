<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class ListItem extends Intangible
{
    //region Fields
    private ?Thing $item = null;
    private ?ListItem $nextItem = null;
    /** @var int|string|null */
    private $position;
    private ?ListItem $previousItem = null;
    //endregion


    //region Accessors
    public function getItem () : ?Thing
    {
        return $this->item;
    }


    public function getNextItem () : ?self
    {
        return $this->nextItem;
    }


    /**
     * @return int|string|null
     */
    public function getPosition ()
    {
        return $this->position;
    }


    public function getPreviousItem () : ?self
    {
        return $this->previousItem;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withItem (?Thing $item)
    {
        $clone = clone $this;
        $clone->item = $item;

        return $clone;
    }


    /**
     * @return static
     */
    public function withNextItem (?self $nextItem)
    {
        $clone = clone $this;
        $clone->nextItem = $nextItem;

        return $clone;
    }


    /**
     * @param int|string|null $position
     *
     * @return static
     */
    public function withPosition ($position)
    {
        TypeChecker::ensureIsValidValue($position, TypeChecker::OPTIONAL, "int", "string");

        $clone = clone $this;
        $clone->position = $position;

        return $clone;
    }


    /**
     * @return static
     */
    public function withPreviousItem (?self $previousItem)
    {
        $clone = clone $this;
        $clone->previousItem = $previousItem;

        return $clone;
    }
    //endregion
}

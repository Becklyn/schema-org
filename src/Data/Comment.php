<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Comment extends CreativeWork
{
    private ?int $downvoteCount = null;
    private ?Comment $parentItem = null;
    private ?int $upvoteCount = null;


    //region Accessors
    public function getDownvoteCount () : ?int
    {
        return $this->downvoteCount;
    }


    public function getParentItem () : ?self
    {
        return $this->parentItem;
    }


    public function getUpvoteCount () : ?int
    {
        return $this->upvoteCount;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withDownvoteCount (?int $downvoteCount)
    {
        $clone = clone $this;
        $clone->downvoteCount = $downvoteCount;
        return $clone;
    }


    /**
     * @return static
     */
    public function withParentItem (?self $parentItem)
    {
        $clone = clone $this;
        $clone->parentItem = $parentItem;
        return $clone;
    }


    /**
     * @return static
     */
    public function withUpvoteCount (?int $upvoteCount)
    {
        $clone = clone $this;
        $clone->upvoteCount = $upvoteCount;
        return $clone;
    }
    //endregion
}

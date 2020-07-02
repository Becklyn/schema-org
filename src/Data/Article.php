<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Article extends CreativeWork
{
    //region Fields
    private ?string $articleBody = null;
    private ?string $articleSection = null;
    private ?string $backstory = null;
    private ?int $pageEnd = null;
    private ?int $pageStart = null;
    private ?string $pagination = null;
    private ?int $wordCount = null;
    //endregion


    //region Accessors
    public function getArticleBody () : ?string
    {
        return $this->articleBody;
    }


    public function getArticleSection () : ?string
    {
        return $this->articleSection;
    }


    public function getBackstory () : ?string
    {
        return $this->backstory;
    }


    public function getPageEnd () : ?int
    {
        return $this->pageEnd;
    }


    public function getPageStart () : ?int
    {
        return $this->pageStart;
    }


    public function getPagination () : ?string
    {
        return $this->pagination;
    }


    public function getWordCount () : ?int
    {
        return $this->wordCount;
    }
    //endregion


    //region Withers
    public function withArticleBody (?string $articleBody) : self
    {
        $clone = clone $this;
        $clone->articleBody = $articleBody;
        return $clone;
    }


    public function withArticleSection (?string $articleSection) : self
    {
        $clone = clone $this;
        $clone->articleSection = $articleSection;
        return $clone;
    }


    public function withBackstory (?string $backstory) : self
    {
        $clone = clone $this;
        $clone->backstory = $backstory;
        return $clone;
    }


    public function withPageEnd (?int $pageEnd) : self
    {
        $clone = clone $this;
        $clone->pageEnd = $pageEnd;
        return $clone;
    }


    public function withPageStart (?int $pageStart) : self
    {
        $clone = clone $this;
        $clone->pageStart = $pageStart;
        return $clone;
    }


    public function withPagination (?string $pagination) : self
    {
        $clone = clone $this;
        $clone->pagination = $pagination;
        return $clone;
    }


    public function withWordCount (?int $wordCount) : self
    {
        $clone = clone $this;
        $clone->wordCount = $wordCount;
        return $clone;
    }
    //endregion
}

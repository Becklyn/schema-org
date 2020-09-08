<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Answer extends Comment
{
    //region Fields
    private ?Comment $answerExplanation = null;
    //endregion


    //region Accessors
    public function getAnswerExplanation () : ?Comment
    {
        return $this->answerExplanation;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withAnswerExplanation (?Comment $answerExplanation)
    {
        $clone = clone $this;
        $clone->answerExplanation = $answerExplanation;
        return $clone;
    }
    //endregion
}

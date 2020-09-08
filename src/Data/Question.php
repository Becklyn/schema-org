<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class Question extends Comment
{
    //region Fields
    private ?Answer $acceptedAnswer = null;
    private ?int $answerCount = null;
    private ?Answer $suggestedAnswer = null;
    //endregion


    //region Accessors
    public function getAcceptedAnswer () : ?Answer
    {
        return $this->acceptedAnswer;
    }


    public function getAnswerCount () : ?int
    {
        return $this->answerCount;
    }


    public function getSuggestedAnswer () : ?Answer
    {
        return $this->suggestedAnswer;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withAcceptedAnswer (?Answer $acceptedAnswer)
    {
        $clone = clone $this;
        $clone->acceptedAnswer = $acceptedAnswer;
        return $clone;
    }


    /**
     * @return static
     */
    public function withAnswerCount (?int $answerCount)
    {
        $clone = clone $this;
        $clone->answerCount = $answerCount;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSuggestedAnswer (?Answer $suggestedAnswer)
    {
        $clone = clone $this;
        $clone->suggestedAnswer = $suggestedAnswer;
        return $clone;
    }
    //endregion
}

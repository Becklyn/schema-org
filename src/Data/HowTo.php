<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class HowTo extends CreativeWork
{
    //region Fields
    /** @var string|MonetaryAmount|null */
    private $estimatedCost;
    private ?Duration $performTime = null;
    private ?Duration $prepTime = null;
    /** @var CreativeWork[]|HowToSection[]|HowToStep[]|Listing|string[]|null */
    private $step;
    /** @var HowToSupply[]|Listing|string[]|null */
    private $supply;
    /** @var HowToTool[]|Listing|string[]|null */
    private $tool;
    private ?Duration $totalTime = null;
    /** @var QuantitativeValue|string|null */
    private $yield;
    //endregion


    //region Accessors
    /**
     * @return MonetaryAmount|string|null
     */
    public function getEstimatedCost ()
    {
        return $this->estimatedCost;
    }


    public function getPerformTime () : ?Duration
    {
        return $this->performTime;
    }


    public function getPrepTime () : ?Duration
    {
        return $this->prepTime;
    }


    /**
     * @return CreativeWork[]|HowToSection[]|HowToStep[]|Listing|string[]|null
     */
    public function getStep ()
    {
        return $this->step;
    }


    /**
     * @return HowToSupply[]|Listing|string[]|null
     */
    public function getSupply ()
    {
        return $this->supply;
    }


    /**
     * @return HowToTool[]|Listing|string[]|null
     */
    public function getTool ()
    {
        return $this->tool;
    }


    public function getTotalTime () : ?Duration
    {
        return $this->totalTime;
    }


    /**
     * @return QuantitativeValue|string|null
     */
    public function getYield ()
    {
        return $this->yield;
    }
    //endregion


    //region Withers
    /**
     * @param string|MonetaryAmount|null $estimatedCost
     *
     * @return static
     */
    public function withEstimatedCost ($estimatedCost)
    {
        TypeChecker::ensureIsValidValue($estimatedCost, TypeChecker::OPTIONAL, "string", MonetaryAmount::class);

        $clone = clone $this;
        $clone->estimatedCost = $estimatedCost;

        return $clone;
    }


    /**
     * @return static
     */
    public function withPerformTime (?Duration $performTime)
    {
        $clone = clone $this;
        $clone->performTime = $performTime;

        return $clone;
    }


    /**
     * @return static
     */
    public function withPrepTime (?Duration $prepTime)
    {
        $clone = clone $this;
        $clone->prepTime = $prepTime;

        return $clone;
    }


    /**
     * @param CreativeWork[]|HowToSection[]|HowToStep[]|Listing|string[]|null $step
     *
     * @return static
     */
    public function withStep ($step)
    {
        TypeChecker::ensureIsValidValue($step, TypeChecker::OPTIONAL, CreativeWork::class, HowToSection::class, HowToStep::class, Listing::class, "string");

        $clone = clone $this;
        $clone->step = $step;

        return $clone;
    }


    /**
     * @param HowToSupply[]|Listing|string[]|null $supply
     *
     * @return static
     */
    public function withSupply ($supply)
    {
        TypeChecker::ensureIsValidValue($supply, TypeChecker::OPTIONAL, HowToSupply::class, Listing::class, "string");

        $clone = clone $this;
        $clone->supply = $supply;

        return $clone;
    }


    /**
     * @param HowToTool[]|Listing|string[]|null $tool
     *
     * @return static
     */
    public function withTool ($tool)
    {
        TypeChecker::ensureIsValidValue($tool, TypeChecker::OPTIONAL, HowToTool::class, Listing::class, "string");

        $clone = clone $this;
        $clone->tool = $tool;

        return $clone;
    }


    /**
     * @return static
     */
    public function withTotalTime (?Duration $totalTime)
    {
        $clone = clone $this;
        $clone->totalTime = $totalTime;

        return $clone;
    }


    /**
     * @param QuantitativeValue|string|null $yield
     *
     * @return static
     */
    public function withYield ($yield)
    {
        TypeChecker::ensureIsValidValue($yield, TypeChecker::OPTIONAL, QuantitativeValue::class, "string");

        $clone = clone $this;
        $clone->yield = $yield;

        return $clone;
    }
    //endregion
}

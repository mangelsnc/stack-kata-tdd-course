<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Stack\Stack;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /** @var Stack */
    private $stack;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given a new stack
     */
    public function aNewStack()
    {
        $this->stack = new Stack();
    }

    /**
     * @Then I should have :count elements in the stack
     */
    public function iShouldHaveElementsInTheStack($count)
    {
        Assert::assertEquals($count, $this->stack->count());
    }

    /**
     * @When I perform a push of :element into the stack
     */
    public function iPerformAPushIntoTheStack($element)
    {
        $this->stack->push($element);
    }

    /**
     * @Then the pointer should be :position
     */
    public function thePointerShouldBe($position)
    {
        Assert::assertEquals($position, $this->stack->getPointer());
    }

    /**
     * @When I perform a pop into the stack
     */
    public function iPerformAPopIntoTheStack()
    {
        $this->stack->pop();
    }

    /**
     * @Then it should throw an empty stack exception
     */
    public function itShouldThrowAnEmptyStackException()
    {
        throw new PendingException();
    }
}

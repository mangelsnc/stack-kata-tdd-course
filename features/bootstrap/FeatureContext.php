<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Stack\EmptyStackException;
use Stack\Stack;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /** @var Stack */
    private $stack;

    /** @var  int */
    private $exception;

    /** @var  int */
    private $returned;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->exception = null;
        $this->returned = null;
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
     * @param $count
     */
    public function iShouldHaveElementsInTheStack($count)
    {
        Assert::assertEquals($count, $this->stack->count());
    }

    /**
     * @When I perform a push of :element into the stack
     * @param $element
     */
    public function iPerformAPushIntoTheStack($element)
    {
        $this->stack->push($element);
    }

    /**
     * @Then the pointer should be :position
     * @param $position
     */
    public function thePointerShouldBe($position)
    {
        Assert::assertEquals($position, $this->stack->getPointer());
    }

    /**
     * @When I perform a pop into the stack
     */
    public function iPerformAPopIntoTheStack()
    {   try {
            $this->returned = $this->stack->pop();
        } catch(EmptyStackException $e) {
            $this->exception = $e;
        }
    }

    /**
     * @Then it should throw an empty stack exception
     */
    public function itShouldThrowAnEmptyStackException()
    {
        Assert::assertInstanceOf(EmptyStackException::class, $this->exception);
        $this->exception = null;
    }

    /**
     * @Then the returned value should be :returned
     */
    public function theReturnedValueShouldBe($returned)
    {
        Assert::assertEquals($returned, $this->returned);
        $this->returned = null;
    }
}

<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
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
        throw new PendingException();
    }

    /**
     * @Then I should have :arg1 elements in the stack
     */
    public function iShouldHaveElementsInTheStack($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I perform a push into the stack
     */
    public function iPerformAPushIntoTheStack()
    {
        throw new PendingException();
    }

    /**
     * @Then the pointer should be :arg1
     */
    public function thePointerShouldBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I perform a pop into the stack
     */
    public function iPerformAPopIntoTheStack()
    {
        throw new PendingException();
    }

    /**
     * @Then it should throw an empty stack exception
     */
    public function itShouldThrowAnEmptyStackException()
    {
        throw new PendingException();
    }
}

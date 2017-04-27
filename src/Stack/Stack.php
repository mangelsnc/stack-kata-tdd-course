<?php

namespace Stack;

/**
 * Class Stack
 */
class Stack
{
    /** @var  array */
    private $stack;

    /** @var  int */
    private $pointer;

    /**
     * Stack constructor.
     */
    public function __construct()
    {
        $this->stack = [];
        $this->pointer = -1;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->stack);
    }

    /**
     * @param $element
     */
    public function push($element)
    {
        $this->stack[] = $element;
        $this->increasePointer();

    }

    /**
     * @return int
     * @throws EmptyStackException
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new EmptyStackException();
        }

        $element = $this->stack[$this->getPointer()];
        unset($this->stack[$this->getPointer()]);
        $this->decreasePointer();

        return $element;
    }

    /**
     * @return int
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return 0 === $this->count();
    }

    private function decreasePointer()
    {
        $this->pointer--;
    }

    private function increasePointer()
    {
        $this->pointer++;
    }
}


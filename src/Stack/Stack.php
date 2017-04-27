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

    public function __construct()
    {
        $this->stack = [];
        $this->pointer = -1;
    }

    public function count()
    {
        return count($this->stack);
    }

    public function push($element)
    {
        $this->stack[] = $element;
        $this->pointer++;

    }

    public function pop()
    {
        $element = $this->stack[$this->getPointer()];
        unset($this->stack[$this->getPointer()]);
        $this->pointer--;
    }

    public function getPointer()
    {
        return $this->pointer;
    }
}


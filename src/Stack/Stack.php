<?php

namespace Stack;

/**
 * Class Stack
 */
class Stack
{
    /** @var  array */
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function count()
    {
        return count($this->stack);
    }

    public function push($element)
    {
        $this->stack[] = $element;
    }

    public function pop()
    {

    }

    public function getPointer()
    {
        return 1;
    }
}


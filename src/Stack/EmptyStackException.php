<?php

namespace Stack;

class EmptyStackException extends \Exception
{
    const MESSAGE = 'Empty Stack';
    const CODE = 100;

    public function __construct(\Exception $e = null)
    {
        parent::__construct(self::MESSAGE, self::CODE, $e);
    }
}
<?php

namespace behavioral\Interpreter;

abstract class Expression
{
    private static $keyCount = 0;
    private $key;

    abstract public function interpreter(InterpreterContext $context);

    public function getKey()
    {
        if (! isset($this->key)) {
            self::$keyCount++;
            $this->key = self::$keyCount++;
        }

        return $this->key;
    }
}
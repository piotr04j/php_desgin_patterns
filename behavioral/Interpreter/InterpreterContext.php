<?php

namespace behavioral\Interpreter;

class InterpreterContext
{
    private $expressionStore = [];

    public function replace(Expression $exp, $value)
    {
        $this->expressionStore[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressionStore[$exp->getKey()];
    }
}

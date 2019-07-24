<?php

namespace behavioral\Interpreter;


class VariableExpression extends Expression
{
    private $name;
    private $val;

    public function __construct($name, $val = null )
    {
        $this->name = $name;
        $this->val = $val;
    }

    public function interpreter(InterpreterContext $context)
    {
        if (! is_null($this->val)) {
            $context->replace($this, $this->val);
            $this->val = null;
        }
    }

    public function setValue($value){
        $this->val = $value;
    }

    public function getKey()
    {
        return $this->name;
    }
}
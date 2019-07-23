<?php


namespace behavioral\Interpreter;

class LiteralExpression extends Expression
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpreter(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }
}
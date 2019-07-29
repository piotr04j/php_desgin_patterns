<?php

use behavioral\Interpreter\BooleanOrExpression;
use behavioral\Interpreter\EqualExpression;
use behavioral\Interpreter\InterpreterContext;
use behavioral\Interpreter\LiteralExpression;
use behavioral\Interpreter\VariableExpression;

$context = new InterpreterContext();
$myVar = new VariableExpression('input', 'seven');
$myVar->interpreter($context);
$newVar = new VariableExpression('input');
$newVar->interpreter($context);
$myVar->setValue('two');
$myVar->interpreter($context);
$input = new VariableExpression('input');
$statement = new BooleanOrExpression(
    new EqualExpression($input, new LiteralExpression('four')),
    new EqualExpression($input, new LiteralExpression('4'))
);

foreach (['four', '16', '4'] as $val) {
    $input->setValue($val);
    $statement->interpreter($context);
    if ($context->lookup($statement)) {
        echo 'For ' . $val . ' it is true. ';
    } else {
        echo 'For ' . $val . ' it is false. ';
    }
}

//echo $context->lookup($newVar);

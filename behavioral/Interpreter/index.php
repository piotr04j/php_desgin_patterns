<?php

use behavioral\Interpreter\InterpreterContext;
use behavioral\Interpreter\LiteralExpression;

include_once('Expression.php');
include_once('InterpreterContext.php');
include_once('LiteralExpression.php');

$context = new InterpreterContext();
$literal = new LiteralExpression('Piece of information');
$literal->interpreter($context);

echo $context->lookup($literal);
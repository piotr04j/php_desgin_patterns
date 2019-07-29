<?php

use behavioral\NullObject\Addition;
use behavioral\NullObject\NullObject;
use behavioral\NullObject\ValuableObject;

$calculation = new Addition();
$null = new NullObject();
$firstNumber = new ValuableObject();
$secondNumber = new ValuableObject();
$calculation->setNumbers($firstNumber);
$calculation->setNumbers($null);
$calculation->setNumbers($secondNumber);

echo $calculation->calculateSum();

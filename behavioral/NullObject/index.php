<?php

include_once('AppropriateObject.php');
include_once('Addition.php');
include_once('NullObject.php');
include_once('ValuableObject.php');


$calculation = new Addition();
$null = new NullObject();
$firstNumber = new ValuableObject();
$secondNumber = new ValuableObject();
$calculation->setNumbers($firstNumber);
$calculation->setNumbers($null);
$calculation->setNumbers($secondNumber);

echo $calculation->calculateSum();
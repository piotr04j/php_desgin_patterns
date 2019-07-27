<?php

use behavioral\Visitor\Addition;
use behavioral\Visitor\EvenNumber;
use behavioral\Visitor\OddNumber;

include_once('Operation.php');
include_once('Visitor.php');
include_once('EvenNumber.php');
include_once('OddNumber.php');
include_once('Addition.php');

$odd = new OddNumber();
$even = new EvenNumber();
$add = new Addition();

echo $add->accept($odd, $even);
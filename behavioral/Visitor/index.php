<?php

use behavioral\Visitor\Addition;
use behavioral\Visitor\EvenNumber;
use behavioral\Visitor\OddNumber;

$odd = new OddNumber();
$even = new EvenNumber();
$add = new Addition();

echo $add->accept($odd, $even);

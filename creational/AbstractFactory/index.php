<?php

use creational\AbstractFactory\Factory;

include_once('ProductCreator.php');
include_once('Factory.php');

$factory= new Factory();
$polishBook = $factory->getProduct(2, 1, 'Dobry tytuł');

echo $polishBook->getTitle();
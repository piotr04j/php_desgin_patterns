<?php

use creational\AbstractFactory\Factory;

$factory= new Factory();
$polishBook = $factory->getProduct(2, 1, 'Dobry tytuł');

echo $polishBook->getTitle();

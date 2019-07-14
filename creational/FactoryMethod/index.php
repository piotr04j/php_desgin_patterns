<?php

use creational\FactoryMethod\Creator;

include('./Creator.php.php');

$factory = new Creator(2);

echo $factory->getProduct()->getName();

<?php

use creational\FactoryMethod\Creator;

include('Creator.php');

$factory = new Creator(1);

echo $factory->getProduct()->getName();

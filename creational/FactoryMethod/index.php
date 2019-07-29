<?php

use creational\FactoryMethod\Creator;

$factory = new Creator(1);

echo $factory->getProduct()->getName();

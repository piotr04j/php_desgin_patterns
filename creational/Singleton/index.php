<?php

include('./Singleton.php');

use creational\Singleton\Singleton;

$instance = Singleton::getInstance();
$instance->setProperty('name','Piotr');
unset($instance);
$instanceTwo = Singleton::getInstance();

echo "Singleton result: " . $instanceTwo->getProperty('name');
echo "\r\n";


<?php

use creational\Prototype\FirstObject;
use creational\Prototype\Prototype;
use creational\Prototype\SecondObject;




include('Prototype.php');

$prototype = new Prototype(new FirstObject('The best'), new SecondObject('Last but not least'));

echo "Prototype result: " . $prototype->getFirstObject()->getName();
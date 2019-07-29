<?php

use structural\Facade\Facade;
use structural\Facade\Subsystem;

$subsystem = new Subsystem();
$facade = new Facade($subsystem);

$facade->executeSubsystemMethod();

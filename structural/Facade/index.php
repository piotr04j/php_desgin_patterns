<?php

use structural\Facade\Facade;
use structural\Facade\Subsystem;

include('Facade.php');
include('Subsystem.php');

$subsystem = new Subsystem();
$facade = new Facade($subsystem);

$facade->executeSubsystemMethod();
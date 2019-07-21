<?php


use structural\Composite\Archer;
use structural\Composite\Army;
use structural\Composite\TroopCarrier;
use structural\Composite\Warrior;

include_once('Unit.php');
include_once('ComposeUnit.php');
include_once('TroopCarrier.php');
include_once('UnitException.php');
include_once('Archer.php');
include_once('Warrior.php');
include_once('Army.php');

$mainArmy = new Army();
$subArmy = new Army();
$troopCarrier = new TroopCarrier();

$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Warrior());
$subArmy->addUnit(new Archer());

$troopCarrier->addUnit($subArmy);

$mainArmy->addUnit($subArmy);

echo 'Strength attack of Army : ' . $mainArmy->attackStrength();
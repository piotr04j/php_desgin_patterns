<?php


use structural\Composite\Archer;
use structural\Composite\Army;
use structural\Composite\TroopCarrier;
use structural\Composite\Warrior;

$mainArmy = new Army();
$subArmy = new Army();
$troopCarrier = new TroopCarrier();

$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Warrior());
$subArmy->addUnit(new Archer());

$troopCarrier->addUnit($subArmy);

$mainArmy->addUnit($subArmy);

echo 'Strength attack of Army : ' . $mainArmy->attackStrength();

<?php

use structural\Decorator\Armor;
use structural\Decorator\Knight;
use structural\Decorator\Sword;

include_once('Unit.php');
include_once('UnitDecorator.php');
include_once('Armor.php');
include_once('Sword.php');
include_once('Knight.php');

$blackKnight = new Knight();
$blackKnight = new Sword($blackKnight);
$blackKnight = new Armor($blackKnight);

echo 'Armored knight can attack with sword for : ' . $blackKnight->getAttackValue();
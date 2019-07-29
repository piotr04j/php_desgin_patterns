<?php

use structural\Decorator\Armor;
use structural\Decorator\Knight;
use structural\Decorator\Sword;

$blackKnight = new Knight();
$blackKnight = new Sword($blackKnight);
$blackKnight = new Armor($blackKnight);

echo 'Armored knight can attack with sword for : ' . $blackKnight->getAttackValue();

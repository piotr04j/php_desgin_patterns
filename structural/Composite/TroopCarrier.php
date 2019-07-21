<?php


namespace structural\Composite;


class TroopCarrier extends ComposeUnit
{
    public function addUnit(Unit $unit)
    {
        if ($unit instanceof  Archer || $unit instanceof  Warrior){
            return parent::addUnit($unit);
        }
    }

    public function attackStrength(): int
    {
        return 0;
    }
}
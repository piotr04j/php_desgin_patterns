<?php


namespace structural\Decorator;

class Armor extends UnitDecorator
{
    private $attackValue = -5;

    public function getAttackValue(): int
    {
        return $this->unit->getAttackValue() + $this->attackValue;
    }
}

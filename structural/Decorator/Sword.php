<?php


namespace structural\Decorator;

class Sword extends UnitDecorator
{
    private $attackValue = 3;

    public function getAttackValue(): int
    {
        return $this->unit->getAttackValue() + $this->attackValue;
    }
}

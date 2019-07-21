<?php


namespace structural\Decorator;


class Knight extends Unit
{
    private $attackValue = 8;

    public function getAttackValue(): int
    {
        return $this->attackValue;
    }
}
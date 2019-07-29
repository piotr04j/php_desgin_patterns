<?php


namespace structural\Decorator;


abstract class UnitDecorator extends Unit
{
    protected $unit;

    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }

}
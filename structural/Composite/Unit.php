<?php

namespace structural\Composite;

abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    abstract public function attackStrength(): int;
}

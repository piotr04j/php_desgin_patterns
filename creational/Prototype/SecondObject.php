<?php

namespace creational\Prototype;

class SecondObject extends DefaultObject
{
    public function getName(): string
    {
        return $this->name . ' is name of second object';
    }
}

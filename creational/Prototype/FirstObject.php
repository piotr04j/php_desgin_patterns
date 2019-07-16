<?php

namespace creational\Prototype;

class FirstObject extends DefaultObject
{
    public function getName(): string
    {
        return $this->name . ' is name of first object';
    }
}
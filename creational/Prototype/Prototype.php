<?php

namespace creational\Prototype;

class Prototype
{
    private $firstObject;
    private $secondObject;

    public function __construct(FirstObject $firstObject, SecondObject $secondObject)
    {
        $this->firstObject = $firstObject;
        $this->secondObject = $secondObject;
    }

    public function getFirstObject()
    {
        return clone $this->firstObject;
    }

    public function getSecondObject()
    {
        return clone $this->secondObject;
    }
}

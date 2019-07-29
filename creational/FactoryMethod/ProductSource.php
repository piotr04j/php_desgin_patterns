<?php

namespace creational\FactoryMethod;

abstract class ProductSource
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getName(): string;
}

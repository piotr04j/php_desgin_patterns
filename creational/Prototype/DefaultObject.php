<?php

namespace creational\Prototype;

abstract class DefaultObject
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getName(): string;
}
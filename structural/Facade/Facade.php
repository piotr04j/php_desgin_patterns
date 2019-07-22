<?php

namespace structural\Facade;

class Facade
{
    private $subsystem;

    public function __construct(Subsystem $subsystem)
    {
        $this->subsystem = $subsystem;
    }

    public function executeSubsystemMethod()
    {
        $this->subsystem->foo();
    }
}
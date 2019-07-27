<?php

namespace behavioral\Command;


abstract class User extends Command
{
    protected $tv;

    function __construct(TV $tv) {
        $this->tv = $tv;
    }
    abstract function execute();
}
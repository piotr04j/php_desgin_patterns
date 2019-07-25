<?php


namespace behavioral\Strategy;


abstract class Mark
{
    protected $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    abstract public function mark(string $response): bool;
}
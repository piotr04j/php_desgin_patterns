<?php


namespace creational\AbstractFactory;


abstract class Audiobook
{
    protected $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    abstract public function getTitle();
}

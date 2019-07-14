<?php

namespace creational\AbstractFactory;

class BookFR extends Book
{
    public function getTitle()
    {
        return $this->title . ' is written in French.';
    }
}
<?php

namespace creational\AbstractFactory;

class BookPL extends Book
{
    public function getTitle()
    {
        return $this->title . ' is written in Polish.';
    }
}
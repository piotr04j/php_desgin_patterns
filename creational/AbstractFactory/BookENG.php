<?php

namespace creational\AbstractFactory;

class BookENG extends Book
{
    public function getTitle()
    {
        return $this->title . ' is written in English.';
    }
}
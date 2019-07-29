<?php


namespace creational\AbstractFactory;

class AudiobookENG extends Audiobook
{
    public function getTitle()
    {
        return $this->title . ' is recorded in English.';
    }
}

<?php


namespace creational\AbstractFactory;


class AudiobookPL extends Audiobook
{
    public function getTitle()
    {
        return $this->title . ' is recorded in Polish.';
    }
}
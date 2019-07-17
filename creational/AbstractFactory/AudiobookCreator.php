<?php

namespace creational\AbstractFactory;

include_once('Audiobook.php');
include_once('AudiobookPL.php');
include_once('AudiobookENG.php');

class AudiobookCreator extends ProductCreator
{
    public function getDescription()
    {
        return 'I\'m the audiobook generator.';
    }
    static public function createProduct($language, $title)
    {
        switch ($language){
            case self::PL:
                return new AudiobookPL($title);
            default:
                return new AudiobookENG($title);
        }
    }
}
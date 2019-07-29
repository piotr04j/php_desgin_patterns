<?php

namespace creational\AbstractFactory;

class AudiobookCreator extends ProductCreator
{
    public function getDescription()
    {
        return 'I\'m the audiobook generator.';
    }
    public static function createProduct($language, $title)
    {
        switch ($language) {
            case self::PL:
                return new AudiobookPL($title);
            default:
                return new AudiobookENG($title);
        }
    }
}

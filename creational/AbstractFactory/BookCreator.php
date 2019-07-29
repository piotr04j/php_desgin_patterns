<?php

namespace creational\AbstractFactory;

include_once('Book.php');
include_once('BookPL.php');
include_once('BookENG.php');

class BookCreator extends ProductCreator
{
    public function getDescription()
    {
        return 'I\'m the book generator.';
    }
    public static function createProduct($language, $title)
    {
        switch ($language) {
            case self::PL:
                return new BookPL($title);
            default:
                return new BookENG($title);
        }
    }
}

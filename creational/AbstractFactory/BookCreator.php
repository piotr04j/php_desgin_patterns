<?php

namespace creational\AbstractFactory;

include_once('Book.php');
include_once('BookPL.php');
include_once('BookENG.php');
include_once('ProductCreator.php');

class CreatorBook extends ProductCreator
{
    public function getDescription()
    {
        return 'I\'m the book generator.';
    }
    public function createProduct($language, $title)
    {
        switch ($language){
            case self::PL:
                return new BookPL($title);
            default:
                return new BookENG($title);
        }
    }
}
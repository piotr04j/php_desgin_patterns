<?php

//TODO fixed abstract factory implementation ProductCreator should be super class of Audio an book creator
namespace creational\AbstractFactory;

include_once('Audiobook.php');
include_once('AudiobookENG.php');
include_once('AudiobookPL.php');
include_once('Book.php');
include_once('BookPL.php');
include_once('BookENG.php');
include_once('Product.php');

class CreatorBook extends Product
{
    public function getDescription()
    {
        return 'I\'m the book generator.';
    }
    public function createProduct($format, $language, $title)
    {
        switch ($format){
            case 1:
                return new $classname($title);
            default:
                return new AudiobookENG($title);
        }
    }
}
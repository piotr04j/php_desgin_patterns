<?php


namespace creational\AbstractFactory;

include('Book.php');
include('BookFR.php');
include('BookENG.php');
include('BookPL.php');
include('Product.php');

class CreatorBook extends Product
{
    public function getDescription()
    {
        return 'I\'m the book generator.';
    }
    public function createProduct($typeOfProduct, $title)
    {
        switch ($typeOfProduct){
            case self::PL:
                return new BookPL($title);
            case self::FR:
                return new BookFR($title);
            default:
                return new BookENG($title);
        }
    }
}
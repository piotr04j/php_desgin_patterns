<?php


use creational\AbstractFactory\BookENG;
use creational\AbstractFactory\BookFR;
use creational\AbstractFactory\BookPL;
use creational\AbstractFactory\Product;

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
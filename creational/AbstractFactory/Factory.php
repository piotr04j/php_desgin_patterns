<?php


namespace creational\AbstractFactory;

include('AudiobookCreator.php');
include('BookCreator.php');

class Factory
{
    public function getProduct($type, $language, $title)
    {
        switch ($type){
            case 1:
                return AudiobookCreator::createProduct($language,$title);
            default:
                return  BookCreator::createProduct($language,$title);
        }
    }
}
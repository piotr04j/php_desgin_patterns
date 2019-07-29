<?php


namespace creational\AbstractFactory;

class Factory
{
    public function getProduct($type, $language, $title)
    {
        switch ($type) {
            case 1:
                return AudiobookCreator::createProduct($language, $title);
            default:
                return  BookCreator::createProduct($language, $title);
        }
    }
}

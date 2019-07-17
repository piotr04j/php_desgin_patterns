<?php

namespace creational\AbstractFactory;

abstract class ProductCreator
{
    const PL = 1;
    const ENG = 2;

    abstract public function getDescription();
    abstract static public function createProduct($language, $title);
}
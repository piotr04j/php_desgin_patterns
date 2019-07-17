<?php

namespace creational\AbstractFactory;

abstract class Product
{
    const PL = 1;
    const ENG = 2;

    abstract public function getDescription();
    abstract public function createProduct($language, $title);
}
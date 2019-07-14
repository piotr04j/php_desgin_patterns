<?php

namespace creational\AbstractFactory;


abstract class Product
{
    const PL = 1;
    const ENG = 2;
    const FR = 3;

    abstract public function getDescription();
    abstract public function createProduct($type, $title);
}
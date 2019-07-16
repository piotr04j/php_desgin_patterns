<?php

namespace creational\AbstractFactory;

abstract class Product
{
    const BOOK = Book;
    const AUDIOBOOK = Audibook;

    abstract public function getDescription();
    abstract public function createProduct($format, $language, $title);
}
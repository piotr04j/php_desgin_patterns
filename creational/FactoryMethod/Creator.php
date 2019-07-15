<?php


namespace creational\FactoryMethod;

include ('ProductSource.php');
include('ProductTwo.php');
include('ProductOne.php');

class Creator
{
    const PRODUCT_ONE = 1;
    const PRODUCT_TWO = 2;
    private $mode;

    public function __construct(int $mode)
    {
        $this->mode = $mode;
    }

    public function getProduct()
    {
        switch ($this->mode) {
            case (self::PRODUCT_TWO):
                return new ProductTwo('TWO');
            default:
                return new ProductOne('ONE');
        }
    }
}


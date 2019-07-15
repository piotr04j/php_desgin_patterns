<?php

namespace creational\FactoryMethod;



class ProductTwo extends ProductSource
{
    public function getName(): string
    {
        return $this->name . " - from product two";
    }
}
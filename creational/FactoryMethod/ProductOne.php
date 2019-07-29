<?php

namespace creational\FactoryMethod;

class ProductOne extends ProductSource
{
    public function getName(): string
    {
        return $this->name . " - from product one";
    }
}

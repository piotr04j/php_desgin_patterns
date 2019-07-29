<?php

namespace behavioral\Visitor;

class EvenNumber extends Visitor
{
    public function visit()
    {
        $number = rand(0, 100);
        return $number % 2 === 1 ? $number + 1 : $number;
    }
}

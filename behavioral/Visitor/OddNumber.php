<?php

namespace behavioral\Visitor;

class OddNumber extends Visitor
{
    public function visit()
    {
        $number = rand(0, 100);
        return $number % 2 === 1 ? $number : $number  + 1;
    }
}

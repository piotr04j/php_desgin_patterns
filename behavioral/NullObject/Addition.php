<?php


class Addition
{
    private $numbers = [];
    private $carry = 0;

    public function calculateSum()
    {
        foreach ($this->numbers as $number){
            $this->carry += $number->getValue();
        }
        return $this->carry;
    }



    public function setNumbers(AppropriateObject $object)
    {
        array_push($this->numbers, $object);
    }
}
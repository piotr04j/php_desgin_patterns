<?php

namespace behavioral\Visitor;

abstract class Operation
{
    abstract public function accept(Visitor $visitorOne, Visitor $visitorTwo);
}

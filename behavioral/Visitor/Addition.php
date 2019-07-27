<?php

namespace behavioral\Visitor;


class Addition extends Operation
{

    public function accept(Visitor $visitorOne, Visitor $visitorTwo)
    {
        return $visitorOne->visit() + $visitorTwo->visit();
    }
}
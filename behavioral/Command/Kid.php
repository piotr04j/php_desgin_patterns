<?php

namespace behavioral\Command;


class Kid extends User
{
    public function execute()
    {
        return $this->tv->getCartoons();
    }
}
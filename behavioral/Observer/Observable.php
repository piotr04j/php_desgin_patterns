<?php

namespace behavioral\Observe;

interface Observable
{
    public function attach(Page $page);
    public function detach(Page $page);
    public function notify();
}
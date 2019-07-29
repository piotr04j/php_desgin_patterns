<?php

namespace behavioral\Observer;

interface Observable
{
    public function attach(Observer $page);
    public function detach(Observer $page);
    public function notify();
    public function getNews();
}

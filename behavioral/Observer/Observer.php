<?php

namespace behavioral\Observer;

abstract class Observer
{
    private $url;
    protected $news;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    abstract public function update(Observable $observable);

    public function getNews()
    {
        return $this->news;
    }
}

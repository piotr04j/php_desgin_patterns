<?php

namespace behavioral\Observer;

class NewsGenerator implements Observable
{
    private $observers = [];
    private $news = [];

    public function attach(Observer $page)
    {
        array_push($this->observers, $page);
    }

    public function detach(Observer $page)
    {
        $index = $this->getObserver($page->getUrl());
        unset($this->observers[$index]);
    }

    private function getObserver(string $id)
    {
        for ($i = 0; $i < count($this->observers); $i++) {
            if ($this->observers[$i]->getUrl() === $id) {
                return $i;
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }

    public function addNews(string $news)
    {
        array_push($this->news, $news);
    }

    public function getNews()
    {
        return $this->news[rand(0, count($this->news)-1)];
    }
}

<?php


namespace behavioral\Observer;

class PageUS extends Observer
{
    public function update(Observable $observable)
    {
        $this->news = $observable->getNews() . ' news from US page' . $this->getUrl();
    }
}

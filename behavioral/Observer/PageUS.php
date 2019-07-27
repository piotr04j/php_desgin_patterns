<?php


namespace behavioral\Observe;


class PageUS extends Observer
{
    public function update(Observable $observable)
    {
        $this->news = $observable->getNews() . ' news from US page' . $this->getUrl();
    }
}

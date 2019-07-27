<?php


namespace behavioral\Observe;


class PageEn extends Observer
{
    public function update(Observable $observable)
    {
        $this->news = $observable->getNews() . ' news from EN page ' . $this->getUrl();
    }
}
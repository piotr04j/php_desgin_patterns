<?php


use behavioral\Observe\Observable;
use behavioral\Observe\Page;

class NewsGenerator implements Observable
{
    private $observers = [];
    private $news = [];

    public function attach(Page $page)
    {
        array_push($this->observers, $page);
    }

    //TODO check this implementation
    public function detach(Page $page)
    {
        for($i = 0; $i < count($this->observers); $i++ ){
            if($this->observers[i]->getUrl() ===  $page->getUrl()){
                return i;
            }
        }
    }

    public function notify()
    {
        // TODO: Implement notify() method.
    }
}
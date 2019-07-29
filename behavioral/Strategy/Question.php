<?php

namespace behavioral\Strategy;

abstract class Question
{
    protected $marker;
    protected $question;

    public function __construct(string $question, Marker $marker)
    {
        $this->question = $question;
        $this->marker = $marker;
    }

    public function mark(string $response)
    {
        return $this->marker->mark($response);
    }
}

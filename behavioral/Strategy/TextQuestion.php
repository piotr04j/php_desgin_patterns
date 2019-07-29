<?php

namespace behavioral\Strategy;

class TextQuestion extends Question
{
    public function askQuestion()
    {
        return $this->question;
    }
}

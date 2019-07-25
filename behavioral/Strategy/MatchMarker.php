<?php


namespace behavioral\Strategy;


class MatchMark extends Mark
{
    public function mark(string $response): bool
    {
        return ($this->test === $response);
    }
}
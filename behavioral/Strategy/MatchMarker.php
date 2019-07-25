<?php


namespace behavioral\Strategy;


class MatchMarker extends Marker
{
    public function mark(string $response): bool
    {
        return ($this->test === $response);
    }
}
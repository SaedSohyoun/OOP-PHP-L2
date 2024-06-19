<?php

class WatchList
{
    public array $Movies = [];

    public function addMovie(Movie $Movie)
    {
        $this->Movies[] = $Movie;
    }
}
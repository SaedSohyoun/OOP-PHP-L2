<?php

class Propertydatatypes
{
    public string $name;
    public string $genre;
    public int $seen;

    public function __construct(string $name, string $genre, int $seen)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->seen = $seen;
    }

    public function getName()
    {
        return $this->name;
    }

}


<?php

class Game
{
    private $name;
    private $description;
    private $price;
    private $tags;

    public function __construct($name, $description, $price, $tags = [])
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }

    public function getProperties()
    {
        return [
            'Name' => $this->name,
            'Description' => $this->description,
            'Price' => $this->price,
            'Tags' => $this->tags
        ];
    }
}

$game = new Game("The Legend of Zelda", "An action-adventure game", 59.99, ["Adventure", "Action", "Fantasy"]);

print_r($game->getProperties());



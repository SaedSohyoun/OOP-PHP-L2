<?php

declare(strict_types=1);

class Game
{
    private string $name;
    private string $description;
    private float $price;
    private array $tags;

    public function __construct(string $name, string $description, float $price, array $tags = [])
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }

    public function getProperties(): array
    {
        return [
            'Name' => $this->name,
            'Description' => $this->description,
            'Price' => $this->price,
            'Tags' => $this->tags
        ];
    }
}

$game1 = new Game("The Legend of Zelda", "An action-adventure game", 59.99, ["Adventure", "Action", "Fantasy"]);
$game2 = new Game("Super Mario Odyssey", "A platform game", 49.99, ["Platformer", "Adventure"]);
$game3 = new Game("Minecraft", "A sandbox game", 26.95, ["Sandbox", "Survival", "Creative"]);

print_r($game1->getProperties());
print_r($game2->getProperties());
print_r($game3->getProperties());
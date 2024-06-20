<?php

declare(strict_types=1);

class Game {
    private string $name;
    private string $description;
    private float $price;
    private array $tags;
    private float $purchasePrice;

    public function __construct(string $name, string $description, float $price, array $tags = []) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setTags($tags);
        $this->calculatePurchasePrice();
    }

    // Setters
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
        $this->calculatePurchasePrice(); // Recalculate purchase price if price changes
    }

    public function setTags(array $tags): void {
        $this->tags = $tags;
    }

    // Getters
    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getTags(): array {
        return $this->tags;
    }

    public function getPurchasePrice(): float {
        return $this->purchasePrice;
    }

    // Calculate the purchase price
    private function calculatePurchasePrice(): void {
        $this->purchasePrice = $this->price / 1.21 / 1.10;
    }

    public function getProperties(): array {
        return [
            'Name' => $this->getName(),
            'Description' => $this->getDescription(),
            'Price' => $this->getPrice(),
            'PurchasePrice' => $this->getPurchasePrice(),
            'Tags' => $this->getTags()
        ];
    }
}

class Player {
    private string $name;
    private array $games;

    public function __construct(string $name) {
        $this->setName($name);
        $this->games = [];
    }

    // Setter
    public function setName(string $name): void {
        $this->name = $name;
    }

    // Getter
    public function getName(): string {
        return $this->name;
    }

    public function addGame(Game $game): void {
        $this->games[] = $game;
    }

    public function getGames(): array {
        $gameList = [];
        foreach ($this->games as $game) {
            $gameList[] = $game->getProperties();
        }
        return $gameList;
    }

    public function getPlayerInfo(): string {
        $info = "Player Name: " . $this->getName() . "\nGames:\n";
        foreach ($this->getGames() as $game) {
            $info .= "  - " . $game['Name'] . ": " . $game['Description'] . " ($" . $game['Price'] . ") [" . implode(", ", $game['Tags']) . "] - Purchase Price: $" . $game['PurchasePrice'] . "\n";
        }
        return nl2br($info);
    }
}

$game1 = new Game("The Legend of Zelda", "An action-adventure game", 59.99, ["Adventure", "Action", "Fantasy"]);
$game2 = new Game("Super Mario Odyssey", "A platform game", 49.99, ["Platformer", "Adventure"]);
$game3 = new Game("Minecraft", "A sandbox game", 26.95, ["Sandbox", "Survival", "Creative"]);
$game4 = new Game("Fortnite", "A battle royale game", 0.00, ["Battle Royale", "Shooter"]);
$game5 = new Game("The Witcher 3", "An open-world RPG game", 39.99, ["RPG", "Fantasy"]);

$player1 = new Player("Alice");
$player1->addGame($game1);
$player1->addGame($game3);

$player2 = new Player("Bob");
$player2->addGame($game2);
$player2->addGame($game4);

$player3 = new Player("Charlie");
$player3->addGame($game1);
$player3->addGame($game5);

echo $player1->getPlayerInfo();
echo "<br>";
echo $player2->getPlayerInfo();
echo "<br>";
echo $player3->getPlayerInfo();

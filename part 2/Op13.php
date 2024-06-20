<?php

declare(strict_types=1);

class Game {
    private string $name;
    private string $description;
    private float $price;
    private array $tags;

    public function __construct(string $name, string $description, float $price, array $tags = []) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }

    public function getProperties(): array {
        return [
            'Name' => $this->name,
            'Description' => $this->description,
            'Price' => $this->price,
            'Tags' => $this->tags
        ];
    }
}

class Player {
    private string $name;
    private array $games;

    public function __construct(string $name) {
        $this->name = $name;
        $this->games = [];
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

    public function getPlayerInfo(): array {
        return [
            'Player Name' => $this->name,
            'Games' => $this->getGames()
        ];
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

$players = [$player1, $player2, $player3];

function displayPlayersInfo(array $players): void {
    echo "<table border='1'>";
    echo "<tr><th>Player Name</th><th>Game Name</th><th>Description</th><th>Price</th><th>Tags</th></tr>";
    foreach ($players as $player) {
        $playerInfo = $player->getPlayerInfo();
        $playerName = htmlspecialchars($playerInfo['Player Name']);
        foreach ($playerInfo['Games'] as $game) {
            echo "<tr>";
            echo "<td>" . $playerName . "</td>";
            echo "<td>" . htmlspecialchars($game['Name']) . "</td>";
            echo "<td>" . htmlspecialchars($game['Description']) . "</td>";
            echo "<td>" . htmlspecialchars(number_format($game['Price'], 2)) . "</td>";
            echo "<td>" . htmlspecialchars(implode(", ", $game['Tags'])) . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}

displayPlayersInfo($players);
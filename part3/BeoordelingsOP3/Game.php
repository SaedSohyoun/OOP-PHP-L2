<?php

class Game extends Product {
    private string $genre;
    private string $hardwareRequirements;

    public function __construct(string $name, float $price, string $brand, string $description, string $genre, string $hardwareRequirements) {
        parent::__construct($name, $price, $brand, $description, 'Game');
        $this->genre = $genre;
        $this->hardwareRequirements = $hardwareRequirements;
    }

    public function calculateRecommendedAge(): int {
        switch ($this->genre) {
            case 'Action':
                return 18;
            case 'Adventure':
                return 12;
            case 'Puzzle':
                return 6;
            default:
                return 0;
        }
    }

    public function getInfo(): array {
        $info = parent::getInfo();
        $info['Genre'] = $this->genre;
        $info['Hardware Requirements'] = $this->hardwareRequirements;
        $info['Recommended Age'] = $this->calculateRecommendedAge();
        return $info;
    }
}

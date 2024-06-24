<?php

class Movie extends Product {
    private string $quality;

    public function __construct(string $name, float $price, string $brand, string $description, string $quality) {
        parent::__construct($name, $price, $brand, $description, 'Movie');
        $this->quality = $quality;
    }

    public function simulateIMDbRating(): float {
        return rand(1, 100) / 10;
    }

    public function getInfo(): array {
        $info = parent::getInfo();
        $info['Quality'] = $this->quality;
        $info['IMDb Rating'] = $this->simulateIMDbRating();
        return $info;
    }
}

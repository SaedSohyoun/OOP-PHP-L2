<?php

class Music extends Product {
    private array $tracks;
    private int $durationInMinutes;

    public function __construct(string $name, float $price, string $brand, string $description, array $tracks, int $durationInMinutes) {
        parent::__construct($name, $price, $brand, $description, 'Music');
        $this->tracks = $tracks;
        $this->durationInMinutes = $durationInMinutes;
    }

    public function calculateDurationInHours(): float {
        return $this->durationInMinutes / 60;
    }

    public function getInfo(): array {
        $info = parent::getInfo();
        $info['Tracks'] = implode(', ', $this->tracks);
        $info['Duration (hours)'] = $this->calculateDurationInHours();
        return $info;
    }
}

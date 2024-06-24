<?php

class Product {
    protected string $name;
    protected float $price;
    protected string $brand;
    protected string $description;
    protected string $productType;

    public function __construct(string $name, float $price, string $brand, string $description, string $productType) {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->description = $description;
        $this->productType = $productType;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getProductType(): string {
        return $this->productType;
    }

    public function printInfo(): void {
        $info = $this->getInfo();
        foreach ($info as $key => $value) {
            echo "{$key}: {$value}<br>";
        }
    }

    public function getInfo(): array {
        return [
            'Name' => $this->name,
            'Price' => $this->price,
            'Brand' => $this->brand,
            'Description' => $this->description,
            'Product Type' => $this->productType,
        ];
    }
}

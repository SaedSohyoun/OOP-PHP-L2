<?php

class Catalog {
    private array $products = [];

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void {
        foreach ($this->products as $key => $prod) {
            if ($prod->getName() === $product->getName()) {
                unset($this->products[$key]);
            }
        }
        $this->products = array_values($this->products);
    }

    public function displayProducts(): void {
        foreach ($this->products as $product) {
            $product->printInfo();
            echo "<br>";
        }
    }

    public function calculateAveragePrice(): float {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return count($this->products) ? $totalPrice / count($this->products) : 0;
    }
}

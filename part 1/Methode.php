<?php

class Methode
{
    public $name;
    public $price;

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$game1 = new Methode();
$game1->name = "Fifa 2023";
$game1->price = 40;

$game2 = new Methode();
$game2->name = "Call of Duty";
$game2->price = 10;

echo $game1->formatPrice()."<br>";
echo $game1->name."<br>";
echo $game1->price;

var_dump($game1);
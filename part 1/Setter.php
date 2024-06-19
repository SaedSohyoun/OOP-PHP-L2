<?php

class Setter
{
    public $name;
    public $price;

    public function setName($name)
    {
        $this->name = ucfirst($name);
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$game1 =new Setter();
$game1-> setName("fifa 2023");
$game1->price = 40;

$game2 =new Setter();
$game2-> setName("call of duty");
$game2->price = 10;

echo $game1->formatPrice()."<br>";
echo $game1->name."<br>";
echo $game1->price;

var_dump($game1);

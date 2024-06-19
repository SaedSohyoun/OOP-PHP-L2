<?php

class Getter
{
    public $name;
    public $price;
    public $currency;
    public function __construct($price, $name = "een game", $currency = "EUR")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }

    public function getGetter()
    {
        return "Het product ".$this->name." kost ".$this->currency." ".$this->price;
    }
}

$game1 =new Getter(price: 40, name: "fifa 2023", currency: "$");
echo $game1->getGetter();
//$game2 =new constructor( name: "call of duty", price: 50);
//$game2->name = "call of duty";
//$game2->price = 10;

//echo $game1->formatPrice()."<br>";
//echo $game1->name."<br>";
//echo $game1->currency;
//echo $game1->price;

//var_dump($game1);
//var_dump($game2);

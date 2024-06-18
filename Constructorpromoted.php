<?php

class Constructorpromoted
{
    public function __construct(public $price, public $name, public $currency = "EUR")
    {
        $this->name = ucfirst($name);
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$game1 =new Constructorpromoted(price: 40, name: "fifa 2023", currency: "$" );

//$game2 =new constructor( name: "call of duty", price: 50);
//$game2->name = "call of duty";
//$game2->price = 10;

//echo $game1->formatPrice()."<br>";
echo $game1->name."<br>";
echo $game1->currency;
echo $game1->price;

var_dump($game1);
//var_dump($game2);

<?php

class NamedArgument
{
    public $name;
    public $price;
    public $currency;

    public function __construct($price, $name = "Een spel", $currency = "EUR")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$game1 =new NamedArgument(price: 40, currency: "$" );

//$game2 =new constructor( name: "call of duty", price: 50);
//$game2->name = "call of duty";
//$game2->price = 10;

//echo $game1->formatPrice()."<br>";
echo $game1->name."<br>";
echo $game1->currency;
echo $game1->price;

var_dump($game1);
//var_dump($game2);

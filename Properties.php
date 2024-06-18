<?php

class Properties
{
    public $name = "Een bepaald spel";
}

$game1 = new Properties();
$game1->name = "Fifa 2023";

$game2 = new Properties();
$game2->name = "Call of Duty";

$game3 = new Properties();
$game3->name = "Pong";


echo $game1->name."<br>";
echo $game2->name."<br>";
echo $game3->name."<br>";

$game1->name = "Fifa 2022";
echo $game1->name;

var_dump($game1);
var_dump($game2);
var_dump($game3);
<?php
declare(strict_types=1);

require_once 'Movie.php';
require_once 'WatchList.php';

$piet = new WatchList();
$Movie1 = new Movie( name: 'Avatar', genre: 'fantasy', seen: 5);
$Movie2 = new Movie( name: 'La casa de papel', genre: 'Action', seen: 1);

$piet->addMovie($Movie1);
$piet->addMovie($Movie2);

echo $Movie1->getName();

var_dump($piet);


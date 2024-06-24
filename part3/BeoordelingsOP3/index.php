<?php

require_once 'Product.php';
require_once 'Music.php';
require_once 'Movie.php';
require_once 'Game.php';
require_once 'Catalog.php';

$music = new Music('Greatest Hits', 19.99, 'Various Artists', 'Collection of top hits', ['Track1', 'Track2'], 90);
$movie = new Movie('Inception', 14.99, 'Warner Bros', 'Sci-fi thriller', 'Blu-ray');
$game = new Game('Minecraft', 26.95, 'Mojang', 'Sandbox game', 'Adventure', 'None');

$catalog = new Catalog();
$catalog->addProduct($music);
$catalog->addProduct($movie);
$catalog->addProduct($game);

echo "<h1>Product Catalogus</h1>";
$catalog->displayProducts();

echo "<h2>Gemiddelde Prijs: €" . number_format($catalog->calculateAveragePrice(), 2) . "</h2>";

$catalog->removeProduct($movie);
echo "<h1>Product Catalogus na verwijderen van een product</h1>";
$catalog->displayProducts();

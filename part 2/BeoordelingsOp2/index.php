<?php

require_once 'Book.php';
require_once 'BookCatalog.php';
require_once 'DisplayHelper.php';

$boek1 = new Book("Leren programmeren in C#", "Michiel Rotteveel", 45);
$boek2 = new Book("Android en Kotlin", "Krijn Hoogendorp", 44);
$boek3 = new Book("Leren programmeren, meten en sturen met de arduino", "Jacco de Jong", 27.95);

$catalog = new BookCatalog();
$catalog->addBook($boek1);
$catalog->addBook($boek2);
$catalog->addBook($boek3);

DisplayHelper::displayCatalogAsTable($catalog);

$catalog->removeBook($boek2);

echo "<h3>Boek: Android en Kotlin is verwijderd</h3>\n";

DisplayHelper::displayCatalogAsTable($catalog);
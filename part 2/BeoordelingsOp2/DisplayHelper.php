<?php

require_once 'BookCatalog.php';

class DisplayHelper
{
    public static function displayCatalogAsTable(BookCatalog $catalog) {
        echo "<h3>Lijst van boeken is nu:</h3>\n";
        echo "<table border='1' cellpadding='5' cellspacing='0'>\n";
        echo "<tr><th>Title</th><th>Auteur</th><th>Prijs</th></tr>\n";
        foreach ($catalog->getCatalog() as $book) {
            echo "<tr><td>" . $book->getTitle() . "</td><td>" . $book->getAuthor() . "</td><td>" . $book->getPrice() . "</td></tr>\n";
        }
        echo "</table>\n";
        echo "<p>De gemiddelde prijs is: " . $catalog->getAvgPrice() . "</p>\n";
    }
}
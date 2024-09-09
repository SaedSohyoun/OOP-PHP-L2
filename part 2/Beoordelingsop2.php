<?php

class Book {
    private string $title;
    private string $author;
    private float $price;

    public function __construct(string $title, string $author, float $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setBook(string $title, string $author, float $price): void {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
}

class BookCatelog {
    private array $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove) {
        $this->books = array_filter($this->books, function($book) use ($bookToRemove) {
            return $book->getTitle() !== $bookToRemove->getTitle();
        });
    }

    public function getCatelog(): array {
        return $this->books;
    }

    public function getAvgPrice(): float {
        $totalPrice = 0;
        $count = count($this->books);
        if ($count > 0) {
            foreach ($this->books as $book) {
                $totalPrice += $book->getPrice();
            }
            return round($totalPrice / $count, 2);
        } else {
            return 0;
        }
    }
}

$boek1 = new Book("Leren programmeren in C#", "Michiel Rotteveel", 45);
$boek2 = new Book("Android en Kotlin", "Krijn Hoogendorp", 44);
$boek3 = new Book("Leren programmeren, meten en sturen met de arduino", "Jacco de Jong", 27.95);

$catalog = new BookCatelog();
$catalog->addBook($boek1);
$catalog->addBook($boek2);
$catalog->addBook($boek3);

function displayCatalogAsTable(BookCatelog $catalog) {
    echo "<h3>Lijst van boeken is nu:</h3>\n";
    echo "<table border='1' cellpadding='5' cellspacing='0'>\n";
    echo "<tr><th>Title</th><th>Auteur</th><th>Prijs</th></tr>\n";
    foreach ($catalog->getCatelog() as $book) {
        echo "<tr><td>" . $book->getTitle() . "</td><td>" . $book->getAuthor() . "</td><td>" . $book->getPrice() . "</td></tr>\n";
    }
    echo "</table>\n";
    echo "<p>De gemiddelde prijs is: " . $catalog->getAvgPrice() . "</p>\n";
}

displayCatalogAsTable($catalog);

$catalog->removeBook($boek2);

echo "<h3>Boek: Android en Kotlin is verwijderd</h3>\n";
displayCatalogAsTable($catalog);

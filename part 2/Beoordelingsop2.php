<?php
class Book {
    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPrice() {
        return $this->price;
    }

    public function __toString() {
        return "{$this->title} by {$this->author}, priced at {$this->price}";
    }
}

class Catalog {
    private $books = array();

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function displayBooks() {
        echo "<table border='1'>";
        echo "<tr><th>Title</th><th>Author</th><th>Price</th></tr>";
        foreach ($this->books as $book) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($book->getTitle()) . "</td>";
            echo "<td>" . htmlspecialchars($book->getAuthor()) . "</td>";
            echo "<td>" . htmlspecialchars($book->getPrice()) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function averagePrice() {
        if (empty($this->books)) {
            return 0;
        }
        $total = 0;
        foreach ($this->books as $book) {
            $total += $book->getPrice();
        }
        return $total / count($this->books);
    }

    public function removeBook($title) {
        foreach ($this->books as $key => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$key]);
                break;
            }
        }
        $this->books = array_values($this->books);
    }
}

$catalog = new Catalog();

$book1 = new Book("Leren programmeren in C#", "Michiel Rotteveel", 45);
$book2 = new Book("Android en Kotlin", "Krijn Hoogendorp", 44);
$book3 = new Book("Leren programmeren, meten en sturen met de arduino", "Jacco de Jong", 27.95);

$catalog->addBook($book1);
$catalog->addBook($book2);
$catalog->addBook($book3);

$catalog->displayBooks();
echo "<br>De gemiddelde prijs is: " . number_format($catalog->averagePrice(), 2);

$catalog->removeBook("Android en Kotlin");
$catalog->displayBooks();
echo "<br>De gemiddelde prijs is: " . number_format($catalog->averagePrice(), 2);
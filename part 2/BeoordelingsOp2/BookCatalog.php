<?php

require_once 'Book.php';

class BookCatalog
{
    private array $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove) {
        $this->books = array_filter($this->books, function($book) use ($bookToRemove) {
            return $book->getTitle() !== $bookToRemove->getTitle();
        });
    }

    public function getCatalog(): array {
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

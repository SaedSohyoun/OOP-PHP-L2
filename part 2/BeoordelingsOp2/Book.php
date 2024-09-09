<?php

class Book
{
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
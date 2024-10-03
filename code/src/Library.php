<?php
namespace LibrarySystem;

class Library {
    private array $books = [];

    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

    public function getBooksInfo(): string {
        $info = "";
        foreach ($books as $book) {
            $info .= $book->getInfo() . "\n";
        }
        return $info;
    }
}

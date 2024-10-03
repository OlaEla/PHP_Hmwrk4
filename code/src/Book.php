<?php
namespace LibrarySystem;  // Пространство имен для библиотеки

abstract class Book {
    protected string $title;
    protected string $author;
    protected int $year;
    protected string $isbn;
    protected int $read_count = 0;

    public function __construct(string $title, string $author, int $year, string $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isbn = $isbn;
    }

    public function getInfo(): string {
        return "Название: {$this->title}, Автор: {$this->author}, Год издания: {$this->year}, ISBN: {$this->isbn}";
    }

    abstract public function getBook(): string;

    public function incrementReadCount(): void {
        $this->read_count++;
    }

    public function getReadCount(): int {
        return $this->read_count;
    }
}

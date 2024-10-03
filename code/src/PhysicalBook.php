<?php
namespace LibrarySystem;  // Пространство имен для библиотеки

class PhysicalBook extends Book {
    private string $library_address;

    public function __construct(string $title, string $author, int $year, string $isbn, string $library_address) {
        parent::__construct($title, $author, $year, $isbn);
        $this->library_address = $library_address;
    }

    public function getBook(): string {
        $this->incrementReadCount();
        return "Книга доступна в библиотеке по адресу: {$this->library_address}";
    }
}

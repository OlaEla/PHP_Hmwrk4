<?php
namespace LibrarySystem;

class DigitalBook extends Book {
    private string $download_link;

    public function __construct(string $title, string $author, int $year, string $isbn, string $download_link) {
        parent::__construct($title, $author, $year, $isbn);
        $this->download_link = $download_link;
    }

    public function getBook(): string {
        $this->incrementReadCount();
        return "Ссылка для скачивания книги: {$this->download_link}";
    }
}

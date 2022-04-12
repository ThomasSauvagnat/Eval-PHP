<?php
declare(strict_types=1);
require('model/Blog.php');

final class Article extends Blog {
// Properties
    private string $title;
    private string $publicationDate;
    private string $modificationDate;
    private string $autor;
    private int $status;
    private static int $nbArticle = 0;

// Constructor
    public function __construct(string $title, string $publicationDate, string $modificationDate, string $autor, int $status, int $shares)
    {
        $this -> title = $title;
        $this -> publicationDate = $publicationDate;
        $this -> modificationDate = $modificationDate;
        $this -> autor = $autor;
        $this -> status = $status;
        $this -> shares = $shares;
        self::addArticle();
        if ($status == 0) {
            self::removeArticle();
        }
    }

// Getter & setter
    public function setTitle(string $title): void {
        $this -> title = $title;
    }
    public function getTitle(): string {
        return $this -> title;
    }

    public function setPublicationDate(string $publicationDate): void {
        $this -> publicationDate = $publicationDate;
    }
    public function getPublicationDate(): string {
        return $this -> publicationDate;
    }

    public function setModificationDate(string $modificationDate): void {
        $this -> modificationDate = $modificationDate;
    }
    public function getModificationDate(): string {
        return $this -> modificationDate;
    }

    public function setAutor(string $autor): void {
        $this -> autor = $autor;
    }
    public function getAutor(): string {
        return $this -> autor;
    }

    public function setStatus(int $status): void {
        $this -> status = $status;
    }
    public function getStatus(): int {
        return $this -> status;
    }
    public static function getNbArticles(): int {
        return self::$nbArticle;
    }

// Methods
    private static function addArticle(): void {
        self::$nbArticle++;
    }
    private static function removeArticle(): void {
        self::$nbArticle--;
    }
    
}
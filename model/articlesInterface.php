<?php
declare(strict_types=1);

interface ArticlesInterface {
// Constructor signatur
    public function __construct(string $title, string $publicationDate, string $modificationDate, string $autor, int $status, int $shares);

// Getter & setter signaturs
    public function setTitle(string $title): void;
    public function getTitle(): string;

    public function setPublicationDate(string $publicationDate): void;
    public function getPublicationDate(): string;

    public function setModificationDate(string $modificationDate): void;
    public function getModificationDate(): string;

    public function setAutor(string $autor): void;
    public function getAutor(): string;

    public function setStatus(int $status): void;
    public function getStatus(): int;

    public function setShares(int $shares): void;
    public function getShares(): string;
}
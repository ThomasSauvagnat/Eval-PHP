<?php
declare(strict_types=1);
// require('model/articlesInterface.php');

spl_autoload_register(static function(string $fqcn) {
    $path = str_replace('\\', '/', $fqcn).'.php';
    require_once($path);
});

use \articlesInterface;

abstract class Blog implements ArticlesInterface {
// Properties
    protected int $shares;

// Getter & setter
    abstract function setTitle(string $title): void;
    abstract function getTitle(): string;

    abstract function setPublicationDate(string $publicationDate): void;
    abstract function getPublicationDate(): string;

    abstract function setModificationDate(string $modificationDate): void;
    abstract function getModificationDate(): string;

    abstract function setAutor(string $autor): void;
    abstract function getAutor(): string;

    abstract function setStatus(int $status): void;
    abstract function getStatus(): int;

    public function setShares(int $shares): void {
        $this -> shares = $shares;
    }
    public function getShares(): string {
        if (self::manyShares()) {
            return $this -> shares.' partages';
        }
        return $this -> shares.' partage';
    }

    private function manyShares() {
        if (($this -> shares) > 1) {
            return true;
        }
        return false;
    }
}

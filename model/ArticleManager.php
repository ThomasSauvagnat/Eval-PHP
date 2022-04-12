<?php
declare(strict_types=1);

class ArticleManager {
    // Récupération d'un seul article
    public function getOne(int $id): object {
        // Appel du fichier DATA (base de donnée) des articles
        require('data/articlesData.php');
        // Stockage des propriétés
        $title = $array_articles[$id]['title'];
        $publicationDate = $array_articles[$id]['publicationDate'];
        $modificationDate = $array_articles[$id]['modificationDate'];
        $autor = $array_articles[$id]['autor'];
        $status = $array_articles[$id]['status'];
        $shares = $array_articles[$id]['shares'];
        // Appel du fichier de la classe Article
        require('model/Article.php');
        // Création de l'objet Article
        $article = new Article($title, $publicationDate, $modificationDate, $autor, $status, $shares);
        // Renvoie de l'objet Article
        return $article;
    }

    // Récupération de tous les articles
    public function getAll() {
        // Récupération des données DATA et de la classe Article
        require('data/articlesData.php');
        require('model/Article.php');
        // Tableau qui va accueillir les objets de classe Article
        $array_articles_objects = [];
        // Pour chaque indice/ID on crée un objet de classe Article et que l'on place dans le tableau ci-dessus
        foreach ($array_articles as $id => $article) {
            $array_articles_objects[$id] = new Article($article['title'], $article['publicationDate'], $article['modificationDate'], $article['autor'], $article['status'], $article['shares']);
        }
        // Renvoie du tableau d'objet Article
        return $array_articles_objects;
    }
}
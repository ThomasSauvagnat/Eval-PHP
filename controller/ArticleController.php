<?php
declare(strict_types=1);

   // **NE FONCTIONNE PAS**
// spl_autoload_register(static function(string $fqcn) {
//     $path = str_replace('\\', '/', $fqcn).'.php';
//     require_once($path);
// });

// use \ArticleManager;
//*************************

// Stockage de la longueur du tableau
require('data/articlesData.php');
$array_articlesLength = count ($array_articles);

// Récupération du manager de l'article
require('model/ArticleManager.php');

// Si un ID transite dans l'URL et qu'il correspond à un ID d'un Article
if (!empty($_GET['id']) && $_GET['id'] <= $array_articlesLength) {
    // Création d'un manager
    $manager = new ArticleManager();
    // stockage de l'Article renvoyer par le manager
    $article = $manager -> getOne(intval($_GET['id']));
    // Renvoie de la vue de l'Article
    require('view/articleView.php');
    // S'il y a un ID vide qui transite dans l'URL alors affichage d'erreur
} else if (isset($_GET['id']) && empty($_GET['id'])){
    header('location:?page=articles');
} else {
    // De base, affichage de la liste des articles
    $manager = new ArticleManager();
    $array_articles_objects = $manager -> getAll();
    require('view/articleList.php');
}
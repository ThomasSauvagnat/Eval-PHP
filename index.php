<?php
declare(strict_types=1);

// Si un paramètre page transite dans l'URL
if (!empty($_GET['page']) && $_GET['page'] == 'articles') {
    require('controller/ArticleController.php');
} else {
    // De base, on renvoie à la page d'accueil
    require('view/accueil.php');
}
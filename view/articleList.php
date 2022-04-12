<?php
declare(strict_types=1);

$title = 'Liste des articles';

ob_start(); ?>
<p><a href="index.php">Revenir à l'acceuil</a></p>
<h1>Tous les articles <?= '('.Article::getNbArticles().')' ?></h1>
<ul>
    <?php foreach ($array_articles_objects as $id => $article) {
        if ($article -> getStatus() == 1) {
            echo '<li><h2><a href="?page=articles&id='.$id.'">'.$article -> getTitle().'</a></h2></li>';
        }
    } ?>
</ul>

<?php $content = ob_get_clean();
require('template.php');

// (($article -> getStatus() == 1) ? $article -> getTitle() : 'Cet article n\'est pas disponnible')
<?php
$title = 'Détails article';

ob_start() ?>
<p><a href="?page=articles">Retour à la liste des articles</a></p>

<h1> <?= $article -> getTitle() ?> </h1>
<p> Date de publication : <?= $article -> getpublicationDate() ?> </p>
<p> Date de modification : <?= $article -> getModificationDate() ?> </p>
<p> Auteur : <?= $article -> getAutor() ?> </p>
<p><strong> <?= $article -> getShares() ?> </strong></p>

<?php $content = ob_get_clean();
require('template.php');
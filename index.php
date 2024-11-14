<?php
//require o include, uno da fatal error se non trova il file uno da solo un warning
require_once("bootstrap.php");

$templateParams["titolo"] = "Blog Tw - Home";
$templateParams["nome"] = "lista-articoli.php"; 
$templateParams["articolicasuali"] = $dbh->getRandomPost(2); //gli argomenti che passiamo sono il limite delle risposte che vogliamo
$templateParams["categorie"] = $dbh->getCategories();
$templateParams["articoli"] = $dbh->getPost(2);

//var_dump($templateParams["articolicasuali"]);//per vedere la struttura del contenuto della variabile nel sito

require_once("template/base.php");
?>
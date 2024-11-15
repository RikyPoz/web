<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Blog TW - Contatti";
$templateParams["nome"] = "contatti-main.php";
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);
$templateParams["categorie"] = $dbh->getCategories();

$templateParams["autori"] = $dbh->getAuthors();


require("template/base.php");
?>
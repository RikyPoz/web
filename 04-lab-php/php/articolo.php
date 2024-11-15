<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Blog TW - Articolo ";
$templateParams["nome"] = "articolo-main.php";
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);
$templateParams["categorie"] = $dbh->getCategories();


$templateParams["articolo"] = $dbh->getPostsById($_GET["idarticolo"]);

require("template/base.php");
?>
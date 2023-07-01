<?php
require_once "models/CategorieDAO.php";
require_once "models/ArticleDAO.php";

$categorieId = $_GET['id'];
$categorie = getCategorieById($categorieId);
$articles = getArticlesByCategorie($categorieId);

include "views/categorie.php";
?>


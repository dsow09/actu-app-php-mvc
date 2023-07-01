<?php

    session_start();
    require_once "models/ArticleDAO.php";
    require_once "models/CategorieDAO.php";

    $derniersArticlesParCategorie = getDerniersArticlesParCategorie();
    $categories = getCategories();


    include "views/accueil.php";

?>

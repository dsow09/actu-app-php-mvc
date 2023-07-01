<?php

    require_once "models/ArticleDAO.php";

    $id = $_GET['id']; 
    $article = getArticleById($id);

    include "views/article.php";
?>

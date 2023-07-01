<?php
    require_once "models/ArticleDAO.php";
    require_once "models/CategorieDAO.php";

    $id = $_GET['id'];
    $article = getArticleById($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $categorie = $_POST['categorie'];

        updateArticle($id, $titre, $contenu, $categorie);

        header("Location: index.php?page=article&id=$id"); 
        exit();
    }

    $categories = getCategories();

    include "views/modification_article.php";
?>

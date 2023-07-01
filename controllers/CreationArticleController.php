<?php
    require_once "models/ArticleDAO.php";
    require_once "models/CategorieDAO.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $categorie = $_POST['categorie'];

    
        $id = createArticle($titre, $contenu, $categorie);

        header("Location: index.php?page=article&id=$id"); 
        exit();
    }

    $categories = getCategories();

    include "views/creation_article.php";
?>

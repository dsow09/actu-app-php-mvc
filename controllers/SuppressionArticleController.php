<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['utilisateur'])) {
            header("Location: index.php"); // Rediriger vers la page d'accueil si non connecté
            exit();
        }

        // Récupérer l'ID de l'article à supprimer depuis la requête GET
        $articleId = $_GET['id'];

        // Appeler la fonction de suppression de l'article dans le modèle
        require_once "models/ArticleDAO.php";
        deleteArticle($articleId);

        // Rediriger vers la page d'accueil après suppression
        header("Location: index.php");
        exit();
    }
?>

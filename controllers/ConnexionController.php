<?php
    session_start();

    $erreur = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once "models/UtilisateurDAO.php";
        $utilisateur = login($email, $password);

        if ($utilisateur) {
            
            $_SESSION['utilisateur'] = $utilisateur;
            header("Location: index.php"); 
            exit();
        } else {
            $erreur = "Email ou mot de passe incorrect.";
        }
    }


    include "views/connexion.php";
?>

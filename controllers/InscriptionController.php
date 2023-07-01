<?php
    session_start();

    require_once "models/UtilisateurDAO.php";

    $erreur = null;


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!validerDonnees($nom, $prenom, $email, $password)) 
        {
            $erreur = "Veuillez remplir tous les champs.";
        } 
        else 
        {
            
            if (register($nom, $prenom, $email, $password)) 
            {
              
                header("Location: index.php?page=connexion");
                exit();
            } 
            else 
            {
                $erreur = "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
            }
        }
    }

    include "views/inscription.php";
?>

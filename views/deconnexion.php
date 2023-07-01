<?php
session_start();

// Supprimer toutes les variables de session
session_unset();

// Détruire complètement la session
session_destroy();

// Redirection vers la page d'accueil ou une autre page appropriée
header("Location: index.php");
exit();
?>

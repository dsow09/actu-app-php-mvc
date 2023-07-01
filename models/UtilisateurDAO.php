<?php

    $pdo = new PDO("mysql:host=localhost;dbname=mglsi_news", "root", "");

    function login($email, $password)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE email = ? AND password = ?");
        $stmt->execute([$email, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function register($nom, $prenom, $email, $password)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE email = ?");
        $stmt->execute([$email]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($existingUser) {
            return false;
        }
        
        $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, prenom, email, password) VALUES (?, ?, ?, ?)");
        $result = $stmt->execute(
            [
                $nom, 
                $prenom, 
                $email, 
                $password
            ]
        );
        
       return $result ? true : false;
    }

   

    function validerDonnees($nom, $prenom, $email, $password) 
    {
        if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
            return false;
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        
        return true;
    }


?>

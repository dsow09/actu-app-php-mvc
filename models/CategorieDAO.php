<?php

    $pdo = new PDO("mysql:host=localhost;dbname=mglsi_news", "root", "");

    function getCategories()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM Categorie");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  function getCategorieById($categoryId)
  {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Categorie WHERE id = ?");
    $stmt->execute([$categoryId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

?>

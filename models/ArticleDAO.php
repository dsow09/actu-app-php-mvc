<?php
    $pdo = new PDO("mysql:host=localhost;dbname=mglsi_news", "root", "");

    function getDerniersArticlesParCategorie()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM Article group by categorie");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getArticleById($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM Article WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getArticlesByCategorie($categorieId)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM Article WHERE categorie = ?");
        $stmt->execute([$categorieId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    function createArticle($titre, $contenu, $categorie)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO Article (titre, contenu, categorie) VALUES (?, ?, ?)");
        $stmt->execute([$titre, $contenu, $categorie]);
        return $pdo->lastInsertId();
    }

    function updateArticle($id, $titre, $contenu, $categorie)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE Article SET titre = ?, contenu = ?, categorie = ? WHERE id = ?");
        $stmt->execute([$titre, $contenu, $categorie, $id]);
    }

    function deleteArticle($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM Article WHERE id = ?");
        $stmt->execute([$id]);
    }
    
?>

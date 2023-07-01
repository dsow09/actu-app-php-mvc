<!DOCTYPE html>
<html>
<head>
    <title>Suppression d'article</title>
</head>
<body>
    <h1>Suppression de l'article</h1>
    <p>Êtes-vous sûr de vouloir supprimer cet article ?</p>
    <form method="post" action="suppression_article.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <button type="submit" class="delete-button">Supprimer</button>
        <a href="index.php">Annuler</a>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Article</title>
    </head>
<body>
    <div class="card">
        <h3 class="card-title"><?php echo $article['titre'] ?></h3>
        <p class="card-description"><?php echo $article['contenu'] ?></p>
        <p>Date de création : <?php echo $article['dateCreation']; ?></p>
        <p>Date de modification : <?php echo $article['dateModification']; ?></p>
    </div> 
    <div class="header">
        <a class="back-button" href="index.php">Retour</a>
    </div>
</body>
</html>

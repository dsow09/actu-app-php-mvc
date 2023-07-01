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
        <?php if(isset($_SESSION['utilisateur'])) { ?>
            <button class="button-delete-artilce" onclick="window.location.href = 'index.php?page=suppression_article&id=<?php echo $article['id']; ?>';">Supprimer</button>
        <?php }  ?>
    </div> 
    <div class="header">
        <a class="back-button" href="index.php">Retour</a>
    </div>
</body>
</html>

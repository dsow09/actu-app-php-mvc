<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $categorie['libelle']; ?></title>
</head>
<body>
    <h1 class="header">Catégorie : <?php echo $categorie['libelle']; ?></h1>
    <?php if($articles) { ?>
    <ul>
        <?php foreach ($articles as $article) { ?>
            <div class="card">
                <h3 class="card-title"><?php echo $article['titre'] ?></h3>
                <p class="card-description"><?php echo $article['contenu'] ?></p>
            </div> 
        <?php } ?>
    </ul>
    <?php }  else {?>
                <div class=" header card">
                    Aucun article trouvé !
                </div> 
        <?php } ?>
        
        <div class="header">
            <a class="back-button" href="index.php">Retour</a>
        </div>
      
</body>
</html>

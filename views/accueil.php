<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <h1 class="header">ACTUALITÉS POLYTECHNICIENNES</h1>
                <nav>
                    <ul class="nav-list">
                        <li><a href="index.php">Accueil</a></li>
                        <?php foreach ($categories as $categorie) { ?>
                            <li>
                                <a href="index.php?page=categorie&id=<?php echo $categorie['id']; ?>"><?php echo $categorie['libelle']; ?></a>
                            </li>
                        <?php } ?>
                        <?php if(isset($_SESSION['utilisateur'])) { ?>
                            <li>
                                <a class="nav-item" href="index.php?page=deconnexion" class="nav-item">Déconnexion</a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a class="nav-item" href="index.php?page=connexion" class="nav-item">Connexion</a>
                            </li>
                        <?php } ?>

                        <?php if(isset($_SESSION['utilisateur'])) { ?>
                            <button onclick="window.location.href = 'index.php?page=creation_article'" class="create-button ">Créer article</button>
                        <?php }  ?>
                    </ul>
                </nav>
                

                <h2 class="header">Les dernières actualités</h2>
                <?php foreach ($derniersArticlesParCategorie as $article) { ?>
                    <div class="card">
                        <h3 class="card-title"><?php echo $article['titre'] ?></h3>
                        <p class="card-description"><?php echo $article['contenu'] ?></p>
                        <?php if(isset($_SESSION['utilisateur'])) { ?>
                            <button onclick="window.location.href = 'index.php?page=modification_article&id=<?php echo $article['id']; ?>';" class="edit-button">Modifier</button>
                            <button onclick="window.location.href = 'index.php?page=suppression_article&id=<?php echo $article['id']; ?>';" class="delete-button">Supprimer</button>
                        <?php }?>
                        <button class="view-more-button" onclick="window.location.href = 'index.php?page=article&id=<?php echo $categorie['id']; ?>';">Voir plus</button>
                    </div>
                <?php } ?>
            </div>
    
            <footer>
                <h3>Copyright @ DGI 2023</h3>
            </footer>

        </div>
    </body>
</html>

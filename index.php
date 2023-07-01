<!DOCTYPE html>
<html>
    <head>
        <title>Site d'actualité</title>
        <link rel="stylesheet" href="./styles/style.css" />

    </head>
    <body>    

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'accueil':
                    include 'controllers/AccueilController.php';
                    break;
                case 'categorie':
                    include 'controllers/CategorieController.php';
                    break;
                case 'article':
                    include 'controllers/ArticleController.php';
                    break;
                case 'connexion':
                    include 'controllers/ConnexionController.php';
                    break;
                case 'deconnexion':
                    include 'views/deconnexion.php';
                    break;
                case 'inscription':
                    include 'controllers/InscriptionController.php';
                    break;
                case 'creation_article':
                    include 'controllers/CreationArticleController.php';
                    break;
                case 'modification_article':
                    include 'controllers/ModificationArticleController.php';
                    break;
                case 'suppression_article':
                    include 'controllers/SuppressionArticleController.php';
                    break;
                default:
                    echo 'Page not found';
            }
        } else {
            // Par défaut, afficher la page d'accueil
            include 'controllers/AccueilController.php';
        }
        ?>

    </body>
</html>

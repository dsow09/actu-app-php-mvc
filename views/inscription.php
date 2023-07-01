<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }
            
            .container {
                max-width: 400px;
                margin: 100px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            
            h1 {
                text-align: center;
                color: #333;
            }
            
            form {
                margin-top: 20px;
            }
            
            label {
                display: block;
                margin-bottom: 5px;
                color: #333;
            }
            
            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin-bottom: 15px;
            }
            
            input[type="submit"] {
                background-color: #3498db;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 3px;
                cursor: pointer;
            }
            
            input[type="submit"]:hover {
                background-color: #2980b9;
            }
            
            .login-link {
                display: block;
                text-align: center;
                color: #333;
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php if($erreur) {  ?>
                <div>
                    <?php echo $erreur;?>
                </div>
            <?php }?>
            <h1>Inscription</h1>
            <form action="" method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
                
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
                
                <input type="submit" value="S'inscrire">
                
                <a class="login-link" href="index.php?page=connexion">Se connecter</a>
            </form>
        </div>
    </body>
</html>

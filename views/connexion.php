<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
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
        
        .register-link {
            display: block;
            text-align: center;
            color: #333;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if($erreur !== null) {  ?>
            <div>
                <?php echo $erreur;?>
            </div>
        <?php }?>
        <h1>Connexion</h1>
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Se connecter">
            
            <a class="register-link" href="index.php?page=inscription">Inscription</a>
        </form>
    </div>
</body>
</html>

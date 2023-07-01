<!DOCTYPE html>
<html>
<head>
    <title>Création d'article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Création d'article</h1>
    <form method="post" action="index.php?page=creation_article">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required><br>

        <label for="contenu">Contenu :</label><br>
        <textarea id="contenu" name="contenu" rows="5" required></textarea><br>

        <label for="categorie">Catégorie :</label>
        <select id="categorie" name="categorie" required>
            <?php foreach ($categories as $categorie) { ?>
                <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['libelle']; ?></option>
            <?php } ?>
        </select><br><br>

        <input type="submit" value="Créer">
    </form>
</body>
</html>

<?php

include_once '../src/db.php';
session_start();

$pdo = getPDO();

$stmt = $pdo->prepare('SELECT * FROM author');
$stmt->execute();
$authors = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un auteur</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/form.css">
</head>

<body>
    <header>
        <a href="">Accueil</a>
        <nav>
            <a href="add-author.php">ajouter un auteur</a>
            <a href="add-book.php">ajouter un livre</a>
            <a href="add-user.php">inscription</a>
            <a href="connexion.php">connexion</a>
        </nav>
    </header>
    <main>
        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        <form action="../src/form/book-form.php" method="POST">
            <div>
                <label for="title">Nom du livre</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="year">Année de sortie</label>
                <input type="number" name="year" id="year" min="0000" max="3000">
            </div>
            <div>
                <label for="isbn">Isbn</label>
                <input type="text" name="isbn" id="isbn">
                <small>Format: 13 chiffres</small>
            </div>
            <div>
                <label for="author">Auteur</label>
                <select name="author">
                    <?php
                    foreach ($authors as $author) {
                    ?>
                        <option value="<?= $author['id']; ?>"><?= $author['author_name'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </main>
    <footer></footer>
    <!-- Ajouter un formulaire pour creer un auteur -->

    <!-- Vous traiterez le formulaire dans le fichier author-form.php -->
    <!-- Si tout s'est bien passé vous redirigerer vers la page  -->
    <!-- Afficher des messages d'erreur -->
</body>

</html>
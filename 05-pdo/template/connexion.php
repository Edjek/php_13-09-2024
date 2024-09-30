<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
        <form action="../src/form/connexion.php" method="POST">
            <div>
                <label for="name">Pseudo</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="pswd">Mot de passe</label>
                <input type="password" id="pswd" name="pswd">
            </div>

            <input type="submit" value="Connexion">
        </form>
    </main>
</body>

</html>
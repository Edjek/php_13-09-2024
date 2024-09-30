<?php

include_once './src/db.php';
session_start();

$pdo = getPDO();

$stmt = $pdo->query('SELECT * FROM book');
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <header>
        <a href="">Accueil</a>
        <nav>
            <?php
            if (isset($_SESSION['user_status']) && $_SESSION['user_status'] == 1) {
            ?>
                <a href="./template/add-author.php">ajouter un auteur</a>
                <a href="./template/add-book.php">ajouter un livre</a>
            <?php
            }
            ?>

            <?php
            if (
                isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === true
            ) {
            ?>
                <a href="./src/deconnexion.php">deconnexion</a>
            <?php
            } else {
            ?>
                <a href="./template/add-user.php">inscription</a>
                <a href="./template/connexion.php">connexion</a>
            <?php
            }
            ?>

        </nav>
    </header>
    <main>

        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        <h1>Library</h1>
        <section>
            <?php
            // Pour chaque livre, on affiche un card avec le titre, la description et un lien vers la page details.php
            // htmlspecialchars() permet de convertir les caractères spéciaux en entités HTML
            // Pour éviter les failles XSS, il est important de toujours utiliser htmlspecialchars() pour afficher des données provenant de l'utilisateur
            // Les failles XSS permettent d'injecter du code JavaScript dans une page web
            foreach ($books as $book) {
            ?>
                <div class="card">
                    <h2 class="title"><?= htmlspecialchars($book['title']); ?></h2>

                    <a href="./template/details.php?id=<?= htmlspecialchars($book['id']); ?>">Voir le livre</a>
                </div>
            <?php
            }
            ?>
        </section>

    </main>
    <footer></footer>
</body>

</html>
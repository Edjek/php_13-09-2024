<?php
// Connexion à la base de données
// PDO est une extension de PHP qui définit une interface pour accéder à une base de données

include_once './src/db.php';
$pdo = getPDO();

// Récupération des livres

// initialiser la valeur de $pdo en appelant la fonction
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
        <nav>
            <a href="">ajouter un auteur</a>
        </nav>
    </header>
    <main>
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
                    <h2 class="title"><?= htmlspecialchars($book['titre']); ?></h2>
                    <p><?= htmlspecialchars($book['description']); ?></p>
                    <a href="./template/details.php? <?= htmlspecialchars($book['id']); ?>">Voir le livre</a>
                </div>
            <?php
            }
            ?>
        </section>

    </main>
    <footer></footer>
</body>

</html>
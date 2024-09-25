<?php
$pdo = new PDO('mysql:host=localhost;dbname=library_db', 'root', '');

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
    <header></header>
    <main>
        <h1>Library</h1>
        <section>
            <?php
            foreach ($books as $book) {
            ?>
                <div class="card">
                    <h2 class="title"><?= htmlspecialchars($book['titre']); ?></h2>
                    <p><?= htmlspecialchars($book['description']); ?></p>
                    <!-- Je veux que mon lien cliquable -->
                    <!-- creer la page <detail class="php" -->
                    <!-- passer en parametre de la route l'id du livre -->
                    <!-- Sur la page detail afficher l'id du livre -->
                    <!-- Refaire une requete pour recuperer toutes les informations du livre dont on a l'id -->
                    <a href="details.php?id=<?= htmlspecialchars($book['id']); ?>">Voir le livre</a>
                </div>
            <?php
            }
            ?>
        </section>

    </main>
    <footer></footer>
</body>

</html>
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
                    <h2 class="title"><?= $book['titre']; ?></h2>
                    <p><?= $book['description']; ?></p>
                    <a href="details.php">Voir le livre</a>
                </div>
            <?php
            }
            ?>
        </section>

    </main>
    <footer></footer>
</body>

</html>
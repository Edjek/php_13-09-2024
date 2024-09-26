<?php

$id =  $_GET['id'];

include_once '../src/db.php';

// Pour éviter les injections SQL, on utilise une requête préparée
// Les requêtes préparées permettent de séparer les instructions SQL et les données
// Les injections SQL permettent d'injecter du code SQL dans un formulaire, il s'agit d'une faille de sécurité
$pdo = getPDO();
$stmt = $pdo->prepare('SELECT * FROM book WHERE id=:id');
$stmt->bindParam(':id', $id);
$stmt->execute();
$book = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>

<body>
    <header>
        <nav>
            <a href="">ajouter un auteur</a>
        </nav>
    </header>
    <h1><?= $book['titre']; ?></h1>
</body>

</html>
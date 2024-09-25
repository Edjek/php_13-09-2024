<?php
    $pdo = new PDO('mysql:host=localhost;dbname=library_db', 'root','');
    $stmt = $pdo->query('SELECT * FROM book');
    $res = $stmt->fetchAll();
    echo '<pre>';
    var_dump($res);
    echo '</pre>';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>

<body>
<!-- afficher tous les livres -->
    <!--  -->
</body>

</html>
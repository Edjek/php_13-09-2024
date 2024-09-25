<?php
$pdo = new PDO('mysql:host=localhost;dbname=library_db', 'root', '');
$id =  $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM book WHERE id=:id');
$stmt->bindParam(':id', $id);
$stmt->execute();
$book = $stmt->fetch();
var_dump($book);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $book[1]; ?></h1>
</body>
</html>
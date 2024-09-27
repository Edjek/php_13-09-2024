<?php

include_once '../db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['author']) && !empty($_POST['author'])) {
        $author = $_POST['author'];
        $author = trim($author);

        $pdo = getPDO();
        $stmt = $pdo->prepare('INSERT INTO author (author_name) VALUE (:pull)');
        $stmt->bindParam(':pull', $author);
        $stmt->execute();

        $_SESSION['message'] = 'Un nouvel auteur a bien été ajouté';

        header('Location:../../index.php');
        exit;
    } else {
        header('Location:../../template/add-author.php');
        exit;
    }
} else {
    header('Location:../../template/add-author.php');
    exit;
}

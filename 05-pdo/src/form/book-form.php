<?php

include '../db.php';
session_start();

// REDIGER les messages pour l'utilisateur

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['title']) || empty($_POST['title'])) {
    $_SESSION['message'] = 'Veuillez ajouter le titre du livre';
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['year']) || empty($_POST['year'])) {
    $_SESSION['message'] = 'Veuillez ajouter la date du livre';
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['isbn']) || empty($_POST['isbn'])) {
    $_SESSION['message'] = 'Veuillez ajouter le numero isbn du livre';
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['author']) || empty($_POST['author'])) {
    $_SESSION['message'] = 'Veuillez ne pas toucher a la liste deroulante';
    header('Location:../../template/add-book.php');
    exit;
}

$title = trim($_POST['title']);
$year = trim($_POST['year']);
$isbn = trim($_POST['isbn']);
$author = trim($_POST['author']);

$pdo = getPDO();

$stmt = $pdo->prepare('INSERT INTO book (title, year, isbn, author_id) VALUES (:title, :year, :isbn, :author)');
$stmt->bindParam(':title', $title);
$stmt->bindParam(':year', $year);
$stmt->bindParam(':isbn', $isbn);
$stmt->bindParam(':author', $author);

$stmt->execute();

$_SESSION['message'] = 'Vous avez bien ajouté un nouveau livre';

header('Location:../../index.php');
exit;

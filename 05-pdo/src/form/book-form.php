<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['title']) || empty($_POST['title'])) {
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['year']) || empty($_POST['year'])) {
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['isbn']) || empty($_POST['isbn'])) {
    header('Location:../../template/add-book.php');
    exit;
}

if (!isset($_POST['author']) || empty($_POST['author'])) {
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


header('Location:../../index.php');
exit;

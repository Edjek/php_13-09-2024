<?php

include '../db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:../../template/add-user.php');
    exit;
}


if (!isset($_POST['name']) || empty($_POST['name'])) {
    $_SESSION['message'] = 'Veuillez ajouter un pseudo';
    header('Location:../../template/add-user.php');
    exit;
}

if (!isset($_POST['pswd']) || empty($_POST['pswd'])) {
    $_SESSION['message'] = 'Veuillez ajouter un mot de passe';
    header('Location:../../template/add-user.php');
    exit;
}

$name = trim($_POST['name']);
$pswd = trim($_POST['pswd']);

$pswd = password_hash($pswd, PASSWORD_DEFAULT);

$pdo = getPDO();
$stmt = $pdo->prepare('INSERT INTO user (name, password) VALUES (:name, :pswd)');
$stmt->bindParam(':name', $name);
$stmt->bindParam(':pswd', $pswd);

$stmt->execute();

$_SESSION['message'] = 'Vous etes bien inscrit';

header('Location:../../index.php');
exit;

<?php

include '../db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:../../template/connexion.php');
    exit;
}

if (!isset($_POST['name']) || empty($_POST['name'])) {
    $_SESSION['message'] = 'Veuillez remplir votre nom';
    header('Location:../../template/connexion.php');
    exit;
}

if (!isset($_POST['pswd']) || empty($_POST['pswd'])) {
    $_SESSION['message'] = 'Veuillez remplir le champ mot de passe';
    header('Location:../../template/connexion.php');
    exit;
}

$name = trim($_POST['name']);
$pswd = trim($_POST['pswd']);


$pdo = getPDO();
$stmt = $pdo->prepare('SELECT * FROM user WHERE name=:name');
$stmt->bindParam(':name', $name);
$stmt->execute();
$user = $stmt->fetch();
var_dump($user);

if ($user === false) {
    $_SESSION['message'] = 'Vos identifiants sont incorrects';
    header('Location:../../template/connexion.php');
    exit;
}

if (!password_verify($pswd, $user['password'])) {
    $_SESSION['message'] = 'Vos identifiants sont incorrects';
    header('Location:../../template/connexion.php');
    exit;
}

$_SESSION['user_status'] = $user['status'];
$_SESSION['isLogged'] = true;
$_SESSION['message'] = 'Vous êtes connecté';
header('Location:../../index.php');
exit;

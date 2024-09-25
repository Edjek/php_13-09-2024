<?php

// Le tableau $_POST est une superglobale qui permet de récupérer les informations passées en POST
// Nous pouvons récupérer les informations passées en POST dans le tableau $_POST
// Vous pouvez accéder aux informations passées en POST avec $_POST['clé']


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $name = trim($name);
        $password = trim($password);

        // INSERER 

        // header('Location:../index.php');
        // exit;
    } else {
        echo 'erreur';
    }
} else {
    // header('Location:../index.php');
    // exit;
}

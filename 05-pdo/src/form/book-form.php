<?php

include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['title']) && !empty($_POST['title']) &&
        isset($_POST['year']) && !empty($_POST['year']) &&
        isset($_POST['isbn']) && !empty($_POST['isbn']) &&
        isset($_POST['author']) && !empty($_POST['author'])
    ) {


        session_start();
        $_SESSION['message'] = 'Un nouveau livre a bien été ajouté';

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

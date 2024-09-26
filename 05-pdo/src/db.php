<?php

// Connexion à la base de données
// PDO est une extension de PHP qui définit une interface pour accéder à une base de données

function getPDO()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=library', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $pdo;
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
        exit();
    }
}

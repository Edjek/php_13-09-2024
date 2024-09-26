<?php

// Connexion à la base de code en fonction

function getPDO()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=library_db', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $pdo;
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
        exit();
    }
}

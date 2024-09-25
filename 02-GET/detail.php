<?php

// Le tableau $_GET est une superglobale qui permet de récupérer les informations passées en GET
// Vous pouvez récupérer les informations passées en GET dans le tableau $_GET
// Vous pouvez accéder aux informations passées en GET avec $_GET['clé']
var_dump($_GET);
$newPrice = $_GET['price'] * 0.8;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div>
            <h1>Detail</h1>
            <h2><?php echo "{$_GET['marque']} {$_GET['model']}" ?></h2>
            <p><?php echo $_GET['model']; ?></p>
            <p><?= $newPrice; ?></p>
        </div>
    </main>

</body>

</html>
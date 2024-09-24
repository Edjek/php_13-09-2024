<?php

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
    <h1>Detail</h1>

    <h2><?php echo "{$_GET['marque']} {$_GET['model']}" ?></h2>
    <p><?php echo $_GET['model']; ?></p>
    <p><?= $newPrice; ?></p>

</body>

</html>
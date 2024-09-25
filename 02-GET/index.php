<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découverte de la superglobale GET</title>
</head>

<body>
    <h1>Accueil</h1>

    <?php
    // Dans les liens vous pouvez passer des informations en GET pour les récupérer dans la page detail.php
    ?>
    <a href="detail.php?model=tt&marque=audi&power=450&color=bleu&year_release=2016&price=45000">detail</a>
    <a href="detail.php?model=mustang&marque=ford&power=450&color=rouge&year_release=2020&price=55000">Mustang</a>
    <a href="detail.php?model=civic&marque=honda&power=300&color=vert&year_release=2018&price=25000">Civic</a>
    <a href="detail.php?model=911&marque=porsche&power=500&color=jaune&year_release=2021&price=100000">911</a>


    <!-- Dans les liens vous aller passer les informations du modele de voiture, marque, modele, nbchevaux, couleurs, anneedesortie -->
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Découverte de PHP</h1>
    <?php
    // Pour ouvrir un bloc PHP, on utilise la balise <?php
    // Pour fermer un bloc PHP on utilise la balise suivante :
    ?>

    <p>Je suis du HTML</p>

    <?php
    /* --------------------------------- */
    echo '<h2>Les commentaires</h2>';
    /* --------------------------------- */

    // Je suis un commentaire en PHP
    # Je suis aussi un commentaire en PHP
    /*
        Je suis un commentaire
        sur plusieurs lignes
    */


    /* --------------------------------- */
    echo '<h2>Affichage</h2>';
    /* --------------------------------- */

    //  echo est une instruction qui permet d'afficher du texte dans le navigateur
    echo 'Hello, world !';
    //  print est équivalent à echo
    print "Hello, World !";


    /* --------------------------------- */
    echo '<h2>Les variables</h2>';
    /* --------------------------------- */

    // Déclaration d'une variable avec le signe $
    $unNom;
    // Affectation d'une valeur à la variable
    $unNom = 127;
    // Affichage de la variable
    echo $unNom;
    echo '<br>';


    /* --------------------------------- */
    echo '<h2>Les types de variables</h2>';
    /* --------------------------------- */

    // Les types de variables :

    // String : chaine de caractères (texte)
    $unMessage = 'Salut, l\'equipe. Je suis un message dans une variable';
    echo gettype($unMessage) . '<br>';

    // Integer : entier (nombre sans virgule)
    $unNombreEntier = 123;
    echo gettype($unNombreEntier) . '<br>';

    // Float : nombre à virgule (-3.14, 0.0, 1.2, 3.14)
    $unNombreAVirgule = 23.6;
    echo gettype($unNombreAVirgule) . '<br>';

    // Boolean : true ou false
    $unBooleen = true;
    echo $unBooleen . ' <br>';

    $unBooleen = false;
    echo $unBooleen . '<br>';

    echo gettype($unBooleen) . '<br>';

    // NULL : absence de valeur
    $uneVariable = null;
    echo gettype($uneVariable) . '<br>';
    echo $uneVariable . '<br>';


    /* --------------------------------- */
    echo '<h2>La concaténation</h2>';
    /* --------------------------------- */

    // La concaténation permet d'assembler des chaines de caractères avec des variables
    $a = 'Bonjour';
    $b = 'tout le monde';
    echo $a . ' ' . $b . ', je suis en cours de PHP' . '<br>';

    // Entre guillemets simple les variables ne sont pas évaluées : c'est leur nom littéral qui est affiché
    echo '$a $b, je suis un message en PHP' . '<br>';

    // Entre guillemets doubles, les variables sont évaluées : c'est leur contenu qui est affiché
    echo "$a $b, je suis un message en PHP" . '<br>';

    // Entre guillemets doubles, on peut mettre des accolades autour des variables pour les séparer du reste de la chaine de caractères
    echo "{$a} {$b}, je suis un message en PHP" . '<br>';


    // Déclarer 3 variables contenant : bleu, blanc, rouge
    // Afficher bleu-blanc-rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables.
    $blue  = 'Bleu';
    $white = 'Blanc';
    $red   = 'Rouge';

    echo $blue . '-' . $white . '-' . $red . '<br>';
    echo "$blue-$white-$red <br>";
    echo "{$blue}-{$white}-{$red} <br>";
    echo '$blue-$white-$red';


    /* --------------------------------- */
    echo '<h2>Les constantes et les constantes magiques</h2>';
    /* --------------------------------- */

    // Une constante permet de sauvegarder une valeur sauf que celle-ci ne peut pas être modifiée
    // Utile pour conserver les parametres de la base de donnée
    // Par convention, une constante se déclare toujours en majuscule
    define("CAPITAL", "Paris");
    const PAYS = 'France';
    echo CAPITAL;
    echo '<br>';
    echo PAYS;
    echo '<br>';

    // Les constantes predefinies :
    echo 'Version de PHP : ' . PHP_VERSION . '<br>'; // Affiche la version de PHP
    echo 'Système d\'exploitation du serveur : ' . PHP_OS . '<br>'; // Affiche le système d'exploitation du serveur


    /* --------------------------------- */
    echo '<h3>Les constantes magiques</h3>';
    /* --------------------------------- */
    // Les constantes magiques sont des constantes prédéfinies dans le langage qui changent de valeur en fonction du contexte
    echo 'Chemin du fichier courant : ' . __FILE__ . '<br>'; // Affiche le chemin complet vers le fichier courant
    echo 'Numero de la ligne de code : ' . __LINE__ . '<br>'; // Affiche le numéro de la ligne courante
    echo 'Dossier courant : ' . __DIR__ . '<br>'; // Affiche le dossier dans lequel est le fichier courant


    /* --------------------------------- */
    echo '<h2>Les tableaux</h2>';
    /* --------------------------------- */

    /* --------------------------------- */
    echo '<h3>Les tableaux à indice</h3>';
    /* --------------------------------- */

    // Un tableau de données ARRAY est déclaré comme une variable améliorée dans laquelle on stocke une multitude de valeurs.
    // Ces valeurs peuvent être de n'importe quel type et possèdent un indice par défaut dont la numérotation commence à 0.

    $country = ['France', 'Italie', 'Espagne', 'Portugal'];
    $country = array('France', 'Italie', 'Espagne', 'Portugal');

    echo gettype($country) . '<br>';

    echo '<pre>';
    var_dump($country);
    echo '</pre>';

    echo '<pre>';
    print_r($country);
    echo '</pre>';

    // Afficher le premier element de $tableau
    echo $country[0];

    /* --------------------------------- */
    echo '<h3>Les tableaux associatifs</h3>';
    /* --------------------------------- */

    $tableau2 = ['nom' => 'rachid', 'prenom' => 'edjek'];
    echo $tableau2['nom'] . '<br>';

    $user = ['firstName' => 'rachid', 'lastName' => 'edjekouane', 'age' => 41, 'phone' => '0165878974'];

    echo "Bonjour, je m'appelle {$user['firstName']} {$user['lastName']}, j'ai {$user['age']} ans et mon numéro de téléphone est le : {$user['phone']} <br>";

    $animals = ['chien', 'chat', 'lapin', 'poule', 'aigle'];

    /* --------------------------------- */
    echo '<h3>La fonction implode()</h3>';
    /* --------------------------------- */

    // implode() permet de transformer un tableau en chaine de caractères.
    echo 'Mes animaux préférés sont : ' . implode(', ', $animals) . '<br>';

    /* --------------------------------- */
    echo '<h2>Les operateurs</h2>';
    /* --------------------------------- */

    // Les opérateurs de concaténation (.)
    // Les opérateurs arithmétiques (+, -, *, /, %, **)
    // Les opérateurs d'affectation (=, +=, -=, *=, /=, %=, **=)
    // Les opérateurs de comparaison (==, ===, !=, !==, <, >, <=, >=)
    // Les opérateurs logiques (&&, ||, !, and, or, xor)
    // Les opérateurs d'incrémentation et de décrémentation (++, --)

    // Les opérateurs de strucutre (if, else, elseif, switch, case, default, for, foreach, while, do while, break, continue, return, include, require, include_once, require_once)
    // Les structures conditionnelles (if / elseif/ else)
    // Les structures itératives : les boucles (while, for, foreach, do while)
    // Les structures de langage (break, continue, return, include, require, include_once, require_once)

    /* --------------------------------- */
    echo '<h3>Les opérateurs arithmétiques</h3>';
    /* --------------------------------- */

    $a = 10;
    $b = 2;
    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>'; // modulo = reste de la division entière
    $a++;
    echo $a . '<br>';
    $a = $a + 1;
    echo $a . '<br>';
    $a += 2;
    echo $a . '<br>';
    $a *= 2;
    echo $a . '<br>';
    $a %= 2;
    echo $a . '<br>';


    /* --------------------------------- */
    echo '<h2>Les structures itératives : les boucles</h2>';
    /* --------------------------------- */

    /* --------------------------------- */
    echo '<h3>Boucle while()</h3>';
    /* --------------------------------- */

    $i = 0;

    while ($i < count($animals)) {
        echo 'salut';
        $i++;
    }

    /*
        La population de la ville Marrakech est de 1, 000, 000 d’habitants et elle augmente de 50, 000 habitants par an.
        Celle de la ville Agadir est de 500, 000 habitants et elle augmente de 8% par an.
        Ecrire un algorithme permettant de déterminer dans combien d’années la population de la ville Agadir dépassera celle de la ville Marrakech.
    */


    /* --------------------------------- */
    echo '<h3>Boucle for()</h3>';
    /* --------------------------------- */

    for ($i = 0; $i < count($animals); $i++) {
        echo  "L'animal : $animals[$i] <br>";
    }


    /* --------------------------------- */
    echo '<h3>Boucle foreach()</h3>';
    /* --------------------------------- */

    // foreach
    foreach ($animals as $animal) {
        // echo "$animal <br>";
    }

    foreach ($user as $key => $value) {
        // echo $key .': ' .$value .'<br>';
    }

    ?>
</body>

</html>
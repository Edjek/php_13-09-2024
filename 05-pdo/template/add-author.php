<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un auteur</title>
</head>

<body>
    <header>
        <nav></nav>
    </header>
    <main>
        <form action="../src/form/author-form.php" method="POST">
            <div>
                <label for="name">Nom de l'author</label>
                <input type="text" name="author" id="name">
            </div>

            <input type="submit" value="Envoyer">
        </form>
    </main>
    <footer></footer>
    <!-- Ajouter un formulaire pour creer un auteur -->

    <!-- Vous traiterez le formulaire dans le fichier author-form.php -->
    <!-- Si tout s'est bien passé vous redirigerer vers la page  -->
    <!-- Afficher des messages d'erreur -->
</body>

</html>
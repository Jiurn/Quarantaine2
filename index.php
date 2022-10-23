<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
</head>
<body>
<header>
    <h1>Accueil</h1>
    <?php
    if (isset($_SESSION["useruid"]))
        echo "<h2>Hello there ". $_SESSION["useruid"]."</h2>"
    ?>
</header>
<main>
    <div class="container_index">
        <a class="card_index" href="Activite/formulaire.php">
            <div class="content_index" >
                <h2>Activités</h2>
                <p>Proposition d'activités dans votre région!</p>
            </div>
        </a>
        <a class="card_index" href="CV/cv.php">
            <div class="content_index">
                <h2>C.V.</h2>
                <p>Mon C.V. version web!</p>
            </div>
        </a>
        <a class="card_index" href="Jeux/jeux.php">
            <div class="content_index" id="h11">
                <h2>Jeux</h2>
                <p>Un peu de n'importe quoi ¯\_(ツ)_/¯</p>
            </div>
        </a>
    </div>
</main>
</body>
</html>
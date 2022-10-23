<?php include '../PHP_Include/head.php';?>
    <title>Inscription</title>
    <link href="../css/inscription.css" rel="stylesheet" type="text/css">
    <script src="darkmode_inscription.js" defer></script>
</head>
<body>
<header>
    <?php include '../PHP_Include/nav.php';?>
</header>
<main>
    <article>
        <form action="inscription.inc.php" method="post">
            <label id="inscription">INSCRIPTION</label>
            <input class="inscription_input" name="full_name" type="text" placeholder="Full name">
            <input class="inscription_input" name="email" type="text" placeholder="Email">
            <input class="inscription_input" name="username" type="text" placeholder="Username">
            <input class="inscription_input" name="password" type="password" placeholder="Password">
            <input class="inscription_input" name="password_repeat" type="password" placeholder="Repeat password">
            <button type="submit" name="submit">Inscription</button>
        </form>
    </article>
    <div id="connecter_compte"><label>Vous possédez déjà un compte? </label><a href="connexion.php"> Connectez vous! </a></div>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput")
            echo "<p>Remplissez tous les champs!</p>";
        else if ($_GET["error"] == "invaliduid")
            echo "<p>Choississez un nom d'utilisateur approprié!</p>";
        else if ($_GET["error"] == "invalidemail")
            echo "<p>Choississez un email approprié!</p>";
        else if ($_GET["error"] == "passwordsdontmatch")
            echo "<p>Les mots de passes ne sont pas identiques!</p>";
        else if ($_GET["error"] == "stmtfailed")
            echo "<p>Une erreur est arrivée, réessayez</p>";
        else if ($_GET["error"] == "usernametaken")
            echo "<p>Ce nom d'utilisateur est déjà prit!</p>";
        else if ($_GET["error"] == "nope")
            echo "<p>Vous êtes inscrit!</p>";
    }
    ?>
</main>
</body>
<?php
$theme = $_COOKIE['theme'];
if ($theme == "dark"){
    echo "<script> document.getElementById('switch').checked = true;</script>";
} elseif($theme == "light"){
    echo "<script> document.getElementById('switch').checked = false;</script>";
}
?>
</html>
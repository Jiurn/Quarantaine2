<?php include '../PHP_Include/head.php';?>
    <title>Connexion</title>
    <link href="../css/connexion.css" rel="stylesheet" type="text/css">
    <script src="darkmode_connexion.js" defer></script>
</head>
<body>
<header>
    <?php include '../PHP_Include/nav.php';?>
</header>
<main>
    <article>
        <form action="connexion.inc.php" method="post">
            <label id="connexion">CONNEXION</label>
            <input class="connexion_input" name="username" type="text" placeholder="Username/Email">
            <input class="connexion_input" name="password" type="password" placeholder="Password">
            <div id="div_remember_me">
                <label><input type="checkbox">Remember me</label>
                <a id="forgot">Forgot?</a>
            </div>
            <button name="submit" type="submit">Connexion</button>
        </form>
    </article>
    <div id="creer_compte"><label>Vous n'avez pas de compte? </label><a href="inscription.php"> Inscrivez vous! </a></div>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput")
            echo "<p>Remplissez tous les champs!</p>";
        else if ($_GET["error"] == "wronglogin")
            echo "<p>Informations invalides</p>";
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
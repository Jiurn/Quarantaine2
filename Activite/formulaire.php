<?php include '../PHP_Include/head.php';?>
    <title>Choix d'activités</title>
    <link href="../css/activite.css" rel="stylesheet" type="text/css">
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <script src="../js_general/responsive_navbar.js" defer></script>
    <script src="checkbox.js" defer></script>
    <script src="darkmode_formulaire.js" defer></script>
</head>
<body style="height: 100vh; width: 100%;">
<header>
    <?php include '../PHP_Include/nav.php';?>
</header>
<main>
    <h1>Proposition d'activités</h1>
    <form name="formulaire" id="formulaire" method="post"> <!-- Faire un bon formulaire: https://www.smashingmagazine.com/2018/03/ux-contact-forms-essentials-conversions/ -->

        <!-- Sélection du secteur -->
        <fieldset name="secteur" style="cursor: auto" id="fieldset_secteur" class="required">
            <legend>Choisissez le(s) secteur(s):</legend>
            <label><input type="checkbox" name="Gatineau" id="secteur_g" value="1" required><span style="background: none" onclick="Switch()">Gatineau</span></label>
            <label><input type="checkbox" name="Ottawa" id="secteur_o" value="1" required><span style="background: none">Ottawa</span></label>
            <label><input type="checkbox" name="Hull" id="secteur_h" value="1" required><span style="background: none">Hull</span></label>
            <label><input type="checkbox" name="Aylmer" id="secteur_a" value="1" required><span style="background: none">Aylmer</span></label>
          <?php // <label><input type="checkbox" name="secteur_m" id="Montreal" value="Montreal" required><span style="background: none">Montreal</span></label>?>
        </fieldset>
        <?php /*
         Sélection de l'âge
        <fieldset name="selection_age" style="cursor: auto">
            <legend>Quel âge avez-vous?</legend>
            <input type="radio" name="age" id="age" value="moins18" checked>
            <label for="age">18 ans et moins</label>
            <label><input type="radio" name="age" value="19">19 ans</label>
            <label><input type="radio" name="age" value="19plus">19 ans et plus</label>
        </fieldset>*/?>

        <!-- Sélection du genre d'activité -->
        <fieldset name="genre_activite" style="cursor: auto; padding: 25px 64px" class="required">
            <legend>Choisissez avec qui vous y aller:</legend>
            <label><input type="radio" name="genre_activite" value="Seul" required><span style="background: none">Activités à faire seul</span></label>
            <label><input type="radio" name="genre_activite" value="Famille"><span style="background: none">Activités de famille</span></label>
            <label><input type="radio" name="genre_activite" value="Couple"><span style="background: none">Activités de couple</span></label>
            <label><input type="radio" name="genre_activite" value="Amis"><span style="background: none">Activités avec des amis</span></label>
        </fieldset>

        <!-- Sélection de la catégorie -->
        <fieldset name="categorie" style="cursor: auto" class="required">
            <legend>Choisissez le(s) type(s) d'activité(s):</legend>
            <label><input type="checkbox" name="Restaurant" id="categorie_r" value="1" required><span style="background: none">Restaurant</span></label>
            <label><input type="checkbox" name="Fast-food" id="categorie_ff" value="1" required><span style="background: none">Fast-food</span></label>
            <label><input type="checkbox" name="Bar" id="categorie_b" value="1" required><span style="background: none">Bar</span></label>
            <label><input type="checkbox" name="Activite_sportive" id="categorie_as" value="1" required><span style="background: none">Activité sportive</span></label>
            <label><input type="checkbox" name="Magasinage" id="categorie_m" value="1" required><span style="background: none">Magasinage</span></label>
            <label><input type="checkbox" name="Chill" id="categorie_c" value="1" required><span style="background: none">Chill</span></label>
        </fieldset>
        <?php /*
        <fieldset name="saison" style="cursor: auto; padding: 25px 64px" class="required">
            <legend>Choisissez la saison: </legend>
            <label> <input type="radio" name="saison" value="Été" required><span style="background: none">Été</span></label>
            <label> <input type="radio" name="saison" value="Automne"><span style="background: none">Automne</span></label>
            <label> <input type="radio" name="saison" value="Hiver"><span style="background: none">Hiver</span></label>
            <label> <input type="radio" name="saison" value="Printemps"><span style="background: none">Printemps</span></label>
        </fieldset>*/?>
        <div id="div_submit">
            <input type="submit" value="Continuer" class="btn" id="submit" formaction="activite.php" onclick="Checkbox()">
        </div>
    </form>
</main>
<footer>
    <p style="float: right; font-size: 1rem; color: gray; margin-right: 3rem"><?php include '../PHP_Include/footer.php'?></p>
</footer>
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
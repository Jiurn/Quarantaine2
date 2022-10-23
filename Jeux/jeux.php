<?php include '../PHP_Include/head.php';?>
    <title>Jeux</title>
    <link href="../css/jeux.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../js_general/animated-collapsibles.js" defer></script>
    <script src="../js_general/never-gonna-give-you-up.js" defer></script>
    <script src="darkmode_jeux.js" defer></script>
    <script src="jeux.js" defer></script>
</head>
<body>
<header>
    <?php include '../PHP_Include/nav.php';?>
</header>
<main>
    <div style="margin: 1rem 6rem">
        <button class="collapsible">Sarcasme --> SaRcAsMe</button>

        <div class="content" id="div_content_sarcasme">
            <input type="text" placeholder="ÉcRiVeZ vOtRe TeXt" id="mettre_en_sacasme" >
            <input type="submit" onclick="Sarcasme()" id="btn_sarcasme">
            <div style="position: relative"><p id="resultat_sarcasme"></p><i id="clipboard_sarcasme" style="cursor: pointer" title="Copy to Clipboard" class="material-icons">file_copy</i></div>
        </div>
    </div>
    <div style="margin: 1rem 6rem">
        <button class="collapsible" id="btn_collapsible_calcul_mental">Exercice de calcul mental</button>
        <div class="content" id="div_content_calcul_mental">
            <p id="p_nbr_1_2"> <span id="nbr_1"></span> <span>*</span> <span id="nbr_2"></span></p>
            <input type="number" id="reponse_calcul_mental">
            <input type="submit" onclick="Calcul_mental()" id="btn_calcul_mental" value="Soumettre réponse">
            <span id="tentative_calcul_mental"></span><span id="text_tentative"></span>
            <div><p style="margin: 0" id="temps_calcul_mental"></p></div>
            <input type="submit" id="recommencer_calcul_mental" value="Recommencer" onclick="Recommencer_Calcul_mental()">
        </div>
    </div>
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
<footer>
    <?php include '../PHP_Include/footer.php'?>
</footer>
</html>

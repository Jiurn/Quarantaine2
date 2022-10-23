<?php include_once '../PHP_Include/dbh.inc.php'; ?>
<?php include '../PHP_Include/head.php';?>
    <title>Activité</title>
    <link href="../css/activite.css" rel="stylesheet" type="text/css">
    <script src="btn_activite.js" defer></script>
    <script src="darkmode_activite.js" defer></script>
</head>
<body style="margin: 0">
    <header>
        <?php include '../PHP_Include/nav.php';?>
    </header>
    <main>
        <section id="activite">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM activites;");
            $result1 = mysqli_query($conn, "SELECT * FROM activites;");

            $rows_assoc = array();
            while(($row = mysqli_fetch_assoc($result))) {
                $rows_assoc[] = $row;
            }

            $rows_array = array();
            while(($row = mysqli_fetch_array($result1))) {
                $rows_array[] = $row;
            }

            $ls_nbr= [];

            while (count($ls_nbr) !== count($rows_array)){

                while(true){
                    $nbr_random = mt_rand(0, count($rows_array)-1);
                    if (!in_array($nbr_random, $ls_nbr)){
                        break;
                    }
                }

                array_push($ls_nbr, $nbr_random);

                $i = $nbr_random;
                $total = 0;
                $arrete_endroit = 0;
                $arrete_categorie = 0;
                $arrete_social = 0;
                //echo $rows_array[$i]["nom"];
                foreach ($_POST as $key => $value) {

                    if ($key=="Gatineau" || $key=="Ottawa" || $key=="Hull" || $key=="Aylmer"){
                        if (strpos($rows_array[$i]["Endroit"], $key) === 0 & $arrete_endroit === 0 || strpos($rows_array[$i]["Endroit"], $key) > 1 & $arrete_endroit === 0){
                            $total += 1;
                            //echo " ".$total." ".$key;
                            $arrete_endroit = 1;
                        }
                    }
                    if ($value=="Seul" || $value=="Famille" || $value=="Couple" || $value=="Amis" ){
                        if (strpos($rows_array[$i]["Social"], $value) === 0 & $arrete_social === 0 || strpos($rows_array[$i]["Social"], $value) > 1 & $arrete_social === 0){
                            $total += 1;
                            //echo " ".$total." ".$value;
                            $arrete_social = 1;
                        }
                    }
                    if ($key=="Restaurant" || $key=="Fast-food" || $key=="Bar" || $key=="Activite_sportive" || $key=="Magasinage" || $key=="Chill"){
                        if (strpos($rows_array[$i]["Categorie"], $key) === 0 & $arrete_categorie === 0 || strpos($rows_array[$i]["Categorie"], $key) > 1 & $arrete_categorie === 0){
                            $total += 1;
                            //echo " ".$total." ".$key;
                            $arrete_categorie = 1;
                        }
                    }
                }
                $arrete_categorie = 0;
                $arrete_endroit = 0;
                $arrete_social = 0;
                //echo " Total: ".$total."<br>";
                if ($total >= 3){
                    echo "<article class='article_activite'><h2 class='grandir'>".$rows_array[$i]['nom']."</h2>";
                    echo " <img src='../img/activites/".$rows_assoc[$i]['id'].".PNG' alt='Photo de ".$rows_assoc[$i]['nom']."' title='".$rows_assoc[$i]['nom']."'></article>";
                }
            }

            ?>
        </section>
<script>
    $total = ($('article').length);

    $("#activite article").length;
    $("#activite article").addClass('hidden');
    $("#activite article").first().removeClass('hidden')
    $("#activite article").first().addClass('show')
</script>

        <div id="div_buttons">
            <button id="btn_prev">&laquo; Previous</button>

            <button id="btn_next">Next &raquo;</button>
        </div>

        <p id="p_pages"><span id="pageCourante">1</span>/<span id="page">1</span></p>

        <a href="formulaire.php" id="retour_au_formulaire">Retour au formulaire</a>
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
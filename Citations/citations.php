<?php include_once '../PHP_Include/dbh.inc.php'; ?>
<?php include '../PHP_Include/head.php';?>
    <title>Citations</title>
    <link href="../css/cv.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="darkmode_citations.js" defer></script>
    <style>
        @media (max-width: 991px){
            #citation{
                padding-top: 6rem
            }
        }
    </style>
</head>
<body>
<header>
    <nav class="nav" style="justify-content: space-around; width: 100%; border-bottom: 2px solid rgb(32, 115, 185); padding-top: 0.2rem">
        <div class="hamburger">
            <i style="font-size:6rem;" class="material-icons">menu</i>
        </div>
        <ul class="nav-links" style="display: flex; justify-content: space-around; width: 100%">
            <li style="margin: 0 auto"><a class="nav-link" href="../Activite/formulaire.php">Activités</a></li>
            <li style="margin: 0 auto"><a class="nav-link" style="margin: 0 1rem" href="../CV/cv.php">C.V.</a></li>
            <li style="margin: 0 auto"><a class="nav-link" href="../Jeux/jeux.php">Jeux</a></li>
            <li style="margin: 0 auto"><a class="nav-link" href="../Citations/citations.php">Citations</a></li>
            <label class="switch">
                <input type="checkbox" id="switch" onchange="Switch()">
                <span class="slider round"></span>
            </label>
        </ul>
    </nav>
</header>
<main>
    <div id="citation" style="width: 90%"><!--Ici qu'est ajouté la quote du jour-->
        <?php
            $result = mysqli_query($conn, "SELECT * FROM citations;");
            while($row = mysqli_fetch_array($result)){
                echo "<blockquote style=\"margin-bottom: 3.5rem; border: black solid 2px; padding: 1.5rem\">";
                echo "<p>".$row['id']."</p>";
                echo "<p> <span>&laquo; </span>". $row['Citation'];
                echo "<span> &raquo;</span></p>";
                echo "<cite>&#8212; ". $row['Auteur']."</cite> </blockquote>";
            }
        ?>
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
</html>
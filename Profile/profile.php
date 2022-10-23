<?php include_once '../PHP_Include/dbh.inc.php';?>
<?php include '../PHP_Include/head.php';?>
<?php
if(!isset($_SESSION['useruid'])){
    header("location: ../index.php");
}?>
    <title>Profil Page</title>
    <link href="../css/profile.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <?php include '../PHP_Include/nav.php';?>
    </header>
    <main>
        <div id="div_profile_img">
            <img id="img_profile_img" src="../img/profil.jpg" alt="Photo de profil" title="Photo de profil">
            <h4>@<?php echo $_SESSION['useruid']?> </h4>
        </div>
        <div>
            <h2>Watchlist Activités</h2>
        </div>
    </main>
    
<?php /*
 https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow
 https://www.youtube.com/watch?v=J2HLW4A40X8
 */?>
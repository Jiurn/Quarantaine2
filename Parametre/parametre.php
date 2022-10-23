<?php include_once '../PHP_Include/dbh.inc.php';?>
<?php include '../PHP_Include/head.php';?>
<?php
if(!isset($_SESSION['useruid'])){
    header("location: ../index.php");
}?>
<title>Paramètre</title>
<link href="../css/parametre.css" rel="stylesheet" type="text/css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <?php include '../PHP_Include/nav.php';?>
</header>
<main>
    <div class="nav flex-column nav-pills">
        <a class="nav-link active" data-toggle="pill" href="#edit_profile">Edit Profile</a>
        <a class="nav-link" data-toggle="pill" href="#change_password">Change Profil</a>
        <a class="nav-link" data-toggle="pill" href="#security_and_privacy">Security and Privacy</a>
    </div><?php //https://getbootstrap.com/docs/4.0/components/navs/ ?>

    <div class="tab-content">
        <div class="tab-pane show active" id="edit_profile">
            <form action="upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="btn_upload_profil" name="btn_upload_profil">UPLOAD</button>
            </form>



        </div>

        <div class="tab-pane" id="change_password">
            Non toi plus
        </div>

        <div class="tab-pane" id="security_and_privacy">
            Bruh c gay sa
        </div>
    </div>
</main>

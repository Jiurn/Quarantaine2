<?php
if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once '../PHP_Include/dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $password) !== false){
        header("location: connexion.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);
}
else{
    header("location: connexion.php");
    exit();
}
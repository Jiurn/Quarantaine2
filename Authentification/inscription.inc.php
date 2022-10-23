<?php
if (isset($_POST["submit"])){
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_repeat = $_POST["password_repeat"];

    require_once '../PHP_Include/dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($full_name, $email, $username, $password, $password_repeat) !== false){
        header("location: inscription.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: inscription.php?error=invaliduid");
        exit();
    }
    if (invalidemail($email) !== false){
        header("location: inscription.php?error=invalidemail");
        exit();
    }
    if (passwordmatch($password, $password_repeat) !== false){
        header("location: inscription.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false){
        header("location: inscription.php?error=usernametaken");
        exit();
    }
    createUser($conn, $full_name, $email, $username, $password);
}
else
    header("location: inscription.php");
exit();
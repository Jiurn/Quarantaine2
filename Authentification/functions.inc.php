<?php
function emptyInputSignup($name, $email, $username, $password, $password_repeat){
    $result = false;
    if (empty($name) || empty($email) || empty($username) || empty($password) ||empty($password_repeat)){
        $result = true;
    }
    return $result;
}

function invalidUid($username){
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    return $result;
}

function invalidemail($email){
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    return $result;
}

function passwordmatch($password, $password_repeat){
    $result = false;
    if ($password !== $password_repeat){
        $result = true;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: inscription.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $full_name, $email, $username, $password){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPassword) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: inscription.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",$full_name,  $email, $username, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: inscription.php?error=nope");
    exit();
}

function emptyInputLogin($username, $password){
    $result = false;
    if (empty($username) || empty($password)){
        $result = true;
    }
    return $result;
}

function loginUser($conn, $username, $password){
    /* TODO Utiliser les fonctions pour anti-hackage */
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false){
        header("location: connexion.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $uidExists["usersPassword"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false){
        header("location: connexion.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["usersname"] = $uidExists["usersName"];
        header("location: ../index.php");
        exit();
    }
}
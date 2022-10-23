<?php
session_start();
if (isset($_POST['btn_upload_profil'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 10000000){ //10 MB
                $fileNameNew = $_SESSION["useruid"].".".$fileActualExt;
                $fileDestination = '../img/profils/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header('location: parametre.php?profilchanged');
            }
            else{
                echo "Your file is too big!";
            }
        }
    }
    else{
        echo "You cannot upload files of this type";
    }
}
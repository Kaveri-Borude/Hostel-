<?php
    session_start();

    // $timeOut = 10;

    if((isset($_SESSION['staffName']) || isset($_SESSION['sName'])) || isset($_SESSION['AName']) ){
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
?>

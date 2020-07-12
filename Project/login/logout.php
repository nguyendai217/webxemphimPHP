<?php
session_start();
// include("../lib_db.php");
// include("../login/checklogin.php");
// clearLoggedUser();
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    unset($_SESSION['role']);

    header("Location:../index.php");
}
else{
    echo("logout error");
}
?>
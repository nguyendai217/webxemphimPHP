<?php
include("../lib_db.php");
include("../login/checklogin.php");
clearLoggedUser();
header("Location:../index.php");
?>
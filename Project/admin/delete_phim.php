<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$id_phim = isset($_REQUEST["id_phim"]) ? $_REQUEST["id_phim"] : "";
//tao sql
$sql = "delete from phim where id_phim='{$id_phim}' ";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanliphim.php");
exit();
?>
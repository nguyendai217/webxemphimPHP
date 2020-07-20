<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$id_user = isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"] : "";
//tao sql
$sql = "delete from users where id_user='{$id_user}' ";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanliusers.php");
exit();
?>
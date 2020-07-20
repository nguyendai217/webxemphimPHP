<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$theloai = isset($_REQUEST["theloai"]) ? $_REQUEST["theloai"] : "";
//tao sql
$sql = "insert into theloai(theloai) value('{$theloai}') ";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanlitheloai.php");
exit();
?>


<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$id_theloai = isset($_REQUEST["id_theloai"]) ? $_REQUEST["id_theloai"] : "";
//tao sql
$sql = "delete from theloai where id_theloai='{$id_theloai}' ";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanlitheloai.php");
exit();
?>
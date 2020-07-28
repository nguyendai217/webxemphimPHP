<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$theloai = isset($_REQUEST["theloai"]) ? $_REQUEST["theloai"] : "";

$tbl="theloai";
$data['theloai']=$theloai;

//tao sql
$sql = data_to_sql_insert($tbl,$data);
//print_r($sql);
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanlitheloai.php");
exit();
?>


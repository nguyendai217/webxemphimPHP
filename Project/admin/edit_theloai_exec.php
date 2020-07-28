<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$id_theloai = isset($_REQUEST["id_theloai"]) ? $_REQUEST["id_theloai"] : "";
$tentheloai= isset($_REQUEST["tentheloai"]) ? $_REQUEST["tentheloai"] : "";

$tbl="theloai";
$data['theloai']= $tentheloai;
$cond= "id_theloai={$id_theloai}";
//tao sql
$sql = data_to_sql_update($tbl,$data,$cond);
//print_r($sql);
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanlitheloai.php");
exit();
?>

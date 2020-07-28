<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$id_user = isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"] : "";
$hoten = isset($_REQUEST["hoten"]) ? $_REQUEST["hoten"] : "";
$username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : "";
$diachi = isset($_REQUEST["diachi"]) ? $_REQUEST["diachi"] : "";
$dienthoai = isset($_REQUEST["dienthoai"]) ? $_REQUEST["dienthoai"] : "";
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
$role = isset($_REQUEST["role"]) ? $_REQUEST["role"] : "";
//tao sql
$tbl="users";
$data= array();
$data['hovaten']=$hoten;
$data['username']=$username;
$data['diachi']= $diachi;
$data['dienthoai']= $dienthoai;
$data['email']= $email;
$data['role']= $role;
$cond= " id_user={$id_user}";
$sql= data_to_sql_update($tbl,$data,$cond);
//print_r($sql);

$ret = exec_update($sql);
header("Location:quanliusers.php");
exit();
?>

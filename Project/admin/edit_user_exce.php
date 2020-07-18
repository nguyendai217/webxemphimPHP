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
$sql = "UPDATE users ";
$sql .= "set ";
$sql .= "hovaten='{$hoten}',";
$sql .= "username='{$username}',";
$sql .= "diachi='{$diachi}',";
$sql .= "dienthoai='{$dienthoai}',";
$sql .= "email='{$email}',";
$sql .= "role='{$role}'";
$sql .= " where id_user={$id_user}";
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanliusers.php");
exit();
?>

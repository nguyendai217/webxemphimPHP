<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$id_user = isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"] : "";
$hoten = isset($_REQUEST["hoten"]) ? $_REQUEST["hoten"] : "";
$username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : "";
$password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : "";
$pass= md5($password);
$diachi = isset($_REQUEST["diachi"]) ? $_REQUEST["diachi"] : "";
$dienthoai = isset($_REQUEST["dienthoai"]) ? $_REQUEST["dienthoai"] : "";
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
$role = isset($_REQUEST["role"]) ? $_REQUEST["role"] : "";
//tao sql
$sql = "INSERT into users (hovaten,username,password,diachi,dienthoai,email,role)";
$sql .= " values ( ";
$sql .= " '{$hoten}',";
$sql .= " '{$username}',";
$sql .= " '{$pass}',";
$sql .= " '{$diachi}',";
$sql .= " '{$dienthoai}',";
$sql .= " '{$email}',";
$sql .= " '{$role}'";
$sql .= ")";
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanliusers.php");
exit();
?>

<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$hoten = isset($_REQUEST["hoten"]) ? $_REQUEST["hoten"] : "";
$username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : "";
$password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : "";
$pass= md5($password);
$diachi = isset($_REQUEST["diachi"]) ? $_REQUEST["diachi"] : "";
$dienthoai = isset($_REQUEST["dienthoai"]) ? $_REQUEST["dienthoai"] : "";
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
$role = isset($_REQUEST["role"]) ? $_REQUEST["role"] : "";

$tbl = "users";
$data = array();
$data["hovaten"] = $hoten;
$data["username"] = $username;
$data["password"] = $pass;
$data["diachi"] = $diachi;
$data["dienthoai"] = $dienthoai;
$data["email"] = $email;
$data["role"] = $role;

$sql = data_to_sql_insert($tbl, $data);
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanliusers.php");
exit();
?>

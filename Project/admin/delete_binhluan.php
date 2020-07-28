<?php
include("../lib_db.php");
include("../login/checklogin.php");
session_start();
$user = checkLoggedUser();
//get input
$id_binhluan = isset($_REQUEST["id_binhluan"]) ? $_REQUEST["id_binhluan"] : "";
//tao sql
$sql = "delete from binhluan where id_binhluan='{$id_binhluan}' ";
//print_r($sql);
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanlibinhluan.php");
exit();
?>
<?php
include("../lib_db.php");
include("../login/checklogin.php");
include("utils.php");
session_start();
$user = checkLoggedUser();

// $img = upload_file_by_name("anhminhhoa");
// $img1 = upload_file_by_name("imagenoidung");
//get input
$id_phim = isset($_REQUEST["id_phim"]) ? $_REQUEST["id_phim"] : "";
$tenphim = isset($_REQUEST["tenphim"]) ? $_REQUEST["tenphim"] : "";
$daodien = isset($_REQUEST["daodien"]) ? $_REQUEST["daodien"] : "";
$dienvien = isset($_REQUEST["dienvien"]) ? $_REQUEST["dienvien"] : "";
$thoiluongphim = isset($_REQUEST["thoiluongphim"]) ? $_REQUEST["thoiluongphim"] : "";
$thongtinphim = isset($_REQUEST["thongtinphim"]) ? $_REQUEST["thongtinphim"] : "";
$idtheloai = isset($_REQUEST["idtheloai"]) ? $_REQUEST["idtheloai"] : "";
$namsanxuat = isset($_REQUEST["namsanxuat"]) ? $_REQUEST["namsanxuat"] : "";
$quocgia = isset($_REQUEST["quocgia"]) ? $_REQUEST["quocgia"] : "";
$tags = isset($_REQUEST["tags"]) ? $_REQUEST["tags"] : "";
$linkphim = isset($_REQUEST["linkphim"]) ? $_REQUEST["linkphim"] : "";
$soluotxem = isset($_REQUEST["soluotxem"]) ? $_REQUEST["soluotxem"] : "";

$tbl = "phim";
$data = array();
$data["tenphim"] = $tenphim;
$data["daodien"] = $daodien;
$data["dienvien"] = $dienvien;
$data["thoiluongphim"] = $thoiluongphim;
$data["thongtinphim"] = $thongtinphim;
$data["id_theloai"] = $idtheloai;
$data["namsanxuat"] = $namsanxuat;
$data["quocgia"] = $quocgia;
$data["tags"] = $tags;
$data["linkphim"] = $linkphim;
$data["soluotxem"] = $soluotxem;
$cond = "id_phim={$id_phim}";
$sql = data_to_sql_update($tbl, $data,$cond);
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quanliphim.php");

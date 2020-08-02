<?php
include("lib_db.php");
//get input
$binhluan = isset($_REQUEST["binhluan"]) ? $_REQUEST["binhluan"] : "";
$id_user = isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"] : "";
$id_phim = isset($_REQUEST["id_phim"]) ? $_REQUEST["id_phim"] : "";
//tao sql
$tbl = "binhluan";
$data = array();
$data["id_user"] = $id_user;
$data["id_phim"] = $id_phim;
$data["noidungbinhluan"]=$binhluan;

$sql = data_to_sql_insert($tbl, $data);
//Thuc thi sql
//$ret = exec_update($sql);
if($ret = exec_update($sql)){
    header("Location:thongtinphim.php?id_phim={$id_phim}");
}
else{
    echo "Bình luận thất bại, bạn phải đăng nhập trước!"; 
    //header("Location:thongtinphim.php?id_phim={$id_phim}");
}
exit();
?>
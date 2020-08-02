<?php 
 include('common/header.php');
 include('common/menu.php');
 include('common/slider.php');
 include('lib_db.php');
 include('login/checklogin.php');
//session_start();
 //$user = checkLoggedUser();
$user= isset($_SESSION['user']);
if($user){
  $user= $_SESSION['user'];
}

//print_r($user);

$phim = isset($_REQUEST["id_phim"]) ? $_REQUEST["id_phim"] : 0;
$sql = "Select *from phim,theloai where phim.id_theloai=theloai.id_theloai and phim.id_phim={$phim}";
$row = select_one($sql);

// $limit = 4;
// $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : 0;
// if ($page < 1) $page = 1;
// $offset = ($page - 1) * $limit;
// $baseUrl = 'thongtinphim.php?id_phim=1?page=';

$sqlfrom=" from binhluan,users,phim where binhluan.id_user=users.id_user and binhluan.id_phim= phim.id_phim and phim.id_phim={$phim}";

//get tong so binh luan
// $sql1 = "select count(*) as count";
// $sql1.=$sqlfrom;
// $rs1 = select_one($sql1);
//print_r($sql1);

// $total = $rs1['count'];
// //print_r($total);
// $numPage = ceil($total / $limit);

$sql2="select noidungbinhluan,username";
$sql2 .=$sqlfrom;
$sql2 .=" order by id_binhluan desc limit 0,4";


//print_r($sql2);
$result= select_list($sql2);

?>
<div class="main">
    <div class="main-left">
        <div class="chitietphim">
            <div class="imgheader">
                <h5> <i class="fa fa-file-text-o" aria-hidden="true"></i>THÔNG TIN PHIM</h5>
            </div>
            <div class="chitiet">
                <div class="img-phim">
                    <img src="admin/<?php echo $row["anhminhhoa"] ?>">
                    <div class="clear-both"></div>
                    <div class="play">
                        <a href="xemphim.php?id_phim=<?php echo $row["id_phim"] ?>"><img src="image/xemphim.png" alt=""></a>
                    </div>
                </div>

                <div class="thongtinphim">
                    <h4 style="margin-top: 5px;margin-left: 10px;">Tên phim: <?php echo $row["tenphim"] ?></h4>
                    <span>Diễn Viên: <?php echo $row["dienvien"] ?></span><br>
                    <span>Thời gian: <?php echo $row["thoiluongphim"] ?></span><br>
                    <span>Views: <?php echo $row["soluotxem"] ?></span><br>
                    <span>Thể Loại: <?php echo $row["theloai"] ?></span><br>
                    <span>Đánh giá: 4 sao</span><br>
                    <span>Quốc gia: <?php echo $row["quocgia"] ?></span><br>
                    <span>Độ phân giải: FullHD</span><br>
                    <span>Năm phát hành: <?php echo $row["namsanxuat"] ?></span><br>
                    <span>Ngôn ngữ: Phụ đề</span><br>
                    <span>Tags : <?php echo $row["tags"] ?></span><br>
                </div>
            </div>
        </div>

        <div class="noidungphim">
            <div class="imgheader">
                <img src="image/noidungphim.png" alt="" style="height: 25px;" />
            </div>
            <div class="ndphim">
                <p><?php echo $row["thongtinphim"] ?></p>
                <img src="admin/<?php echo $row["imagenoidung"] ?>" alt="" class="imgnd">
            </div>
            <div class="binhluan">
                <h5>Bình luận</h5>
                <span>Đăng nhập trước khi bình luận</span>
                <div class="comment">
                    <form action="comment_exce.php" method="POST">
                    <img src="image/icon-login.png" alt="" style="width: 40px;height: 40px;">
                    <input name="id_phim" value="<?php echo $row["id_phim"] ?>" type="hidden">

                    <?php if($user){?>
                    <input name="id_user" value="<?php echo $user['id_user']?>" type="hidden" id="id_user">
                    <?php }?>

                    <?php if(!$user) {?> 
                        <input name="id_user" value="-1" type="hidden" id="id_user">
                    <?php } ?>
                    <input type="text" style="width: 80%;" id="comment" name="binhluan">
                    <input type="submit" value="Bình luận"  id="btn-comment">
                    </form>
                </div>
                <div class="list-comment">
                    <h5>Danh sách bình luận</h5>
                    <ul style="list-style: none;">
                    <?php foreach($result as $rs2) {?>
                        <li style="color: white;"><i class="fa fa-user"></i>(<?php echo $rs2['username']?>): <?php echo $rs2['noidungbinhluan']?> </li>
                    <?php } ?>
                    </ul>
                    <!-- <div class="container">
                        <ul class="pagination">
                            <?php if ($numPage > 1) for ($i = 1; $i <= $numPage; $i++) { ?>
                                <li class="page-item <?php if ($page == $i) echo "active" ?> "><a class="page-link" href="<?php echo $baseUrl . $i ?>"><?php echo $i ?></a></li>
                            <?php } ?>
                        </ul>
                    </div> -->
                </div>
            </div>
            <?php include("common/cungtheloai.php") ?>
        </div>
    </div>
    <?php include("common/sidebar.php") ?>
</div>
<?php require('common/footer.php'); ?>
<script>
$("#btn-comment").click(function(){
    var check= $("#id_user").val();
    if(check==-1){
        alert("Bạn phải đăng nhập trước khi bình luận !");
    }
})
</script>
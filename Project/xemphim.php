<?php 
include('common/header.php');
include('common/menu.php');
include('common/slider.php');
include('lib_db.php');

$id=isset($_REQUEST["id_phim"]) ? $_REQUEST["id_phim"] : 0;
$sql="Select * from phim where id_phim='$id'";
$row= select_one($sql);

$sql2="UPDATE phim SET soluotxem = soluotxem +1 WHERE id_phim='$id'";
$update= exec_update($sql2);
?>
<div class="main">
      <div class="main-left">
        <h3 style="margin-left: 10px;margin-top: 10px;">Tên phim :<?php echo $row["tenphim"] ?></h3>
        <video width="710" height="400" controls autoplay>
          <source src="<?php echo $row['linkphim']?>" type="video/mp4">
        </video>
        <div style="text-align: center; margin-top: 20px;border-bottom: 1px solid black;">
        <h3>Chúc bạn có những phút giây xem phim vui vẻ !</h3>  
        <h4>Mọi chi tiết xin liên hệ : daint62@wru.vn</h4>

        </div>
        <div class="noidungphim">
            <div class="imgheader">
                <img src="image/noidungphim.png" alt="" />
                <p><?php echo $row["thongtinphim"] ?></p>
            </div>
            <?php include("common/cungtheloai.php")?>
        </div>
        

      </div>
      <?php require('common/sidebar.php') ?>
</div>
<?php require('common/footer.php')?>